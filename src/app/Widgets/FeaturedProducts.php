<?php

namespace App\Widgets;

use App\Repositories\CatalogProductsRepository;
use Arrilot\Widgets\AbstractWidget;

class FeaturedProducts extends AbstractWidget
{
    protected $config = [];

    public function run(CatalogProductsRepository $productsRepository)
    {
        $items = $productsRepository->getSpecial(10);
        return view('widgets.featured-products', [
            'items' => $items,
            'config' => $this->config,
        ]);
    }
}
