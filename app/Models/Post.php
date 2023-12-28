<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'posts';

    protected $fillable = [
        'post_title',
        'post_slug',
        'post_excerpt',
        'post_thumbnail',
        'post_content',
        'status',
        'published_at',
        'views',
        'admin_id',
        'post_category_id',
        'meta_title',
        'meta_description',
    ];

    public function category()
    {
        return $this->belongsTo(CategoryPost::class, 'post_category_id');
    }

    public function posts()
    {
        return $this->hasMany(Post::class, 'post_category_id');
    }

    public function comments()
    {
        return $this->hasMany(CommentPost::class);
    }
    
}
