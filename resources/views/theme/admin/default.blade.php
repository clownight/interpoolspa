<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>{{env('APP_NAME')}}</title>
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta property="og:title" content="" />
        <meta property="og:type" content="" />
        <meta property="og:url" content="" />
        <meta property="og:image" content="" />
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('admin/assets/imgs/theme/favicon.svg')}}" />
        <!-- Template CSS -->
        <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/plugins/toastr/toastr.min.css') }}">
        <link href="{{asset('admin/assets/css/main.css?v=1.1')}}" rel="stylesheet" type="text/css" />
        @yield('admin_style')
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    </head>

    <body>
        <div class="screen-overlay"></div>
        <aside class="navbar-aside" id="offcanvas_aside">
            <div class="aside-top">
                <a href="/" class="brand-wrap">
                    <img src="{!! asset('img/ips-logo.png') !!}" alt="logo" style="width:80px;">
                </a>
                <div>
                    <button class="btn btn-icon btn-aside-minimize"><i class="text-muted material-icons md-menu_open"></i></button>
                </div>
            </div>
            <nav>
                <ul class="menu-aside">
                    <li class="menu-item">
                        <a class="menu-link" href="{{route('project_list')}}">
                            <i class="icon material-icons md-format_list_bulleted"></i>
                            <span class="text">เพิ่ม Project</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link" href="{{route('contacts.list')}}">
                            <i class="icon material-icons  material-symbols-outlined">mail</i>
                            <span class="text">ลูกค้าติดต่อ</span>
                        </a>
                    </li>
                </ul>
                <br />
            </nav>
        </aside>
        <main class="main-wrap">
            <header class="main-header navbar">
                <div class="col-search">
                    <form class="searchform">
                        <div class="input-group">
                            <input list="search_terms" type="text" class="form-control" placeholder="Search term" />
                            <button class="btn btn-light bg" type="button"><i class="material-icons md-search"></i></button>
                        </div>
                        <datalist id="search_terms">
                            <option value="Products"></option>
                            <option value="New orders"></option>
                            <option value="Apple iphone"></option>
                            <option value="Ahmed Hassan"></option>
                        </datalist>
                    </form>
                </div>
                <div class="col-nav">
                    <button class="btn btn-icon btn-mobile me-auto" data-trigger="#offcanvas_aside"><i class="material-icons md-apps"></i></button>
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link btn-icon" href="#">
                                <i class="material-icons md-notifications animation-shake"></i>
                                <span class="badge rounded-pill">3</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-icon darkmode" href="#"> <i class="material-icons md-nights_stay"></i> </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="requestfullscreen nav-link btn-icon"><i class="material-icons md-cast"></i></a>
                        </li>
                    </ul>
                </div>
            </header>
            @yield('admin_content')
            <!-- content-main end// -->
            <footer class="main-footer font-xs">
                <div class="row pb-30 pt-15">
                    <div class="col-sm-6">
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        &copy; Watcharagiat
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end">All rights reserved</div>
                    </div>
                </div>
            </footer>
        </main>
        <script src="{{asset('admin/assets/js/vendors/jquery-3.6.0.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/vendors/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/vendors/select2.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/vendors/perfect-scrollbar.js')}}"></script>
        <script src="{{asset('admin/assets/js/vendors/jquery.fullscreen.min.js')}}"></script>
        <script src="{{ asset('/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
        <!-- Main Script -->
        <script src="{{asset('admin/assets/js/main.js?v=1.1" type="text/javascript')}}"></script>
        <script>
            function deletealertbox(formis){
          Swal.fire({  
            title: 'Are you sure To DELETE?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
          }).then((result) => {  
            /* Read more about isConfirmed, isDenied below */  
              if (result.isConfirmed) {    
                $('#'+formis).submit();
                //Swal.fire('Deleted!', '', 'danger')  
              } else if (result.isDenied) {    
                return false;
            }
          });

      };
        </script>
        @yield('admin_script')
    </body>
</html>
