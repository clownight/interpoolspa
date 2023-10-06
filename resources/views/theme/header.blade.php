    <!-- ==================== Start Navbar ==================== -->

    <nav class="navbar change navbar-expand-lg">
        <div class="container">

            <!-- Logo -->
            <a class="logo" href="{!! route('home') !!}" style="padding:5px;">
                <img src="{!! asset('img/ips-logo.png') !!}" alt="logo" style="width:80px;">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"><i class="fas fa-bars"></i></span>
            </button>

            <!-- navbar links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="/" role="button"
                            aria-haspopup="true" aria-expanded="false">Home</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="index.html">Main Home</a>
                            <a class="dropdown-item" href="index3.html">Architecture</a>
                            <a class="dropdown-item" href="index2.html">Interior Design</a>
                        </div>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link" href="{!! route('home') !!}">หน้าแรก</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{!! route('about') !!}">เกี่ยวกับเรา</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{!! route('projects') !!}">โครงการ</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false">บทความ</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{!! route('pool') !!}">สระว่ายน้ำ</a>
                            <a class="dropdown-item" href="{!! route('onsen') !!}">ออนเซ็น</a>
                            <a class="dropdown-item" href="{!! route('hydrotherapy') !!}">ธาราบำบัด</a>
                            <a class="dropdown-item" href="{!! route('sauna') !!}">ห้องอบซาวน่า</a>
                            <a class="dropdown-item" href="{!! route('steam') !!}">ห้องอบไอน้ำ</a>
                        </div>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="{!! route('products') !!}">สินค้า</a>
                    </li>
                    <li class="nav-item" style="display:none;">
                        <a class="nav-link" href="{!! route('contact') !!}">ติดต่อเรา</a>
                    </li>
                </ul>
                <div class="social-icon">
                    <a href="https://www.facebook.com/profile.php?id=100083219198137&sk=photos" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://youtube.com/@interpoolspaofficial3505?si=5L9_1CyD9a7o3xK5" target="_blank"><i class="fab fa-youtube"></i></a>
                    {{-- <a href="#0"><i class="fab fa-twitter"></i></a> --}}
                    {{-- <a href="#0"><i class="fab fa-behance"></i></a> --}}
                </div>
                <div class="search">
                    <span class="icon pe-7s-search cursor-pointer"></span>
                    <div class="search-form text-center custom-font">
                        <form>
                            <input type="text" name="search" placeholder="Search">
                        </form>
                        <span class="close pe-7s-close cursor-pointer"></span>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- ==================== End Navbar ==================== -->
