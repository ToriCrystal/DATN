<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.dashboard') }}" id="s1">
                <i class="mdi mdi-home menu-icon"></i>
                <span class="menu-title">Bảng điều khiển</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.allsp') }}" id="s3">
                <i class="bi bi-apple menu-icon"></i>
                <span class="menu-title">Quản lý sản phẩm</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.alldm') }}" id="s2">
                <i class="bi bi-bookmarks menu-icon"></i>
                <span class="menu-title">Quản lý danh mục sản phẩm</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.allorder') }}" id="s4">
                <i class="bi bi-archive menu-icon"></i>
                <span class="menu-title">Quản lý đơn hàng</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.allus') }}" id="s5">
                <i class="bi bi-person-gear menu-icon"></i>
                <span class="menu-title">Quản lý người dùng</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.newsCategory') }}" id="s6">
                <i class="bi bi-body-text menu-icon"></i>
                <span class="menu-title">Quản lý danh mục
                    tin tức</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.news') }}" id="s7">
                <i class="bi bi-body-text menu-icon"></i>
                <span class="menu-title">Quản lý tin tức</span>
            </a>
        </li>


        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.allvoucher') }}" id="s8">
                <i class="bi bi-archive menu-icon"></i>
                <span class="menu-title">Quản lý mã giảm giá</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.review') }}" id="s10">
                <i class="mdi mdi-account menu-icon"></i>
                <span class="menu-title">Quản lý đánh giá sản phẩm</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.allblpost') }}" id="s11">
                <i class="bi bi-chat-dots menu-icon"></i>
                <span class="menu-title">Quản lý bình luận bài viết</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.alltg') }}" id="s12">
                <i class="bi bi-person-bounding-box menu-icon"></i>
                <span class="menu-title">Quản lý tác giả</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.event') }}" id="s13">
                <i class="bi bi-calendar4-event menu-icon"></i>
                <span class="menu-title">Quản lý sự kiện</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.statistics') }}" id="s14">
                <i class="mdi mdi-chart-pie menu-icon"></i>
                <span class="menu-title">Thống kê</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.contact') }}" id="s15">
                <i class="mdi mdi-account menu-icon"></i>
                <span class="menu-title">Liên hệ</span>
            </a>
        </li>
    </ul>
</nav>
<script>
    // Lấy danh sách tất cả các liên kết trong thanh điều hướng
    var navLinks = document.querySelectorAll(".nav-link");

    // Lấy URL hiện tại
    var currentURL = window.location.href;

    // Lặp qua danh sách các liên kết và kiểm tra xem liên kết nào phải được đánh dấu là "active"
    for (var i = 0; i < navLinks.length; i++) {
        var link = navLinks[i];
        var linkURL = link.getAttribute("href");

        // So sánh URL hiện tại với URL của liên kết, bắt đầu từ đầu URL và không quan tâm đến các tham số
        if (currentURL.startsWith(linkURL)) {
            link.classList.add("active");
        } else {
            link.classList.remove("active");
        }
    }
</script>
