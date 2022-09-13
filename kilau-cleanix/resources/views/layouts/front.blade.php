<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Kilau Cleanix') }}</title>

    <!-- Nucleo Icons -->
  <link href="../admin/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../admin/css/nucleo-svg.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap"></noscript>
  <link rel="preload" as="style" href="../Frontend/css/mbr-additional.css"><link rel="stylesheet" href="../Frontend/css/mbr-additional.css" type="text/css">


    <!-- CSS Files -->
    <link href="../admin/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../admin/css/paper-dashboard.css" rel="stylesheet" />
    <link href="../admin/css/style.css" rel="stylesheet" />

    <link rel="stylesheet" href="../Frontend/css/web/mobirise2.css">
    <link rel="stylesheet" href="../Frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Frontend/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../Frontend/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="../Frontend/css/dropdown/style.css">
    <link rel="stylesheet" href="../Frontend/css/socicon/styles.css">
    <link rel="stylesheet" href="../Frontend/css/theme/style.css">
    <link rel="stylesheet" href="../Frontend/css/parallax/jarallax.css">

    <!-- Styles -->
    <link href="{{ asset('admin/css/paper-dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/custom.css') }}" rel="stylesheet">

</head>
<body>
    @include('layouts.inc.frontnav')
    <div class = "content">
      @include('layouts.inc.body')
        @yield('content')
    </div>


<!-- Scripts -->
<script src="{{ asset('Frontend/css/theme/scripts.js') }}" defer></script>
<script src="{{ asset('Frontend/css/dropdown/navbar-dropdown.js') }}" defer></script>
<script src="{{ asset('Frontend/css/parallax/jarallax.js') }}" defer></script>
<script src="{{ asset('Frontend/css/smoothscroll/smooth-scroll.js') }}" defer></script>
<script src="{{ asset('Frontend/css/embla/embla.min.js') }}" defer></script>
<script src="{{ asset('Frontend/css/embla/script.js') }}" defer></script>

<script src="{{ asset('admin/js/script.js') }}" defer></script>
<script src="{{ asset('admin/js/jquery.min.js') }}" defer></script>
<script src="{{ asset('admin/js/popper.min.js') }}" defer></script>
<script src="{{ asset('admin/js/bootstrap.min.js') }}" defer></script>
<script src="{{ asset('admin/js/perfect-scrollbar.jquery.min.js') }}" defer></script>
<script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}" defer></script>

    
@yield('scripts')

</body>
</html>
