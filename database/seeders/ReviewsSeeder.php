<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\User;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $products = Product::take(100)->get(); // Take the first 100 products
        $users = User::take(10)->get(); // Take the first 10 users

        foreach ($products as $product) {
            $user = $users->random(); // Randomly select one user from the 10 users

            // Generate a random rating (you can adjust the range as needed)
            $rating = rand(1, 5);

            DB::table('reviews')->insert([
                'product_id' => $product->id,
                'user_id' => $user->id,
                'rating' => $rating,
                'comment' => 'Comment message for post ',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
