<section id="contact" class="wrapper view">
    <div class="page-wrapper">
        <div class="container-fluid" style="margin-top: 10px;">
            <div class="col-md-12">
                <div class="row">
			    	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s">
		    			<div class="card rgba-white-strong">
							<div class="card-block">
							    <!--Header-->
							    <div class="form-header mdb-color darken-3">
							        <h3><i class="fa fa-lightbulb-o"></i> Have a project in mind?</h3>
								    <p>Let's talk about it.</p>
							    </div>

							    <!--Body-->
							    <br>

							    <!--Body-->
							    {{ csrf_field() }}
							    <div class="md-form">
									@include('common.notification')
								</div>
							    <div class="md-form">
							        <i class="fa fa-user prefix"></i>
							        <input type="text" id="name" class="form-control" name="name" value="{{ old('name') }}" required>
							        <label for="name">Name</label>
							    </div>
							    <div class="md-form">
							        <i class="fa fa-envelope prefix"></i>
							        <input type="email" id="email" class="form-control" name="email" value="{{ old('email') }}" required>
							        <label for="email">Email</label>
							    </div>
							    <div class="md-form">
							        <i class="fa fa-tag prefix"></i>
							        <input type="text" id="subject" class="form-control" name="subject" value="{{ old('subject') }}" required>
							        <label for="subject">Subject</label>
							    </div>
							    <div class="md-form">
							        <i class="fa fa-pencil prefix"></i>
							        <textarea type="text" id="message" class="form-control md-textarea" name="message" required>{{ old('message') }}</textarea>
							        <label for="message">Message</label>
							    </div>

							    <div class="text-center">
							        <button class="btn btn-primary btn-lg" id="submit">Submit</button>

							        <div class="call">
							            <br>
							            <p>Or would you prefer to call?
							                <br>
							                <span><i class="fa fa-phone"> </i></span> +63 917 507 3906 (Globe)
							            </p>
							        </div>
							    </div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s">
						<h3 class="card-header mdb-color darken-3 white-text"><i class="fa fa-map-marker"></i> I am here!</h3>
						<div class="overlay hm-white-slight z-depth-2">
							<div id="map" class="img-fluid"></div>
							<div class="mask"></div>

							<div id="tr-address"></div>
						</div>
					</div>
                </div>
            </div>
        </div>
    </div>
</section>

@section('scripts')
<script>
	$('#submit').on('click', function() {
		$('#submit').html('Please wait...');
        $.ajax({
            url: '/contact',
            type: 'POST',
            data: {
                _token: $('input[name="_token"]').val(),
                name: $('input[name="name"]').val(),
                email: $('input[name="email"]').val(),
                subject: $('input[name="subject"]').val(),
                message: $('#message').val()
            },
            dataType: 'json',
            success: function(data){
                if (data.isSuccessful) {
                    $('#notif-message').html(data.message);
                    $('#notif-message-wrapper').css('display', 'block');
                }
                else {
                	$('#notif-message-wrapper').css('display', 'none');
                }
                $('#submit').html('Submit');
            }
        });
    });
</script>
@endsection