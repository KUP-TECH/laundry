    <!--
    =========================================================
    * Soft UI Dashboard 3 - v1.1.0
    =========================================================

    * Product Page: https://www.creative-tim.com/product/soft-ui-dashboard
    * Copyright 2024 Creative Tim (https://www.creative-tim.com)
    * Licensed under MIT (https://www.creative-tim.com/license)
    * Coded by Creative Tim

    =========================================================

    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
    -->
    <!DOCTYPE html>
    <html lang="en">

    <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>
    {{ config('const.title') }}
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,800" rel="stylesheet" />

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('vendor/soft-ui/css/soft-ui-dashboard.css?v=1.1.0') }} " rel="stylesheet" />
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    </head>

    <body class="g-sidenav-show  bg-gray-100">
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/soft-ui-dashboard/pages/dashboard.html " target="_blank">
        <img src=" {{ asset('vendor/soft-ui/img/logo-ct-dark.png') }} " class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold"> {{ config('const.title') }}</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">

        <ul class="navbar-nav">
        
        @foreach( config('routes') as $d)


        <li class="nav-item my-1">
            <a class="nav-link  active" href="../pages/dashboard.html">
                <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="{{$d['icon']}} fs-6 opacity-8 text-white"></i>
                </div>
                <span class="nav-link-text ms-1">{{$d['title']}}</span>
            </a>
        </li>
        
        @endforeach
        
        
        {{-- <li class="nav-item mt-3">
            <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
        </li> --}}


        
        
        
        </ul>
    </div>

    </aside>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
        <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">{{ $active_link }}</li>
            </ol>
            <h6 class="font-weight-bolder mb-0">{{ $active_link }}</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            
            
        </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
        
        <footer class="footer pt-3  ">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
                <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                    document.write(new Date().getFullYear())
                </script>,
                made with by
                <a href="https://github.com/LydianJay" class="font-weight-bold" target="_blank"> {{ config('const.provider') }}</a>
                </div>
            </div>
            
            </div>
        </div>
        </footer>

    </div>
    </main>


    <script src="{{ asset('vendor/soft-ui/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('vendor/soft-ui/js/core/bootstrap.min.js ') }}"></script>
    <script src="{{ asset('vendor/soft-ui/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('vendor/soft-ui/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script src="{{ asset('vendor/soft-ui/js/plugins/chartjs.min.js') }}"></script>
    <script src="{{ asset('vendor/soft-ui/js/soft-ui-dashboard.min.js?v=1.1.0') }}"></script>
    </body>

    </html>