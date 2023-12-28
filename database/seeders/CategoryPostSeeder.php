<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CategoryPost;
use Illuminate\Support\Str;

class CategoryPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            CategoryPost::create([
                'post_category_name' => 'Category ' . $i,
                'post_category_slug' => Str::slug('Category ' . $i),
                'status' => 1, // Chọn trạng thái tùy ý
            ]);
        }
    }
}
