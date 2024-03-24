<?php

namespace App\Repositories;

use App\Models\CartItems;
use App\Models\OrdersItems;
use Illuminate\Support\Facades\Cookie;

class OrdersItemsRepository
{
    private CatalogProductsRepository $productRepository;

    public function __construct(CatalogProductsRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function create($cartItems, $orderId)
    {
        /** @var CartItems[] $cartItems */
        foreach ($cartItems as $item) {
            $product = $this->productRepository->find($item->product_id);

            $orderItem = new OrdersItems();
            $orderItem->order_id = $orderId;
            $orderItem->product_id = $product->id;
            $orderItem->count = $item->count;
            $orderItem->cost = $product->cost;

            $orderItem->save();
        }

        return true;
    }
}
