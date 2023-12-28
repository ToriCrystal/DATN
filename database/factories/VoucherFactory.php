<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Voucher;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class VoucherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Voucher::class;

    public function definition()
    {
        // Lựa chọn ngẫu nhiên giữa giảm theo phần trăm và giảm theo số tiền cụ thể
        $discountType = $this->faker->randomElement(['percent', 'fixed']);

        // Tùy thuộc vào loại giảm giá, xác định giá trị tương ứng
        if ($discountType === 'percent') {
            $discountValue = $this->faker->randomFloat(2, 1, 50); // Giảm giá từ 1% đến 50%
        } else {
            $discountValue = round($this->faker->randomFloat(2, 5000, 500000), 0); // Giảm giá từ 5,000 VNĐ đến 500,000 VNĐ
        }

        return [
            'code' => $this->faker->unique()->word,
            'discount_type' => $discountType, // Thêm trường discount_type để xác định loại giảm giá
            'discount_value' => $discountValue,
            'usage_limit' => $this->faker->numberBetween(1, 20),
            'expires_at' => $this->faker->dateTimeBetween('now', '+1 year'),
        ];
    }

}
