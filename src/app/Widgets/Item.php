<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;

class Item extends AbstractWidget
{
    protected $config = [
        'item' => null
    ];

    public function run()
    {
        return view('widgets.item', [
            'config' => $this->config,
            'item' => $this->config['item'],
        ]);
    }
}
