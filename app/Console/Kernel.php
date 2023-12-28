<?php

namespace App\Console;

use App\Jobs\DeleteSoftDeletedRecords;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\Redis;
use App\Models\Contact;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {


        $modelNames = ['Products'];
        $schedule->job(new DeleteSoftDeletedRecords($modelNames))->everyMinute();
        $schedule->call(function(){
            info(
                'Force Delete Records'
            );
        })->everyMinute();
        $schedule->command('statistics:calculate')->hourly();
        $schedule->call(function () {
            $twoDaysAgo = now()->subDays(2);
        
            Contact::whereNull('completed_at')
                ->where('created_at', '<=', $twoDaysAgo)
                ->delete();
        })->everyMinute();
        
    }
    protected function scheduleTimezone()
    {
        return 'Asia/Ho_Chi_Minh'; // Chọn múi giờ tương ứng
    }
    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
