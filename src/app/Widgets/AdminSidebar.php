<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use Illuminate\View\View;

class AdminSidebar extends AbstractWidget
{
    protected $config = [];

    public function run(): View
    {
        return view('widgets.admin.sidebar', [
            'config' => $this->config,
        ]);
    }
}

