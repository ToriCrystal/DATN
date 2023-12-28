<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\AuthorProduct;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        $startDate = '2015-01-01'; // Ngày bắt đầu
        $faker = \Faker\Factory::create();
        $endDate = '2023-10-31'; // Ngày kết thúc
        $kxd = Author::create([
            'author_name' => 'Chưa cập nhật',
            'id' => 1,
            'author_img' => 'noImage.jpg',
            'author_debutDate' => '2015-01-01',
            'author_description' => $faker->text,
        ]);

        for ($i = 2; $i <= 100; $i++) {
            $rand = $faker->numberBetween(1, 10);
            $author = Author::create([
                'author_name' => $faker->name,
                'author_img' => 'author_image_' . $i . '.jpg',
                'author_debutDate' => $faker->dateTimeBetween($startDate, $endDate)->format('Y-m-d'),
                'author_description' => $faker->text,
            ]);

            for ($j = 1; $j <= $rand; $j++) {
                AuthorProduct::create([
                    'product_id' => $faker->numberBetween(1, 500),
                    'author_id' => $author->id,
                ]);
            }
        }
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
