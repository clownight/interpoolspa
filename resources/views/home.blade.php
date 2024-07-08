@extends('theme.default')
@section('css')
<style>
    .btn-tel{
        background: rgb(170, 157, 99) !important;
        color: white;
        border: 0px !important;
    }
    .btn-form{
        background: rgb(8, 2, 66) !important;
        color: white;
        border: 0px !important;
    }
    .btn-line{
        background: rgb(10, 194, 56) !important;
        color: white;
        border: 0px !important;
    }
    .btn-tel:hover,.btn-tel::after{
        background: rgb(170, 157, 99) !important;
        color: white;
        border: 0px !important;
    }
    .btn-form:hover,.btn-form::after{
        background: rgb(8, 2, 66) !important;
        color: white;
        border: 0px !important;
    }
    .btn-line:hover,.btn-line::after{
        background: rgb(170, 157, 99) !important;
        color: white;
        border: 0px !important;
    }
    .why li{
        margin-bottom: 0.75rem;
    }
    .accordion{
    margin: 30px 0px;
    }

    .toggle {
        display: none;
    }
    
    .option {
        position: relative;
        margin-bottom: 1em;
    }
    
    .title,
    .content2 {
        backface-visibility: hidden;
        transform: translateZ(0);
        transition: all 0.2s;
        p{
            color: black;
        };
    }
    
    .title {
        background: #fff;
        padding: 1em;
        display: block;
        color: #16171a;
        font-weight: bold;
    }
    .title:after, .title:before {
        content: '';
        position: absolute;
        right: 26px;
        top: 43%;
        width: 1.5px;
        height: 10px;
        background-color: #16171a;
        transition: all 0.2s;
        transform: rotate(-45deg);
    }
    .title:after {
        transform: rotate(45deg);
        right: 20px;
    }
    
    .content2 {
        max-height: 0;
        overflow: hidden;
        background-color: #fff;
        p {
        margin: 0;
        padding: 15px;
        font-size: 0.9em;
        line-height: 1.5;
        }
    }
    
    .toggle:checked {
        & + .title,
        & + .title + .content2 {
        box-shadow: 3px 3px 6px #ddd, -3px 3px 6px #ddd;
        }
        & + .title + .content2 {
        max-height: 500px;
        }
        & + .title:before {
        transform: rotate(45deg) !important;
        }
        & + .title:after {
            transform: rotate(-45deg) !important;
        }
    }
</style>
@endsection
@section('content')
    <!-- ==================== Start Slider ==================== -->
    <header class="slider">
        <div class="swiper-container parallax-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="bg-img valign" style="background-image: url({{ asset('img/slid/1.jpg') }})">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10 offset-lg-1">
                                    <div class="caption hmone">
                                        <h5 class="thin custom-font color-pool">pool</h5>
                                        <h1 data-splitting><a href="{{route('pool')}}">Swimming Pool</a>
                                        </h1>
                                        <p class="mt-10"></p>
                                        <a href="tel:0887896452" class="btn-curve btn-tel btn-bord btn-lit mt-30">
                                            Tel.0887896452
                                        </a>
                                        <a href="#contact" class="btn-curve btn-form btn-bord btn-lit mt-30">
                                            Form Submit
                                        </a>
                                        <a href="https://line.me/R/ti/p/%40908bbguw" target="_bank" class="btn-curve btn-line btn-bord btn-lit mt-30">
                                            Line@
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="bg-img valign" style="background-image: url({{ asset('img/slid/2.jpg') }})">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10 offset-lg-1"> 
                                    <div class="caption hmone">
                                        <h5 class="thin custom-font color-suana">SAUNA ROOM</h5>
                                        <h1 data-splitting><a href="{{route('sauna')}}">
                                              ห้องอบซาวน่า
                                            </a></h1>
                                        <p class="mt-10"></p>
                                        <a href="tel:0887896452" class="btn-curve btn-tel btn-bord btn-lit mt-30">
                                            0887896452
                                        </a>
                                        <a href="#contact" class="btn-curve btn-form btn-bord btn-lit mt-30">
                                            Form Submit
                                        </a>
                                        <a href="https://line.me/R/ti/p/%40908bbguw" target="_bank" class="btn-curve btn-line btn-bord btn-lit mt-30">
                                            Line@
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="bg-img valign" style="background-image: url({{ asset('img/slid/3.jpg') }})">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10 offset-lg-1">
                                    <div class="caption hmone">
                                        <h5 class="thin custom-font color-onsen">onsen</h5>
                                        <h1 data-splitting><a href="{{route('onsen')}}" target="_blank">
                                                Onsen
                                            </a>
                                        </h1>
                                        <p class="mt-10"></p>
                                        <a href="tel:0887896452" class="btn-curve btn-tel btn-bord btn-lit mt-30">
                                            0887896452
                                        </a>
                                        <a href="#contact" class="btn-curve btn-form btn-bord btn-lit mt-30">
                                            Form Submit
                                        </a>
                                        <a href="https://line.me/R/ti/p/%40908bbguw" target="_bank" class="btn-curve btn-line btn-bord btn-lit mt-30">
                                            Line@
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

    <section class="about section-padding section-home">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="exp-img wow fadeInUp" data-wow-delay=".3s">
                        <div class="img bg-img wow imago" data-background="img/vi/interpoolspa_bg_1.jpg">
                            <div class="since custom-font">
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
                                <div class="col-md-12">
                                    <a href="tel:0887896452" class="btn-curve btn-tel btn-bord btn-lit mt-30">
                                        0887896452
                                    </a>
                                    <a href="#contact" class="btn-curve btn-form btn-bord btn-lit mt-30">
                                        Form Submit
                                    </a>
                                    <a href="https://line.me/R/ti/p/%40908bbguw" target="_bank" class="btn-curve btn-line btn-bord btn-lit mt-30">
                                        Line@
                                    </a>
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
                        <div class="item wow fadeInUp" data-wow-delay=".3s" onclick="window.location.href='/pool'">
                            <div class="img wow imago">
                                <img src="img/home/pool.jpg" alt="">
                                <div class="social"></div>
                            </div>
                            <div class="info">
                                <h5>สระว่ายน้ำ</h5>
                                <span>Pool</span>
                            </div>
                        </div>
                        <div class="item wow fadeInUp" data-wow-delay=".3s"  onclick="window.location.href='/onsen'">
                            <div class="img wow imago">
                                <img src="img/home/onsen.jpg" alt="">
                                <div class="social"></div>
                            </div>
                            <div class="info">
                                <h5>ออนเซ็น</h5>
                                <span>Onsen</span>
                            </div>
                        </div>
                        <div class="item wow fadeInUp" data-wow-delay=".3s"  onclick="window.location.href='/hydrotherapy'">
                            <div class="img wow imago">
                                <img src="img/home/hydrotherapy.jpg" alt="">
                                <div class="social"></div>
                            </div>
                            <div class="info">
                                <h5>ธาราบำบัดสำหรับผู้สูงอายุ</h5>
                                <span>Hydrotherapy</span>
                            </div>
                        </div>
                        <div class="item wow fadeInUp" data-wow-delay=".3s" onclick="window.location.href='/sauna'">
                            <div class="img wow imago">
                                <img src="img/home/sauna.jpg" alt="">
                                <div class="social"></div>
                            </div>
                            <div class="info">
                                <h5>ห้องซาวน่า</h5>
                                <span>Sauna Room</span>
                            </div>
                        </div>
                        <div class="item wow fadeInUp" data-wow-delay=".3s" onclick="window.location.href='/steam'">
                            <div class="img wow imago">
                                <img src="img/home/steam.jpg" alt="">
                                <div class="social"></div>
                            </div>
                            <div class="info">
                                <h5>ห้องอบไอน้ำ</h5>
                                <span>Steam Room</span>
                            </div>
                        </div>
                        <div class="item wow fadeInUp" data-wow-delay=".3s" onclick="window.location.href='/products'">
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
                <div class="col-md-12 text-center">
                    <a href="tel:0887896452" class="btn-curve btn-tel btn-bord btn-lit mt-30">
                        0887896452
                    </a>
                    <a href="#contact" class="btn-curve btn-form btn-bord btn-lit mt-30">
                        Form Submit
                    </a>
                    <a href="https://line.me/R/ti/p/%40908bbguw" target="_bank" class="btn-curve btn-line btn-bord btn-lit mt-30">
                        Line@
                    </a>
                </div>
            </div>
        </div>
        <div class="dots-half bg-img bg-repeat" data-background="img/dots.png"></div>
    </section>

    <!-- ==================== End Team ==================== -->
    <section class="work-carousel metro section-padding dark">
        <div class="container">
            <div class="container">
                <div class="section-head text-center">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-8 col-sm-10">
                            <h6 class="custom-font wow fadeInDown" data-wow-delay=".3s">ทำไมต้องเลือกอินเตอร์พูลปลา</h6>
                            <h4 class="playfont wow flipInX" data-wow-delay=".5s">Why Inter Pool Spa?</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12" style="border: 2px solid white;border-radius: 15px;padding:1rem;">
                    <ul class="why">
                        <li>1.ดูแลลูกค้าทั่วประเทศ </li>
                        <li>2.สินค้าครบครันเกี่ยวกับสระว่ายน้ำ </li>
                        <li>3.สินค้าได้มาตรฐานสากล </li>
                        <li>4.แนะนำฟรีไม่มีค่าใช้จ่าย </li>
                        <li>5.ค่อยดูแลและติดตามงานทุกขั้นตอน </li>
                        <li>6.ทีมงานพร้อมให้คำแนะนำ </li>
                    </ul>
                </div>
                <div class="col-md-12 text-center">
                    <a href="tel:0887896452" class="btn-curve btn-tel btn-bord btn-lit mt-30">
                        0887896452
                    </a>
                    <a href="#contact" class="btn-curve btn-form btn-bord btn-lit mt-30">
                        Form Submit
                    </a>
                    <a href="https://line.me/R/ti/p/%40908bbguw" target="_bank" class="btn-curve btn-line btn-bord btn-lit mt-30">
                        Line@
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================== Start Works ==================== -->
    <br>
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
                <div class="col-md-12 text-center">
                    <a href="tel:0887896452" class="btn-curve btn-tel btn-bord btn-lit mt-30">
                        0887896452
                    </a>
                    <a href="#contact" class="btn-curve btn-form btn-bord btn-lit mt-30">
                        Form Submit
                    </a>
                    <a href="https://line.me/R/ti/p/%40908bbguw" target="_bank" class="btn-curve btn-line btn-bord btn-lit mt-30">
                        Line@
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== End Works ==================== -->


    <!-- ==================== Start Testimonials ==================== -->

    <section class="testimonials grid section-padding"  style="margin-bottom: 0px !important;padding-bottom: 20px;">
    </section>

    <!-- ==================== End Testimonials ==================== -->
    <section class="testimonials grid " id="contact">
        <div class="container">
            <div class="section-head text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8 col-sm-10">
                        <h6 class="custom-font wow fadeInDown" data-wow-delay=".3s">Contact</h6>
                        <h4 class="playfont wow flipInX" data-wow-delay=".5s" style="font-size: 1.5rem;">กรอกฟอร์มเพื่อปรึกษาและออกแบบฟรี!!</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form  class="form" method="post" action="{{ route('sendmail__') }}">
                        @csrf
                        <div class="messages"></div>
    
                        <div class="controls">
    
                            <div class="form-group">
                                <label>ชื่อ - นามสกุล (Name - Last name)</label>
                                <input class="form-control" type="text" name="name" placeholder="Name" required="required">
                            </div>
    
                            <div class="form-group">
                                <label>อีเมล (Email)</label>
                                <input class="form-control" type="email" name="email" placeholder="Email">
                            </div>
    
                            <div class="form-group">
                                <label>เบอร์โทรศัพท์ (Phone number)</label>
                                <input class="form-control" type="phone" name="phone" maxlength="10" minlength="10" onkeypress="return isNumberKey(event);" placeholder="phone"
                                    required="required">
                            </div>
    
                            <div class="form-group">
                                <label>ข้อควาาม (Message)</label>
                                <textarea id="form_message"  class="form-control" name="message" placeholder="Message" rows="4"
                                    required="required"></textarea>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn-curve btn-color"><span>Submit</span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <section class="work-carousel metro section-padding dark" >
        <div class="container">
            <div class="container">
                <div class="section-head text-center" style="margin-bottom: 1rem;">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-8 col-sm-10">
                            <h6 class="custom-font wow fadeInDown" data-wow-delay=".3s">FAQ</h6>
                            <h4 class="playfont wow flipInX" data-wow-delay=".5s">คำถามที่พบบ่อย</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="accordion">
                        <div class="option"><input class="toggle" id="toggle1" type="checkbox" /><label class="title" for="toggle1">สินค้าราคาเท่าไหร่</label>
                            <div class="content2">
                                <p>สินค้าขึ้นอยู่กับความต้องการสระหรือ ออนเซ็นซาวน่าสตีมของลูกค้า ทางเรามีการประเมินราคาให้</p>
                            </div>
                        </div>
                        <div class="option"><input class="toggle" id="toggle2" type="checkbox" /><label class="title" for="toggle2">มีค่าประเมินหน้างานไหม</label>
                            <div class="content2">
                                <p>ไม่มีค้าใช้จ่ายใดๆ</p>
                            </div>
                        </div>
                        <div class="option"><input class="toggle" id="toggle3" type="checkbox" /><label class="title" for="toggle3">มีสั่งซื้อออนไลน์ไหม</label>
                            <div class="content2">
                                <p>มีสั่งซื้อในไลน์ออฟฟิเชียลของบริษัท</p>
                            </div>
                        </div>
                        <div class="option"><input class="toggle" id="toggle4" type="checkbox" /><label class="title" for="toggle4">อยากได้สระว่ายน้ำสักลูกต้องเตรียมค่าใช้จ่ายเริ่มต้นเท่าไหร่</label>
                            <div class="content2">
                                <p>ไม่แน่นอนแล้วแต่ขนาดออพชั่นสระ คุณลูกค้าสามารถติดต่อขอคำปรึกษาได้ฟรี</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 text-center">
                    <a href="tel:0887896452" class="btn-curve btn-tel btn-bord btn-lit mt-30">
                        0887896452
                    </a>
                    <a href="#contact" class="btn-curve btn-form btn-bord btn-lit mt-30">
                        Form Submit
                    </a>
                    <a href="https://line.me/R/ti/p/%40908bbguw" target="_bank" class="btn-curve btn-line btn-bord btn-lit mt-30">
                        Line@
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="work-carousel metro section-padding" >
        <div class="container">
            <div class="section-head text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8 col-sm-10">
                        <h6 class="custom-font wow fadeInDown" data-wow-delay=".3s">Our Client</h6>
                        <h4 class="playfont wow flipInX" data-wow-delay=".5s" style="font-size: 1.5rem;">ลูกค้าของเรา</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    @php
                        $images = \File::allFiles(public_path('img/customer'));
                    @endphp
                    @foreach ($images as $image)
                        <img src="{{ asset('img/customer/' . $image->getFilename()) }}"style="width:80px;">
                    @endforeach
                </div>
                <div class="col-md-12 text-center">
                    <a href="tel:0887896452" class="btn-curve btn-tel btn-bord btn-lit mt-30">
                        0887896452
                    </a>
                    <a href="#contact" class="btn-curve btn-form btn-bord btn-lit mt-30">
                        Form Submit
                    </a>
                    <a href="https://line.me/R/ti/p/%40908bbguw" target="_bank" class="btn-curve btn-line btn-bord btn-lit mt-30">
                        Line@
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
<script>
    function isNumberKey(evt){
        var charCode = (evt.which) ? evt.which : evt.keyCode
        return !(charCode > 31 && (charCode < 48 || charCode > 57));
    }
</script>
@endsection