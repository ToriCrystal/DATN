<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Admin;
use App\Models\Post;

use App\Models\CommentProduct;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $numberOfUsers = User::count();
        $numberOfAdmins = Admin::count();
        $numberOfPosts = Post::count(); // Get the number of posts

        for ($i = 1; $i <= 20; $i++) {
            $random = fake()->numberBetween(1, 3);

            for ($j = 1; $j <= $random; $j++) {
                $randomUser = fake()->numberBetween(1, $numberOfUsers);
                $randomAdmin = fake()->numberBetween(1, $numberOfAdmins);
                $randomPost = fake()->numberBetween(1, $numberOfPosts);

                CommentProduct::create([
                    'user_id' => $randomUser,
                    'admin_id' => $randomAdmin,
                    'product_id' => $randomPost,
                    'user_type' => 'user',
                    'message' => fake()->text(),
                    'isVisible' => fake()->numberBetween(0, 1),
                ]);
            }
        }
    }
}
