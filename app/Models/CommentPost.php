<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CommentPost extends Model
{
    use HasFactory;
    protected $table = 'comments_post';
    protected $fillable = ['user_id', 'admin_id', 'post_id', 'message', 'user_type'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function admin(): BelongsTo
    {
        return $this->belongsTo(Admin::class);
    }

    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class, 'post_id');
    }

    public static function latestComments($limit = 3)
    {
        return static::with('user')
            ->orderBy('created_at', 'desc')
            ->take($limit)
            ->get();
    }

    public function getNameAttribute()
    {
        if ($this->user_type === 'user' && $this->user) {
            return $this->user->name;
        } elseif ($this->user_type === 'admin' && $this->admin) {
            return $this->admin->name;
        }

        return 'Không xác định';
    }

    public function toggleIsVisible()
    {
        $this->isVisible = !$this->isVisible;
        $this->save();
    }

    protected $attributes = [
        'user_type' => 'user',
    ];

    public function getImageAttribute()
    {
        if ($this->user_type === 'user' && $this->user) {
            return $this->user->image;
        }

        // Provide a default image path if needed
        return '/default/image/path.jpg';
    }
}
