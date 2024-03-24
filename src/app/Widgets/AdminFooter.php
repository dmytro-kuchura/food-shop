<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use Illuminate\View\View;

class AdminFooter extends AbstractWidget
{
    protected $config = [];

    public function run(): View
    {
        return view('widgets.admin.footer', [
            'config' => $this->config,
        ]);
    }
}

