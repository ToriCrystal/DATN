@extends('layouts.layoutAD')

@section('title')
    Quản lý Danh mục
@endsection

@section('noidung')
    <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        @include('layouts.menuAD')
        <style>
            .nav-item > #s2{
              color: white;
              background: #4B49AC;
            }

          </style>
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="card-title">Danh mục</h2>
                                <div class="d-flex justify-content-between">
                                    <div class="col pl-0">
                                        <p class="card-description d-flex">
                                            <a href="{{ route('admin.createdm') }}" style="text-decoration: none;"><i
                                                    class="bi bi-patch-plus"></i> Thêm danh mục</a>
                                        </p>
                                    </div>
                                    <div class="col pr-0">
                                        <p class="card-description d-flex justify-content-end">
                                            <a href="{{ route('admin.alldm.trash') }}" style="text-decoration: none;">
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
                                                    Tên danh mục
                                                </th>
                                                <th>
                                                    Slug
                                                </th>
                                                <th>
                                                    Số lượng sản phẩm
                                                </th>
                                                <th>
                                                    Trạng thái
                                                </th>
                                                <th colspan="3">
                                                    Hành động
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- @php
                                                echo route('admin.deletedm');
                                            @endphp --}}
                                            @foreach ($categories as $category)
                                                <tr id='cid{{ $category->id }}'>
                                                    <td>{{ $loop->index + 1 }}</td>
                                                    <td>{{ $category->category_name }}</td>
                                                    <td>{{ $category->category_slug }}</td>
                                                    <td>{{ $category->products_count }}</td>
                                                    <td>{{ $category->isVisible == 0 ? 'Ẩn' : 'Hiện' }}</td>
                                                    <td><a href="{{ route('admin.onedm', $category->category_slug) }}">Xem
                                                            chi tiết</a></td>
                                                    <td><a href="{{ route('admin.editdm', $category->category_slug) }}"><i
                                                                class="bi bi-pen" style="font-size: 23px"></i></a>
                                                    </td>
                                                    <td>
                                                        {{-- <a href="javascript:void(0)"
                                                            onclick="deleteCategory({{ $category->id }})">
                                                            <i class="bi bi-trash" style="font-size: 23px"></i>
                                                        </a> --}}
                                                        <form name="frmXoa" method="POST"
                                                            action="{{ route('admin.deletedm', ['id' => $category->id]) }}"
                                                            class="delete-form" data-id = "{{ $category->id }}">
                                                            {{ csrf_field() }}
                                                            <input type="hidden" name="_method" value="DELETE" />
                                                            <button type="submit" class="btn btn-link"><i
                                                                    class="fas fa-trash-alt function"
                                                                    style="color:red"></i></button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>

                                    <!-- Hiển thị phân trang -->
                                    <div class="pagination justify-content-center">
                                        {{ $categories->links('pagination::bootstrap-4') }}
                                    </div>
                                </div>
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
    {{-- <script>
        function deleteCategory(id) {
            alertify.confirm(`Bạn có muốn xóa danh mục này không?`,
                function() {
                    $.ajax({
                    url: '{{ route('admin.deletedm', '') }}/' + id,
                    type: 'DELETE',
                    data: {
                        _token: $('input[name=_token]').val()
                    },
                    success: function(response) {
                        if (response.error) {
                            console.log(response.error);
                            alertify.error(response.error)
                        } else {
                            // console.log(response.message)
                            $('#cid' + id).remove();
                            alertify.success(response.success)
                        }
                    }
                })
                },
                function() {
                    console.log('Cancel');
                });

        }
    </script> --}}
@endsection
<!-- JavaScript -->
