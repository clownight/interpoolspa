@extends('theme.default')

@section('content')
 <!-- ==================== Start Header ==================== -->
{{-- 
 <header class="pages-header bg-img valign parallaxie" data-background="{!! asset('img/contact-us.jpg') !!}" data-overlay-dark="5" id="bg-page-contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cont text-center">
                    <h1>Thank You</h1>
                    <div class="path">
                    </div>
                </div>
            </div>
        </div>
    </div>
</header> --}}

<!-- ==================== End Header ==================== -->



<!-- ==================== Start about ==================== -->

<section class="contact padding-top" style="padding-top:80px;">
    <div class="info bg-gray pt-80 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="item" style="text-align: center;">
                        {{-- <span class="icon pe-7s-phone"></span> --}}
                        <div class="cont text-center" style="width: 100%;">
                            <h6 class="custom-font">Thanks you for reaching out! </h6>
                            <p>Your message just showed up in my inbox. Talk to you soon!</p>
                        </div>
                    </div>
                    <center><a href="/" class="btn btn-primary mt-3">Back to Home</a></center>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- ==================== End about ==================== -->
@endsection