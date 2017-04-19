<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Author: Vincent Theo Roque, A Single Page Portfolio">
    <meta name="keywords" content="web developer, software developer, website, project, product, laravel, web development, create an app, web design company, app developer">
    <meta name="robots" content="index,follow">
    <meta name="DC.title" content="Theo Roque Personal Portfolio & Website">

    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <!-- Favicon -->
    <link rel="shortcut icon" href="/images/theoroque-favicon.png">

    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

    <title>Theo Roque</title>
</head>
<body>

    <!--Navbar-->
    <nav class="navbar navbar-toggleable-md navbar-dark scrolling-navbar navbar-error">
        
        <ul class="nav navbar-nav nav-flex-icons ml-auto">
            <li class="nav-item ">
                <a class="nav-link navbar-brand animated bounceIn mr-auto" href="{{ url('/#') }}">
                    <img src="/images/theoroque-logo.png" id="app-logo">
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link waves-effect waves-light page-scroll" href="{{ url('') }}"><i class="fa fa-home"></i><span class="hidden-sm-down"> Home</span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link waves-effect waves-light page-scroll" href="{{ url('/#about') }}"><i class="fa fa-user"></i><span class="hidden-sm-down"> About</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link waves-effect waves-light page-scroll" href="{{ url('/#projects') }}"><i class="fa fa-star"></i><span class="hidden-sm-down"> Projects</span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link waves-effect waves-light page-scroll" href="{{ url('/#testimonials') }}"><i class="fa fa-users"></i><span class="hidden-sm-down"> Testimonials</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link waves-effect waves-light page-scroll" href="{{ url('/#contact') }}"><i class="fa fa-address-card"></i><span class="hidden-sm-down"> Contact</span></a>
            </li>
        </ul>
    </nav>
    <!--/.Navbar-->

    @yield('content')

    @include('common.footer')

    <!-- Scripts -->
    <script src="/js/app.js"></script>
    <!-- MDB Scripts -->
    <script src="/js/tether.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/mdb.min.js"></script>
</body>
</html>
