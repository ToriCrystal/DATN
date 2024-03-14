<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopicProduct extends Model
{
    use HasFactory;
    protected $fillable = ['product_id', 'topic_id'];
    protected $table = 'topic_product';
  
}
