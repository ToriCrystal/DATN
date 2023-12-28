<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CommentPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Disable foreign key checks to allow truncating
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        
        // Truncate the table to remove existing data
        DB::table('comments_post')->truncate();

        for ($i = 1; $i <= 10; $i++) {
            $randomUser = rand(1, 20);
            $userType = 'user'; // Change to 'admin' if needed

            DB::table('comments_post')->insert([
                'user_id' => $randomUser,
                'post_id' => $i,
                'isVisible' => rand(0, 1),
                'message' => 'Comment message for post ' . $i,
                'user_type' => 'user',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // Re-enable foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
