<?php

namespace App\Http\Controllers;

use App\Services\GHNService;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
class ShippingController extends Controller
{
    public function calculateShippingFee(Request $request)
    {
        try {
            // Lấy thông tin địa chỉ và các thông số khác từ request
            $fromDistrictId = $request->input('from_district_id');
            $toDistrictId = $request->input('to_district_id');
            $serviceId = $request->input('service_id');
            $weight = 1; // Trọng lượng gói hàng (gram)

            // Gửi yêu cầu đến API của GHN để tính phí vận chuyển
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'Token' => 'bc38f4ab-8d37-11ee-96dc-de6f804954c9' // Thay thế bằng API Token của bạn từ GHN
            ])->post('https://online-gateway.ghn.vn/shiip/public-api/v2/shipping-order/fee', [
                'from_district_id' => $fromDistrictId,
                'to_district_id' => $toDistrictId,
                'service_id' => $serviceId,
                'weight' => $weight
                // Các thông tin khác nếu cần
            ]);

            // Kiểm tra và xử lý phản hồi từ API của GHN
            if ($response->successful()) {
                $shippingCost = $response->json()['shippingCost'];

                // Xử lý kết quả, ví dụ: trả về kết quả dưới dạng JSON
                return response()->json(['shippingCost' => $shippingCost]);
            } else {
                // Xử lý khi gặp lỗi khi gọi API
                return response()->json(['error' => 'Failed to calculate shipping fee'], 500);
            }
        } catch (\Exception $e) {
            // Xử lý ngoại lệ nếu có
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}

