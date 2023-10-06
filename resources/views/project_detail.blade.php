@extends('theme.default')

@section('content')
<!-- ==================== Start Header ==================== -->
<header class="pages-header bg-img valign parallaxie" id="bg-page-project-detail" data-background="{{ asset($project_detail->cover) }}" data-overlay-dark="5" >
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cont text-center">
                    <h1>{{$project_detail->name}}</h1>
                    <div class="path">
                        <a href="{!! route('home') !!}">Home</a><span>/</span><a href="{!! route('projects') !!}">Projects</a><span>/</span><a href="{!! route('project_detail',$project_detail->id)!!}" class="active">{{$project_detail->name}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- ==================== End Header ==================== -->
<!-- ==================== Start about ==================== -->

<section class="about section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="exp-img wow fadeInUp" data-wow-delay=".3s">
                    <div class="img bg-img wow imago" data-background="{!! asset('img/house/1689746566553.jpg') !!}">
                        <div class="since custom-font">
                            {{-- <span>Since</span>
                            <span>1999</span> --}}
                        </div>
                        <div class="years custom-font font-Noto">
                            <h2> </h2>
                            <h5>@foreach (json_decode($project_detail->tag) as $tag) {{$tag->tag}} @endforeach</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 valign">
                <div class="exp-content wow fadeInUp" data-wow-delay=".3s">
                    <h6 class="sub-title">Project</h6>
                    <h2 class="mb-20">ข้อมูลโครงการ</h2>
                    <p>{{$project_detail->description}}</p>
                    <div class="numbers mt-50" style="display:none;">
                        <div class="row">
                            <div class="col-md-4 wow fadeInDown" data-wow-delay=".3s">
                                <div class="item project-room">
                                    <h3><span class="nbr custom-font">0</span></h3>
                                    <h6>ห้องนอน</h6>
                                </div>
                            </div>
                            <div class="col-md-4 wow flipInX" data-wow-delay=".5s">
                                <div class="item project-room">
                                    <h3><span class="nbr custom-font">0</span></h3>
                                    <h6>ห้องน้ำ</h6>
                                </div>
                            </div>
                            <div class="col-md-4 wow flipInX" data-wow-delay=".4s">
                                <div class="item project-room">
                                    <h3><span class="nbr custom-font">0</span></h3>
                                    <h6>ห้องนั่งเล่น</h6>
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
<!-- ==================== Start before & after ==================== -->

<section class="after-before section-padding">
    <div class="background bg-img parallaxie" data-background="{!! asset('img/04.jpg') !!}" data-overlay-dark="7"></div>
    <div class="container ontop">
        {{-- <div class="section-head text-center wow fadeInUp" data-wow-delay=".3s">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <h6 class="custom-font">Best Works</h6>
                    <h4 class="playfont">Drag the Slider to See
                        the Transformation One of the Interior</h4>
                </div>
            </div>
        </div> --}}
        <div class="row">
            <div class="col-lg-12">
                <div class="dotsbg wow fadeInUp" data-wow-delay=".3s">
                    <div class="twentytwenty-container wow imago">
                        <img src="{!! asset($project_detail->cover) !!}" alt=""/>
                        <img src="{!! asset($project_detail->cover) !!}" alt=""/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== End before & after ==================== -->

<!-- ==================== Start about ==================== -->

<section class="about section-padding" style="display:none;">
    <div class="container">
        <div class="section-head text-center">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-10">
                    <h6 class="custom-font wow fadeInDown" data-wow-delay=".3s">Map</h6>
                    <h4 class="playfont wow flipInX" data-wow-delay=".5s">ที่ตั้งโครงการ</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="extra wow fadeInUp" style="height:100%" data-wow-delay=".3s">
                    <div id="ieatmaps" class="map"></div>
                </div>
            </div>
            <div class="col-lg-6 valign">
                <div class="specialty wow fadeInUp" data-wow-delay=".5s">
                    <ul>
                        <li><span>01.</span>ห้างสรรพสินค้า เซ็นทรัล เฟสติวัล เชียงใหม่ 3 กม.</li>
                        <li><span>02.</span>แม็คโคร (สาขาเชียงใหม่)  2 กม.</li>
                        <li><span>03.</span>โรงพยาบาลกรุงเทพฯ 2.1 กม.</li>
                        <li><span>04.</span>มหาวิทยาลัยพายัพ 2.4 กม.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- ==================== End about ==================== -->
<!-- ==================== Start projdtal ==================== -->

<section class="projdtal">
    <div class="justified-gallery">
            @foreach (json_decode($project_detail->images) as $img)
            <a href="{!! asset($img->url) !!}" class="wow fadeInDown" data-wow-delay=".3s">
                <img alt="" src="{!! asset($img->url) !!}" />
            </a>
            @endforeach
    </div>
</section>

<!-- ==================== End projdtal ==================== -->




<!-- ==================== Start Video-wrapper ==================== -->

{{-- <section>
    <div class="container-fluid">
        <div class="video-wrapper section-padding bg-img parallaxie valign"
            data-background="img/portfolio/project1/vid.jpg" data-overlay-dark="4">
            <div class="full-width text-center">
                <a class="vid" href="https://vimeo.com/127203262">
                    <div class="vid-butn">
                        <span class="icon">
                            <i class="fas fa-play"></i>
                        </span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section> --}}

<!-- ==================== End Video-wrapper ==================== -->



<!-- ==================== Start call-to-action ==================== -->

{{-- <section class="call-action nogif next">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="content text-center">
                    <a href="project-details2.html">
                        <h6 class="wow" data-splitting>Next Project</h6>
                        <h2 class="wow" data-splitting><b> Luxury </b> Furniture</h2>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="nxt-img bg-img" data-background="img/portfolio/project1/bg.jpg"></div>
</section> --}}

<!-- ==================== End call-to-action ==================== -->

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