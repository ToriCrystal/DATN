<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TopicSeeder extends Seeder
{
    public function run()
    {
        DB::table('topic')->insert([
            [
                'topic_id' => 1,
                'topic_code' => '1',
                'topic_name' => 'Free ship',
                'topic_name_vn' => 'Free ship',
                'topic_name_en' => 'Free ship',
                'topic_create' => now(),
                'topic_update' => now(),
            ],
            [
                'topic_id' => 2,
                'topic_code' => '2',
                'topic_name' => 'Free ship Extra',
                'topic_name_vn' => 'Free ship Extra',
                'topic_name_en' => 'Free ship Extra',
                'topic_create' => now(),
                'topic_update' => now(),
            ],
            [
                'topic_id' => 3,
                'topic_code' => '3',
                'topic_name' => 'Khuyen mai khung',
                'topic_name_vn' => 'Khuyến mãi khủng',
                'topic_name_en' => 'Khuyen mai khung',
                'topic_create' => now(),
                'topic_update' => now(),
            ],
            [
                'topic_id' => 4,
                'topic_code' => '4',
                'topic_name' => 'Mua nhieu giam nhieu',
                'topic_name_vn' => 'Mua nhiều giảm nhiều',
                'topic_name_en' => 'Mua nhieu giam nhieu',
                'topic_create' => now(),
                'topic_update' => now(),
            ],
            [
                'topic_id' => 5,
                'topic_code' => '5',
                'topic_name' => 'Re vo dich',
                'topic_name_vn' => 'Rẻ vô địch',
                'topic_name_en' => 'Re vo dich',
                'topic_create' => now(),
                'topic_update' => now(),
            ],
            [
                'topic_id' => 6,
                'topic_code' => '6',
                'topic_name' => 'Sale upto 40%',
                'topic_name_vn' => 'Sale upto 40%',
                'topic_name_en' => 'Sale upto 40%',
                'topic_create' => now(),
                'topic_update' => now(),
            ],
            [
                'topic_id' => 7,
                'topic_code' => '7',
                'topic_name' => 'Sale upto 50%',
                'topic_name_vn' => 'Sale upto 50%',
                'topic_name_en' => 'Sale upto 50%',
                'topic_create' => now(),
                'topic_update' => now(),
            ],
            [
                'topic_id' => 8,
                'topic_code' => '8',
                'topic_name' => 'Sale upto 60%',
                'topic_name_vn' => 'Sale upto 60%',
                'topic_name_en' => 'Sale upto 60%',
                'topic_create' => now(),
                'topic_update' => now(),
            ],
            [
                'topic_id' => 9,
                'topic_code' => '9',
                'topic_name' => 'Sale upto 70%',
                'topic_name_vn' => 'Sale upto 70%',
                'topic_name_en' => 'Sale upto 70%',
                'topic_create' => now(),
                'topic_update' => now(),
            ],
            [
                'topic_id' => 10,
                'topic_code' => '10',
                'topic_name' => 'San pham ban chay',
                'topic_name_vn' => 'Sản phẩm bán chạy',
                'topic_name_en' => 'Sale upto 70%',
                'topic_create' => now(),
                'topic_update' => now(),
            ],
        ]);
    }
}
