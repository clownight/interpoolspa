@extends('theme.default')

@section('content')
<!-- ==================== Start Header ==================== -->

<header class="pages-header bg-img valign parallaxie" data-background="{!! asset('img/about.jpg') !!}" data-overlay-dark="5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cont text-center">
                    <h1>About Us</h1>
                    <div class="path">
                        <a href="{!! route('home') !!}">Home</a><span>/</span><a href="{!! route('about') !!}" class="active">About Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- ==================== End Header ==================== -->

<section class="about section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 valign">
                <div class="exp-content nopat wow fadeInUp" data-wow-delay=".3s">
                    <h6 class="sub-title">About Us</h6>
                    <h2 class="mb-20 playfont">INTER POOL SPA<br> บริษัท อินเตอร์พูลสปา จำกัด</h2>
                    <p>อินเตอร์พูล สปา เราได้รับความไว้วางใจจากลูกค้าทุกระดับกว่า 700 โครงการ ด้วยประสบการณ์กว่า 19 ปี ในวงการ สระว่ายน้ำ เราเป็นบริษัทก่อสร้าง สระว่ายน้ำ ติดตั้ง ระบบสระว่ายน้ำ ระบบสปา ระบบออนเซ็น ร้อน/เย็น สระวารีบำบัด จำหน่ายอุปกรณ์และเคมีภัณฑ์สระว่ายน้ำ รวมทั้งรับ บริการดูแลสระว่ายน้ำ แบบครบวงจร อีกทั้งยังนำเข้า ผลิต ติดตั้งห้องอบซาวน่าและห้องอบไอน้ำ ด้วยทีมงานผู้เชี่ยวชาญ เรามุ่งมั่นพัฒนาให้มีความรู้ที่เป็นมาตรฐาน คัดสรรสินค้าที่มีคุณคุณภาพและทันสมัยเพื่อตอบสนองความต้องการของลูกค้าอยู่ตลอดเวลา</p>
                    <ul>
                        <li>Architecture</li>
                        <li>Interior Design</li>
                        <li>Pool Villa</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="ab-exp">
                    <div class="row">
                        <div class="col-md-4 mb-20">
                            <div class="pattern bg-img bg-repeat" data-background="img/line-pattern.png">
                            </div>
                        </div>
                        <div class="col-md-8 wow fadeInUp" data-wow-delay=".3s">
                            <div class="img mb-20 wow imago">
                                <img src="img/projects/RIVAVISTA/02.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-7 wow fadeInUp" data-wow-delay=".3s">
                            <div class="img wow imago">
                                <img src="img/pool/pool_3.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="years-exp">
                                <div class="exp-text">
                                    <h2 class="custom-font">19ปี</h2>
                                    <h6>ประสบการณ์</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="testimonials grid " style="padding-bottom: 100px;">
    <div class="container">
        <div class="section-head text-center">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-10">
                    <h6 class="custom-font wow fadeInDown" data-wow-delay=".3s">Vision</h6>
                    <h4 class="playfont wow flipInX" data-wow-delay=".5s">วิสัยทัศน์</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="testim">
                    <div class="item wow fadeInUp" data-wow-delay=".3s">
                        <span class="quote-icon"><img src="{!! asset('img/clients/quote.svg') !!}" alt=""></span>
                        <div class="cont">
                            <p class="">"BEST SERVICE IS THE FIRST WE DO"
                            </p>
                        </div>
                        <div class="info">
                            <div class="author">
                                <img src="{!! asset('img/user.png') !!}" alt="">
                            </div>
                            <h6>Inter Pool Spa <span>อินเตอร์พูลสปา</span> </h6>
                        </div>
                    </div>
                </div>
                <div class="navs mt-30">
                    <span class="prev">
                        <i class="fas fa-long-arrow-alt-left"></i>
                    </span>
                    <span class="next">
                        <i class="fas fa-long-arrow-alt-right"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- ==================== Start Team ==================== -->

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
    <section class="">
        <div class="container-fulid">
            <div class="row">
                <div class="col-12">
                    <iframe src="https://www.google.com/maps/d/u/0/embed?mid=12JsY5T2xFd3ip1Ir-XA4WrEGDzA&ehbc=2E312F" style="width: 100%;" height="480"></iframe>
                </div>
                
            </div>
        </div>   
    </section>
    <!-- ==================== End Team ==================== -->

@endsection