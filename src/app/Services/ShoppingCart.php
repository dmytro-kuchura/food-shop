<?php

namespace App\Services;

use App\Repositories\CartRepository;
use App\Repositories\CatalogProductsRepository;
use App\Repositories\CartItemsRepository;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cookie;

class ShoppingCart
{
    private CartRepository $cartRepository;

    private CartItemsRepository $cartItemsRepository;

    private CatalogProductsRepository $productsRepository;

    private string|array|null $cookie;

    private string $uuid;

    public function __construct(
        CartRepository            $cartRepository,
        CartItemsRepository       $cartItemsRepository,
        CatalogProductsRepository $productsRepository
    )
    {
        $this->cartRepository = $cartRepository;
        $this->cartItemsRepository = $cartItemsRepository;
        $this->productsRepository = $productsRepository;
        $this->cookie = Cookie::get('cart');
        $this->uuid = (string)Str::uuid();
    }

    public function cartList()
    {
        $list = [];
        $total_price = 0;
        $total_quantity = 0;

        if (!$this->cookie) {
            return [
                'list' => [],
                'totalCount' => 0,
                'totalPrice' => 0,
            ];
        }

        $cart = $this->cartRepository->find($this->cookie);

        if (!$cart) {
            return [
                'list' => [],
                'totalCount' => 0,
                'totalPrice' => 0,
            ];
        }

        if (!$cart->items) {
            return [
                'list' => [],
                'totalCount' => 0,
                'totalPrice' => 0,
            ];
        }

        foreach ($cart->items as $item) {
            if ($item->product) {
                $total_price += number_format($item->product->cost, 2, '.', '') * $item->count;
                $total_quantity += $item->count;

                $list[] = [
                    'id' => $item->product->id,
                    'alias' => route('shop.item', ['alias' => $item->product->alias, 'id' => $item->product->id]),
                    'name' => $item->product->name,
                    'image' => $item->product->image,
                    'count' => $item->count,
                    'price' => number_format($item->product->cost, 2, '.', ''),
                    'maxcount' => 50,
                ];
            }
        }

        return [
            'list' => $list,
            'totalCount' => $total_quantity,
            'totalPrice' => number_format($total_price, 2, '.', ''),
        ];
    }

    public function addItem($data)
    {
        $cart = $this->cartRepository->find($this->cookie);
        if (!$cart) {
            $cart = $this->cartRepository->create($this->uuid);
            $this->cartItemsRepository->create($data, $cart->id);
            return $this->uuid;
        }
        $item = $this->cartItemsRepository->getItem($data['item_id'], $cart->id);
        if ($item) {
            $data['count'] = $data['count'] + $item->count;
            $this->cartItemsRepository->update($data, $cart->id);
        } else {
            $this->cartItemsRepository->create($data, $cart->id);
        }

        return false;
    }

    public function updateCart($data): bool
    {
        $cart = $this->cartRepository->find($this->cookie);
        if (!$cart) {
            return false;
        }
        $this->cartItemsRepository->update($data, $cart->id);
    }

    public function deleteItem($item): void
    {
        $cart = $this->cartRepository->find($this->cookie);
        $this->cartItemsRepository->destroy($cart->id, $item);
    }
}
