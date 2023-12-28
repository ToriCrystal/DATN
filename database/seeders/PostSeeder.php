<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create(); // Create Faker instance

        for ($i = 0; $i < 15; $i++) {
            DB::table('posts')->insert([
                'post_title' => 'Title ' . ($i + 1),
                'post_slug' => Str::slug('Title ' . ($i + 1)),
                'post_excerpt' => 'Excerpt ' . ($i + 1),
                'post_thumbnail' => 'upload/img/news.jpg',
                'post_content' => 'Content for post ' . ($i + 1),
                'isHot' => rand(0, 1),
                'status' => rand(0, 1),
                'published_at' => now(),
                'admin_id' => rand(1, 2),
                'post_category_id' => rand(1, 10),
                'meta_title' => 'Meta Title ' . ($i + 1),
                'meta_description' => 'Meta Description ' . ($i + 1),
                'likes' => $faker->numberBetween(0, 100),
                'views' => $faker->numberBetween(0, 1000),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
