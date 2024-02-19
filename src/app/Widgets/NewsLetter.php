<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;

class NewsLetter extends AbstractWidget
{
    protected $config = [];

    public function run()
    {
        return view('widgets.news-letter', [
            'config' => $this->config,
        ]);
    }
}
