@extends('layouts.layoutAD')

@section('title')
Quản lý Sự Kiện
@endsection

@section('noidung')
<link rel="stylesheet" href="/css/event.css">

<div class="container-fluid page-body-wrapper">
    @include('layouts.menuAD')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">@yield('title')</h2>
                            <p class="card-description">
                                <a href="{{ route('admin.createEvent') }}" style="text-decoration: none;"><i class="bi bi-patch-plus"></i> Thêm sự kiện</a>
                            </p>
                            <div class="table-responsive pt-3">
                                <table class="table table-bordered text-center">
                                    <thead class='thead-dark'>
                                        <tr>
                                            <th>#</th>
                                            <th>Tên sự kiện</th>
                                            <th>Mô tả</th>
                                            <th>Banner header</th>
                                            <th>Banner footer</th>
                                            <th>Banner left</th>
                                            <th>Banner right</th>
                                            <th>Màu chủ đạo</th>
                                            <th>Ưu tiên</th>
                                            <th>Ngày thực hiện</th>
                                            <th>Ngày kết thúc</th>
                                            <th>Tình trạng</th>
                                            <th colspan="3">Hành động</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(count($events) > 0)
                                            @foreach ($events as $event)
                                            <tr>
                                                <td class="text-start">{{ $loop->index + 1 }}</td>
                                                <td>{{ $event->event_name }}</td>
                                                <td class="expandable-cell limited-text">
                                                    {{ $event->describe }}
                                                </td>
                                                <td class="table-cell">
                                                    @php $data = json_decode($event->attributes, true); @endphp
                                                    @foreach ($data['imageHeader'] as $key => $img)
                                                    <img src="{{ $img }}" alt="banner-{{ $img }}">
                                                    @endforeach
                                                </td>
                                                <td class="table-cell">
                                                    @php $data = json_decode($event->attributes, true); @endphp
                                                    @foreach ($data['imageFooter'] as $key => $img)
                                                    <img src="{{ $img }}" alt="banner-{{ $img }}">
                                                    @endforeach
                                                </td>
                                                <td class="table-cell">
                                                    @php $data = json_decode($event->attributes, true); @endphp
                                                    @foreach ($data['imageLeft'] as $key => $img)
                                                    <img src="{{ $img }}" alt="banner-{{ $img }}">
                                                    @endforeach
                                                </td>
                                                <td class="table-cell">
                                                    @php $data = json_decode($event->attributes, true); @endphp
                                                    @foreach ($data['imageRight'] as $key => $img)
                                                    <img src="{{ $img }}" alt="banner-{{ $img }}">
                                                    @endforeach
                                                </td>
                                                <td>
                                                    @php $data = json_decode($event->attributes, true); @endphp
                                                    <div style="width: 60px; height: 30px; margin: auto; background-color: {{ $data['colorEvent'] }};"></div>
                                                </td>
                                                <td>
                                                    {{ $event->priority == 1 ? 'Thấp' : ($event->priority == 2 ? 'Trung bình' : 'Cao') }}
                                                </td>
                                                <td>{{ date('H:i:s Y-m-d', strtotime($event->start_date)) }}</td>
                                                <td>{{ date('H:i:s Y-m-d', strtotime($event->end_date)) }}</td>
                                                <td>{{ $event->status == 1 ? 'Hoạt động' : ($event->status == 2 ? 'Chưa diễn ra' : 'Kết thúc') }}</td>
                                                <td>
                                                    <a href="{{ route('admin.editEvent', $event->id) }}">
                                                        <i class="bi bi-pen" style="font-size: 23px"></i>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="{{ url('admin/event/delete/' . $event->id) }}">
                                                        <i class="bi bi-trash" style="font-size: 23px"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        @else
                                        <tr>
                                            <td style="padding: 20px 0px;" colspan="12">Không có sự kiện nào đang diễn ra</td>
                                        </tr>
                                        @endif
                                    </tbody>
                                </table>

                                <!-- Hiển thị phân trang -->
                                <div class="pagination justify-content-center mt-3">
                                    {{ $events->links('pagination::bootstrap-4') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- footer -->
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

@endsection
