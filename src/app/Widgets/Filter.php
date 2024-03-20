<?php

namespace App\Widgets;

use App\Repositories\SpecificationsRepository;
use Arrilot\Widgets\AbstractWidget;

class Filter extends AbstractWidget
{
    protected $config = [];

    public function run(SpecificationsRepository $specificationsRepository)
    {
        $specifications = $specificationsRepository->all();
        return view('widgets.filter', [
            'filter' => $specifications,
            'config' => $this->config,
        ]);
    }
}
