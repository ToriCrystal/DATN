<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        $data = [
            'Chính trị – pháp luật',
            'Khoa học công nghệ – Kinh tế',
            'Văn hóa xã hội – Lịch sử',
            'Văn học nghệ thuật',
            'Giáo trình',
            'Truyện, tiểu thuyết',
            'Tâm lý, tâm linh, tôn giáo',
            'Sách thiếu nhi',
            'Khoa học viễn tưởng',
        ];

        $id = 1; // ID bắt đầu từ 1
        $faker = \Faker\Factory::create();
        foreach ($data as $item) {
            Category::create([
                'id' => $id,
                'category_name' => $item,
                'category_slug' => createSlug($item),
                'isVisible' => $faker->randomElement(['0', '1']),


            ]);
            $id++;

        }
         // Tăng ID lên sau khi chèn
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
