@extends('layouts.main')

    @section('content')

		<div id="colorlib-main">

			<div class="colorlib-contact">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">Read</span>
							<h2 class="colorlib-heading">Get in Touch</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-5">
							<div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="colorlib-icon">
									<i class="icon-globe-outline" style="background-color: #78608B;border-radius: 5px;"></i>
								</div>
								<div class="colorlib-text">
									<p><a href="#">info@domain.com</a></p>
								</div>
							</div>

							<div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="colorlib-icon">
									<i class="icon-map" style="background-color: #78608B;border-radius: 5px;"></i>
								</div>
								<div class="colorlib-text">
									<p>198 West 21th Street, Suite 721 New York NY 10016</p>
								</div>
							</div>

							<div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="colorlib-icon">
									<i class="icon-phone" style="background-color: #78608B;border-radius: 5px;"></i>
								</div>
								<div class="colorlib-text">
									<p><a href="tel://">+123 456 7890</a></p>
								</div>
							</div>
						</div>
						<div class="col-md-7 col-md-push-1">
							<div class="row">
								<div class="col-md-10 col-md-offset-1 col-md-pull-1 animate-box" data-animate-effect="fadeInLeft">
									@include('inc.formErrors')
									
									@if(Session::get('success')) <p class="alert alert-success">{{session('success')}}</p> @endif
                                    {{ Form::open(array('url' => 'contact' , 'method' => 'post')) }}
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" placeholder="Name" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="email" class="form-control" placeholder="Email">
                                        </div>
                                        
                                        <div class="form-group">
                                            <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Message" required></textarea>
                                        </div>

										<div class="row">
											<div class="col-md-4"></div>
											<div class="form-group col-md-6">
												<div class="captcha">
													<span>{!! captcha_img() !!}</span>
													<button type="button" class="btn btn-success"><i class="fa fa-refresh" id="refresh"></i></button>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4"></div>
											<div class="form-group col-md-4">
												<input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha" required></div>
											</div>
										</div>

                                        <div class="form-group">
                                            <input type="submit" class="btn btn-primary btn-send-message" style="background-color: #78608B; 
                                            border-radius: 10px; border: solid 3px #baaabb;" value="Send Message">
                                        </div>    
                                    {{ Form::close() }}     
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id="map"></div>	

			<div id="get-in-touch" class="colorlib-bg-color">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<h2>Get in Touch!</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<p class="colorlib-lead">Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
							<p><a href="#" class="btn btn-primary btn-learn">Contact me!</a></p>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	

	@endsection
	
@section('js')
<script type="text/javascript">
	$('#refresh').click(function(){
		console.log('clicked');
	$.ajax({
		type:'GET',
		url:'refreshcaptcha',
		success:function(data){
			console.log('data:', data);
			$(".captcha span").html(data.captcha);
		}
	});
	});
</script>
@endsection