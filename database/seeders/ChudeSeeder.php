<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChudeSeeder extends Seeder
{
    public function run()
    {
        DB::table('chu_de')->insert([
            [
                'chu_de_id' => 1,
                'chu_de_ma' => '1',
                'chu_de_ten' => 'Free ship',
                'chu_de_ten_vn' => 'Free ship',
                'chu_de_ten_en' => 'Free ship',
                'chu_de_tao_moi' => now(),
                'chu_de_cap_nhat' => now(),
            ],
            [
                'chu_de_id' => 2,
                'chu_de_ma' => '2',
                'chu_de_ten' => 'Free ship Extra',
                'chu_de_ten_vn' => 'Free ship Extra',
                'chu_de_ten_en' => 'Free ship Extra',
                'chu_de_tao_moi' => now(),
                'chu_de_cap_nhat' => now(),
            ],
            [
                'chu_de_id' => 3,
                'chu_de_ma' => '3',
                'chu_de_ten' => 'Khuyen mai khung',
                'chu_de_ten_vn' => 'Khuyến mãi khủng',
                'chu_de_ten_en' => 'Khuyen mai khung',
                'chu_de_tao_moi' => now(),
                'chu_de_cap_nhat' => now(),
            ],
            [
                'chu_de_id' => 4,
                'chu_de_ma' => '4',
                'chu_de_ten' => 'Mua nhieu giam nhieu',
                'chu_de_ten_vn' => 'Mua nhiều giảm nhiều',
                'chu_de_ten_en' => 'Mua nhieu giam nhieu',
                'chu_de_tao_moi' => now(),
                'chu_de_cap_nhat' => now(),
            ],
            [
                'chu_de_id' => 5,
                'chu_de_ma' => '5',
                'chu_de_ten' => 'Re vo dich',
                'chu_de_ten_vn' => 'Rẻ vô địch',
                'chu_de_ten_en' => 'Re vo dich',
                'chu_de_tao_moi' => now(),
                'chu_de_cap_nhat' => now(),
            ],
            [
                'chu_de_id' => 6,
                'chu_de_ma' => '6',
                'chu_de_ten' => 'Sale upto 40%',
                'chu_de_ten_vn' => 'Sale upto 40%',
                'chu_de_ten_en' => 'Sale upto 40%',
                'chu_de_tao_moi' => now(),
                'chu_de_cap_nhat' => now(),
            ],
            [
                'chu_de_id' => 7,
                'chu_de_ma' => '7',
                'chu_de_ten' => 'Sale upto 50%',
                'chu_de_ten_vn' => 'Sale upto 50%',
                'chu_de_ten_en' => 'Sale upto 50%',
                'chu_de_tao_moi' => now(),
                'chu_de_cap_nhat' => now(),
            ],
            [
                'chu_de_id' => 8,
                'chu_de_ma' => '8',
                'chu_de_ten' => 'Sale upto 60%',
                'chu_de_ten_vn' => 'Sale upto 60%',
                'chu_de_ten_en' => 'Sale upto 60%',
                'chu_de_tao_moi' => now(),
                'chu_de_cap_nhat' => now(),
            ],
            [
                'chu_de_id' => 9,
                'chu_de_ma' => '9',
                'chu_de_ten' => 'Sale upto 70%',
                'chu_de_ten_vn' => 'Sale upto 70%',
                'chu_de_ten_en' => 'Sale upto 70%',
                'chu_de_tao_moi' => now(),
                'chu_de_cap_nhat' => now(),
            ],
            [
                'chu_de_id' => 10,
                'chu_de_ma' => '10',
                'chu_de_ten' => 'San pham ban chay',
                'chu_de_ten_vn' => 'Sản phẩm bán chạy',
                'chu_de_ten_en' => 'Sale upto 70%',
                'chu_de_tao_moi' => now(),
                'chu_de_cap_nhat' => now(),
            ],
        ]);
    }
}
