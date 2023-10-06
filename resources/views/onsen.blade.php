@extends('theme.default')

@section('content')
<!-- ==================== Start Header ==================== -->

<header class="pages-header bg-img valign parallaxie" data-background="{!! asset('img/onsen/interpoolspa_onsen_2.jpg') !!}" data-overlay-dark="5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cont text-center">
                    <h1>ออนเซ็น</h1>
                    <div class="path">
                        <a href="{!! route('home') !!}">Home</a><span>/</span><a href="{!! route('onsen') !!}" class="active">Onsen</a>
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
                                    <h6>ONSEN (ออนเซ็น)</h6>
                                    <p>ปัจจุบันออนเซ็น (Onsen) ได้รับความนิยมอย่างแพร่หลาย อย่างที่ทราบกันว่าต้นกำเนิดของน้ำแร่ธรรมชาตินั้นเกิดจากน้ำใต้ดินที่ค่อยๆ ซึมผ่านชั้นของดินและหินขึ้นมา ซึ่งกระบวนการนี้ทำให้น้ำที่ขึ้นมามีส่วนผสมของน้ำแร่ต่างๆ ล้วนแต่เป็นประโยชน์ต่อร่างกายสามารถช่วยบรรเทาอาการปวดกระดูก ปวดกล้ามเนื้อ การไหลเวียนโลหิตดีขึ้น ช่วยลดความเครียดทั้งร่างกายและจิตใจ ช่วยขยายหลอดเลือดทำให้ระบบเผาผลาญในร่างกายดีขึ้น เป็นต้น
                                        แต่อย่างไรก็ตามการจะเดินทางไปแช่ออนเซ็นที่มีตามธรรมชาติอาจไม่สะดวกสำหรับบางคน เพราะต้องเดินทางไกลหรือไม่มีเวลาว่างพอที่จะไปแช่ออนเซ็น
                                        ดังนั้นในปัจจุบันจึงมีการพัฒนาระบบสระว่ายน้ำให้มีคุณสมบัติเหมือนกับออนเซ็นที่เกิดขึ้นตามธรรมชาติ โดยทำให้อุณหภูมิน้ำอยู่ที่  42 องศาเซลเซียส ตามมาตรฐานออนเซ็น</p>
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
        <a href="{{asset('img/onsen/interpoolspa_onsen_1.jpg')}}" class="wow fadeInDown" data-wow-delay=".3s">
            <img alt="" src="{{asset('img/onsen/interpoolspa_onsen_1.jpg')}}" />
        </a>
        <a href="{{asset('img/onsen/interpoolspa_onsen_2.jpg')}}" class="wow fadeInDown" data-wow-delay=".3s">
            <img alt="" src="{{asset('img/onsen/interpoolspa_onsen_2.jpg')}}" />
        </a>
        <a href="{{asset('img/onsen/interpoolspa_onsen_3.jpg')}}" class="wow fadeInDown" data-wow-delay=".3s">
            <img alt="" src="{{asset('img/onsen/interpoolspa_onsen_3.jpg')}}" />
        </a>
        <a href="{{asset('img/onsen/interpoolspa_onsen_4.jpg')}}" class="wow fadeInDown" data-wow-delay=".3s">
            <img alt="" src="{{asset('img/onsen/interpoolspa_onsen_4.jpg')}}" />
        </a>
        <a href="{{asset('img/onsen/interpoolspa_onsen_5.jpg')}}" class="wow fadeInDown" data-wow-delay=".3s">
            <img alt="" src="{{asset('img/onsen/interpoolspa_onsen_5.jpg')}}" />
        </a>
        <a href="{{asset('img/onsen/interpoolspa_onsen_6.jpg')}}" class="wow fadeInDown" data-wow-delay=".3s">
            <img alt="" src="{{asset('img/onsen/interpoolspa_onsen_6.jpg')}}" />
        </a>
        <a href="{{asset('img/onsen/interpoolspa_onsen_7.jpg')}}" class="wow fadeInDown" data-wow-delay=".3s">
            <img alt="" src="{{asset('img/onsen/interpoolspa_onsen_7.jpg')}}" />
        </a>
        <a href="{{asset('img/onsen/interpoolspa_onsen_8.jpg')}}" class="wow fadeInDown" data-wow-delay=".3s">
            <img alt="" src="{{asset('img/onsen/interpoolspa_onsen_8.jpg')}}" />
        </a>
    </div>
</section>
@endsection