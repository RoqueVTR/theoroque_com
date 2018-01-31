<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Author: Vincent Theo Roque, A Single Page Portfolio">
    <meta name="keywords" content="web developer, software developer, website, project, product, laravel, web development, create an app, web design company, app developer">
    <meta name="robots" content="index,follow">
    <meta name="DC.title" content="Theo Roque Personal Portfolio & Website">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <!-- Favicon -->
    <link rel="shortcut icon" href="/images/theoroque-favicon.png">

    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

    <title>Shy &amp; Theo</title>
</head>
<body>

    @yield('content')

    <footer style="background: #101621">
        <div class="navbar-fixed-bottom">
            <div class="col-xs-12">
                <a class="white-text" href="/">< Back</a>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
    <!-- MDB Scripts -->
    <script src="/js/tether.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/mdb.min.js"></script>
    <script src="/js/custom.js"></script>

    <script>
        new WOW().init();
    </script>

    @yield('scripts')
</body>
</html>