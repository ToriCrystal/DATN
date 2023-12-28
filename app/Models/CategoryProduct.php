<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CategoryProduct extends Model
{
    use HasFactory;

    protected $table = 'category_products';
    protected $fillable = ['products_id', 'category_id'];

    public function products()
    {
        return $this->belongsTo(Products::class, 'products_id');
    }
}
