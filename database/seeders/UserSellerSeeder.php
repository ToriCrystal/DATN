<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            'id' => 103,
            'name' => 'seller',
            'email' => 'seller@gmail.com',
            'password' => '$2y$10$oOMYlJQikQXXziVxmB..c.4mIyzNtAdEWDV7IAFIScb3TzCZ2/V9q', // Đảm bảo mã hóa mật khẩu
            // Thêm các trường khác nếu cần
        ];

        DB::table('users')->insert($user);

        // Tạo seller cho người dùng có ID là 101
        $seller = [
            'user_id' => 103,
            'name' => 'Tên Seller',
            'status' => 1,
            // Thêm các trường khác nếu cần
        ];

        DB::table('sellers')->insert($seller);
    }
}
