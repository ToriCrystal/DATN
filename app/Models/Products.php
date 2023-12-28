<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'products';
    // protected $fillable = ['id','product_name', 'product_slug', 'price', 'product_image', 'isVisible', 'isHot','author','remaining'];
    protected $guarded = [];
    // public function categories()
    // {
    //     return $this->belongsToMany(Category::class);
    // }
    public function authors()
    {
        return $this->belongsToMany(Author::class, 'author_product', 'product_id', 'author_id');
    }


    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_products', 'products_id', 'category_id');
    }

    //Giảm giá cả tuần
    public function reviews()
    {
        return $this->hasMany(Reviews::class, 'product_id');
    }

    public function averageRating()
    {
        $count = $this->reviews()->count();
        return $count > 0 ? $this->reviews()->avg('rating') : 0;
    }

    public function chude()
    {
        return $this->belongsToMany(ChuDe::class, 'chude_product', 'product_id', 'chu_de_id');
    }
}
