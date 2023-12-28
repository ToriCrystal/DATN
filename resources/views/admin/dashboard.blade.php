<script src="/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="/vendors/chart.js/Chart.min.js"></script>
<script src="/vendors/datatables.net/jquery.dataTables.js"></script>
<script src="/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
<script src="/js/chart/dataTables.select.min.js"></script>

<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="/js/chart/off-canvas.js"></script>
<script src="/js/chart/hoverable-collapse.js"></script>
<script src="/js/chart/template.js"></script>
<script src="/js/chart/settings.js"></script>
<script src="/js/chart/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->

@extends('layouts.layoutAD')

@section('title')
Admin
@endsection


@section('noidung')
{{-- <link rel="stylesheet" href="/css/vertical-layout-light/style.css">
<link rel="stylesheet" href="/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
<link rel="stylesheet" href="/vendors/ti-icons/css/themify-icons.css">
<link rel="stylesheet" type="text/css" href="/js/chart/select.dataTables.min.css">

<!-- plugins:css -->
<link rel="stylesheet" href="/vendors/feather/feather.css">
<link rel="stylesheet" href="/vendors/ti-icons/css/themify-icons.css">
<link rel="stylesheet" href="/vendors/css/vendor.bundle.base.css"> --}}
<!-- endinject -->
<!-- Plugin css for this page -->

<!-- End plugin css for this page -->
<!-- inject:css -->
<!-- endinject -->
<!-- <link rel="shortcut icon" href="images/favicon.png" /> -->

<style type="text/css">
    tspan {
        /* display: none; */
    }

    .input-time {
        border: none;
        position: relative;
        top: 10px;
        right: 10px;
    }

    .apexcharts-legend {
        display: flex;
        overflow: auto;
        padding: 0 10px;
    }

    .apexcharts-legend.position-bottom,
    .apexcharts-legend.position-top {
        flex-wrap: wrap
    }

    .apexcharts-legend.position-right,
    .apexcharts-legend.position-left {
        flex-direction: column;
        bottom: 0;
    }

    .apexcharts-legend.position-bottom.left,
    .apexcharts-legend.position-top.left,
    .apexcharts-legend.position-right,
    .apexcharts-legend.position-left {
        justify-content: flex-start;
    }

    .apexcharts-legend.position-bottom.center,
    .apexcharts-legend.position-top.center {
        justify-content: center;
    }

    .apexcharts-legend.position-bottom.right,
    .apexcharts-legend.position-top.right {
        justify-content: flex-end;
    }

    .apexcharts-legend-series {
        cursor: pointer;
    }

    .apexcharts-legend.position-bottom .apexcharts-legend-series,
    .apexcharts-legend.position-top .apexcharts-legend-series {
        display: flex;
        align-items: center;
    }

    .apexcharts-legend-text {
        position: relative;
        font-size: 14px;
    }

    .apexcharts-legend-marker {
        position: relative;
        display: inline-block;
        cursor: pointer;
        margin-right: 3px;
    }

    .apexcharts-legend.right .apexcharts-legend-series,
    .apexcharts-legend.left .apexcharts-legend-series {
        display: inline-block;
    }

    .apexcharts-legend-series.no-click {
        cursor: auto;
    }

    .apexcharts-legend .apexcharts-hidden-zero-series {
        display: none !important;
    }

    .inactive-legend {
        opacity: 0.45;
    }

    #custom-inp-top {
        background-color: white;
        color: #333;
        width: 200px;
        height: 40px;
        border: 1px solid #ccc;
        cursor: pointer;
        font-family: Arial, sans-serif;
        transition: background-color 0.3s;
    }

    #custom-inp-top:hover {
        background-color: white;
    }

    #custom-inp-top option {
        color: #333;
        background-color: white;
    }

    form {
        display: flex;
        justify-content: space-around;
        align-items: center;
    }

    input[type="date"] {
        width: 150px;
        height: 30px;
        border-radius: 5px;
        background-color: #f2f2f2;
        color: #333;
        border: 1px solid #ccc;
        font-family: Arial, sans-serif;
        transition: background-color 0.3s;
    }

    input[type="date"]:hover {
        background-color: #e6e6e6;
    }

    input[type="date"]::before {
        content: "\1F4C5";
        margin-right: 5px;

    }
</style>
<!-- phần giao diện -->
<div class="container-fluid page-body-wrapper">
    <!-- sidebar -->
    @include('layouts.menuAD')
    <style>
.sidebar .nav .nav-item.active > .nav-link i, .sidebar .nav .nav-item.active > .nav-link .menu-title, .sidebar .nav .nav-item.active > .nav-link .menu-arrow {
    color: white ;
}

      </style>
    <!-- phần giao diện chính -->
    <div class="main-panel">
        <div class="content-wrapper">
            <!-- hàng 1 -->
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="d-flex justify-content-between flex-wrap">
                        <div class="d-flex align-items-end flex-wrap">
                            <div class="mr-md-3 mr-xl-5">
                                <h2>Xin chào
                                    <?php
                                    $name = Auth::guard('admin')->user()->name;
                                    $lastWord = strrchr($name, ' ');
                                    if ($lastWord !== false) {
                                        $lastWord = trim($lastWord);
                                    } else {
                                        $lastWord = $name;
                                    }
                                    echo $lastWord;
                                    ?>!</h2>
                                <p class="mb-md-0">Chúc {{ $lastWord }} có một ngày tràn đầy năng lượng!</p>
                            </div>
                            <div class="d-flex">
                                <i class="mdi mdi-home text-muted hover-cursor"></i>
                                <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Bảng điều khiển&nbsp;/&nbsp;</p>
                                <p class="text-primary mb-0 hover-cursor">Phân tích số liệu</p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-end flex-wrap">
                            <form action="{{ route('admin.dashboard') }}" method="GET">
                                @csrf
                                <input class="bg-white input-time" type="date" name="currentTime" placeholder="Chọn thời gian" onchange="this.form.submit()" value="{{ $currentTime ?? today()->format('Y-m-d') }}">
                            </form>
                            <button type="button" class="btn btn-light bg-white btn-icon mr-3 d-none d-md-block ">
                                <i class="mdi mdi-download text-muted"></i>
                            </button>
                            <button type="button" class="btn btn-light bg-white btn-icon mr-3 mt-2 mt-xl-0">
                                <i class="mdi mdi-clock-outline text-muted"></i>
                            </button>
                            <button type="button" class="btn btn-light bg-white btn-icon mr-3 mt-2 mt-xl-0">
                                <i class="mdi mdi-plus text-muted"></i>
                            </button>
                            <button class="btn btn-primary mt-2 mt-xl-0">Tải báo cáo</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- hàng 2 -->
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body dashboard-tabs p-0">
                            <ul class="nav nav-tabs px-4" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Tổng quan</a>
                                </li>
                            </ul>
                            <div class="tab-content py-0 px-0">
                                <!-- tab tổng quan -->
                                <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                                    <div class="d-flex flex-wrap justify-content-xl-between">
                                        <!-- Thống kê tổng user -->
                                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                            <!-- <i class="bi bi-person-fill mr-3 icon-lg text-success"></i> -->
                                            <div class="d-flex flex-column justify-content-around">
                                                <small class="mb-1 text-muted">Chờ xác nhận</small>
                                                <h5 class="mr-2 mb-0">{{ $pending }}</h5>
                                            </div>
                                        </div>

                                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                            <!-- <i class="bi bi-person-fill mr-3 icon-lg text-success"></i> -->
                                            <div class="d-flex flex-column justify-content-around">
                                                <small class="mb-1 text-muted">Chờ lấy hàng</small>
                                                <h5 class="mr-2 mb-0">{{ $shipping }}</h5>
                                            </div>
                                        </div>

                                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                            <!-- <i class="bi bi-person-fill mr-3 icon-lg text-success"></i> -->
                                            <div class="d-flex flex-column justify-content-around">
                                                <small class="mb-1 text-muted">Đã xử lý</small>
                                                <h5 class="mr-2 mb-0">{{ $done }}</h5>
                                            </div>
                                        </div>

                                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                            <!-- <i class="bi bi-person-fill mr-3 icon-lg text-success"></i> -->
                                            <div class="d-flex flex-column justify-content-around">
                                                <small class="mb-1 text-muted">Đơn hủy</small>
                                                <h5 class="mr-2 mb-0">{{ $cancel }}</h5>
                                            </div>
                                        </div>

                                        <!-- Thống kê tổng đơn hàng -->
                                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                            <!-- <i class="bi bi-basket-fill mr-3 icon-lg text-danger"></i> -->
                                            <div class="d-flex flex-column justify-content-around">
                                                <small class="mb-1 text-muted">Tổng đơn hàng</small>
                                                <h5 class="mr-2 mb-0">{{ $tong_order }}</h5>
                                            </div>
                                        </div>
                                        <!-- Thống kê tổng lượt xem -->
                                        <div class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                            <!-- <i class="fas fa-times-circle mr-3 icon-lg text-danger"></i> -->
                                            <div class="d-flex flex-column justify-content-around">
                                                <small class="mb-1 text-muted">Sản phẩm hết hàng</small>
                                                <h5 class="mr-2 mb-0">{{ $tong_remaining }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title">Biểu đồ chi tiết đơn hàng</p>
                            <p class="font-weight-500">Tổng số phiên trong phạm vi ngày. Đó là khoảng thời gian người dùng mua hàng trên web của bạn, với doanh số và doanh thu được hiển thị bên dưới biểu đồ ...</p>
                            <div class="d-flex flex-wrap mb-5">

                            </div>
                            <canvas id="order-chart"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <p class="card-title">Doanh thu đơn hàng</p>
                            </div>
                            <p class="font-weight-500">Tổng số phiên trong phạm vi ngày. Đó là khoảng thời gian người dùng mua hàng trên web của bạn, với doanh số và doanh thu được hiển thị bên dưới biểu đồ ...</p>
                            <div id="sales-legend" class="chartjs-legend mt-4 mb-2"></div>
                            <canvas id="sales-chart"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card position-relative">
                        <div class="card-body">
                            <div id="detailedReports" class="carousel slide detailed-report-carousel position-static pt-2" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="row">
                                            <div class="col-md-12 col-xl-3 d-flex flex-column justify-content-start">
                                                <div class="ml-xl-4 mt-3">
                                                    <p class="card-title">Báo cáo chi tiết đơn hàng</p>
                                                    <h3 class="text-primary">{{ number_format($total_revenue, 0, ".", " ") }} VNĐ</h3>
                                                    <h5 class="font-weight-500 mb-xl-4 text-primary">Doanh thu dựa trên tổng các đơn hàng</h5>
                                                    <p class="mb-2 mb-xl-0">Tổng số phiên trong phạm vi ngày. Đó là khoảng thời gian người dùng mua hàng trên web của bạn, với doanh số và doanh thu được hiển thị bên dưới biểu đồ ...</p>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-xl-9">
                                                <div class="row">
                                                    <div class="col-md-6 border-right">
                                                        <div class="table-responsive mb-3 mb-md-0 mt-3">
                                                            <table class="table table-borderless report-table">
                                                                <tr>
                                                                    @php
                                                                    $width_tong = ($tong_order != 0) ? ($tong_order / $tong_order) * 100 : 0;

                                                                    $width_done = ($done != 0) ? ($done / $tong_order) * 100 : 0;

                                                                    $width_pending = ($pending != 0) ? ($pending / $tong_order) * 100 : 0;

                                                                    $width_processing = ($shipping != 0) ? ($shipping / $tong_order) * 100 : 0;

                                                                    $width_cancel = ($cancel != 0) ? ($cancel / $tong_order) * 100 : 0;

                                                                    @endphp
                                                                    <td class="text-muted">Tổng đơn</td>
                                                                    <td class="w-100 px-0">
                                                                        <div class="progress progress-md mx-4">
                                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: {{$width_tong}}%" aria-valuenow="{{$width_tong}}" aria-valuemin="0" aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <h5 class="font-weight-bold mb-0">{{ $tong_order }}</h5>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-muted">Đơn đã hoàn thành</td>
                                                                    <td class="w-100 px-0">
                                                                        <div class="progress progress-md mx-4">
                                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: {{ $width_done }}%" aria-valuenow="{{ $width_done }}" aria-valuemin="0" aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <h5 class="font-weight-bold mb-0">{{ $done }}</h5>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-muted">Đơn chưa xác nhận</td>
                                                                    <td class="w-100 px-0">
                                                                        <div class="progress progress-md mx-4">
                                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: {{ $width_pending }}%" aria-valuenow="{{ $width_pending }}" aria-valuemin="0" aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <h5 class="font-weight-bold mb-0">{{ $pending }}</h5>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-muted">Đơn đang xử lý</td>
                                                                    <td class="w-100 px-0">
                                                                        <div class="progress progress-md mx-4">
                                                                            <div class="progress-bar bg-info" role="progressbar" style="width: {{ $width_processing }}%" aria-valuenow="{{ $width_processing }}" aria-valuemin="0" aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <h5 class="font-weight-bold mb-0">{{ $shipping }}</h5>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-muted">Đơn bị hủy</td>
                                                                    <td class="w-100 px-0">
                                                                        <div class="progress progress-md mx-4">
                                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: {{ $width_cancel }}%" aria-valuenow="{{ $width_cancel }}" aria-valuemin="0" aria-valuemax="100"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <h5 class="font-weight-bold mb-0">{{ $cancel }}</h5>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <div class="col-md-12 col-xl-9 d-flex flex-column justify-content-start">
                                                            <p class="card-title">Phương thức thanh toán</p>
                                                        </div>
                                                    <canvas id="north-america-chart"></canvas>
                                                        <div id="north-america-legend"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main -->

        <!-- phần footer -->
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Bản quyền © 2023 <a href="https://www.urbanui.com/" target="_blank">VietNam</a>. Tất cả quyền được bảo lưu.</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"><i class="mdi mdi-heart text-danger"></i></span>
            </div>
        </footer>
        <!-- phần footer -->
    </div>
</div>

<script>
    (function($) {
        'use strict';
        $(function() {
            if ($("#order-chart").length) {
                var areaData = {
                    labels: ["00:00", "", "", "03:00", "", "", "06:00", "", "", "09:00", "", "", "12:00", "", "", "15:00", "", "", "18:00", "", "", "21:00", "", ""],
                    datasets: [{
                            data: @json($jsonOrder['sum_product']),
                            borderColor: [
                                '#98BDFF'
                            ],
                            borderWidth: 2,
                            fill: false,
                            label: "Tổng đơn"
                        },
                        {
                            data: @json($jsonOrder['sum_done']),
                            borderColor: [
                                '#4B49AC'
                            ],
                            borderWidth: 2,
                            fill: false,
                            label: "Đơn thành công"
                        }
                    ]
                };
                var areaOptions = {
                    responsive: true,
                    maintainAspectRatio: true,
                    plugins: {
                        filler: {
                            propagate: false
                        }
                    },
                    scales: {
                        xAxes: [{
                            display: true,
                            ticks: {
                                display: true,
                                padding: 10,
                                fontColor: "#6C7383"
                            },
                            gridLines: {
                                display: false,
                                drawBorder: false,
                                color: 'transparent',
                                zeroLineColor: '#eeeeee'
                            }
                        }],
                        yAxes: [{
                            display: true,
                            ticks: {
                                display: true,
                                autoSkip: false,
                                maxRotation: 0,
                                stepSize: @json($jsonOrder['step']),
                                min: @json($jsonOrder['min']),
                                max: @json($jsonOrder['max']),
                                padding: 18,
                                fontColor: "#6C7383"
                            },
                            gridLines: {
                                display: true,
                                color: "#f2f2f2",
                                drawBorder: false
                            }
                        }]
                    },
                    legend: {
                        display: false
                    },
                    tooltips: {
                        enabled: true
                    },
                    elements: {
                        line: {
                            tension: .35
                        },
                        point: {
                            radius: 0
                        }
                    }
                }
                var revenueChartCanvas = $("#order-chart").get(0).getContext("2d");
                var revenueChart = new Chart(revenueChartCanvas, {
                    type: 'line',
                    data: areaData,
                    options: areaOptions
                });
            }
            if ($("#order-chart-dark").length) {
                var areaData = {
                    labels: ["00:00", "", "", "03:00", "", "", "06:00", "", "", "09:00", "", "", "12:00", "", "", "15:00", "", "", "18:00"],
                    datasets: [{
                            data: [200, 480, 700, 600, 620, 350, 380, 350, 850, "600", "650", "350", "590", "350", "620", "500", "990", "780", "650"],
                            borderColor: [
                                '#4747A1'
                            ],
                            borderWidth: 2,
                            fill: false,
                            label: "Orders"
                        },
                        {
                            data: [400, 450, 410, 500, 480, 600, 450, 550, 460, "560", "450", "700", "450", "640", "550", "650", "400", "850", "800"],
                            borderColor: [
                                '#F09397'
                            ],
                            borderWidth: 2,
                            fill: false,
                            label: "Downloads"
                        }
                    ]
                };
                var areaOptions = {
                    responsive: true,
                    maintainAspectRatio: true,
                    plugins: {
                        filler: {
                            propagate: false
                        }
                    },
                    scales: {
                        xAxes: [{
                            display: true,
                            ticks: {
                                display: true,
                                padding: 10,
                                fontColor: "#fff"
                            },
                            gridLines: {
                                display: false,
                                drawBorder: false,
                                color: 'transparent',
                                zeroLineColor: '#575757'
                            }
                        }],
                        yAxes: [{
                            display: true,
                            ticks: {
                                display: true,
                                autoSkip: false,
                                maxRotation: 0,
                                stepSize: 200,
                                min: 200,
                                max: 1200,
                                padding: 18,
                                fontColor: "#fff"
                            },
                            gridLines: {
                                display: true,
                                color: "#575757",
                                drawBorder: false
                            }
                        }]
                    },
                    legend: {
                        display: false
                    },
                    tooltips: {
                        enabled: true
                    },
                    elements: {
                        line: {
                            tension: .35
                        },
                        point: {
                            radius: 0
                        }
                    }
                }
                var revenueChartCanvas = $("#order-chart-dark").get(0).getContext("2d");
                var revenueChart = new Chart(revenueChartCanvas, {
                    type: 'line',
                    data: areaData,
                    options: areaOptions
                });
            }
            if ($("#sales-chart").length) {
                var SalesChartCanvas = $("#sales-chart").get(0).getContext("2d");
                var SalesChart = new Chart(SalesChartCanvas, {
                    type: 'bar',
                    data: {
                        labels: ["00:00", "04:00", "9:00", "14:00", "19:00"],
                        datasets: [{
                                label: 'Tổng doanh thu tất cả đơn',
                                data: @json($jsonDoanhthu['sum_dtAll']),
                                backgroundColor: '#98BDFF'
                            },
                            {
                                label: 'Tổng doanh thu đơn hàng thành công',
                                data: @json($jsonDoanhthu['sum_dtDone']),
                                backgroundColor: '#4B49AC'
                            }
                        ]
                    },
                    options: {
                        cornerRadius: 5,
                        responsive: true,
                        maintainAspectRatio: true,
                        layout: {
                            padding: {
                                left: 0,
                                right: 0,
                                top: 20,
                                bottom: 0
                            }
                        },
                        scales: {
                            yAxes: [{
                                display: true,
                                gridLines: {
                                    display: true,
                                    drawBorder: false,
                                    color: "#F2F2F2"
                                },
                                ticks: {
                                    display: true,
                                    min: 0,
                                    max: @json($jsonDoanhthu['max']),
                                    callback: function(value, index, values) {
                                        return value.toLocaleString() + ' VNĐ';
                                    },
                                    autoSkip: true,
                                    maxTicksLimit: 8,
                                    fontColor: "#6C7383"
                                }
                            }],
                            xAxes: [{
                                stacked: false,
                                ticks: {
                                    beginAtZero: true,
                                    fontColor: "#6C7383"
                                },
                                gridLines: {
                                    color: "rgba(0, 0, 0, 0)",
                                    display: false
                                },
                                barPercentage: 1
                            }]
                        },
                        legend: {
                            display: false
                        },
                        elements: {
                            point: {
                                radius: 0
                            }
                        }
                    },
                });
                document.getElementById('sales-legend').innerHTML = SalesChart.generateLegend();
            }
            if ($("#sales-chart-dark").length) {
                var SalesChartCanvas = $("#sales-chart-dark").get(0).getContext("2d");
                var SalesChart = new Chart(SalesChartCanvas, {
                    type: 'bar',
                    data: {
                        labels: ["Jan", "Feb", "Mar", "Apr", "May"],
                        datasets: [{
                                label: 'Offline Sales',
                                data: [480, 230, 470, 210, 330],
                                backgroundColor: '#98BDFF'
                            },
                            {
                                label: 'Online Sales',
                                data: [400, 340, 550, 480, 170],
                                backgroundColor: '#4B49AC'
                            }
                        ]
                    },
                    options: {
                        cornerRadius: 5,
                        responsive: true,
                        maintainAspectRatio: true,
                        layout: {
                            padding: {
                                left: 0,
                                right: 0,
                                top: 20,
                                bottom: 0
                            }
                        },
                        scales: {
                            yAxes: [{
                                display: true,
                                gridLines: {
                                    display: true,
                                    drawBorder: false,
                                    color: "#575757"
                                },
                                ticks: {
                                    display: true,
                                    min: 0,
                                    max: 500,
                                    callback: function(value, index, values) {
                                        return value + '$';
                                    },
                                    autoSkip: true,
                                    maxTicksLimit: 10,
                                    fontColor: "#F0F0F0"
                                }
                            }],
                            xAxes: [{
                                stacked: false,
                                ticks: {
                                    beginAtZero: true,
                                    fontColor: "#F0F0F0"
                                },
                                gridLines: {
                                    color: "#575757",
                                    display: false
                                },
                                barPercentage: 1
                            }]
                        },
                        legend: {
                            display: false
                        },
                        elements: {
                            point: {
                                radius: 0
                            }
                        }
                    },
                });
                document.getElementById('sales-legend').innerHTML = SalesChart.generateLegend();
            }
            if ($("#north-america-chart").length) {
                var areaData = {
                    labels: ["Chuyển khoản", "Trực tuyến", "Cod"],
                    datasets: [{
                        data: [@json($type_payment['qr_code']), @json($type_payment['tt_online']), @json($type_payment['tt_cod'])],
                        backgroundColor: [
                            "#4B49AC", "#FFC100", "#248AFD",
                        ],
                        borderColor: "rgba(0,0,0,0)"
                    }]
                };
                var areaOptions = {
                    responsive: true,
                    maintainAspectRatio: true,
                    segmentShowStroke: false,
                    cutoutPercentage: 78,
                    elements: {
                        arc: {
                            borderWidth: 4
                        }
                    },
                    legend: {
                        display: false
                    },
                    tooltips: {
                        enabled: true
                    },
                    legendCallback: function(chart) {
                        var text = [];
                        text.push('<div class="report-chart">');
                        text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[0] + '"></div><p class="mb-0">Thanh toán chuyển khoản</p></div>');
                        text.push('<p class="mb-0">{{ $type_payment['qr_code'] }}</p>');
                        text.push('</div>');
                        text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[1] + '"></div><p class="mb-0">Thanh toán trực tuyến</p></div>');
                        text.push('<p class="mb-0">{{ $type_payment['tt_online'] }}</p>');
                        text.push('</div>');
                        text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[2] + '"></div><p class="mb-0">Thanh toán khi nhận hàng</p></div>');
                        text.push('<p class="mb-0">{{ $type_payment['tt_cod'] }}</p>');
                        text.push('</div>');
                        text.push('</div>');
                        return text.join("");
                    },
                }
                var northAmericaChartPlugins = {
                    beforeDraw: function(chart) {
                        var width = chart.chart.width,
                            height = chart.chart.height,
                            ctx = chart.chart.ctx;

                        ctx.restore();
                        var fontSize = 3.125;
                        ctx.font = "500 " + fontSize + "em sans-serif";
                        ctx.textBaseline = "middle";
                        ctx.fillStyle = "#13381B";

                        var text = @json($type_payment['percent']),
                            textX = Math.round((width - ctx.measureText(text).width) / 2),
                            textY = height / 2;

                        ctx.fillText(text, textX, textY);
                        ctx.save();
                    }
                }
                var northAmericaChartCanvas = $("#north-america-chart").get(0).getContext("2d");
                var northAmericaChart = new Chart(northAmericaChartCanvas, {
                    type: 'doughnut',
                    data: areaData,
                    options: areaOptions,
                    plugins: northAmericaChartPlugins
                });
                document.getElementById('north-america-legend').innerHTML = northAmericaChart.generateLegend();
            }
            if ($("#north-america-chart-dark").length) {
                var areaData = {
                    labels: ["Jan", "Feb", "Mar"],
                    datasets: [{
                        data: [100, 50, 50],
                        backgroundColor: [
                            "#4B49AC", "#FFC100", "#248AFD",
                        ],
                        borderColor: "rgba(0,0,0,0)"
                    }]
                };
                var areaOptions = {
                    responsive: true,
                    maintainAspectRatio: true,
                    segmentShowStroke: false,
                    cutoutPercentage: 78,
                    elements: {
                        arc: {
                            borderWidth: 4
                        }
                    },
                    legend: {
                        display: false
                    },
                    tooltips: {
                        enabled: true
                    },
                    legendCallback: function(chart) {
                        var text = [];
                        text.push('<div class="report-chart">');
                        text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[0] + '"></div><p class="mb-0">Thanh toán chuyển khoản</p></div>');
                        text.push('<p class="mb-0">88333</p>');
                        text.push('</div>');
                        text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[1] + '"></div><p class="mb-0">Thanh toán trực tuyến</p></div>');
                        text.push('<p class="mb-0">66093</p>');
                        text.push('</div>');
                        text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[2] + '"></div><p class="mb-0">Thanh toán khi nhận hàng</p></div>');
                        text.push('<p class="mb-0">39836</p>');
                        text.push('</div>');
                        text.push('</div>');
                        return text.join("");
                    },
                }
                var northAmericaChartPlugins = {
                    beforeDraw: function(chart) {
                        var width = chart.chart.width,
                            height = chart.chart.height,
                            ctx = chart.chart.ctx;

                        ctx.restore();
                        var fontSize = 3.125;
                        ctx.font = "500 " + fontSize + "em sans-serif";
                        ctx.textBaseline = "middle";
                        ctx.fillStyle = "#fff";

                        var text = "90",
                            textX = Math.round((width - ctx.measureText(text).width) / 2),
                            textY = height / 2;

                        ctx.fillText(text, textX, textY);
                        ctx.save();
                    }
                }
                var northAmericaChartCanvas = $("#north-america-chart-dark").get(0).getContext("2d");
                var northAmericaChart = new Chart(northAmericaChartCanvas, {
                    type: 'doughnut',
                    data: areaData,
                    options: areaOptions,
                    plugins: northAmericaChartPlugins
                });
                document.getElementById('north-america-legend').innerHTML = northAmericaChart.generateLegend();
            }
            if ($("#south-america-chart").length) {
                var areaData = {
                    labels: ["Jan", "Feb", "Mar"],
                    datasets: [{
                        data: [60, 70, 70],
                        backgroundColor: [
                            "#4B49AC", "#FFC100", "#248AFD",
                        ],
                        borderColor: "rgba(0,0,0,0)"
                    }]
                };
                var areaOptions = {
                    responsive: true,
                    maintainAspectRatio: true,
                    segmentShowStroke: false,
                    cutoutPercentage: 78,
                    elements: {
                        arc: {
                            borderWidth: 4
                        }
                    },
                    legend: {
                        display: false
                    },
                    tooltips: {
                        enabled: true
                    },
                    legendCallback: function(chart) {
                        var text = [];
                        text.push('<div class="report-chart">');
                        text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[0] + '"></div><p class="mb-0">Thanh toán chuyển khoản</p></div>');
                        text.push('<p class="mb-0">495343</p>');
                        text.push('</div>');
                        text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[1] + '"></div><p class="mb-0">Online sales</p></div>');
                        text.push('<p class="mb-0">630983</p>');
                        text.push('</div>');
                        text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[2] + '"></div><p class="mb-0">Returns</p></div>');
                        text.push('<p class="mb-0">290831</p>');
                        text.push('</div>');
                        text.push('</div>');
                        return text.join("");
                    },
                }
                var southAmericaChartPlugins = {
                    beforeDraw: function(chart) {
                        var width = chart.chart.width,
                            height = chart.chart.height,
                            ctx = chart.chart.ctx;

                        ctx.restore();
                        var fontSize = 3.125;
                        ctx.font = "600 " + fontSize + "em sans-serif";
                        ctx.textBaseline = "middle";
                        ctx.fillStyle = "#000";

                        var text = "76",
                            textX = Math.round((width - ctx.measureText(text).width) / 2),
                            textY = height / 2;

                        ctx.fillText(text, textX, textY);
                        ctx.save();
                    }
                }
                var southAmericaChartCanvas = $("#south-america-chart").get(0).getContext("2d");
                var southAmericaChart = new Chart(southAmericaChartCanvas, {
                    type: 'doughnut',
                    data: areaData,
                    options: areaOptions,
                    plugins: southAmericaChartPlugins
                });
                document.getElementById('south-america-legend').innerHTML = southAmericaChart.generateLegend();
            }
            if ($("#south-america-chart-dark").length) {
                var areaData = {
                    labels: ["Jan", "Feb", "Mar"],
                    datasets: [{
                        data: [60, 70, 70],
                        backgroundColor: [
                            "#4B49AC", "#FFC100", "#248AFD",
                        ],
                        borderColor: "rgba(0,0,0,0)"
                    }]
                };
                var areaOptions = {
                    responsive: true,
                    maintainAspectRatio: true,
                    segmentShowStroke: false,
                    cutoutPercentage: 78,
                    elements: {
                        arc: {
                            borderWidth: 4
                        }
                    },
                    legend: {
                        display: false
                    },
                    tooltips: {
                        enabled: true
                    },
                    legendCallback: function(chart) {
                        var text = [];
                        text.push('<div class="report-chart">');
                        text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[0] + '"></div><p class="mb-0">Thanh toán chuyển khoản</p></div>');
                        text.push('<p class="mb-0">495343</p>');
                        text.push('</div>');
                        text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[1] + '"></div><p class="mb-0">Thanh toán trực tuyến</p></div>');
                        text.push('<p class="mb-0">630983</p>');
                        text.push('</div>');
                        text.push('<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3"><div class="d-flex align-items-center"><div class="mr-3" style="width:20px; height:20px; border-radius: 50%; background-color: ' + chart.data.datasets[0].backgroundColor[2] + '"></div><p class="mb-0">Thanh toán khi nhận hàng</p></div>');
                        text.push('<p class="mb-0">290831</p>');
                        text.push('</div>');
                        text.push('</div>');
                        return text.join("");
                    },
                }
                var southAmericaChartPlugins = {
                    beforeDraw: function(chart) {
                        var width = chart.chart.width,
                            height = chart.chart.height,
                            ctx = chart.chart.ctx;

                        ctx.restore();
                        var fontSize = 3.125;
                        ctx.font = "600 " + fontSize + "em sans-serif";
                        ctx.textBaseline = "middle";
                        ctx.fillStyle = "#fff";

                        var text = "76",
                            textX = Math.round((width - ctx.measureText(text).width) / 2),
                            textY = height / 2;

                        ctx.fillText(text, textX, textY);
                        ctx.save();
                    }
                }
                var southAmericaChartCanvas = $("#south-america-chart-dark").get(0).getContext("2d");
                var southAmericaChart = new Chart(southAmericaChartCanvas, {
                    type: 'doughnut',
                    data: areaData,
                    options: areaOptions,
                    plugins: southAmericaChartPlugins
                });
                document.getElementById('south-america-legend').innerHTML = southAmericaChart.generateLegend();
            }
            function format(d) {
                // `d` is the original data object for the row
                return '<table cellpadding="5" cellspacing="0" border="0" style="width:100%;">' +
                    '<tr class="expanded-row">' +
                    '<td colspan="8" class="row-bg"><div><div class="d-flex justify-content-between"><div class="cell-hilighted"><div class="d-flex mb-2"><div class="mr-2 min-width-cell"><p>Policy start date</p><h6>25/04/2020</h6></div><div class="min-width-cell"><p>Policy end date</p><h6>24/04/2021</h6></div></div><div class="d-flex"><div class="mr-2 min-width-cell"><p>Sum insured</p><h5>$26,000</h5></div><div class="min-width-cell"><p>Premium</p><h5>$1200</h5></div></div></div><div class="expanded-table-normal-cell"><div class="mr-2 mb-4"><p>Quote no.</p><h6>Incs234</h6></div><div class="mr-2"><p>Vehicle Reg. No.</p><h6>KL-65-A-7004</h6></div></div><div class="expanded-table-normal-cell"><div class="mr-2 mb-4"><p>Policy number</p><h6>Incsq123456</h6></div><div class="mr-2"><p>Policy number</p><h6>Incsq123456</h6></div></div><div class="expanded-table-normal-cell"><div class="mr-2 mb-3 d-flex"><div class="highlighted-alpha"> A</div><div><p>Agent / Broker</p><h6>Abcd Enterprices</h6></div></div><div class="mr-2 d-flex"> <img src="../../images/faces/face5.jpg" alt="profile"/><div><p>Policy holder Name & ID Number</p><h6>Phillip Harris / 1234567</h6></div></div></div><div class="expanded-table-normal-cell"><div class="mr-2 mb-4"><p>Branch</p><h6>Koramangala, Bangalore</h6></div></div><div class="expanded-table-normal-cell"><div class="mr-2 mb-4"><p>Channel</p><h6>Online</h6></div></div></div></div></td>'
                '</tr>' +
                '</table>';
            }
            var table = $('#example').DataTable({
                "ajax": "js/data.txt",
                "columns": [{
                        "data": "Quote"
                    },
                    {
                        "data": "Product"
                    },
                    {
                        "data": "Business"
                    },
                    {
                        "data": "Policy"
                    },
                    {
                        "data": "Premium"
                    },
                    {
                        "data": "Status"
                    },
                    {
                        "data": "Updated"
                    },
                    {
                        "className": 'details-control',
                        "orderable": false,
                        "data": null,
                        "defaultContent": ''
                    }
                ],
                "order": [
                    [1, 'asc']
                ],
                "paging": false,
                "ordering": true,
                "info": false,
                "filter": false,
                columnDefs: [{
                    orderable: false,
                    className: 'select-checkbox',
                    targets: 0
                }],
                select: {
                    style: 'os',
                    selector: 'td:first-child'
                }
            });
            $('#example tbody').on('click', 'td.details-control', function() {
                var tr = $(this).closest('tr');
                var row = table.row(tr);

                if (row.child.isShown()) {
                    // This row is already open - close it
                    row.child.hide();
                    tr.removeClass('shown');
                } else {
                    // Open this row
                    row.child(format(row.data())).show();
                    tr.addClass('shown');
                }
            });

        });
    })(jQuery);
</script>
<!-- <script src="/js/chart/dashboard.js"></script> -->
<script src="/js/chart/Chart.roundedBarCharts.js"></script>
@endsection
