@extends('shy.layout')

@section('content')
<section id="about" class="wrapper view">
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wow fadeInUp text-center" data-wow-duration="1s">
                        <h2 class="card-header white-text">Para makuha mo yung gift, kailangan mong masagot ng tama ang mga tanong.</h2>
                        <br>
                        <div class="col-sm-12 text-center">
                            <p>
                                Are you ready?
                            </p>
                        </div>
                        <div class="col-sm-12">
                            <div class="text-center">
                                <button class="btn btn-danger mb-2 waves-effect waves-light btn-lg" disabled="disabled">
                                    <i class="fa fa-times ml-1"></i>
                                    No
                                </button>
                                <a class="btn btn-info mb-2 waves-effect waves-light btn-lg" href="/shy/1">
                                    <i class="fa fa-check ml-1"></i>
                                    Yes!
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection