@extends('layouts.layoutAD')

@section('title')
    Quản lý liên hệ
@endsection

@section('noidung')
    <div class="container-fluid page-body-wrapper">
        @include('layouts.menuAD')

        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="card-title">@yield('title')</h2>

                                <div class="table-responsive pt-3">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link active" id="admin-tab" data-toggle="tab" href="#admin"
                                                role="tab" aria-controls="admin" aria-selected="true">Đang chờ</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" id="user-tab" data-toggle="tab" href="#user"
                                                role="tab" aria-controls="user" aria-selected="false">Đã hoàn tất</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content" id="myTabContent">
                                        <!-- For "Đang chờ" tab -->
                                        <div class="tab-pane fade show active" id="admin" role="tabpanel"
                                            aria-labelledby="admin-tab">
                                            <table class="table table-bordered text-center">
                                                <thead class='thead-dark'>
                                                    <tr>
                                                        <th>
                                                            #
                                                        </th>
                                                        <th>
                                                            Tên người dùng
                                                        </th>
                                                        <th>
                                                            Gmail
                                                        </th>
                                                        <th>
                                                            Chủ đề
                                                        </th>
                                                        <th style="width: 30%;">
                                                            Nội dung
                                                        </th>
                                                        <th>
                                                            Thời gian
                                                        </th>
                                                        <th colspan="2">
                                                            Hành động
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php $i = 1 @endphp
                                                    @foreach ($pendingContacts as $contact)
                                                        <tr>
                                                            <td>{{ $i++ }}</td>
                                                            <td>{{ $contact->name }}</td>
                                                            <td>{{ $contact->email }}</td>
                                                            <td>{{ $contact->subject }}</td>
                                                            <td>{{ $contact->message }}</td>
                                                            <td>
                                                                {{ \Carbon\Carbon::parse($contact->created_at)->format('d/m/Y H:i:s') }}
                                                            </td>
                                                            <td>
                                                                <a href="#"
                                                                    onclick="event.preventDefault(); document.getElementById('mark-as-completed-{{ $contact->id }}').submit();">
                                                                    <i class="fa-solid fa-check"></i>
                                                                </a>
                                                                <form id="mark-as-completed-{{ $contact->id }}"
                                                                    action="{{ route('admin.contact.markAsCompleted', $contact->id) }}"
                                                                    method="POST" style="display: none;">
                                                                    @csrf
                                                                </form>
                                                            </td>
                                                            <td>
                                                                <a href="{{ route('admin.contact.destroy', $contact->id) }}"
                                                                    onclick="event.preventDefault(); if (confirm('Bạn có muốn xóa liên hệ này?')) { document.getElementById('delete-contact-{{ $contact->id }}').submit(); }">
                                                                    <i class="fa-solid fa-trash"></i>
                                                                </a>
                                                                <form id="delete-contact-{{ $contact->id }}"
                                                                    action="{{ route('admin.contact.destroy', $contact->id) }}"
                                                                    method="POST" style="display: none;">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>

                                            <!-- Hiển thị phân trang -->
                                            <div class="pagination justify-content-center">
                                                {{ $pendingContacts->links('pagination::bootstrap-4') }}
                                            </div>
                                        </div>

                                        <!-- For "Đã hoàn tất" tab -->
                                        <div class="tab-pane fade" id="user" role="tabpanel"
                                            aria-labelledby="user-tab">
                                            <table class="table table-bordered text-center">
                                                <thead class='thead-dark'>
                                                    <tr>
                                                        <th>
                                                            #
                                                        </th>
                                                        <th>
                                                            Tên người dùng
                                                        </th>
                                                        <th>
                                                            Gmail
                                                        </th>
                                                        <th>
                                                            Chủ đề
                                                        </th>
                                                        <th style="width: 30%;">
                                                            Nội dung
                                                        </th>
                                                        <th>
                                                            Thời gian
                                                        </th>
                                                        <th>Hành động</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php $i = 1 @endphp
                                                    @foreach ($completedContacts as $contact)
                                                        <tr>
                                                            <td>{{ $i++ }}</td>
                                                            <td>{{ $contact->name }}</td>
                                                            <td>{{ $contact->email }}</td>
                                                            <td>{{ $contact->subject }}</td>
                                                            <td>{{ $contact->message }}</td>
                                                            <td>
                                                                {{ \Carbon\Carbon::parse($contact->completed_at)->format('d/m/Y H:i:s') }}
                                                            </td>
                                                            <td>
                                                                <a href="{{ route('admin.contact.destroy', $contact->id) }}"
                                                                    onclick="event.preventDefault(); if (confirm('Bạn có muốn xóa liên hệ này?')) { document.getElementById('delete-contact-{{ $contact->id }}').submit(); }">
                                                                    <i class="fa-solid fa-trash"></i>
                                                                </a>
                                                                <form id="delete-contact-{{ $contact->id }}"
                                                                    action="{{ route('admin.contact.destroy', $contact->id) }}"
                                                                    method="POST" style="display: none;">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                </form>
                                                            </td>
                                                            </td>


                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>

                                            <!-- Hiển thị phân trang -->
                                            <div class="pagination justify-content-center">
                                                {{ $completedContacts->links('pagination::bootstrap-4') }}
                                            </div>
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
    </div>

    <!-- Thêm mã JavaScript sau thẻ tab HTML -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#myTab a').on('click', function(e) {
                e.preventDefault();
                var tab = $(this).attr('aria-controls');
                $.get('/loadtabdata/' + tab, function(data) {
                    $('#tab-content').html(data);
                });
            });
        });

        function markAsCompleted(contactId) {
            // Thực hiện Ajax request để đánh dấu liên hệ là đã hoàn tất
            $.ajax({
                type: 'POST',
                url: '/admin/contact/markAsCompleted/' + contactId,
                data: {
                    _token: '{{ csrf_token() }}',
                },
                success: function(response) {
                    // Hiển thị thông báo Toastr
                    if (response.status === 'success') {
                        showNotification('success', response.message);

                        // (Optional) You can update the UI here if needed
                        // For example, hide the completed row in the table
                        // $('#completed-contact-row-' + contactId).hide();
                    } else {
                        showNotification('error', response.message);
                    }
                },
                error: function() {
                    // Hiển thị thông báo lỗi nếu có lỗi
                    showNotification('error', 'Đã xảy ra lỗi');
                }
            });
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
@endsection
