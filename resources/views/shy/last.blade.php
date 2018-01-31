@extends('shy.layout')

@section('content')
<section id="about" class="wrapper view">
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <img src="/images/shy/img-1.jpg" class="img-fluid z-depth-3 wow zoomIn" data-wow-duration="2s" data-wow-delay="0.3s" alt="Responsive image">
                </div>
                <div class="col-md-6 mt-5 mb-3 text-center">
                    <h5 class="white-text wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                        ...at dahil walang formal proposal na nangyari, ngayon ko gagawin.
                    </h5>
                    <h1 class="white-text wow fadeIn mt-3" data-wow-duration="1s" data-wow-delay="0.6s">
                        Will you (still) be my girlfriend?
                    </h1>
                    <button class="btn btn-danger mt-3 mb-2 waves-effect waves-light btn-lg wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s" disabled="disabled">
                        <i class="fa fa-times ml-1"></i>
                        No
                    </button>
                    <button id="btn-yes" class="btn btn-info mt-3 mb-2 waves-effect waves-light btn-lg wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                        <i class="fa fa-heart ml-1"></i>
                        Yes!
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-12 mb-3">
                    <img src="/images/shy/img-4.jpg" class="img-fluid z-depth-3 wow zoomIn" data-wow-duration="2s" data-wow-delay="0.5s" alt="Responsive image">
                </div>
                <div class="col-lg-4 col-md-6 mb-3">
                    <img src="/images/shy/img-3.jpg" class="img-fluid z-depth-3 wow zoomIn" data-wow-duration="2s" data-wow-delay="0.8s" alt="Responsive image">
                </div>

                <div class="col-lg-4 col-md-6 mb-3">
                    <img src="/images/shy/img-5.jpg" class="img-fluid z-depth-3 wow zoomIn" data-wow-duration="2s" data-wow-delay="0.6s" alt="Responsive image">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mt-3 text-center">
                    <h1 class="animated pulse infinite red-text" style="font-size: 100px; padding-top: 100px;">
                        I love you :*
                    </h1>
                </div>
                <div class="col-md-6 mb-3">
                    <img src="/images/shy/img-2.jpg" class="img-fluid z-depth-3 wow zoomIn" data-wow-duration="2s" alt="Responsive image">
                </div>
            </div>
        </div>
    </div>

</section>
@endsection

@section('scripts')
<script>
    $('#btn-yes').on('click', function() {
        $("html, body").animate({ scrollTop: $(document).height() }, 3000);
    });
</script>
@endsection