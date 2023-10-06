@extends('theme.default')

@section('content')
<!-- ==================== Start Header ==================== -->

<header class="pages-header bg-img valign parallaxie" data-background="{!! asset('img/hydro/interpoolspa_hydrotherapy_7.jpg') !!}" data-overlay-dark="5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cont text-center">
                    <h1>ธาราบำบัด</h1>
                    <div class="path">
                        <a href="{!! route('home') !!}">Home</a><span>/</span><a href="{!! route('hydrotherapy') !!}" class="active">Hydrotherapy</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<section class="blog-pg single section-padding ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-11">
                <div class="post">
                    <div class="content pt-20">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <div class="cont">
                                    <h6>HYDROTHERAPY (สระธาราบำบัด)</h6>
                                    <p>วารีบำบัด  คือ การออกกำลังกายภายในน้ำซึ่งเป็นทางเลือกหนึ่งของการรักษาทางกายภาพบำบัดโดยใช้น้ำเป็นสื่อหรือตัวกลางในการรักษา โดยอาศัยคุณสมบัติของน้ำช่วยพยุงรองรับทุกส่วนของร่างกาย ทำให้สามารถเคลื่อนไหวได้อิสระ และง่ายขึ้นช่วยลดแรงกระแทก และช่วยบรรเทาความเจ็บปวดในขณะฝึก</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="projdtal">
    <div class="justified-gallery">
        <a href="{{asset('img/hydro/interpoolspa_hydrotherapy_1.jpg')}}" class="wow fadeInDown" data-wow-delay=".3s">
            <img alt="" src="{{asset('img/hydro/interpoolspa_hydrotherapy_1.jpg')}}" />
        </a>
        <a href="{{asset('img/hydro/interpoolspa_hydrotherapy_2.jpg')}}" class="wow fadeInDown" data-wow-delay=".3s">
            <img alt="" src="{{asset('img/hydro/interpoolspa_hydrotherapy_2.jpg')}}" />
        </a>
        <a href="{{asset('img/hydro/interpoolspa_hydrotherapy_3.jpg')}}" class="wow fadeInDown" data-wow-delay=".3s">
            <img alt="" src="{{asset('img/hydro/interpoolspa_hydrotherapy_3.jpg')}}" />
        </a>
        <a href="{{asset('img/hydro/interpoolspa_hydrotherapy_4.jpg')}}" class="wow fadeInDown" data-wow-delay=".3s">
            <img alt="" src="{{asset('img/hydro/interpoolspa_hydrotherapy_4.jpg')}}" />
        </a>
        <a href="{{asset('img/hydro/interpoolspa_hydrotherapy_5.jpg')}}" class="wow fadeInDown" data-wow-delay=".3s">
            <img alt="" src="{{asset('img/hydro/interpoolspa_hydrotherapy_5.jpg')}}" />
        </a>
        <a href="{{asset('img/hydro/interpoolspa_hydrotherapy_6.jpg')}}" class="wow fadeInDown" data-wow-delay=".3s">
            <img alt="" src="{{asset('img/hydro/interpoolspa_hydrotherapy_6.jpg')}}" />
        </a>
        <a href="{{asset('img/hydro/interpoolspa_hydrotherapy_7.jpg')}}" class="wow fadeInDown" data-wow-delay=".3s">
            <img alt="" src="{{asset('img/hydro/interpoolspa_hydrotherapy_7.jpg')}}" />
        </a>
    </div>
</section>
@endsection