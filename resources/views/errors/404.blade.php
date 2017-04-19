@extends('errors.layout')

@section('content')
<section id="404" class="wrapper view">
<div class="page-wrapper">
    <div class="container-fluid" style="margin-top: 10px;">
        <div class="col-md-12">
            <div class="row flex-center">
                <ul>
                    <li><h1>404 Page Not Found</h1></li>
                    <li><button class="btn btn-primary" onclick="window.location.href='{{url('')}}'">Go Home</button></li>
                </ul>
            </div>
        </div>
    </div>
</div>
</section>
@endsection