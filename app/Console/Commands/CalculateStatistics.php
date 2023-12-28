<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Order;
use App\Models\Statistic;
use Carbon\Carbon;

class CalculateStatistics extends Command
{
    protected $signature = 'statistics:calculate';
    protected $description = 'Số liệu thống kê mới đã được lưu vào cơ sở dữ liệu';

    public function handle()
    {
        $endTime = Carbon::now('Asia/Ho_Chi_Minh'); // Lấy thời gian hiện tại theo múi giờ Việt Nam

        $startTime = $endTime->copy()->subHour(); // Thời điểm 1 giờ trước

        $orders = Order::whereBetween('created_at', [$startTime, $endTime])->get();

        // Tính toán các chỉ số thống kê từ $orders
        $calculatedRevenue = $orders->sum('total_price');
        $calculatedOrders = $orders->count();
        $calculatedRevenuePerOrder = $calculatedOrders > 0 ? $calculatedRevenue / $calculatedOrders : 0;

        // Lưu thông tin thống kê vào bảng 'statistics'
        Statistic::create([
            'doanhSo' => $calculatedRevenue,
            'donHang' => $calculatedOrders,
            'doanhSoMoiDonHang' => $calculatedRevenuePerOrder,
            'thoiGian' => $startTime->format('H:i:s d-m-Y'), // Lưu thời gian bắt đầu và kết thúc trong cùng một cột
            // Các trường khác nếu cần
        ]);

        $this->info('Số liệu thống kê mới đã được lưu vào cơ sở dữ liệu.');
    }
}
