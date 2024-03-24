<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * @property int $id
 * @property int $order_id
 * @property int $product_id
 * @property int $cost
 * @property int $count
 * @property string $created_at
 * @property string $updated_at
 *
 * @property CatalogProduct $product
 */
class OrdersItems extends Model
{
    protected $table = 'orders_items';

    public $timestamps = true;

    protected $fillable = [
        'hash',
        'order_id',
        'product_id',
        'count',
        'cost',
        'created_at',
        'updated_at'
    ];

    public function product(): HasOne
    {
        return $this->hasOne('App\Models\CatalogProduct', 'id', 'product_id');
    }
}
