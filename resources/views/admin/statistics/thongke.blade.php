@extends('layouts.layoutAD')

@section('title')
    Thống kê
@endsection

@section('noidung')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <style>
        input[type="date"] {
            background: url(https://icons.veryicon.com/png/o/miscellaneous/esgcc-basic-icon-library/date-71.png);
            background-size: 25px;
            background-repeat: no-repeat;
            background-position: 98%;
            padding: 5px;
            font-size: 15px;
            border: 3px solid #333;
            border-radius: 5px;
            outline: none;
        }



        input[type="date"]::-webkit-calendar-picker-indicator {
            opacity: 0;
        }

        ::-webkit-datetime-edit-text {
            opacity: 0;
        }

        #datetk {
            width: 200px;
            height: 32px;
            transition: background-color 0.3s ease;
        }

        #datetk:hover {
            background-color: #e5e5e5;
            /* Change this to your desired hover color */
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
        }

        .metric-box {
            background-color: #fff;
            border: 1px solid #e5e5e5;
            border-radius: 6px;
            padding: 16px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .selected-metric-box {
            border-top: 4px solid #2673dd;
            /* Màu của border-top khi ô được chọn */
        }

        .metric-box:hover {
            background-color: #f8f8f8;
            transition: 0.1s ease;
        }

        

        .metric-box h6 {
            margin-bottom: 8px;
            color: #333;
        }

        .metric-box p {
            font-size: 14px;
        }

        .chart-container {
            margin-top: 16px;
        }

        .chart-container canvas {
            display: block !important;
        }

        .chart-container .chartjs-size-monitor,
        .chart-container .chartjs-size-monitor-expand,
        .chart-container .chartjs-size-monitor-shrink {
            display: none !important;
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
    <div class="container-fluid page-body-wrapper">
        @include('layouts.menuAD')
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="card-title">@yield('title')</h2>
                                <p class="card-description"></p>
                                <div class="table-responsive pt-2">
                                    <div class="container">
                                        <div class="row mt-3 pl-4">
                                               <form action="{{ route('admin.statistics') }}" method="GET">
                                            @csrf
                                            <input class="bg-white input-time" type="date" id="datetk" name="datetk" placeholder="Chọn thời gian" onchange="this.form.submit()" value="{{ $selectedDate ?? today()->format('Y-m-d') }}">
                                        </form>
                                        </div>
                                        <div class="row mt-3 justify-content-around">
                                            <div class="col-md-2 metric-box doanhSo" id="doanhSoBox" data-field="doanhSo">
                                                <h6>Doanh số</h6>
                                                <p id="doanhSo">{{ $thongke['doanhSo'] }}</p>
                                            </div>
                                            <div class="col-md-2 metric-box" id="donHangBox" data-field="donHang">
                                                <h6>Đơn hàng</h6>
                                                <p id="donHang">{{ $thongke['donHang'] }}</p>
                                            </div>


                                            <div class="col-md-2 metric-box" id="luotTruyCapBox" data-field="luotTruyCap">
                                                <h6>Lượt truy cập</h6>
                                                <p id="luotTruyCap">{{ $thongke['luotTruyCap'] }}</p>
                                            </div>
                                            <div class="col-md-2 metric-box" id="luotxemtrangBox" data-field="luotXemTrang">
                                                <h6>Lượt xem trang</h6>
                                                <p id="luotXemTrang">{{ $thongke['luotXemTrang'] }}</p>
                                            </div>
                                            <div class="col-md-2 metric-box" id="doanhsomoidonhangBox"
                                                data-field="doanhSoMoiDonHang">
                                                <h6>Doanh số mỗi đơn hàng</h6>
                                                <p id="doanhSoMoiDonHang">{{ $thongke['doanhSoMoiDonHang'] }}</p>
                                            </div>
                                        </div>

                                        <!-- Biểu đồ -->
                                        <div class="row mt-4">
                                            <div class="col-md-12 chart-container">
                                                <canvas id="myChart"></canvas>
                                            </div>
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
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Lấy dữ liệu từ backend (ví dụ: doanh số, đơn hàng, tỷ lệ chuyển đổi, lượt truy cập)
        let duLieuBackend = {
            doanhSo: @json($thongke24h['doanhSo']),
            // doanhSo: [1000, 900, 1500, 1800, 2000, 2200, 2500],
            donHang: @json($thongke24h['donHang']),
            // donHang: [50, 60, 70, 80, 90, 100, 110],
            tyLeChuyenDoi: @json($thongke24h['tyLeChuyenDoi']),
            // tyLeChuyenDoi: [2, 3, 4, 5, 6, 7, 8],
            luotTruyCap: @json($thongke24h['luotTruyCap']),
            // luotTruyCap: [1000, 1100, 1200, 1300, 1400, 1500, 1600],
            luotXemTrang: @json($thongke24h['luotXemTrang']),
            // luotXemTrang: [1000, 1200, 1500, 1800, 2000, 2200, 2500],
            doanhSoMoiDonHang: @json($thongke24h['doanhSoMoiDonHang']),
            // doanhSoMoiDonHang: [10000, 11000, 12000, 13000, 14000, 15000, 16000],

            tenCacO: ['Doanh số', 'Đơn hàng', 'Tỷ lệ chuyển đổi', 'Lượt truy cập', 'Lượt xem trang',
                'Doanh số mỗi đơn hàng'
            ],

            // thoiGian: ['00:00', '01:00', '02:00', '03:00', '04:00', '05:00', '6:00', '7:00', '8:00', '9:00', '10:00',
            //     '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00',
            //     '22:00', '23:00',
            // ]
            thoiGian: {!! json_encode($thoiGianData) !!},
        };




        // Biến để lưu trữ đối tượng biểu đồ
        let myChart;

        // Mảng để lưu trữ các trường đã chọn
        let selectedFields = ['doanhSo', 'donHang'];

        // Hiển thị dữ liệu vào các ô thông số
        function hienThiDuLieu() {
            selectedFields.forEach(field => {
                const value = (field === 'tyLeChuyenDoi') ? duLieuBackend[field][duLieuBackend[field].length - 1] +
                    '%' : duLieuBackend[field][duLieuBackend[field].length - 1];
                // document.getElementById(field).innerText = value;
            });
        }


        // Vẽ biểu đồ
        function veBieuDo() {
            // Lọc dữ liệu dựa trên các trường đã chọn
            const datasets = selectedFields.map(field => ({
                label: field,
                data: duLieuBackend[field],
                borderColor: getRandomColor(),
                borderWidth: 2,
                pointBackgroundColor: getRandomColor(),
                pointHoverBackgroundColor: getRandomColor(),
                fill: false
            }));

            // Xóa biểu đồ hiện tại nếu tồn tại
            if (myChart) {
                myChart.destroy();
            }

            const ctx = document.getElementById('myChart').getContext('2d');

            const options = {
                plugins: {
                    tooltip: {
                        mode: 'index',
                        intersect: false,
                        callbacks: {
                            label: function(context) {
                                const label = context.dataset.label || '';
                                const value = context.parsed.y || 0;
                                return `${label}: ${value}`;
                            }
                        }
                    },
                    legend: {
                        display: false
                    }
                },
                scales: {
                    xAxes: [{
                        type: 'category',
                        labels: ['00:00', '.', '.', '.', '.', '.', '6:00', '.', '.', '.', '.', '.', '12:00',
                            '.', '.', '.', '.', '.', '18:00', '.', '.',
                            '.', '.', '.', '.',
                        ],
                        gridLines: {
                            drawTicks: true,
                            drawOnChartArea: false

                        },
                    }],
                    yAxes: [{
                        ticks: {
                            display: false,
                            beginAtZero: true
                        },
                        gridLines: {
                            drawTicks: false, // Ẩn thanh ngang

                            borderDash: [5, 5]
                        }
                    }]
                },
                elements: {
                    line: {
                        borderWidth: 2,
                        borderColor: 'rgba(0, 123, 255, 0.9)',
                        fill: false
                    }
                },
                tooltips: {
                    enabled: true,
                    mode: 'index',
                    intersect: false,
                    callbacks: {
                        label: function(tooltipItem, data) {
                            const label = data.datasets[tooltipItem.datasetIndex].label || '';
                            const value = (label === 'tyLeChuyenDoi') ? tooltipItem.yLabel + '%' : tooltipItem
                                .yLabel;
                            const tenO = duLieuBackend.tenCacO[tooltipItem.datasetIndex];
                            return `${tenO}: ${value}`;
                        },
                        title: function(tooltipItem, data) {
                            const index = tooltipItem[0].index;
                            const thoiGianStart = duLieuBackend.thoiGian[index];
                            const thoiGianEnd = duLieuBackend.thoiGian[index + 1] ||
                                ''; // Thời gian kết thúc là thời gian tiếp theo hoặc 00:00 nếu không tồn tại
                            const formattedTime = formatThoiGian(thoiGianStart, thoiGianEnd);
                            return `${formattedTime}`;
                        },
                    },
                    backgroundColor: '#fff',
                    bodySpacing: 15, // Khoảng cách giữa các dòng
                    bodyFontSize: 14, // Kích thước chữ
                    titleFontColor: '#000',
                    bodyFontColor: '#000',
                    borderColor: 'rgba(0, 0, 0, 0.1)',
                    borderWidth: 2, // Độ rộng của viền
                    shadowOffsetX: 2,
                    shadowOffsetY: 2,
                    shadowBlur: 5,
                },
            };

            // function formatThoiGian(thoiGian) {
            //     const date = new Date('12/11/2023 ' + thoiGian);
            //     const options = {
            //         hour: 'numeric',
            //         minute: 'numeric',
            //         timeZone: 'Asia/Ho_Chi_Minh' // Đặt múi giờ cho Việt Nam
            //     };
            //     return new Intl.DateTimeFormat('vi-VN', options).format(date);
            // }
            function formatThoiGian(startTime, endTime) {
                const endIndex = endTime.indexOf(' '); // Tìm vị trí của khoảng trắng đầu tiên trong chuỗi
                const formattedEndTime = endIndex !== -1 ? endTime.substring(0, endIndex) : endTime;

                return ` ${startTime} ~ ${formattedEndTime} `;
            }



            myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: duLieuBackend.thoiGian,
                    datasets: datasets
                },
                options: options
            });
        }


        // Hàm tạo màu ngẫu nhiên cho biểu đồ
        function getRandomColor() {
            const letters = '0123456789ABCDEF';
            let color = '#';
            for (let i = 0; i < 6; i++) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            return color;
        }

        // Sự kiện khi click vào ô thông số
        document.querySelectorAll('.metric-box').forEach(function(box) {
            box.addEventListener('click', function() {
                const fieldName = this.getAttribute('data-field');

                // Nếu đã chọn đủ 4 trường, không cho chọn thêm và báo lỗi
                if (selectedFields.length === 4 && !selectedFields.includes(fieldName)) {
                    alert('Tối đa chỉ được chọn 4 chỉ tiêu.');
                    return;
                }

                // Nếu trường đã được chọn, hủy chọn
                if (selectedFields.includes(fieldName)) {
                    // Nếu chỉ còn 1 box được chọn, không cho hủy và báo lỗi
                    if (selectedFields.length === 1) {
                        alert('Vui lòng chọn tối thiểu 1 chỉ tiêu.');
                        return;
                    }
                    selectedFields = selectedFields.filter(field => field !== fieldName);
                } else {
                    if (selectedFields.length === 4) {
                        alert('Tối đa chỉ được chọn 4 chỉ tiêu.');
                        selectedFields.shift();
                    }
                    // Thêm trường mới vào mảng
                    selectedFields.push(fieldName);
                }

                // Hiển thị và vẽ lại biểu đồ
                hienThiDuLieu();
                veBieuDo();

                // Loại bỏ style cho tất cả các ô có data-field trong selectedFields
                selectedFields.forEach(function(field) {
                    const selectedBox = document.querySelector(
                        `.metric-box[data-field="${field}"]`);
                    if (selectedBox) {
                        selectedBox.style.borderTop =
                            '4px solid #2673dd'; // Màu của border-top khi ô được chọn
                    }
                });

                // Loại bỏ style cho tất cả các ô không có data-field trong selectedFields
                document.querySelectorAll('.metric-box').forEach(function(box) {
                    const field = box.getAttribute('data-field');
                    if (!selectedFields.includes(field)) {
                        box.style.borderTop = 'none';
                    }
                });
            });
        });


        // Hiển thị dữ liệu và vẽ biểu đồ khi trang được load
        document.addEventListener('DOMContentLoaded', function() {

            hienThiDuLieu();
            veBieuDo();

            // Đặt border-top mặc định cho hai box trong selectedFields
            selectedFields.forEach(function(field) {
                const selectedBox = document.querySelector(
                    `.metric-box[data-field="${field}"]`);
                if (selectedBox) {
                    selectedBox.style.borderTop =
                        '4px solid #2673dd'; // Màu của border-top khi ô được chọn
                }
            });

        });
    </script>
@endsection
