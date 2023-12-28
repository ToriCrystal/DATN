<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryDetailSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['name' => 'Pháp luật', 'item' => 'Luật dân sự', 'category_slug' => 'chinh-tri-phap-luat', 'status' => 1],
            ['name' => 'Pháp luật', 'item' => 'Luật hình sự', 'category_slug' => 'chinh-tri-phap-luat', 'status' => 1],
            ['name' => 'Pháp luật', 'item' => 'Luật quốc tế', 'category_slug' => 'chinh-tri-phap-luat', 'status' => 1],
            ['name' => 'Pháp luật', 'item' => 'Luật kinh tế', 'category_slug' => 'chinh-tri-phap-luat', 'status' => 1],
            ['name' => 'Chính trị', 'item' => 'Lịch sử chính trị', 'category_slug' => 'chinh-tri-phap-luat', 'status' => 1],
            ['name' => 'Chính trị', 'item' => 'Triết học chính trị', 'category_slug' => 'chinh-tri-phap-luat', 'status' => 1],
            ['name' => 'Chính trị', 'item' => 'Hệ thống chính trị', 'category_slug' => 'chinh-tri-phap-luat', 'status' => 1],
            ['name' => 'Chính trị', 'item' => 'Lãnh đạo và chính trị gia', 'category_slug' => 'chinh-tri-phap-luat', 'status' => 1],
            ['name' => 'Khoa học', 'item' => 'Tự nhiên', 'category_slug' => 'khoa-hoc-cong-nghe-kinh-te', 'status' => 1]
            // Add more data as needed
        ];

        DB::table('category_detail')->insert($data);
    }
}
