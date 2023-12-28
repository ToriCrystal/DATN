<?php
namespace App\Http\Controllers\admin\Statistic;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Statistic;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
class AdminStatisticController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin'); // Use the 'admin' middleware instead of 'auth'
    }
    public function statistics(Request $request)
    {
   

   $selectedDate = $request->input('datetk');
    $selectedDateTime = $selectedDate ? \Carbon\Carbon::parse($selectedDate) : \Carbon\Carbon::now();
    $firstValueFromPreviousDay = null;
    $lastValueFromPreviousDay = null;
  if (!$selectedDate) {
        $selectedDateTime->subDay(); // Trừ một ngày nếu không có ngày được chọn

        $lastValueFromPreviousDay = Statistic::whereDate('created_at', $selectedDateTime->startOfDay())
            ->orderBy('created_at', 'desc')
            ->value('created_at');

        if ($lastValueFromPreviousDay) {
            $lastValueFromPreviousDay = \Carbon\Carbon::parse($lastValueFromPreviousDay)->format('H:i:s d-m-Y');
        }

        $selectedDateTime->addDay(); // Phục hồi ngày đã trừ trước đó
    }
      else {
            // Lấy giá trị cuối cùng của ngày trước đó
            
            $lastValueFromPreviousDay = Statistic::whereDate('created_at', $selectedDateTime->subDay()->startOfDay())
                ->orderBy('created_at', 'desc')
                ->value('created_at');
    
            if ($lastValueFromPreviousDay) {
                $lastValueFromPreviousDay = \Carbon\Carbon::parse($lastValueFromPreviousDay)->format('H:i:s d-m-Y');
            }
    
            // Phục hồi ngày đã trừ trước đó
            $selectedDateTime->addDay();
        }
    
      $selectData = Statistic::whereDate('created_at', $selectedDateTime)
            ->orderBy('created_at')
            ->take(24)
            ->get([
                'doanhSo',
                'donHang',
                'tyLeChuyenDoi',
                'luotTruyCap',
                'luotXemTrang',
                'doanhSoMoiDonHang',
                'created_at'
            ]);
    
        $thoiGianData = $selectData->pluck('created_at')->map(function ($item) {
            return \Carbon\Carbon::parse($item)->format('H:i:s d-m-Y');
        })->toArray();
    
        // Thêm giá trị cuối cùng của ngày trước đó vào mảng thoiGianData (nếu có)
        if ($lastValueFromPreviousDay) {
            array_unshift($thoiGianData, $lastValueFromPreviousDay);
        }


        // $thongKeRecords = Statistic::take(24)->orderBy('created_at', 'desc')->get();
        // $filteredRecords = [];

        $thongke = [
            'doanhSo' => $selectData->sum('doanhSo'),
            'donHang' => $selectData->sum('donHang'),
            'tyLeChuyenDoi' => $selectData->sum('tyLeChuyenDoi'),
            'luotTruyCap' => $selectData->sum('luotTruyCap'),
            'luotXemTrang' => $selectData->sum('luotXemTrang'),
            'doanhSoMoiDonHang' => $selectData->sum('doanhSoMoiDonHang'),
        ];

        $thongke24h = [
            'doanhSo' => $selectData->pluck('doanhSo')->toArray(),
            'donHang' => $selectData->pluck('donHang')->toArray(),
            'tyLeChuyenDoi' => $selectData->pluck('tyLeChuyenDoi')->toArray(),
            'luotTruyCap' => $selectData->pluck('luotTruyCap')->toArray(),
            'luotXemTrang' => $selectData->pluck('luotXemTrang')->toArray(),
            'doanhSoMoiDonHang' => $selectData->pluck('doanhSoMoiDonHang')->toArray(),
        ];

        // $thoiGianData = $selectData->pluck('created_at')->reverse()->toArray();

        return view('admin.statistics.thongke', compact('thongke', 'thongke24h', 'thoiGianData','selectedDate'));
    }
}
