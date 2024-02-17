<?php

namespace App\Widgets;

use App\Helpers\Alert;
use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Arr;

class Message extends AbstractWidget
{
    protected $config = [];

    public function run()
    {
        $message = Alert::get();

        if (!$message || !is_array($message) || !Arr::get($message, 'text')) {
            return '';
        }

        Alert::forget();

        return view('widgets.system.message', [
            'type' => Arr::get($message, 'type', 'info'),
            'title' => Arr::get($message, 'title'),
            'text' => Arr::get($message, 'text'),
            'icon' => Arr::get($message, 'icon'),
        ]);
    }
}
