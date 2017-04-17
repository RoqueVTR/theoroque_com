<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
<body data-spy="scroll" data-target=".navbar" data-offset="50">

    @include('common.navbar')

    @include('home')

    @include('about')
    
    @include('projects')

    @include('testimonials')
    
    @include('contact')

    @include('common.modal')

    @include('common.footer')

    <a id="topBtn" class="btn btn-elegant animated bounceIn"><strong><i class="fa fa-angle-double-up" id="arrow-up"></i></strong></a>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
    <!-- MDB Scripts -->
    <script src="/js/tether.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/mdb.min.js"></script>
    <script src="/js/custom.js"></script>
    <!-- Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key={{env('MAP_API_KEY')}}&callback=addressMap"></script>
    <script>
        new WOW().init();
    </script>
</body>
</html>
