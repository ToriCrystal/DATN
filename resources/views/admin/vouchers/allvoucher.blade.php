@extends('layouts.layoutAD')

@section('title')
    Quản lý sản phẩm
@endsection

@section('noidung')
    <style></style>
    <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        @include('layouts.menuAD')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="card-title">Sản phẩm</h2>
                                <div class="d-flex justify-content-between">
                                    <div class="col pl-0">
                                        <p class="card-description d-flex">
                                            <a href="{{ route('admin.addVoucher') }}" style="text-decoration: none;">
                                                <i class="bi bi-patch-plus"></i> Thêm voucher
                                            </a>
                                        </p>
                                    </div>
                                    <div class="col pr-0">
                                        <p class="card-description d-flex justify-content-end">
                                            <a href="{{ route('admin.allspintrash') }}" style="text-decoration: none;">
                                                Thùng rác <i class="bi bi-trash"></i> </a>
                                        </p>
                                    </div>
                                </div>

                                <div class="table-responsive pt-3">
                                    <table class="table table-bordered text-center">
                                        <thead class='thead-dark'>
                                            <tr>
                                                <th>
                                                    #
                                                </th>
                                                <th>
                                                    Mã voucher
                                                </th>
                                                <th>
                                                    Loại giảm giá
                                                </th>
                                                <th>
                                                    Giảm giá
                                                </th>
                                                <th>
                                                    Số lần sử dụng
                                                </th>
                                                <th>
                                                    Ngày hết hạn
                                                </th>
                                                <th colspan="2">
                                                    Hành động
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($vouchers as $voucher)
                                                <tr>
                                                    <td>
                                                        {{ $loop->index + 1 }}
                                                    </td>
                                                    <td>
                                                        {{ $voucher->code }}
                                                    </td>
                                                    <td>
                                                        {{ $voucher->discount_type == 'percent' ? 'Phần trăm' : 'Số tiền cụ thể' }}
                                                    </td>
                                                    <td>
                                                        {{ number_format($voucher->discount_value, 0, ',', '.')}}{{ $voucher->discount_type == 'percent' ? '%' : 'đ' }}
                                                    </td>
                                                    <td>
                                                        {{ $voucher->usage_limit }}
                                                    </td>
                                                    <td>
                                                        @if ($voucher->expires_at)
                                                            {{ \Carbon\Carbon::parse($voucher->expires_at)->format('d-m-Y') }}
                                                        @else
                                                            Không hết hạn
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('admin.editVoucher', $voucher->id) }}">
                                                            <i class="bi bi-pen" style="font-size: 23px"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <form class="delete-form-voucher" method="POST"
                                                            action="{{ route('admin.deleteVoucher', ['voucher' => $voucher->id]) }}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-link">
                                                                <i class="fas fa-trash-alt function" style="color:red"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                    <!-- Hiển thị phân trang -->
                                    <div class="pagination justify-content-center">
                                        {{ $vouchers->links('pagination::bootstrap-4') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- content-wrapper ends -->
                    <!-- partial:../../partials/_footer.html -->
                  <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Nhóm CFF © 2023 <a href="#" target="_blank">VietNam</a>. Tất cả quyền được bảo lưu.</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"><i class="mdi mdi-heart text-danger"></i></span>
            </div>
        </footer>
                    <!-- partial -->
                </div>
                <!-- main-panel ends -->
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('.delete-form-voucher').submit(function(e) {
                e.preventDefault();
                Swal.fire({
                    title: 'Bạn có chắc chắn?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    cancelButtonText: 'Thoát',
                    confirmButtonText: 'Vâng, tôi chắc chắn!'
                }).then((result) => {
                    if (result.isConfirmed) {

                        $.ajax({
                        type: $(this).attr('method'),
                        url: $(this).attr('action'),
                        data: $(this).serialize(),
                        success: function() {
                            Swal.fire(
                                    'Thành công!',
                                    'Bạn đã xóa thành công.',
                                    'success'
                                ),
                                setTimeout(function() {
                                    location.reload();
                                }, 1000);
                        }
                    });
                    }
                });
            });
        });
    </script>

@endsection
<!-- JavaScript -->
