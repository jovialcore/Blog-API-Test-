<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'short_description',
        'full_text',
        'cover',
        'user_id',
        'category_id',
        'status',
        'views',
        'likes',
        'comments',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function comments()
    {
        return $this->hasMany(ArticleComment::class);
    }

    public function likes()
    {
        return $this->hasMany(ArticleLike::class);
    }

    public function views()
    {
        return $this->hasMany(ArticleView::class);
    }

    public function scopePublished($query)
    {
        return $query->where('status', 'published');
    }

    public function scopeDraft($query)
    {
        return $query->where('status', 'draft');
    }

    public function scopePublishedOrDraft($query)
    {
        return $query->where('status', 'published')->orWhere('status', 'draft');
    }

    
}
