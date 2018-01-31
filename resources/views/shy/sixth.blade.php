@extends('shy.layout')

@section('content')
<section id="shy" class="wrapper view">
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wow fadeInUp text-center" data-wow-duration="1s">
                        <h2 class="card-header white-text">Saan ang favorite nating kainan?</h2>
                        <br>

                        <div class="col-sm-12">
                            <div class="text-center">

                                <div class="btn-group-vertical" data-toggle="buttons">
                                  <label class="btn btn-primary active">
                                    <input type="radio" name="options" id="option1" autocomplete="off" checked> Teriyaki Boy
                                  </label>
                                  <label class="btn btn-primary">
                                    <input type="radio" name="options" id="option2" autocomplete="off"> Candy
                                  </label>
                                  <label class="btn btn-primary">
                                    <input type="radio" name="options" id="option3" autocomplete="off"> Jollibee
                                  </label>
                                  <label class="btn btn-primary">
                                    <input type="radio" name="options" id="option4" autocomplete="off"> Pepper Lunch
                                  </label>
                                </div>

                            </div>
                        </div>
                        <br>
                        <div class="col-sm-12">
                            <button class="btn btn-info mb-2 waves-effect waves-light btn-lg" id="submit">
                                <i class="fa fa-send ml-2"></i>
                                Submit
                            </button>
                        </div>
                        <div class="col-sm-12">
                            <div class="text-center">
                                <h4 class="green-text" id="correct" style="display: none">
                                    Yay! Let's go sa final question.
                                </h4>
                                <h4 class="red-text" id="wrong" style="display: none">
                                    Wrong answer! Di mo yata ako love :(
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
    $("#submit").on("click", function() {
        if($("#option4").is(':checked')) {
            $("#correct").fadeIn();
            $("#wrong").fadeOut();
            setTimeout(function() {
                window.location.href = "/shy/7";
            }, 2000);
        }
        else if ($("#option3").is(':checked')){
            $("#correct").fadeOut();
            $("#wrong").text('Bully ka! Pwede, pero hindi eh.');
            $("#wrong").fadeIn();
        }
        else {
            $("#correct").fadeOut();
            $("#wrong").fadeIn();
        }
    });
</script>
@endsection