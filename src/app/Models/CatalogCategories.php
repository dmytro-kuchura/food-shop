<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id
 * @property string $name
 * @property string $alias
 * @property string $image
 * @property int $parent_id
 * @property int $views
 * @property string $status
 * @property string $title
 * @property string $keywords
 * @property string $description
 * @property string $created_at
 * @property string $updated_at
 *
 * @property CatalogCategories $children
 */
class CatalogCategories extends Model
{
    /**
     * Database table name
     *
     * @var string
     */
    protected $table = 'catalog_categories';

    /**
     * Using timestamp
     *
     * @var bool
     */
    public $timestamps = true;

    protected $fillable = [
        'id',
        'name',
        'alias',
        'image',
        'parent_id',
        'views',
        'status',
        'title',
        'keywords',
        'description',
        'created_at',
        'updated_at',
    ];

    public function children(): HasMany
    {
        return $this->hasMany('App\Models\CatalogCategories', 'parent_id', 'id')
            ->orderBy('id', 'asc')
            ->with('children');
    }
}
