<!DOCTYPE html>
<html lang="vi">

<head>
    <!-- Thẻ meta bắt buộc -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <!-- Thư viện CSS -->
    <link rel="stylesheet" href="/admin/vendors/mdi/css/materialdesignicons.min.css?v=<?=rand();?>">
    <link rel="stylesheet" href="/admin/vendors/base/vendor.bundle.base.css?v=<?=rand();?>">
    {{-- JQuery --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css?v=<?=rand();?>" />

    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css?v=<?=rand();?>" />

    <link rel="stylesheet" href="/css/vertical-layout-light/style.css?v=<?=rand();?>">
    <link rel="stylesheet" href="/vendors/datatables.net-bs4/dataTables.bootstrap4.css?v=<?=rand();?>">
    <link rel="stylesheet" href="/vendors/ti-icons/css/themify-icons.css?v=<?=rand();?>">
    <link rel="stylesheet" type="text/css" href="/js/chart/select.dataTables.min.css?v=<?=rand();?>">
    <!-- plugins:css -->
    <link rel="stylesheet" href="/vendors/feather/feather.css?v=<?=rand();?>">
    <link rel="stylesheet" href="/vendors/ti-icons/css/themify-icons.css?v=<?=rand();?>">
    <link rel="stylesheet" href="/vendors/css/vendor.bundle.base.css?v=<?=rand();?>">



    <!-- Kết thúc chèn CSS -->
    <!-- Thư viện CSS cho trang này -->
    <link rel="stylesheet" href="/admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css?v=<?=rand();?>">
    <!-- Kết thúc thư viện CSS cho trang này -->
    <!-- Chèn CSS -->
    <link rel="stylesheet" href="/admin/css/style.css?v=<?=rand();?>">

    <!-- Kết thúc chèn CSS -->
    <link rel="shortcut icon" href="/admin/images/favicon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css?v=<?=rand();?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css?v=<?=rand();?>">
    {{-- @vite(['resources/css/app.css?v=<?=rand();?>', 'resources/js/app.js']) --}}
    <!-- Trước thẻ </body> -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@12"></script> --}}
    <script src="{{ asset('/sweetalert/sweetalert.js') }}"></script>

</head>

<body>
   @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <style>
        .btn.btn-sm,
        .btn-group-sm>#gd {
            font-size: 0.875rem;
            margin-left: 10px;
            margin-top: -5%;
        }

        .toast {
            max-width: 200px;
           
            /* Độ rộng tối đa mong muốn */
        }

        .toast-message {
            font-size: 14px;
            /* Kích thước phông chữ nội dung thông báo */
        }
    </style>
     
    <div class="container-scroller">
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="navbar-brand-wrapper d-flex justify-content-center">
                <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
                    <a class="navbar-brand brand-logo" href="/admin/dashboard"><img src="/admin/images/logo.svg"
                            alt="logo" /></a>
                    <a class="navbar-brand brand-logo-mini" href="/admin/dashboard"><img
                            src="/admin/images/logo-mini.svg" alt="logo" /></a>
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button"
                        data-toggle="minimize">
                        <span class="mdi mdi-sort-variant"></span>
                    </button>
                </div>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <ul class="navbar-nav mr-lg-4 w-100">
                    <li class="nav-item nav-search d-none d-lg-block w-100">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="search">
                                    <i class="mdi mdi-magnify"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" placeholder="Tìm kiếm" aria-label="search"
                                aria-describedby="search">
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item dropdown mr-1">
                        <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center"
                            id="messageDropdown" href="#" data-toggle="dropdown">
                            <i class="mdi mdi-message-text mx-0"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                            aria-labelledby="messageDropdown">
                            <div class="mb-0 font-weight-normal float-left dropdown-header"
                                style="display: flex; align-items: center;">
                                <p class="mb-0" style="margin-right: 10px; max-width: 100px;">Tin nhắn</p>
                                <span id="newOrdersCount" class="count"
                                    style="color: red; margin-top: -1rem; margin-left:-7%; order: 0;">0</span>
                                <button class="btn btn-sm btn-link float-right"
                                    style="order: 2; margin-top: 0.4%;margin-left:-4%; text-decoration: none;"
                                    id="markAsRead" disabled>Đã xem</button>

                            </div>

                            <div id="notificationArea">
                                <!-- Hiển thị các thông báo -->
                            </div>
                        </div>
                    </li>




                    <script>
                        // localStorage.clear();
                        // Kiểm tra xem có dữ liệu trong Local Storage hay không
                        let notifications = JSON.parse(localStorage.getItem('notifications')) || [];
                        if (!Array.isArray(notifications)) {
                            notifications = [];
                        }

                        // Lấy ra nút "Đã xem" theo id
                        var markAsReadButton = document.getElementById('markAsRead');

                        // Gắn sự kiện click vào nút "Đã xem"
                        markAsReadButton.addEventListener('click', function(event) {
                            event.preventDefault(); // Ngăn chặn hành động mặc định của nút

                            // Xóa dữ liệu từ localStorage
                            localStorage.clear();

                            // Cập nhật mảng notifications thành mảng rỗng
                            notifications = [];

                            // Cập nhật số lượng thông báo
                            updateNotificationCount();
                            setInterval(pollNewOrders, 5000);
                            // Hiển thị thông báo "Không có thông báo mới" trên giao diện
                            displayNotifications();
                            alertify.success('Đã xem');
                        });

                        // xóa dữ liệu localstoage khi đã seen
                        function removeNotification(index) {
                            notifications.splice(index, 1);
                            localStorage.setItem('notifications', JSON.stringify(notifications));
                            alertify.success('Xóa thành công');

                        }
                        // Hàm này được gọi để kiểm tra đơn hàng mới và hiển thị chúng
                        function pollNewOrders() {
                            $.get('/poll-new-orders', function(data) {
                                if (data && data.newOrder) {
                                    // Xử lý thông báo về đơn hàng mới ở đây
                                    const newOrder = data.newOrder;
                                    const user_name = data.user_name;
                                    const user_img = data.user_img;
                                    const orderDetailUrl = `/admin/order/orderItem/${newOrder.id}`;

                                    // Tạo một đối tượng thông báo và thêm vào mảng
                                    const notificationItem = {
                                        html: `
                                            <div class="dropdown-item">
                                                <a href="${orderDetailUrl}" class="d-flex align-items-center notification-link" data-index="${notifications.length}">
                                                    <div class="item-thumbnail">
                                                        <img src="${user_img}" alt="image" class="profile-pic">
                                                    </div>
                                                    <div class="item-content flex-grow">
                                                        <h6 class="font-weight-normal">Đơn hàng: ${newOrder.order_code}</h6>
                                                        <p class="font-weight-light small-text text-muted mb-0">Được đặt bởi: ${user_name}</p>
                                                    </div>
                                                </a>
                                                <button class="btn btn-sm btn-danger" id="gd" onclick="removeNotification(this)">Xóa</button>
                                            </div>
                                        `,
                                        orderId: newOrder.id
                                    };

                                    notifications.push(notificationItem);
                                    localStorage.setItem('notifications', JSON.stringify(notifications));
                                    updateNotificationCount();
                                    displayNotifications();

                                }
                            });

                            // Hiển thị thông báo
                            displayNotifications();
                        }

                        // Hàm này cập nhật số lượng thông báo hiển thị trên biểu tượng
                        function updateNotificationCount() {
                            const unseenNotifications = notifications.filter(notification => !notification.seen);
                            document.getElementById("newOrdersCount").textContent = unseenNotifications.length;
                        }
                        // xóa all



                        // Hàm này được gọi để hiển thị thông báo
                        function displayNotifications() {
                            const notificationsDiv = document.getElementById("notificationArea");
                            notificationsDiv.innerHTML = "";

                            for (let i = 0; i < notifications.length; i++) {
                                const notification = notifications[i];
                                // Kiểm tra xem thông báo đã được xem chưa
                                if (!notification.seen) {
                                    notificationsDiv.innerHTML += notification.html;
                                }
                            }

                            if (notificationsDiv.innerHTML === "") {
                                // Hiển thị thông báo "Không có thông báo mới" khi không còn thông báo chưa xem
                                notificationsDiv.innerHTML = "<div class='dropdown-item'>Không có thông báo mới</div>";
                                markAsReadButton.disabled = true;
                            } else {
                                // Kích hoạt nút "Đã xem" khi có thông báo chưa xem
                                markAsReadButton.disabled = false;
                            }
                            const notificationLinks = document.querySelectorAll('.notification-link');
                            for (let i = 0; i < notificationLinks.length; i++) {
                                notificationLinks[i].addEventListener('click', function(event) {
                                    event.preventDefault();
                                    const index = notificationLinks[i].getAttribute('data-index');
                                    handleNotificationClick(index);
                                });
                            }
                        }

                        function handleNotificationClick(index) {
                            const notification = notifications[index];
                            const orderDetailUrl = `/admin/order/orderItem/${notification.orderId}`;

                            notifications.splice(index, 1);
                            localStorage.setItem('notifications', JSON.stringify(notifications));
                            displayNotifications();
                            window.location.href = orderDetailUrl; // Chuyển hướng đến trang chi tiết đơn hàng
                        }

                        // Đảm bảo hiển thị thông báo ban đầu
                        displayNotifications();
                        updateNotificationCount();
                        // Tự động kiểm tra số lượng đơn hàng mới mỗi 3 giây
                        setInterval(updateNotificationCount, 1000);
                        // Tự động kiểm tra đơn hàng mới mỗi 3 giây
                        setInterval(pollNewOrders, 5000);
                    </script>





                    {{-- <script src="{{ asset('js/thongbao.js') }}"></script> --}}
                    <li class="nav-item dropdown mr-4">
                        <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center notification-dropdown"
                            id="notificationDropdown" href="#" data-toggle="dropdown">
                            <i class="mdi mdi-bell mx-0"></i>
                            <span class="count"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                            aria-labelledby="notificationDropdown">
                            <p class="mb-0 font-weight-normal float-left dropdown-header">Thông báo</p>
                            <a class="dropdown-item">
                                <div class="item-thumbnail">
                                    <div class="item-icon bg-success">
                                        <i class="mdi mdi-information mx-0"></i>
                                    </div>
                                </div>
                                <div class="item-content">
                                    <h6 class="font-weight-normal">Lỗi ứng dụng</h6>
                                    <p class="font-weight-light small-text mb-0 text-muted">
                                        Ngay bây giờ
                                    </p>
                                </div>
                            </a>
                            <a class="dropdown-item">
                                <div class="item-thumbnail">
                                    <div class="item-icon bg-warning">
                                        <i class="mdi mdi-settings mx-0"></i>
                                    </div>
                                </div>
                                <div class="item-content">
                                    <h6 class="font-weight-normal">Cài đặt</h6>
                                    <p class="font-weight-light small-text mb-0 text-muted">
                                        Tin nhắn riêng
                                    </p>
                                </div>
                            </a>
                            <a class="dropdown-item">
                                <div class="item-thumbnail">
                                    <div class="item-icon bg-info">
                                        <i class="mdi mdi-account-box mx-0"></i>
                                    </div>
                                </div>
                                <div class="item-content">
                                    <h6 class="font-weight-normal">Đăng ký người dùng mới</h6>
                                    <p class="font-weight-light small-text mb-0 text-muted">
                                        2 ngày trước
                                    </p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"
                            id="profileDropdown">
                            <img src="{{ Auth::guard('admin')->user()->image }}" alt="profile"
                                style="display:inline;" />
                            <span class="nav-profile-name">{{ Auth::guard('admin')->user()->name }}</span>

                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                            aria-labelledby="profileDropdown">
                            <a class="dropdown-item">
                                <i class="mdi mdi-settings text-primary"></i>
                                Cài đặt
                            </a>
                            <a class="dropdown-item" href="/">
                                <b><i class="bi bi-shop text-primary"></i></b>
                                Cửa hàng
                            </a>


                            <form method="POST" action="{{ route('admin.logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')" class=" dropdown-item nav-link"
                                    onclick="event.preventDefault();
                                            this.closest('form').submit(); ">
                                    <i class="mdi mdi-logout text-primary"></i>{{ __('Đăng xuất') }}
                                </x-dropdown-link>
                            </form>


                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>

        @yield('noidung')

    </div>
    <!-- container-scroller -->
    <!-- Thư viện JavaScript -->
    <script src="/admin/vendors/base/vendor.bundle.base.js"></script>
    <!-- Kết thúc chèn thư viện JavaScript -->
    <!-- Thư viện JavaScript cho trang này -->
    <script src="/admin/vendors/chart.js/Chart.min.js"></script>
    <script src="/admin/vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="/admin/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <!-- Kết thúc thư viện JavaScript cho trang này -->
    <!-- Chèn JavaScript -->
    <script src="/admin/js/off-canvas.js"></script>
    <script src="/admin/js/hoverable-collapse.js"></script>
    <script src="/admin/js/template.js"></script>
    <!-- Kết thúc chèn JavaScript -->
    <!-- JavaScript tùy chỉnh cho trang này -->
    <script src="/admin/js/dashboard.js"></script>
    <script src="/admin/js/data-table.js"></script>
    <script src="/admin/js/jquery.dataTables.js"></script>
    <script src="/admin/js/dataTables.bootstrap4.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="/admin/js/file-upload.js"></script>
    <!-- Kết thúc JavaScript tùy chỉnh cho trang này -->
</body>
<script>
    $(document).ready(function() {
        $('.delete-form').submit(function(e) {
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
                        },
                        error: function(xhr, textStatus, errorThrown) {
                            if (xhr.status === 400) {
                                var errorResponse = JSON.parse(xhr.responseText);
                                var errorMessage = errorResponse.error;
                                Swal.fire(
                                    'Lỗi!',
                                    errorMessage,
                                    'error'
                                );
                            } else {
                                Swal.fire(
                                    'Lỗi!',
                                    'Đã xảy ra lỗi.',
                                    'error'
                                );
                            }
                        }
                    });
                }
            });
        });
    });

    function markAsCompleted(contactId) {
        // Update the contact status on the server here if needed
        showNotification('success', 'Liên hệ đã hoàn tất');
    }

    function showNotification(type, message) {
        toastr.options = {
            closeButton: true,
            progressBar: true,
            showMethod: 'slideDown',
            timeOut: 3000,
        };

        if (type === 'success') {
            toastr.success(message, 'Success');
        } else if (type === 'error') {
            toastr.error(message, 'Error');
        } else {
            toastr.info(message);
        }
    }
</script>

@if (session('message'))
    <script>
        alertify.success('{{ session('message') }}');
    </script>
@endif

<script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/super-build/ckeditor.js"></script>

<script>
    CKEDITOR.ClassicEditor.create(document.getElementById("editor"), {
        // https://ckeditor.com/docs/ckeditor5/latest/features/toolbar/toolbar.html#extended-toolbar-configuration-format
        toolbar: {
            items: [
                'exportPDF', 'exportWord', '|',
                'findAndReplace', 'selectAll', '|',
                'heading', '|',
                'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript',
                'removeFormat', '|',
                'bulletedList', 'numberedList', 'todoList', '|',
                'outdent', 'indent', '|',
                'undo', 'redo',
                '-',
                'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
                'alignment', '|',
                'link', 'insertImage', 'blockQuote', 'insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed',
                '|',
                'specialCharacters', 'horizontalLine', 'pageBreak', '|',
                'textPartLanguage', '|',
                'sourceEditing'
            ],
            shouldNotGroupWhenFull: true
        },

        language: 'en',
        image: {
            toolbar: ['imageTextAlternative', '|', 'imageStyle:alignLeft', 'imageStyle:full',
                'imageStyle:alignRight'
            ],
            upload: {
                types: ['jpeg', 'jpg', 'png', 'gif'],
                url: '{{ route('upload-image') }}', // Check if this route is defined
            }
        },
        list: {
            properties: {
                styles: true,
                startIndex: true,
                reversed: true
            }
        },
        // https://ckeditor.com/docs/ckeditor5/latest/features/headings.html#configuration
        heading: {
            options: [{
                    model: 'paragraph',
                    title: 'Paragraph',
                    class: 'ck-heading_paragraph'
                },
                {
                    model: 'heading1',
                    view: 'h1',
                    title: 'Heading 1',
                    class: 'ck-heading_heading1'
                },
                {
                    model: 'heading2',
                    view: 'h2',
                    title: 'Heading 2',
                    class: 'ck-heading_heading2'
                },
                {
                    model: 'heading3',
                    view: 'h3',
                    title: 'Heading 3',
                    class: 'ck-heading_heading3'
                },
                {
                    model: 'heading4',
                    view: 'h4',
                    title: 'Heading 4',
                    class: 'ck-heading_heading4'
                },
                {
                    model: 'heading5',
                    view: 'h5',
                    title: 'Heading 5',
                    class: 'ck-heading_heading5'
                },
                {
                    model: 'heading6',
                    view: 'h6',
                    title: 'Heading 6',
                    class: 'ck-heading_heading6'
                }
            ]
        },
        // https://ckeditor.com/docs/ckeditor5/latest/features/editor-placeholder.html#using-the-editor-configuration
        placeholder: '',
        // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-family-feature
        fontFamily: {
            options: [
                'default',
                'Arial, Helvetica, sans-serif',
                'Courier New, Courier, monospace',
                'Georgia, serif',
                'Lucida Sans Unicode, Lucida Grande, sans-serif',
                'Tahoma, Geneva, sans-serif',
                'Times New Roman, Times, serif',
                'Trebuchet MS, Helvetica, sans-serif',
                'Verdana, Geneva, sans-serif'
            ],
            supportAllValues: true
        },
        // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-size-feature
        fontSize: {
            options: [10, 12, 14, 'default', 18, 20, 22],
            supportAllValues: true
        },
        // Be careful with the setting below. It instructs CKEditor to accept ALL HTML markup.
        // https://ckeditor.com/docs/ckeditor5/latest/features/general-html-support.html#enabling-all-html-features
        htmlSupport: {
            allow: [{
                name: /.*/,
                attributes: true,
                classes: true,
                styles: true
            }]
        },
        // Be careful with enabling previews
        // https://ckeditor.com/docs/ckeditor5/latest/features/html-embed.html#content-previews
        htmlEmbed: {
            showPreviews: true
        },
        // https://ckeditor.com/docs/ckeditor5/latest/features/link.html#custom-link-attributes-decorators
        link: {
            decorators: {
                addTargetToExternalLinks: true,
                defaultProtocol: 'https://',
                toggleDownloadable: {
                    mode: 'manual',
                    label: 'Downloadable',
                    attributes: {
                        download: 'file'
                    }
                }
            }
        },
        // https://ckeditor.com/docs/ckeditor5/latest/features/mentions.html#configuration
        mention: {
            feeds: [{
                marker: '@',
                feed: [
                    '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes',
                    '@chocolate', '@cookie', '@cotton', '@cream',
                    '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread',
                    '@gummi', '@ice', '@jelly-o',
                    '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding',
                    '@sesame', '@snaps', '@soufflé',
                    '@sugar', '@sweet', '@topping', '@wafer'
                ],
                minimumCharacters: 1
            }]
        },
        // The "super-build" contains more premium features that require additional configuration, disable them below.
        // Do not turn them on unless you read the documentation and know how to configure them and setup the editor.
        removePlugins: [
            // These two are commercial, but you can try them out without registering to a trial.
            // 'ExportPdf',
            // 'ExportWord',
            'AIAssistant',
            'CKBox',
            'CKFinder',
            'EasyImage',
            // This sample uses the Base64UploadAdapter to handle image uploads as it requires no configuration.
            // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/base64-upload-adapter.html
            // Storing images as Base64 is usually a very bad idea.
            // Replace it on production website with other solutions:
            // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/image-upload.html
            // 'Base64UploadAdapter',
            'RealTimeCollaborativeComments',
            'RealTimeCollaborativeTrackChanges',
            'RealTimeCollaborativeRevisionHistory',
            'PresenceList',
            'Comments',
            'TrackChanges',
            'TrackChangesData',
            'RevisionHistory',
            'Pagination',
            'WProofreader',
            // Careful, with the Mathtype plugin CKEditor will not load when loading this sample
            // from a local file system (file://) - load this site via HTTP server if you enable MathType.
            'MathType',
            // The following features are part of the Productivity Pack and require additional license.
            'SlashCommand',
            'Template',
            'DocumentOutline',
            'FormatPainter',
            'TableOfContents',
            'PasteFromOfficeEnhanced'
        ]
    });
</script>
<style>
    .read-more-state {
        display: none;
    }

    .read-more-target {
        opacity: 0;
        max-height: 0;
        font-size: 0;
        transition: .5s ease-in-out;
    }

    .read-more-state:checked~.read-more-wrap .read-more-target {
        opacity: 1;
        font-size: inherit;
        /* max-height: 999em; */
        height: auto;
    }

    .read-more-state:checked~.read-more-wrap .three-dots {
        display: none;
    }

    .read-more-state~.read-more-trigger:before {
        content: 'Hiện thêm';
    }

    .read-more-state:checked~.read-more-trigger:before {
        content: 'Ẩn bớt';
    }

    .read-more-trigger {
        cursor: pointer;
        display: inline-block;
        padding: 0 .5em;
        color: #666;
        font-size: .9em;
        line-height: 2;
        border: 1px solid #ddd;
        border-radius: .25em;
    }
</style>



</html>
