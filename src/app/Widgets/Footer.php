<?php

namespace App\Widgets;

use App\Repositories\CatalogCategoriesRepository;
use Arrilot\Widgets\AbstractWidget;

class Footer extends AbstractWidget
{
    protected $config = [];

    public function run(CatalogCategoriesRepository $catalogRepository)
    {
        $tree = $catalogRepository->getTree();

        return view('widgets.footer', [
            'tree' => $tree,
            'config' => $this->config,
        ]);
    }
}
