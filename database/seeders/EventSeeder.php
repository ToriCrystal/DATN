<?php

namespace Database\Seeders;
use App\Models\Banner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Database\Factories\Factory;


class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('events')->truncate(); // xoa all data
        $faker = \Faker\Factory::create();
        for ($i = 1; $i <= 20; $i++) {
            $rand_listAttributes = [
                'imageHeader' => [rand(1, 5).".jpg", rand(1, 5).".jpg"],
                'imageFooter' => [rand(1, 5).".jpg", rand(1, 5).".jpg"],
                'imageLeft' => [rand(1, 5).".jpg", rand(1, 5).".jpg"],
                'imageRight' => [rand(1, 5).".jpg", rand(1, 5).".jpg"],
                'colorEvent' => "#ff0000",
            ];
            DB::table('events')->insert([
                'event_name' => $faker->sentence(3),  // Tạo tên sự kiện ngẫu nhiên
                'start_date' => $faker->dateTimeBetween('-30 days', '+30 days'),  // Tạo ngày bắt đầu ngẫu nhiên trong khoảng 60 ngày
                'end_date' => $faker->dateTimeBetween('+31 days', '+60 days'),  // Tạo ngày kết thúc ngẫu nhiên trong khoảng 31-60 ngày sau ngày bắt đầu
                'describe' => $faker->text,
                'attributes' => json_encode($rand_listAttributes),
                'priority' => rand(1, 3),
                'status' => $faker->randomElement([0, 1]),  // Tạo trạng thái ngẫu nhiên (0 hoặc 1)
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        // DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
