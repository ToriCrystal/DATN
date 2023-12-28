<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class CommentProduct extends Model
{
    use HasFactory;
    protected $table = 'comments_product';
    protected $fillable = ['user_id', 'product_id', 'isVisible', 'message'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Products::class, 'product_id');
    }

    public function toggleIsVisible()
    {
        $this->isVisible = !$this->isVisible;
        $this->save();
    }
}
