<?php

namespace App\Traits;

trait OrderTotal
{
    public static function getTotal($items): string
    {
        $total = 0.0;
        foreach ($items as $item) {
            $total += $item->count * $item->cost;
        }
        return number_format($total);
    }
}
