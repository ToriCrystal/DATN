<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    // protected $primaryKey = 'id';
    protected $fillable = ['user_id', 'order_code', 'total_price', 'recipient_name', 'recipient_phone', 'recipient_address', 'status', 'notification_sent', 'type_payment'];
    protected static function boot()
    {
        parent::boot();

        // static::creating(function ($order) {
        //     $order->order_code = 'ORD' . mt_rand(10000, 99999);  // Tạo mã đơn hàng ngẫu nhiên
        // });
    }
    public static function calculateTotalRevenue()
    {
        // Truy vấn cơ sở dữ liệu để lấy tổng total_price của các đơn hàng có status bằng 2
        $totalRevenue = self::where('status', 2)->sum('total_price');
        DB::table('statistics')->updateOrInsert(
            [],
            [
                'revenue' => $totalRevenue,
                // Add other fields as needed
            ]
        );
        return $totalRevenue;
    }

    public function items()
    {
        return $this->hasMany(OrderDetail::class, 'order_id', 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
