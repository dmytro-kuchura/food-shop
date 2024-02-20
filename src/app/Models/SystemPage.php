<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $slug
 * @property string $name
 * @property string $content
 * @property string $h1
 * @property string $title
 * @property string $keywords
 * @property string $description
 * @property string $created_at
 * @property string $updated_at
 */
class SystemPage extends Model
{
    protected $table = 'system_pages';

    public $timestamps = true;

    protected $fillable = [
        'id',
        'slug',
        'name',
        'content',
        'h1',
        'title',
        'keywords',
        'description',
    ];
}
