<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChudeProduct extends Model
{
    use HasFactory;
    protected $fillable = ['product_id', 'chu_de_id'];
    protected $table = 'chude_product';
  
}
