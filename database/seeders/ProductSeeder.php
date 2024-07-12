<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\CategoryProduct;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\Unique;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Xóa dữ liệu cũ nếu cần
        Product::truncate();

        // Chèn dữ liệu mới
        $faker = \Faker\Factory::create();

        for ($i = 1; $i <= 500; $i++) {
            $rand = $faker->numberBetween(1, 3);
            $imageNumber = $i <= 100 ? $i : $faker->numberBetween(1, 100);
            $sach = ['Sách', 'Truyện', 'Tiểu thuyết'];
            $bia = ['Cứng', 'Mềm'];
            $lang = ['Tiếng Anh', 'Tiếng Việt'];
            $ht = Arr::random($sach) . ' ' . $faker->word . '' . $i;
            $startDate = '2023-01-01'; // Ngày bắt đầu
            $endDate = '2023-12-31'; // Ngày kết thúc
            $vietnameseNotes = [
                'Cuốn sách thú vị và đáng đọc.',
                'Nội dung sâu lắng, rất thú vị.',
                'Một trong những cuốn sách hay nhất mà tôi từng đọc.',
                'Câu chuyện đầy cảm xúc và ý nghĩa.',
                'Đề cập đến những vấn đề xã hội quan trọng.',
                // Thêm các cụm từ khác tùy ý
            ];
            Product::create([
                'product_name' => $ht,
                'product_slug' => createSlug($ht),
                'price' => $faker->randomFloat(2, 10, 1000),
                'product_image' => 'upload/img/'. $imageNumber . '.jpg',
                'remaining' => $faker->numberBetween(1, 100),
                'views' => $faker->numberBetween(0, 1000),
                'isHot' => $faker->boolean,
                'weekly_discount' => $faker->boolean,
                'product_description' => $faker->text,
                // 'seller_id'=>$faker->numberBetween(1,300),
                'isVisible' => $faker->randomElement([0, 1]),
                'attributes' => json_encode([
                    'Định dạng' => 'Bìa ' . Arr::random($bia),
                    'Trang' => $faker->numberBetween(500, 1000) . ' trang',
                    'Kích thước' => $faker->numberBetween(100, 200) . ' x ' . $faker->numberBetween(100, 200) . ' x ' . $faker->numberBetween(20, 100) . ' mm | ' . $faker->numberBetween(500, 1000) . 'g',
                    'Ngày xuất bản' => $faker->dateTimeBetween($startDate, $endDate)->format('d-m-Y'),
                    'Nhà xuất bản' => $faker->company,
                    'Ngôn ngữ' => Arr::random($lang),
                    'Ghi chú minh họa' => $vietnameseNotes[array_rand($vietnameseNotes)],
                    'Đánh giá' => random_int(1, 5),
                    // ... Thêm các thuộc tính và giá trị tương ứng
                ]),
            ]);

            for ($j = 1; $j <= $rand; $j++) {
                CategoryProduct::create([
                    'products_id' => $i,
                    'category_id' => $faker->randomElement([2, 1, 3, 4, 5, 6, 7, 8]),
                ]);
            }
        }

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
