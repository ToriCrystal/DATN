@extends('layouts.layoutAD')

@section('title')
    Quản lý voucher
@endsection

@section('noidung')
<script>
    // Your existing JavaScript code for image preview and slug generation
</script>
<style>
    /* Your existing styles or additional styles if needed */
</style>
<div class="container-fluid page-body-wrapper">
    @include('layouts.menuAD')
    <div class="main-panel">
        <div class="content-wrapper">
            <form class="forms-sample" method="POST" action="{{ isset($voucher) ? route('admin.updateVoucher', $voucher->id) : route('admin.storeVoucher') }}"
                enctype="multipart/form-data">
                @csrf
                @method(isset($voucher) ? 'PUT' : 'POST')
                <div class="row">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">{{ isset($voucher) ? 'Cập nhật' : 'Thêm' }} voucher</h4>
                                <p class="card-description">
                                    Điền thông tin cho voucher
                                </p>
                                <!-- Voucher Fields -->
                                <div class="form-group">
                                    <label for="code">Mã voucher</label>
                                    <input type="text" name="code" class="form-control" id="code" placeholder="Mã voucher" value="{{ $voucher->code ?? old('code') }}" required>
                                    @error('code')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="usage_limit">Số lần sử dụng (nếu có)</label>
                                    <input type="number" name="usage_limit" class="form-control" id="usage_limit" placeholder="Số lần sử dụng" value="{{ $voucher->usage_limit ?? old('usage_limit') }}" min="1">
                                    @error('usage_limit')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="expires_at">Ngày hết hạn (nếu có)</label>
                                    <input type="date" name="expires_at" class="form-control" id="expires_at" value="{{ $voucher->expires_at ?? old('expires_at') }}">
                                    @error('expires_at')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="discount_type">Loại giảm giá</label>
                                    <select class="form-control" name="discount_type" id="discount_type" required>
                                        <option value="percent" {{ isset($voucher) && $voucher->discount_type == 'percent' ? 'selected' : '' }}>Phần trăm</option>
                                        <option value="fixed" {{ isset($voucher) && $voucher->discount_type == 'fixed' ? 'selected' : '' }}>Số tiền cố định</option>
                                    </select>
                                    @error('discount_type')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="discount_value">Giá trị giảm giá</label>
                                    <input type="number" name="discount_value" class="form-control" id="discount_value" placeholder="Giá trị giảm giá" value="{{ $voucher->discount_value ?? old('discount_value') }}" required >
                                    @error('discount_value')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 grid-margin stretch-card" style="display: flex; justify-content: center; align-items: center;">
                    <button type="submit" class="btn btn-primary mr-2">{{ isset($voucher) ? 'Cập nhật' : 'Thêm' }} voucher</button>
                    <a href="{{ route('admin.allvoucher') }}" class="btn btn-secondary">Trở về</a>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const discountType = document.getElementById('discount_type');
        const discountValue = document.getElementById('discount_value');

        // Hàm cập nhật giá trị max cho trường discount_value
        function updateDiscountValue() {
            if (discountType.value === 'percent') {
                discountValue.setAttribute('max', '100');
            } else {
                discountValue.removeAttribute('max');
            }
        }

        // Khi trang được tải lần đầu, cập nhật giá trị ban đầu của discount_value
        updateDiscountValue();

        // Event listener để theo dõi thay đổi trong trường loại giảm giá
        discountType.addEventListener('change', function() {
            // Cập nhật giá trị khi có sự thay đổi trong trường loại giảm giá
            updateDiscountValue();
        });
    });
</script>

@endsection
