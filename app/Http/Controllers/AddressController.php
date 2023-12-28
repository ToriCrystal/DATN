<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;



class AddressController extends Controller
{
    public function getProvinces()
    {
        // Gửi yêu cầu lấy danh sách tỉnh từ API
        $provinces = Http::get('https://provinces.open-api.vn/api/p/')->json();

        return view('page.checkout', compact('provinces'));
    }

    public function getDistricts($provinceCode)
    {
        // Gửi yêu cầu lấy danh sách huyện dựa trên mã tỉnh
        $districts = Http::get("https://provinces.open-api.vn/api/p/{$provinceCode}/d/")->json();
        $ward = Http::get("https://provinces.open-api.vn/api/p/{$provinceCode}/d/$districts/w/")->json();

        return response()->json($districts,$ward);
    }
}


