<?php

namespace App\Widgets;

use App\Repositories\CatalogCategoriesRepository;
use Arrilot\Widgets\AbstractWidget;

class Header extends AbstractWidget
{
    protected $config = [];

    public function run(CatalogCategoriesRepository $catalogRepository)
    {
        $tree = $catalogRepository->getTree();

        return view('widgets.header', [
            'tree' => $tree,
            'config' => $this->config,
        ]);
    }
}
