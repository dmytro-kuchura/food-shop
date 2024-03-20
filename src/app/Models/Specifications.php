<?php

namespace App\Models;

use App\Traits\Date;
use App\Traits\OriginalImage;
use App\Traits\ShortDescription;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id
 * @property string $name
 * @property string $alias
 * @property int $sort
 * @property string $type
 * @property string $status
 * @property string $created_at
 * @property string $updated_at
 */
class Specifications extends Model
{
    use Date, OriginalImage, ShortDescription;

    protected $table = 'specifications';

    public $timestamps = true;

    protected $fillable = [
        'name',
        'alias',
        'sort',
        'type',
        'status',
        'created_at',
        'updated_at'
    ];

    public function values(): HasMany
    {
        return $this->hasMany('App\Models\NewsComments', 'news_id', 'id');
    }
}
