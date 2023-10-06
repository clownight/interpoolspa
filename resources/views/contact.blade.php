@extends('theme.default')

@section('content')
 <!-- ==================== Start Header ==================== -->

 <header class="pages-header bg-img valign parallaxie" data-background="{!! asset('img/contact-us.jpg') !!}" data-overlay-dark="5" id="bg-page-contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cont text-center">
                    <h1>Contact Us</h1>
                    <div class="path">
                        <a href="{!! route('home') !!}">Home</a><span>/</span><a href="{!! route('contact') !!}" class="active">ติดต่อเรา</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- ==================== End Header ==================== -->



<!-- ==================== Start about ==================== -->

<section class="contact">
    <div class="info bg-gray pt-80 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="item">
                        <span class="icon pe-7s-phone"></span>
                        <div class="cont">
                            <h6 class="custom-font">Call Us</h6>
                            <p><a href="tel:0887896452">088-7896452</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="item">
                        <span class="icon pe-7s-mail-open"></span>
                        <div class="cont">
                            <h6 class="custom-font">Email Us</h6>
                            <p><a href="mailto: Interpoolspa01@gmail.com"> Interpoolspa01@gmail.com</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="item">
                        <span class="icon pe-7s-map"></span>
                        <div class="cont">
                            <h6 class="custom-font">Address</h6>
                            <p>125 หมู่ 7 ตำบลสันกลาง ,อำเภอสันกําแพง จังหวัดเชียงใหม่ 50130</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 map-box">
                    <div id="ieatmaps" class="map"></div>
            </div>
            <div class="col-lg-6 form">
                <form id="contact-form" method="post" action="#">

                    <div class="messages"></div>

                    <div class="controls">

                        <div class="form-group">
                            <input id="form_name" type="text" name="name" placeholder="Name" required="required">
                        </div>

                        <div class="form-group">
                            <input id="form_email" type="email" name="email" placeholder="Email"
                                required="required">
                        </div>

                        <div class="form-group">
                            <textarea id="form_message" name="message" placeholder="Message" rows="4"
                                required="required"></textarea>
                        </div>

                        <button type="submit" class="btn-curve btn-color"><span>Send Message</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- ==================== End about ==================== -->
@endsection
@section('script')
<script>(function () {
    var setting = {"query":"INTERPOOLSPA GROUP 125 San Klang, San Kamphaeng District, Chiang Mai, Thailand","satellite":false,"zoom":16,"placeId":"ChIJv1-oSA4l2jARVPBid7wcF5E","cid":"0x91171cbc7762f054","coords":[18.7809505,99.0533207],"lang":"en","queryString":"INTERPOOLSPA GROUP 125 San Klang, San Kamphaeng District, Chiang Mai, Thailand","centerCoord":[18.7809505,99.0533207],"id":"ieatmaps","embed_id":"967873"};
    var d = document;
    var s = d.createElement('script');
    s.src = 'https://1map.com/js/script-for-user.js?embed_id=967873';
    s.async = true;
    s.onload = function (e) {
      window.OneMap.initMap(setting)
    };
    var to = d.getElementsByTagName('script')[0];
    to.parentNode.insertBefore(s, to);
  })();</script><a href="https://1map.com/map-embed">1 Map</a>
@endsection