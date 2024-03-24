<?php

namespace App\Widgets;

use App\Repositories\CatalogProductsRepository;
use App\Repositories\OrdersRepository;
use App\Repositories\UsersRepository;
use Arrilot\Widgets\AbstractWidget;
use Illuminate\View\View;

class AdminStatistics extends AbstractWidget
{
    protected $config = [];

    public function run(
        CatalogProductsRepository $productsRepository,
        UsersRepository           $usersRepository,
        OrdersRepository          $ordersRepository
    ): View
    {
        $ordersCount = $ordersRepository->count();
        $productsCount = $productsRepository->count();
        $usersCount = $usersRepository->count();
        return view('widgets.admin.statistics', [
            'config' => $this->config,
            'products' => $productsCount,
            'orders' => $ordersCount,
            'users' => $usersCount
        ]);
    }
}

