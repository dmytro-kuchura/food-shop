<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use Illuminate\View\View;

class AdminOrderStatus extends AbstractWidget
{
    protected $config = [];

    public function run(): View
    {
        return view('widgets.admin.orders.status', [
            'status' => $this->config['status']
        ]);
    }
}

