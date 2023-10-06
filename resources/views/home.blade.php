@extends('theme.default')

@section('content')
    <!-- ==================== Start Slider ==================== -->

    <header class="slider">
        <div class="swiper-container parallax-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="img/slid/slide-04.jpg" data-overlay-dark="2">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10 offset-lg-1">
                                    <div class="caption hmone">
                                        <h5 class="thin custom-font">pool</h5>
                                        <h1 data-splitting><a href="#0">Swimming Pool</a>
                                        </h1>
                                        <p class="mt-10"></p>
                                        <a href="#0" class="btn-curve btn-bord btn-lit mt-30">
                                            <span>Read More</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="img/sauna/interpoolspa_sauna_7.jpg" data-overlay-dark="2">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10 offset-lg-1">
                                    <div class="caption hmone">
                                        <h5 class="thin custom-font">SAUNA ROOM</h5>
                                        <h1 data-splitting><a href="#0">
                                              ห้องอบซาวน่า
                                            </a></h1>
                                        <p class="mt-10"></p>
                                        <a href="#0" class="btn-curve btn-bord btn-lit mt-30">
                                            <span>Read More</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="img/slid/slide-06.jpg" data-overlay-dark="2">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10 offset-lg-1">
                                    <div class="caption hmone">
                                        <h5 class="thin custom-font">pool</h5>
                                        <h1 data-splitting><a href="#0">
                                                Pool villa
                                            </a>
                                        </h1>
                                        <p class="mt-10"></p>
                                        <a href="#0" class="btn-curve btn-bord btn-lit mt-30">
                                            <span>Read More</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- slider setting -->
            <div class="setone">
                <div class="swiper-button-next swiper-nav-ctrl next-ctrl">
                    <i class="fas fa-chevron-right"></i>
                </div>
                <div class="swiper-button-prev swiper-nav-ctrl prev-ctrl">
                    <i class="fas fa-chevron-left"></i>
                </div>
            </div>
            <div class="swiper-pagination top custom-font"></div>
        </div>
    </header>

    <!-- ==================== End Slider ==================== -->



    <!-- ==================== Start about ==================== -->

    <section class="about section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="exp-img wow fadeInUp" data-wow-delay=".3s">
                        <div class="img bg-img wow imago" data-background="img/vi/interpoolspa_bg_1.jpg">
                            <div class="since custom-font">
                                {{-- <span>Since</span>
                                <span>1999</span> --}}
                            </div>
                            <div class="years custom-font">
                                <h2>19</h2>
                                <h5>Years Experience</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 valign">
                    <div class="exp-content wow fadeInUp" data-wow-delay=".3s">
                        <h6 class="sub-title">About Us</h6>
                        <h2 class="mb-20 playfont font-Noto">อินเตอร์พูล สปา <br> Interpoolspa</h2>
                        <p>
                            บริการสร้างสระว่ายน้ำแบบครบวงจร
                            ศูนย์บริการออกแบบครบวงจร
                            กับประสบการณ์การก่อสร้างสระที่มากกว่า 19 ปี
                            เราได้รับความไว้วางใจจากลูกค้าทุกระดับกว่า 1000 โครงการ</p>
                        <div class="numbers mt-50">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="item">
                                        <h3><span class="nbr custom-font">700</span></h3>
                                        <h6>สระว่ายน้ำ <br><i>Pool</i></h6>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="item">
                                        <h3><span class="nbr custom-font">200</span></h3>
                                        <h6>ซาวน่าและสตีม <br><i>Sauna & Steam</i></h6>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="item">
                                        <h3><span class="nbr custom-font">100</span></h3>
                                        <h6>ออนเซ็น <br><i>Onsen</i></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== End about ==================== -->
    <!-- ==================== Start Team ==================== -->

    <section class="team section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="tit">
                        <h6 class="custom-font mb-10 wow fadeInDown" data-wow-delay=".3s">Best Features</h6>
                        <h3 class="wow flipInX" data-wow-delay=".5s">บริการของเรา</h3>
                        <p class="wow fadeInUp" data-wow-delay=".3s">``BEST SERVICE IS THE FIRST WE DO``</p>
                        <div class="navs mt-30 wow fadeInUp" data-wow-delay=".3s">
                            <span class="prev">
                                <i class="fas fa-long-arrow-alt-left"></i>
                            </span>
                            <span class="next">
                                <i class="fas fa-long-arrow-alt-right"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="team-container">
                        <div class="item wow fadeInUp" data-wow-delay=".3s">
                            <div class="img wow imago">
                                <img src="img/home/pool.jpg" alt="">
                                <div class="social"></div>
                            </div>
                            <div class="info">
                                <h5>สระว่ายน้ำ</h5>
                                <span>Pool</span>
                            </div>
                        </div>
                        <div class="item wow fadeInUp" data-wow-delay=".3s">
                            <div class="img wow imago">
                                <img src="img/home/onsen.jpg" alt="">
                                <div class="social"></div>
                            </div>
                            <div class="info">
                                <h5>ออนเซ็น</h5>
                                <span>Onsen</span>
                            </div>
                        </div>
                        <div class="item wow fadeInUp" data-wow-delay=".3s">
                            <div class="img wow imago">
                                <img src="img/home/Hydrotherapy.jpg" alt="">
                                <div class="social"></div>
                            </div>
                            <div class="info">
                                <h5>ธาราบำบัดสำหรับผู้สูงอายุ</h5>
                                <span>Hydrotherapy</span>
                            </div>
                        </div>
                        <div class="item wow fadeInUp" data-wow-delay=".3s">
                            <div class="img wow imago">
                                <img src="img/home/sauna.jpg" alt="">
                                <div class="social"></div>
                            </div>
                            <div class="info">
                                <h5>ห้องซาวน่า</h5>
                                <span>Sauna Room</span>
                            </div>
                        </div>
                        <div class="item wow fadeInUp" data-wow-delay=".3s">
                            <div class="img wow imago">
                                <img src="img/home/steam.jpg" alt="">
                                <div class="social"></div>
                            </div>
                            <div class="info">
                                <h5>ห้องอบไอน้ำ</h5>
                                <span>Steam Room</span>
                            </div>
                        </div>
                        <div class="item wow fadeInUp" data-wow-delay=".3s">
                            <div class="img wow imago">
                                <img src="img/home/product.jpg" alt="">
                                <div class="social"></div>
                            </div>
                            <div class="info">
                                <h5>สินค้าและบริการ</h5>
                                <span>Product & Service</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dots-half bg-img bg-repeat" data-background="img/dots.png"></div>
    </section>

    <!-- ==================== End Team ==================== -->

    <!-- ==================== Start Works ==================== -->

    <section class="work-carousel metro section-padding dark">
        <div class="container-fluid">
            <div class="container">
                <div class="section-head text-center">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-8 col-sm-10">
                            <h6 class="custom-font wow fadeInDown" data-wow-delay=".3s">Best Works</h6>
                            <h4 class="playfont wow flipInX" data-wow-delay=".5s">โครงการ</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 no-padding">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            @foreach ($projects as $p)
                            <div class="swiper-slide">
                                <div class="content wow fadeInUp" data-wow-delay=".3s">
                                    <div class="item-img bg-img wow imago" data-background="{{ asset($p->cover) }}">
                                    </div>
                                    <div class="cont">
                                        <h6><a href="{{route('project_detail',$p->id)}}">{{$p->location}}</a></h6>
                                        <h4><a href="{{route('project_detail',$p->id)}}">{{$p->name}}</a></h4>
                                    </div>
                                </div>
                            </div> 
                            @endforeach
                        </div>

                        <!-- slider setting -->
                        <div class="swiper-button-next swiper-nav-ctrl next-ctrl cursor-pointer">
                            <i class="ion-ios-arrow-right"></i>
                        </div>
                        <div class="swiper-button-prev swiper-nav-ctrl prev-ctrl cursor-pointer">
                            <i class="ion-ios-arrow-left"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== End Works ==================== -->


    <!-- ==================== Start Testimonials ==================== -->

    <section class="testimonials grid section-padding">
    </section>

    <!-- ==================== End Testimonials ==================== -->





@endsection