@extends('layouts.layoutUser')

@section('title')
Thanh toán
@endsection

@section('noidung')
<main id="tg-main" class="tg-main tg-haslayout" style="width: 100%;">
    <div class="tg-sectionspace tg-haslayout">
        <div class="container mt-4">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Tên sản phẩm</th>
                            <th scope="col">Hình</th>
                            <th scope="col">Giá</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Tổng giá</th>
                            <th scope="col" colspan="2">Hành động</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($orders as $item)
                            <tr class="">
                                <td>{{ $item['product_name'] }}</td>
                                <td style="text-align: center;">
                                    <img src="{{ $item['product_image'] }}" alt="" srcset="" style="max-height: 80px; width: auto; max-width: 100%; display: block; margin: 0 auto;">
                                </td>
                                <td>{{ number_format($item['price'], 0, ',', '.') }} VND</td>
                                <td>
                                    <input type="number" name="quantities[{{ $item['product_id'] }}]" value="{{ $item['so_luong'] }}" min="1" class="quantity-input">
                                </td>
                                <td>${{ $item['price'] * $item['so_luong'] }}</td>
                                <td class="cart__close">
                                    <a href="{{ route('deleteCart', $item['product_id']) }}">
                                        <i class="fa-solid fa-trash" style="color: #000000;"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection