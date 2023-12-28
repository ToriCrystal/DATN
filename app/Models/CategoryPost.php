<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Str;
use Illuminate\Support\Facades\DB;


class CategoryPost extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'posts_category';
    protected $fillable = [
        'post_category_name',
        'post_category_slug',
        'status',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class, 'post_category_id');
    }
    
}
