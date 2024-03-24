<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AdminHeader extends AbstractWidget
{
    protected $config = [];

    public function run(): View
    {
        $user = Auth::user();
        return view('widgets.admin.header', [
            'config' => $this->config,
            'user' => $user,
        ]);
    }
}

