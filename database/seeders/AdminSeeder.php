<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'name' => "admin",
            'email' => "admin@gmail.com",
            'password' => '$2y$10$oOMYlJQikQXXziVxmB..c.4mIyzNtAdEWDV7IAFIScb3TzCZ2/V9q'
        ]);
        Admin::create([
            'name' => "Quang Sang",
            'email' => "quang.sang1530@gmail.com",
            'password' => '$2y$10$LXzxTSPAMxmqQcs6a2Y4GeLB/35qdrk2L4RwEvI3u7Tz7MfbJOdx.'
        ]);
    }
}
