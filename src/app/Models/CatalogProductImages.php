<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $link
 * @property int $product_id
 * @property string $status
 * @property string $created_at
 * @property string $updated_at
 */
class CatalogProductImages extends Model
{
    protected $table = 'catalog_product_images';

    public $timestamps = true;

    protected $fillable = [
        'link',
        'product_id',
        'status',
        'created_at',
        'updated_at'
    ];
}
