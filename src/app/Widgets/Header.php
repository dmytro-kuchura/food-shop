<?php

namespace App\Widgets;

use App\Repositories\CatalogCategoriesRepository;
use Arrilot\Widgets\AbstractWidget;

class Header extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run(CatalogCategoriesRepository $catalogRepository)
    {
        $tree = $catalogRepository->getTree();

        return view('widgets.header', [
            'tree' => $tree,
            'config' => $this->config,
        ]);
    }
}
