<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    use HasFactory;

    protected $table = 'vouchers';
    protected $guarded = [];
    // protected $fillable = [
    //     'code',
    //     'usage_limit',
    //     'expires_at',
    //     'discount_type',
    //     'discount_value',
    //     // Thêm các trường khác nếu cần thiết
    // ];
    protected $dates = ['expires_at'];
    public function getDiscountAmountFormattedAttribute()
    {
        // Định dạng giá theo định dạng tiền tệ của Việt Nam
        return number_format($this->attributes['discount_amount'], 0, ',', '.') . ' VNĐ';
    }
}
