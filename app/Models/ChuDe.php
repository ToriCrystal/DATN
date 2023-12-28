<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChuDe extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'chu_de';
    protected $primaryKey = 'chu_de_id';
    public function products() {
        return $this->belongsToMany(Products::class, 'chude_product', 'chu_de_id', 'product_id');
    }

}
