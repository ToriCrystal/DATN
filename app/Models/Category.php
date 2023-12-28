<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded = [];
    protected $table = 'categories';
    // protected $fillable = ['category_name', 'isVisible', 'category_slug'];


    public function products()
    {
        return $this->belongsToMany(Products::class, 'category_products', 'category_id', 'products_id');
    }
}
