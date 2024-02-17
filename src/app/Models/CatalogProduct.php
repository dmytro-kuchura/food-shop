<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string('name');
 * @property string('alias');
 * @property integer('category_id')->default(0);
 * @property enum('status', ['ACTIVE', 'DISABLED'])->default('DISABLED');
 * @property boolean('new')->default(false);
 * @property boolean('sale')->default(false);
 * @property boolean('available')->default(true);
 * @property double $cost ;
 * @property double $cost_old;
 * @property integer('views')->default(0);
 * @property string('stock_keeping_unit')->nullable();
 * @property string('image')->nullable();
 * @property string('title')->nullable();
 * @property string('description')->nullable();
 * @property string('keywords')->nullable();
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
        'top',
        'available',
        'cost',
        'cost_old',
        'views',
        'brand',
        'artikul',
        'image',
        'specifications',
        'information',
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
