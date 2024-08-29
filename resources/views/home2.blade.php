@extends('theme.default')
@section('css')
<style>
    .btn-tel{
        background: rgb(170, 157, 99) !important;
        color: white;
        border: 0px !important;
        background: 0 0;
        padding: 12px 35px;
        border: 1px solid #1e1e1e;
        position: relative;
        cursor: pointer;
    }
    .btn-form{
        background: rgb(8, 2, 66) !important;
        color: white;
        border: 0px !important;
        background: 0 0;
        padding: 12px 35px;
        border: 1px solid #1e1e1e;
        position: relative;
        cursor: pointer;
    }
    .btn-line{
        background: rgb(10, 194, 56) !important;
        color: white;
        border: 0px !important;
        background: 0 0;
        padding: 12px 35px;
        border: 1px solid #1e1e1e;
        position: relative;
        cursor: pointer;
    }
    .btn-tel:hover{
        background: rgb(124, 115, 74) !important;
        color: white;
        border: 0px !important;
    }
    .btn-form:hover{
        background: rgb(22, 18, 59) !important;
        color: white;
        border: 0px !important;
    }
    .btn-line:hover{
        background: rgb(4, 83, 50) !important;
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
    video{
        position: absolute;
        top:0;
        left:0;
        width:100%;
        height:100%;
        object-fit: cover;
    }
    .video_text{
        position: absolute;
        z-index: 999;
        width: 100%;
        text-align: center;
        bottom: 20%;
        .header-title{
            font-family: "Roboto Slab", 'kanit';
            font-size: 6em;
            text-transform: uppercase;
            font-weight: 500;
            color:white;
        };
        .header-text{
            font-family: "Roboto Slab", 'kanit';
            font-size: 2em;
            color: white;
        }
    }
    .navbar .navbar-nav .nav-link{
        color: #241570 !important;
        font-size: medium;
        font-weight: 600;
    }
    .navbar .social-icon a{
        font-size: 20px;
    }
    .link-phone{
        background: #241570 !important;
        color: white !important;
        padding: 8px 15px;
        font-size: 14px !important;
        border-radius: 25px;
    }
    .playfont,.custom-font,.team .item .info h5,.team .item .info span{
        font-family: "Roboto Slab", 'kanit';
        color: #241570 !important;
    }
    .custom-font{
        font-size: 2rem !important;
    }
    .item .info h5,.team .item .info span{
        font-size: 24px !important;
    }
    .title2{
        color: white !important;
        font-family: "Roboto Slab", 'kanit';
        font-size: 1.8 !important;
        font-weight: 500 !important;
    }
    .bg-blue-custom,.main-footer{
        background: #241570 !important;
    }
    .contact-me{
        background: white;
        color: red;
        font-size: 2em;
        padding: 5px 20px;
        border-radius: 10px;
        font-weight: 700;
        margin-top: 1rem;
    }
    .circle2{
        background: white;
        color: #241570;
        text-align: center;
        margin: 1rem;
        padding: 50px 20px;
        border-radius: 25px;
        h4{
            font-family: "Roboto Slab", 'kanit';
            margin-top: 1.5rem;
        }
    }
    .circle2-icon i{
        font-size: 5rem;
    }
    .fc{
        color:  #1877F2 !important;
    }
    .line_{
        color: rgb(86, 228, 86);
    }
    .btn-submit{
        font-family: "Roboto Slab", 'kanit';
        background: #34805C !important;
        color: white;
        text-transform: uppercase;
        padding: 15px 20px;
        border: 0px !important;
        border-radius: 15px;
    }
    .slick-slide {
    margin: 0 10px;
    }
    .main-footer p{
        color: white !important;
    }
    @media (max-width: 991px) {
  .header-title{
    font-size: 6vw !important;
  }
  .video_text {
    .header-text {
        font-size: 4vw;
    }
}
  .video_text{
    bottom: 13%;
  }
  .circle2 {
      background: white;
      color: #241570;
      text-align: center;
      margin: 1rem;
      padding: 50px 20px;
      border-radius: 25px;
      width: 25% !important;
      flex: none;
      max-width: unset !important;
  }
  .circle2 h4 {
    font-size: 2vw;
  }
  .circle2-icon i {
      font-size: 8vw !important;
  }
  .item .info h5, .team .item .info span {
    font-size: 2.5vw !important;
}
}
</style>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
@endsection
@section('content')

    <header class="slider">
        <div class="swiper-container parallax-slider pt-80">
            <div class="swiper-slide">
                <video controls autoplay muted loop id="myvideo">
                    <source src="{{ asset('interpoolspa.mp4') }}" type="video/mp4">
                </video>
                <div class="video_text">
                    <span class="header-title">Interpoolspa</span><br>
                    <span class="header-text">ผู้เชี่ยวชาญด้านสระว่ายน้ำ ด้วยประสบการณ์มากกว่า 20ปี</span>
                </div>
            </div>
        </div>
    </header>
    <!-- ==================== End Slider ==================== -->


    <section class="team tmgrid section-padding">
        <div class="container">
            <div class="section-head text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8 col-sm-10">
                        <h6 class="custom-font"> </h6>
                        <h4 class="playfont">สร้างสระน้ำคุณภาพ เอกลกษณ์เฉพาะตัวของคุณ</h4>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
       
                <div class="item col-lg-4 col-md-4 col-4 mb-40  wow fadeInUp">
                    <div class="img">
                        <img src="img/home/แต้ 1.jpg" alt="">
                    </div>
                    <div class="info">
                        <h5>สระว่ายน้ำ</h5>
                        <span>POOL</span>
                    </div>
                </div>
                <div class="item col-lg-4 col-md-4 col-4 mb-40  wow fadeInUp">
                    <div class="img">
                        <img src="img/home/พระ 1.jpg" alt="">
                    </div>
                    <div class="info">
                        <h5>ออนเซ็น</h5>
                        <span>ONSEN</span>
                    </div>
                </div>
                <div class="item col-lg-4 col-md-4 col-4 mb-40  wow fadeInUp">
                    <div class="img">
                        <img src="img/home/IMG_3059.JPG" alt="">
                    </div>
                    <div class="info">
                        <h5>ซาวน่า</h5>
                        <span>SUANA ROOM</span>
                    </div>
                </div>
                <div class="item col-lg-4 col-md-4 col-4 mb-40  wow fadeInUp">
                    <div class="img">
                        <img src="img/home/การกีฬา 1.jpg" alt="">
                    </div>
                    <div class="info">
                        <h5>สตีม</h5>
                        <span>STEAM ROOM</span>
                    </div>
                </div>
                <div class="item col-lg-4 col-md-4 col-4 mb-40  wow fadeInUp">
                    <div class="img">
                        <img src="img/home/ธารา 1.jpg" alt="">
                    </div>
                    <div class="info">
                        <h5>ธาราบำบัด</h5>
                        <span>HYDROTHERAPY</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="work-carousel metro section-padding bg-blue-custom">
        <div class="container-fulid">
            <div class="container">
                <div class="section-head text-center">
                    <div class="row justify-content-center">
                        <h6 class="custom-font title2 wow fadeInDown" data-wow-delay=".3s">
                            INTERPOOLSPA พร้อมดูแลสระว่ายน้ำของคุณ บริการครบวงจร
                            ตั้งแต่การออกแบบจนถึงการติดตั้ง พร้อมทีมงานมืออาชีพ</h6>
                        <div class="contact-me">ติดต่อสอบถาม ยินดีให้คำปรึกษาฟรี</div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
               <div class="col-2 circle2">
                <a href="tel:0887896452" target="_blank">
                <div class="circle2-icon">
                    <i class="icon pe-7s-phone"></i>
                </div>
                <h4>โทร 088-7896452</h4>
                </a>
               </div>
               <div class="col-2 circle2">
                <a href="https://www.facebook.com/interpoolspa" target="_blank">
                <div class="circle2-icon fc"><i class="fab fa-facebook-f"></i></div>
                <h4>FACEBOOK</h4>
                </a>
               </div>
               <div class="col-2 circle2">
                <a href="https://line.me/R/ti/p/%40908bbguw" target="_blank">
                <div class="circle2-icon line_"><i class="fab fa-line"></i></div>
                <h4>@INTERPOOLSPA</h4>
                </a>
               </div>
            </div>
        </div>
    </section>

    <!-- ==================== Start Testimonials ==================== -->

    <section class="testimonials grid section-padding"  style="margin-bottom: 0px !important;padding-bottom: 20px;">
    </section>

    <!-- ==================== End Testimonials ==================== -->
    <section class="testimonials grid " id="contact">
        <div class="container">
            <div class="section-head text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8 col-sm-10">
                        {{-- <h6 class="custom-font wow fadeInDown" data-wow-delay=".3s">Contact</h6> --}}
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
                                <button type="submit" class="btn-color btn-submit"><span>Submit</span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding" style="background:#c9c9c9;padding:40px;margin-top:1rem;">
        <div class="container-fulid">
            <div class="row">
                <div class="col-12">
                    <div class="team-container logo_customer">
                        @php
                        $images = \File::allFiles(public_path('img/customer'));
                        @endphp
                        @foreach ($images as $image)
                        <div class="item wow fadeInUp" data-wow-delay=".3s" sty>
                            <div class="img wow imago">
                                <img src="{{ asset('img/customer/' . $image->getFilename()) }}" alt="">
                            </div>
                        </div>
                        @endforeach

                    </div>
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

    $('.logo_customer').slick({
        slidesToShow: 15,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
        autoplay: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 15
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 6
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 4
                }
            }
        ]
    });
</script>
@endsection