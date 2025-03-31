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



    <script src="{{ asset('vendor/soft-ui/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('vendor/soft-ui/js/core/bootstrap.min.js ') }}"></script>
    <script src="{{ asset('vendor/soft-ui/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('vendor/soft-ui/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script src="{{ asset('vendor/soft-ui/js/plugins/chartjs.min.js') }}"></script>
    <script src="{{ asset('vendor/soft-ui/js/soft-ui-dashboard.min.js?v=1.1.0') }}"></script>
</head>

<body class="">
  
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-75">
        <div class="container">
          <div class="row mt-5">
            <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto me-5">
              <div class="card border mt-8">
                <div class="card-header pb-0 text-left bg-transparent">
                  <h3 class="font-weight-bolder text-info text-gradient">Admin Login</h3>
                  <p class="mb-0">Enter your name and password to sign in</p>
                  
                </div>
                <div class="card-body">
                  <form role="form" action="{{ route('try') }}" method="POST">
                    @csrf
                    <label>Name</label>
                    <div class="mb-3">
                      <input type="text" name="name" class="form-control" placeholder="Name" >
                    </div>
                    <label>Password</label>
                    <div class="mb-3">
                      <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                
                    <div class="text-center">
                      <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Sign in</button>
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-4 text-sm mx-auto">
                    Don't have an account?<span class="text-warning fw-bold fs-7"> Contact System Administrator </span>
                  </p>
                  <div class="my-1 px-4">
                    @if ($errors->any())
                      <div class=" text-danger text-center my-auto">
                        <ul class="my-auto py-auto">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                            
                        </ul>
                      </div>
                    @endif
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <img class="img-fluid" src="{{ asset('assets/img/bg.png') }}" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <footer class="footer mt-5 pt-5">
    <div class="container">
      <div class="row">
        <div class="col-8 mx-auto text-center mt-1">
          <img src="{{ asset('assets/img/kuptech-icon.png') }}" style="width: 35px; height: 35px;">
          <p class="mb-0 text-secondary">
            Copyright © <script>
              document.write(new Date().getFullYear())
            </script> <a href="https://kuptech.lyncxus.online/" class="font-weight-bold" target="_blank"> {{ config('const.provider') }}</a>
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->

</body>

</html>