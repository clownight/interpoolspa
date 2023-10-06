@extends('theme.default')

@section('content')
<!-- ==================== Start Header ==================== -->

<header class="pages-header bg-img valign parallaxie" data-background="{!! asset('img/slid/slide-02.jpg') !!}" data-overlay-dark="5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cont text-center">
                    <h1>ห้องอบซาวน่า</h1>
                    <div class="path">
                        <a href="{!! route('home') !!}">Home</a><span>/</span><a href="{!! route('sauna') !!}" class="active">Sauna</a>
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
                                    <h6>SAUNA ROOM (ห้องอบซาวน่า)</h6>
                                    <div class="spacial">
                                        <p>อินเตอร์พูลสปา มีโรงงานผลิตห้องอบซาวน่า เพื่อผลิตงานมาตรฐาน ด้วยช่างไม้ที่มีประสบการณ์ในการผลิตงานซาวน่าโดยเฉพาะ ทำให้ห้องอบซาวน่าของเรามีรูปแบบที่สวยงาม ทันสมัย และได้คุณภาพเหมาะแก่การใช้งาน</p>
                                    </div>
                                    <p>การออกแบบห้องอบซาวน่า ทางอินเตอร์พู่ลสปา จะคำนึงถึงประโยชน์การใช้งาน คุณภาพ และความสวยงามเป็นหลัก โดยสามารถผลิตงานได้ตามพื้นที่ลูกค้ามีหรือกำหนดไว้ จึงทำให้งานที่ออกมาสามารถเข้ากันได้กับตัวบ้าน หรือที่พักได้อย่างพอดี ตัวห้องสามารถออกแบบให้เป็นแบบลอยตัว หรือแบบ Built-in ได้ตามคามเหมาะสม โดยตำแหน่งที่ติดตั้งห้องอบซาวน่า ควรเป็นตำแหน่งในร่ม ไม่ควรให้ไม้โดนความชื้นหรือน้ำฝน ซึ่งอาจทำให้อายุการใช้งานของห้องสั้นลง

                                        ไม้ที่นิยมใช้ในการผลิตห้องอบซาวน่า ได้แก่ ไม้สน สแกนติเนเวีย หรือ Nordic Spruce, ไม้อะบาชิ หรือ African Abachi, ไม้เฮ็มล็อก หรือ Canandian Hemlock เป็นต้น ซึ่งไม้เหล่านี้ จะมีคุณสมบัติไม่อมความร้อน และมีน้ำหนักเบา เหมาะกับการผลิตห้องอบซาวน่าเป็นอย่างมาก ไม้ที่ทางอินเตอร์พูลสปาเลือกใช้ในการผลิตห้องอบซาวน่า จะต้องเป็นไม้ที่ผ่านกระบวนการอบเป็นอย่างดี ทำให้ไม้มีความชื้นไม่เกิน 10% ตามมาตรฐาน UL รวมทั้งมีการอบน้ำยาเพิื่อป้องกันแมลงหรือสัตว์กัดแทะ (การอบน้ำยาจากโรงงานจะมีอายุ 3 ปี เมื่อครบกำหนดควรมีการเคลือบน้ำยารักษาไม้อย่างสม่ำเสมอ)</p>

                                    <div class="row">
                                        <div class="justified-gallery">
                                            <a href="{{asset('img/sauna/interpoolspa_sauna_7.jpg')}}" class="wow fadeInDown" data-wow-delay=".3s">
                                                <img alt="" src="{{asset('img/sauna/interpoolspa_sauna_7.jpg')}}" />
                                            </a>
                                        </div>
                                    </div>

                                

                                    <h6 class="mt-40">SAUNA BENEFITS (ประโยชน์ของการอบซาวน่า)</h6>

                                    <ul>
                                        <li><span>01</span> ทําให้กล้ามเนื้อที่เหนื่อย หรือ เมื่อยล้าผ่อนคลายลง</li>
                                        <li><span>02</span> ช่วยบรรเทาความเหน็ดเหนื่อย</li>
                                        <li><span>03</span> ช่วยบรรเทาความเครียด หรือ ความกดดันต่างๆภายในร่างกาย</li>
                                        <li><span>04</span> เพิ่มอัตราการเผาผลาญอาหารในร่างกาย</li>
                                        <li><span>05</span> ช่วยให้ระบบการไหลเวียนต่างๆในร่างกายดีขึ้น</li>
                                        <li><span>06</span> บรรเทาความเจ็บปวดจากโรคข้ออักเสบได้ชั่วคราว</li>
                                        <li><span>07</span> ทําให้การรักษาดีขึ้น และมีการหลั่งสารบรรเทาความเจ็บปวดตามธรรมชาติ</li>
                                        <li><span>08</span> เพิ่มความต้านทานต่อความเจ็บป่วยและโรคภัย</li>
                                        <li><span>09</span> เผาผลาญพลังงาน 300 Kcal ระหว่างอบซาวน่าในระยะการใช้งานปรกติ</li>
                                        <li><span>10</span> ช่วยทําให้ผิวพรรณสดชื่น เปล่งปลั่ง</li>
                                        <li><span>11</span> ทําให้รู้สึกสดชื่นกระปรี้กระเปร่าในทุกส่วน ซึ่งการอาบน้ำทั่วไปไม่สามารถทําได้</li>
                                        <li><span>12</span> ทําให้บ้านหรือที่พักอาศัยของคุณ ดูหรูหราและมีคุณค่ามากยิ่งขึ้น</li>
                                    </ul>
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
        <a href="{{asset('img/sauna/interpoolspa_sauna_1.jpg')}}" class="wow fadeInDown" data-wow-delay=".3s">
            <img alt="" src="{{asset('img/sauna/interpoolspa_sauna_1.jpg')}}" />
        </a>
        <a href="{{asset('img/sauna/interpoolspa_sauna_2.jpg')}}" class="wow fadeInDown" data-wow-delay=".3s">
            <img alt="" src="{{asset('img/sauna/interpoolspa_sauna_2.jpg')}}" />
        </a>
        <a href="{{asset('img/sauna/interpoolspa_sauna_3.jpg')}}" class="wow fadeInDown" data-wow-delay=".3s">
            <img alt="" src="{{asset('img/sauna/interpoolspa_sauna_3.jpg')}}" />
        </a>
        <a href="{{asset('img/sauna/interpoolspa_sauna_4.jpg')}}" class="wow fadeInDown" data-wow-delay=".3s">
            <img alt="" src="{{asset('img/sauna/interpoolspa_sauna_4.jpg')}}" />
        </a>
        <a href="{{asset('img/sauna/interpoolspa_sauna_5.jpg')}}" class="wow fadeInDown" data-wow-delay=".3s">
            <img alt="" src="{{asset('img/sauna/interpoolspa_sauna_5.jpg')}}" />
        </a>
        <a href="{{asset('img/sauna/interpoolspa_sauna_6.jpg')}}" class="wow fadeInDown" data-wow-delay=".3s">
            <img alt="" src="{{asset('img/sauna/interpoolspa_sauna_6.jpg')}}" />
        </a>
    </div>
</section>
@endsection