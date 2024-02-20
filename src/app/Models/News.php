<?php

namespace App\Models;

use App\Traits\Date;
use App\Traits\OriginalImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id
 * @property string $name
 * @property string $image
 * @property string $alias
 * @property string $content
 * @property string $short
 * @property string $title
 * @property string $keywords
 * @property string $description
 * @property int $status
 * @property int $author
 * @property string $created_at
 * @property string $updated_at
 */
class News extends Model
{
    use Date, OriginalImage;

    protected $table = 'news';

    public $timestamps = true;

    protected $fillable = [
        'name',
        'image',
        'alias',
        'short',
        'title',
        'content',
        'short',
        'title',
        'keywords',
        'description',
        'status',
        'author',
        'created_at',
        'updated_at'
    ];

    public function getRussianDate()
    {
        return $this->getHumanDate($this->created_at);
    }

    public function getOriginalImage()
    {
        return $this->getOriginalImageLink($this->image);
    }

    public function getShortAttribute(): string
    {
        return $this->getShortContent($this->content);
    }

    public function comments(): HasMany
    {
        return $this->hasMany('App\Models\NewsComments', 'news_id', 'id');
    }
}
