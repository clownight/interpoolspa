@extends('theme.default')

@section('content')
    <!-- ==================== Start Slider ==================== -->

    <header class="pages-header work-header bg-img valign" data-background="{!! asset('img/009.png') !!}" data-overlay-light="9">
        <div class="container">
            <div class="section-head text-center mb-0">
                <div class="row justify-content-center">
                    <div class="col-lg-7 col-md-9 col-sm-11">
                        <h6 class="custom-font">Our Projects</h6>
                        <h4 class="">โครงการทั้งหมดของเรา <br/> InterPoolSpa</h4>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- ==================== End Slider ==================== -->



    <!-- ==================== Start works ==================== -->

    <section class="portfolio section-padding">
        <div class="container">
            <div class="row">

                <!-- filter links -->
                <div class="filtering text-center col-12">
                    <div class="filter box">
                        <span data-filter='*' class="active">All</span>
                        <span data-filter='.pool'>Pool Villa</span>
                        <span data-filter='.sauna'>Sauna</span>
                        <span data-filter='.steam'>Steam</span>
                        <span data-filter='.onsen'>Onsen</span>
                        <span data-filter='.hydrotherapy'>Hydrotherapy</span>
                        {{-- <span data-filter='.residential'>Residential</span> --}}
                    </div>
                </div>

                <!-- gallery -->
                <div class="gallery twsty inf-lit full-width">

                    @foreach ($projects as $project)
                        <!-- gallery item -->
                        <div class="items house  @foreach (json_decode($project->tag) as $tag) {{$tag->tag}} @endforeach 
                        three-column wow fadeInUp mt-50" data-wow-delay=".7s">
                            <div class="item-img bg-img" data-background="{{ asset($project->cover) }}">
                                <a href="{!! route('project_detail',$project->id) !!}">
                                    <div class="item-img-overlay"></div>
                                </a>
                            </div>
                            <div class="info mt-10" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                                <h5>{{$project->name}}</h5>
                                <span>{{$project->location}}</span>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        </div>
    </section>

    <!-- ==================== End works ==================== -->
@endsection
@section('script')
<script>
    var logo = $(".navbar.change .logo> img");
    logo.attr('src', window.location.origin + '/interpoolspav2/public/img/ips-logo.png');

</script>
@endsection