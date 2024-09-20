<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Fonts and icons -->
    <script src="../js/plugin/webfont/webfont.min.js"></script>
    <script>
      WebFont.load({
        google: { families: ["Public Sans:300,400,500,600,700"] },
        custom: {
          families: [
            "Font Awesome 5 Solid",
            "Font Awesome 5 Regular",
            "Font Awesome 5 Brands",
            "simple-line-icons",
          ],
          urls: ["../css/fonts.min.css"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/plugins.min.css" />
    <link rel="stylesheet" href="../css/kaiadmin.min.css" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="../css/demo.css" />

    <!-- Scripts -->
    
    
</head>
<body>
    <div class="app">
        <div class="wrapper">
            <!-- Sidebar -->
            @include('layouts.sidebar')
            
            <!-- End Sidebar -->
                <div class="main-panel">
                    @include('layouts.navbar')
                    @yield('content')
                    @include('layouts.footer')
                    @include('layouts.custom')
                </div>
            
            @yield('scripts')
        </div>
    </div>

    
    

    <!--   Core JS Files   -->
    <script src="../js/core/jquery-3.7.1.min.js"></script>
    <script src="../js/core/popper.min.js"></script>
    <script src="../js/core/bootstrap.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="../js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

    <!-- Chart JS -->
    <script src="../js/plugin/chart.js/chart.min.js"></script>

    <!-- jQuery Sparkline -->
    <script src="../js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

    <!-- Chart Circle -->
    <script src="../js/plugin/chart-circle/circles.min.js"></script>

    <!-- Datatables -->
    <script src="../js/plugin/datatables/datatables.min.js"></script>

    <!-- Bootstrap Notify -->
    <script src="../js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

    <!-- jQuery Vector Maps -->
    <script src="../js/plugin/jsvectormap/jsvectormap.min.js"></script>
    <script src="../js/plugin/jsvectormap/world.js"></script>

    <!-- Sweet Alert -->
    <script src="../js/plugin/sweetalert/sweetalert.min.js"></script>

    <!-- Kaiadmin JS -->
    <script src="../js/kaiadmin.min.js"></script>

    <!-- Navbar JS -->
     <script src="../js/navbar.js"></script>

    <!-- Kaiadmin DEMO methods, don't include it in your project! -->
    <script src="../js/setting-demo.js"></script>
    <script src="../js/demo.js"></script>
    
    <script src="../js/test.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</body>
</html>
