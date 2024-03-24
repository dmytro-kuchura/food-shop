<?php

namespace App\Traits;

use App\Models\OrdersItems;

trait OrderTotal
{
    public static function getTotal($items)
    {
        $total = 0.0;

        /** @var OrdersItems $item */
        foreach ($items as $item) {
            $total += $item->count * $item->cost;
        }

        return number_format($total);
    }
}
