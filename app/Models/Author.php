<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Author extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];
    protected $table = 'author';
    // protected $fillable = ['author_name','author_img','	author_debutDate','author_description'];
    public function products()
    {
        return $this->belongsToMany(Product::class, 'author_product', 'author_id', 'product_id');
    }
}
