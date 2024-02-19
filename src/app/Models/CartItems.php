<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * @property int $id
 * @property int $cart_id
 * @property int $product_id
 * @property int $count
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Cart $cart
 * @property CatalogProduct $product
 */
class CartItems extends Model
{
    /**
     * Database table name
     *
     * @var string
     */
    protected $table = 'cart_items';

    /**
     * Using timestamp
     *
     * @var bool
     */
    public $timestamps = true;

    protected $fillable = ['hash', 'cart_id', 'product_id', 'count', 'created_at', 'updated_at'];

    public function cart(): HasOne
    {
        return $this->hasOne('App\Models\Cart', 'id', 'cart_id');
    }

    public function product(): HasOne
    {
        return $this->hasOne('App\Models\CatalogProduct', 'id', 'product_id');
    }
}
