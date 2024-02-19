<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $alias;
 * @property integer $category_id;
 * @property string $status;
 * @property boolean $new;
 * @property boolean $sale;
 * @property boolean $available;
 * @property double $cost;
 * @property double $cost_old;
 * @property integer $views;
 * @property string $stock_keeping_unit;
 * @property string $image;
 * @property string $title;
 * @property string $description;
 * @property string $keywords;
 * @property string $created_at
 * @property string $updated_at
 * @property CatalogProductImages $images
 */
class CatalogProduct extends Model
{
    /**
     * Database table name
     *
     * @var string
     */
    protected $table = 'catalog_products';

    /**
     * Using timestamp
     *
     * @var bool
     */
    public $timestamps = true;

    protected $fillable = [
        'name',
        'alias',
        'category_id',
        'status',
        'new',
        'sale',
        'available',
        'cost',
        'cost_old',
        'views',
        'brand',
        'image',
        'title',
        'keywords',
        'description',
        'created_at',
        'updated_at'
    ];

    public function images()
    {
        return $this->hasMany('App\Models\CatalogProductImages', 'product_id');
    }
}
