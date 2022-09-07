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

    <!-- CSS Files -->
    <link href="../admin/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../admin/css/paper-dashboard.css" rel="stylesheet" />

    <!-- Styles -->
    <link href="{{ asset('admin/css/paper-dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/custom.css') }}" rel="stylesheet">

</head>
<body>
    <div class = "wrapper">
        @include('layouts.inc.sidebar')
        <div class = "main-panel">
            @include('layouts.inc.adminnav')
            <div class = "content">
                @yield('content')
            </div>
            @include('layouts.inc.adminfooter')
        </div>
    </div>

<!-- Scripts -->
<script src="{{ asset('admin/js/jquery.min.js') }}" defer></script>
<script src="{{ asset('admin/js/popper.min.js') }}" defer></script>
<script src="{{ asset('admin/js/bootstrap.min.js') }}" defer></script>
<script src="{{ asset('admin/js/perfect-scrollbar.jquery.min.js') }}" defer></script>

    
@yield('scripts')

</body>
</html>
