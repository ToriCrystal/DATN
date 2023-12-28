<?php

namespace App\Console\Commands;
use Illuminate\Console\Command;
use App\Http\Controllers\client\checkout\CheckoutController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;

class DemoCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'demo:cron';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }
    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $order_code = Cache::get('order_code');
        $total_price = Cache::get('total_price');
        echo $order_code.$total_price;
        $cronLsgd = App::make('App\Http\Controllers\client\checkout\CheckoutController');
        $cronLsgd->cronLsgdBank($order_code, $total_price);
        $this->info('Demo:Cron Cummand Run successfully!');
    }
}


?>