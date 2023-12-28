<?php

namespace Database\Seeders;
use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Database\Factories\Factory;


class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private function generateOrderCode()
    {
        // Logic để tạo mã đơn hàng (đây là một ví dụ đơn giản, bạn có thể thay đổi logic theo ý muốn)
        $prefix = 'ORD';
        $randomNumber = mt_rand(10000, 99999);
        return $prefix . $randomNumber;
    }
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        // DB::table('orders')->truncate(); // xoa all data
        // DB::table('order_detail')->truncate(); // xoa all data
        $faker = \Faker\Factory::create();
        for ($i = 1; $i < 21; $i++) {
            $randomPhone = '0' . $faker->numerify('##########');
            $randomOrderCode =  $this->generateOrderCode();
            Order::insert([
                'user_id' => $i, 
                'total_price' => $faker->randomFloat(2, 10, 1000), 
                'recipient_name' => $faker->name,
                'recipient_phone' => $randomPhone,
                'recipient_address' => $faker->address,
                'status' => 0, 
                'type_payment' => rand(1, 3),
                'order_code' => $randomOrderCode,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            DB::table('order_detail')->insert([
                'order_id' => $i, 
                'product_id' => rand(5, 10), 
                'order_code' => $randomOrderCode,
                'product_name' => 'Product ' . $i,
                'amount' => rand(1, 5),
                'price' => rand(10, 1000) / 10,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');


    }
}
