<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'topic';
    protected $primaryKey = 'topic_id';
    public function products() {
        return $this->belongsToMany(Product::class, 'topic_product', 'topic_id', 'product_id');
    }

}
