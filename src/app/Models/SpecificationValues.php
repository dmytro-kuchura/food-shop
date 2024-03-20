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
 * @property string $status
 * @property int $specification_id
 * @property string $created_at
 * @property string $updated_at
 */
class SpecificationValues extends Model
{
    use Date, OriginalImage, ShortDescription;

    protected $table = 'specification_values';

    public $timestamps = true;

    protected $fillable = [
        'name',
        'alias',
        'sort',
        'status',
        'specification_id',
        'created_at',
        'updated_at'
    ];
}
