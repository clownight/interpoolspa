@extends('theme.default')

@section('content')
 <!-- ==================== Start Header ==================== -->

 <header class="pages-header bg-img valign parallaxie" data-background="{!! asset('img/customer.jpg') !!}" data-overlay-dark="3" id="bg-page-contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cont text-center">
                    <h1>Customer</h1>
                    <div class="path">
                        <a href="{!! route('home') !!}">Home</a><span>/</span><a href="{!! route('customer') !!}" class="active">ลูกค้า</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- ==================== End Header ==================== -->
<section class="work-carousel metro section-padding" style="padding-bottom: 0px !important;">
    <div class="container-fluid">
        <div class="container">
            <div class="section-head text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8 col-sm-10">
                        <h6 class="custom-font wow fadeInDown" data-wow-delay=".3s">ขอบคุณคุณลูกค้าทุกท่าน</h6>
                        <h4 class="playfont wow flipInX" data-wow-delay=".5s">ที่ไว้วางใจให้ อินเตอร์พูลสปา ได้ให้บริการ</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about">
    <div style="width:80%;margin:auto;">
        <div class="row"> 
            <div class="col-lg-12 map-box">
                <iframe src="https://www.google.com/maps/d/u/0/embed?mid=12JsY5T2xFd3ip1Ir-XA4WrEGDzA&ehbc=2E312F" style="width:100%;" height="800"></iframe>
            </div>
        </div>
    </div>
</section>
<section class="team tmgrid section-padding bg-gray">
    <div class="container">
        <div class="section-head text-center">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-10">
                    <h6 class="custom-font">Creative Minds</h6>
                    <h4 class="playfont">Our Customers</h4>
                </div>
            </div>
        </div>
        <div class="row">
            @for ($i=1;$i<=45;$i++)
            <a href="{!! asset('img/customer/'.$i.'.jpg') !!}" class="wow fadeInDown" data-wow-delay=".3s">
                <img alt="" src="{!! asset('img/customer/'.$i.'.jpg') !!}" style="" />
            </a>
            @endfor
            
        </div>
    </div>
</section>
<!-- ==================== Start about ==================== -->



<!-- ==================== End about ==================== -->
@endsection
@section('script')
@endsection