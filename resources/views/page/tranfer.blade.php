@extends('layouts.layoutUser')

@section('title')
Thanh toán
@endsection

@section('noidung')
<div class="tg-innerbanner tg-haslayout tg-parallax tg-bginnerbanner" data-z-index="-100" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/parallax/bgparallax-07.jpg">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="tg-innerbannercontent">
                    <h1>Thanh toán</h1>
                    <ol class="tg-breadcrumb">
                        <li><a href="javascript:void(0);">Trang chủ</a></li>
                        <li class="tg-active">@yield('title')</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>

<main id="tg-main" class="tg-main tg-haslayout" style="width: 100%;">
    <div class="tg-sectionspace tg-haslayout">
        <div style="text-align: center;" class="container mt-4">
            <h3>Đã xác nhận giao dịch, đang chờ thanh toán</h3>
        </div>
    </div>
    </div>
</main>



@endsection