@extends('layouts.layoutAD')

@section('title')
    Quản lý bình luận
@endsection

@section('noidung')
    <style>
        .primary-btn {
            /* Tùy chỉnh màu sắc nền và màu chữ */
            background-color: #3498db;
            /* Màu nền */
            color: #fff;
            /* Màu chữ */
            /* Tùy chỉnh font chữ và padding */
            font-size: 14px;
            font-weight: bold;
            padding: 10px 8px;
            /* Tùy chỉnh viền */
            border: none;
            border-radius: 5px;
            /* Hiệu ứng hover khi di chuột */
            transition: background-color 0.3s ease-in-out;
        }

        .primary-btn:hover {
            background-color: #2980b9;
            /* Màu nền khi di chuột qua */
        }
    </style>

    <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        @include('layouts.menuAD')

        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-md-12 stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="card-title">@yield('title')</h2>
                                <div class="d-flex align-items-end flex-wrap">




                                    <div class="d-flex">
                                        <i class="mdi mdi-home text-muted hover-cursor"></i>
                                        <p class="text-muted mb-0 hover-cursor"><a href="{{ route('admin.dashboard') }}"
                                                class="text-secondary"> Dashboard&nbsp;/&nbsp;</a></p>
                                        <p class="text-primary mb-0">@yield('title')</p>
                                    </div>
                                </div>
                                <br>
                                <ul class="nav nav-tabs" id="myTabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="tab1-tab" data-bs-toggle="tab" href="#tab1"
                                            role="tab" aria-controls="tab1" aria-selected="true">Bình luận đang hiện</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="tab2-tab" data-bs-toggle="tab" href="#tab2"
                                            role="tab" aria-controls="tab2" aria-selected="false">Bình luận đang ẩn</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabsContent">
                                    <div class="tab-pane fade show active" id="tab1" role="tabpanel"
                                        aria-labelledby="tab1-tab">
                                        <div class="table-responsive">
                                            <table id="tab1-listing" class="table mt-3 table-bordered">
                                                <thead class='thead-dark'>
                                                    <tr>
                                                        <th class="text-start">Nội dung</th>
                                                        <th class="text-start">Người bình luận</th>
                                                        <th class="text-start">Thời gian</th>
                                                        <th class="text-start">
                                                            Sản phẩm</th>
                                                        <th class="text-start">Hành động</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($activeComments as $activeComment)
                                                        <tr id="c{{ $activeComment->id }}">
                                                            <td width='40%'>
                                                                <div>
                                                                    @if (strlen($activeComment->message) > $stringLength)
                                                                        <input type="checkbox" class="read-more-state"
                                                                            id="post-{{ $activeComment->id }}" />
                                                                        <p class="read-more-wrap">
                                                                            {{ substr($activeComment->message, 0, $stringLength) }}<span
                                                                                class="read-more-target">{{ substr($activeComment->message, $stringLength) }}</span>
                                                                            <span class="three-dots">...</span>
                                                                        </p>
                                                                        <label for="post-{{ $activeComment->id }}"
                                                                            class="read-more-trigger"></label>
                                                                    @else
                                                                        <p>{{ $activeComment->message }}</p>
                                                                    @endif
                                                                </div>
                                                            </td>
                                                            <td>{{ $activeComment->user->name }}</td>
                                                            <td class="text-start">
                                                                {{ $activeComment->created_at->format('H:i:s d-m-Y') }}
                                                            </td>
                                                            <td class="text-start">
                                                                <a href="#">{{ $activeComment->post->post_title }}
                                                                </a>
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="javascript:void(0)"
                                                                    onclick="toggleProCommentStatus({{ $activeComment->id }})"><i
                                                                        class="bi bi-toggle-on"
                                                                        style="font-size:23px"></i></a>
                                                            </td>
                                                        </tr>
                                                    @endforeach


                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                                        <div class="table-responsive">
                                            <table id="tab2-listing" class="table mt-3 table-bordered">
                                                <thead class='thead-dark'>
                                                    <tr>
                                                        <th class="text-start">Nội dung</th>
                                                        <th class="text-start">Người bình luận</th>
                                                        <th class="text-start">Thời gian</th>
                                                        <th class="text-start">Sản phẩm</th>
                                                        <th class="text-start">Hành động</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($unactiveComments as $activeComment)
                                                        <tr id="c{{ $activeComment->id }}">
                                                            <td width='40%'>
                                                                <div>
                                                                    @if (strlen($activeComment->message) > $stringLength)
                                                                        <input type="checkbox" class="read-more-state"
                                                                            id="post-{{ $activeComment->id }}" />
                                                                        <p class="read-more-wrap">
                                                                            {{ substr($activeComment->message, 0, $stringLength) }}<span
                                                                                class="read-more-target">{{ substr($activeComment->message, $stringLength) }}</span>
                                                                            <span class="three-dots">...</span>
                                                                        </p>
                                                                        <label for="post-{{ $activeComment->id }}"
                                                                            class="read-more-trigger"></label>
                                                                    @else
                                                                        <p>{{ $activeComment->message }}</p>
                                                                    @endif
                                                                </div>
                                                            </td>
                                                            <td>{{ $activeComment->user->name }}</td>
                                                            <td class="text-start">
                                                                {{ $activeComment->created_at->format('H:i:s d-m-Y') }}
                                                            </td>
                                                            <td class="text-start">
                                                                <a href="#">{{ $activeComment->post->post_title }}
                                                                </a>
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="javascript:void(0)"
                                                                    onclick="toggleProCommentStatus({{ $activeComment->id }})"><i
                                                                        class="bi bi-toggle-off"
                                                                        style="font-size:23px"></i></a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Nhóm CFF © 2023 <a href="#" target="_blank">VietNam</a>. Tất cả quyền được bảo lưu.</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"><i class="mdi mdi-heart text-danger"></i></span>
            </div>
        </footer>
        </div>
        <!-- main-panel ends -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous">
    </script>
    <script>
        function toggleProCommentStatus(id) {
            if (confirm('Bạn có muốn thay đổi trạng thái cho bình luận này không?')) {
                $.ajax({
                    url: '{{ route('admin.updateblpro', '') }}/' + id,
                    type: 'PATCh',
                    data: {
                        _token: $('input[name=_token]').val()
                    },
                    success: function(response) {

                        // console.log(response.message)
                        $('#c' + id).remove();
                        alertify.success(response.success)
                        console.log(response);
                    }
                })
            }
        }
    </script>
@endsection
<!-- JavaScript -->
