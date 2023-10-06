@extends('theme.default')
@section('content')
<!-- ==================== Start Header ==================== -->

<header class="pages-header bg-img valign parallaxie" data-background="{!! asset('img/steam/interpoolspa_steam.jpg') !!}" data-overlay-dark="5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cont text-center">
                    <h1>ห้องอบซาวน่า</h1>
                    <div class="path">
                        <a href="{!! route('home') !!}">Home</a><span>/</span><a href="{!! route('steam') !!}" class="active">Steam Room</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<section class="blog-pg single section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-11">
                <div class="post">
                    <div class="content pt-20">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <div class="cont">
                                    <h6>STEAM ROOM (ห้องอบไอน้ำ)</h6>
                                    <div class="spacial">
                                        <p>อินเตอร์พูลสปา เป็นผู้นำเข้าสินค้าเครื่องกำเนิดไอน้ำมาตรฐาน หลากหลายแบรนด์ ให้ลูกค้าได้เลือก ได้แก่ KASTOR, CALO และ TYLO ซึ่งเป็นที่รู้จักกันดีทั้งในเมืองไทยและต่างประเทศ</p>
                                    </div>
                                    <p>ออกแบบห้องอบไอน้ำ นิยมออกแบบในสองลักษณะ คือ รูปแบบห้องคอนกรีตปูด้วยกระเบื้อง อาจจะเป็นเซรามิค หรือกระเบื้องดินเผา อีกรูปแบบหนึ่งคือ ห้องสำเร็จรูปวัสดุที่ใช้อาจเป็น Fiberglass หรือ MPC</p>

                                    <h6 class="mt-40">STEAM ROOM (ประโยชน์ของการอบไอน้ำ)</h6>

                                    <p>ประโยชน์ของห้องอบไอน้ำ รู้จักกันมาเป็นพันปีตลอดระยะเวลาที่ผ่านมาผู้ใช้ห้องอบไอน้ำ เพื่อช่วยให้รู้สึกดียิ่งขึ้นและฟื้นฟูสุขภาพทั้งหมดโดยรวม ปลายศตวรรษที่ 20 และต้นศตวรรษที่ 21 กระแสการดูแลตัวเองในสังคมตะวันตกสูงขึ้นอย่างมาก ทำให้ธุรกิจห้องอบไอน้ำ ถูกขยายเติบโตอย่างรวดเร็ว</p>
             

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
        <a href="{{asset('img/steam/steam_6.jpg')}}" class="wow fadeInDown" data-wow-delay=".3s">
            <img alt="" src="{{asset('img/steam/steam_6.jpg')}}" />
        </a>
        <a href="{{asset('img/steam/steam_7.jpg')}}" class="wow fadeInDown" data-wow-delay=".3s">
            <img alt="" src="{{asset('img/steam/steam_7.jpg')}}" />
        </a>
        <a href="{{asset('img/steam/interpoolspa_steam_2.jpg')}}" class="wow fadeInDown" data-wow-delay=".3s">
            <img alt="" src="{{asset('img/steam/interpoolspa_steam_2.jpg')}}" />
        </a>
        <a href="{{asset('img/steam/steam_1.jpg')}}" class="wow fadeInDown" data-wow-delay=".3s">
            <img alt="" src="{{asset('img/steam/steam_1.jpg')}}" />
        </a>
        <a href="{{asset('img/steam/steam_2.jpg')}}" class="wow fadeInDown" data-wow-delay=".3s">
            <img alt="" src="{{asset('img/steam/steam_2.jpg')}}" />
        </a>
        <a href="{{asset('img/steam/steam_3.jpg')}}" class="wow fadeInDown" data-wow-delay=".3s">
            <img alt="" src="{{asset('img/steam/steam_3.jpg')}}" />
        </a>
        <a href="{{asset('img/steam/steam_4.jpg')}}" class="wow fadeInDown" data-wow-delay=".3s">
            <img alt="" src="{{asset('img/steam/steam_4.jpg')}}" />
        </a>
        <a href="{{asset('img/steam/steam_5.jpg')}}" class="wow fadeInDown" data-wow-delay=".3s">
            <img alt="" src="{{asset('img/steam/steam_5.jpg')}}" />
        </a>
    </div>
</section>
@endsection
