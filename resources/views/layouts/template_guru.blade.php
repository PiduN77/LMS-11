<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('title')

    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets') }}/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('assets') }}/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet"
        href="{{ asset('assets') }}/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('assets') }}/images/favicon.png" />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('style') }}/style2.css">
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('layouts.sidebar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
          <!-- partial:partials/_navbar.html -->
            @include('layouts.navbar_v2')
          <!-- partial -->
          <div class="main-panel">

            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <footer class="footer" style="background: #EDF2F9;">
              <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
              </div>
            </footer>
            <!-- partial -->
          </div>
          <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
      </div>
    <script src="{{ asset('js/custom.js') }}"></script>

    <!-- plugins:js -->
    <script src="{{asset('assets')}}/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('assets')}}/vendors/chart.js/Chart.min.js"></script>
    <script src="{{asset('assets')}}/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="{{asset('assets')}}/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="{{asset('assets')}}/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="{{asset('assets')}}/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('assets')}}/js/off-canvas.js"></script>
    <script src="{{asset('assets')}}/js/hoverable-collapse.js"></script>
    <script src="{{asset('assets')}}/js/misc.js"></script>
    <script src="{{asset('assets')}}/js/settings.js"></script>
    <script src="{{asset('assets')}}/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{asset('assets')}}/js/dashboard.js"></script>
    <!-- End custom js for this page -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
