@extends('layouts.main')

    @section('content')
		
		
		<div id="colorlib-main">
			<aside id="colorlib-hero" class="js-fullheight">
				<div class="flexslider js-fullheight">
					<ul class="slides">
				   	<li style="background-image: url(images/img_bg_11.jpg);">
				   		<div class="overlay"></div>
				   		<div class="container-fluid">
				   			<div class="row">
					   			<div class="col-md-6 col-md-offset-3 col-md-push-3 col-sm-12 col-xs-12 js-fullheight slider-text">
					   				<div class="slider-text-inner">
					   					<div class="desc" style="background-color: rgba(186,170,187, 0.5); border-radius: 20px 0 0 0;">
						   					<h1 style="font-weight: 500;">Piping Service Inspection</h1>
						   					<h2 style="font-weight: bold;">100% efficient productivity <a target="_blank">by Uniqseed Industries</a></h2>
												<p><a class="btn btn-primary btn-learn" href="{{ route('services') }}" >View Services <i class="icon-arrow-right3"></i></a></p>
										</div>
					   				</div>
					   			</div>
					   		</div>
				   		</div>
				   	</li>
				   	<li style="background-image: url(images/img_bg_1.jpg);">
				   		<div class="overlay"></div>
				   		<div class="container-fluid">
				   			<div class="row">
					   			<div class="col-md-6 col-md-offset-3 col-md-push-3 col-sm-12 col-xs-12 js-fullheight slider-text">
					   				<div class="slider-text-inner">
									   <div class="desc" style="background-color: rgba(186,170,187, 0.5); border-radius: 20px 0 0 0;">
						   					<h1 style="font-weight: 500;">Uniqseed Construction</h1>
						   					<h2 style="font-weight: bold;">Massive Project Construction <a target="_blank">by Uniqseed Industries</a></h2>
												<p><a class="btn btn-primary btn-learn" href="{{ route('services') }}" >View Services <i class="icon-arrow-right3"></i></a></p>
										</div>
					   				</div>
					   			</div>
					   		</div>
				   		</div>
				   	</li>
					   <li style="background-image: url(images/img_bg_2.jpg);">
				   		<div class="overlay"></div>
				   		<div class="container-fluid">
				   			<div class="row">
					   			<div class="col-md-6 col-md-offset-3 col-md-push-3 col-sm-12 col-xs-12 js-fullheight slider-text">
					   				<div class="slider-text-inner">
									   <div class="desc" style="background-color: rgba(186,170,187, 0.5); border-radius: 20px 0 0 0;">
						   					<h1 style="font-weight: 500;">Pressure-Vessel Inspection</h1>
						   					<h2 style="font-weight: bold;">100% efficient productivity <a target="_blank">by Uniqseed Industries</a></h2>
												<p><a class="btn btn-primary btn-learn" href="{{ route('services') }}" >View Services <i class="icon-arrow-right3"></i></a></p>
										</div>
					   				</div>
					   			</div>
					   		</div>
				   		</div>
				   	</li>
				   	<li style="background-image: url(images/img_bg_33.jpg);">
				   		<div class="overlay"></div>
				   		<div class="container-fluid">
				   			<div class="row">
					   			<div class="col-md-6 col-md-offset-3 col-md-push-3 col-sm-12 col-xs-12 js-fullheight slider-text">
					   				<div class="slider-text-inner">
									   <div class="desc" style="background-color: rgba(186,170,187, 0.5); border-radius: 20px 0 0 0;">
						   					<h1 style="font-weight: 500;">Tank Service Inspection</h1>
						   					<h2 style="font-weight: bold;">100% efficient productivity <a target="_blank">by Uniqseed Industries</a></h2>
												<p><a class="btn btn-primary btn-learn" href="{{ route('services') }}" >View Services <i class="icon-arrow-right3"></i></a></p>
										</div>
					   				</div>
					   			</div>
					   		</div>
				   		</div>
				   	</li>
				  	</ul>
			  	</div>
			</aside>

			<div class="colorlib-about">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6">
							<div class="about-img animate-box" data-animate-effect="fadeInLeft" style="background-image: url(images/img_bg_44.jpg);">
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="about-desc">
								<span class="heading-meta">Welcome</span>
								<h2 class="colorlib-heading">Who we are</h2>
								<p>Uniqseed Industries Limited (UIL) is a full-service environmental consulting and contracting 
									firm with a strong reputation for providing expert, turnkey solutions for both public and private sector clients.
									Our roots are in environmental compliance, remediation and due diligence but we offer so much more.
								</p>
								<h2 class="colorlib-heading">Our Vision:</h2>
								<p>To be a team of enjoyable, productive people who believe that taking 
									responsibility for our own happiness is the recipe for success.
								</p>
								<h2 class="colorlib-heading">Our Purpose:</h2>
								<p>When our Clients have a need we dive in, diagnose, and apply the right 
									combination of science, safety, grit and ingenuity.
								</p>
							</div>
							<div class="row padding">
								<div class="col-md-4 no-gutters animate-box" data-animate-effect="fadeInLeft">
									<a href="#" class="steps active">
										<p class="icon"><span><i class="icon-check"></i></span></p>
										<h3>We are <br>pasionate</h3>
									</a>
								</div>
								<div class="col-md-4 no-gutters animate-box" data-animate-effect="fadeInLeft">
									<a href="#" class="steps">
										<p class="icon"><span><i class="icon-check"></i></span></p>
										<h3>Honest <br>Dependable</h3>
									</a>
								</div>
								<div class="col-md-4 no-gutters animate-box" data-animate-effect="fadeInLeft">
									<a href="#" class="steps">
										<p class="icon"><span><i class="icon-check"></i></span></p>
										<h3>Always <br>Improving</h3>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="colorlib-services">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">What We do?</span>
							<h2 class="colorlib-heading">Here are some of our services</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-12">
									<div class="colorlib-feature animate-box" data-animate-effect="fadeInLeft">
										<a href="{{ route('services') }}">
											<div class="colorlib-icon">
												<i class="flaticon-worker"></i>
											</div>
											<div class="colorlib-text">
												<h3>Engineering</h3>
												<p>The nation’s largest and most respected companies choose UIL for our 
													skilled field services crews and equipment fleet, both of which are ready and able to respond to any situation,
													anywhere. Our field service workers and engineers are trained up, educated, and certified to handle any need your company may have.	
												</p>
											</div>
										</a>
									</div>

									<div class="colorlib-feature animate-box" data-animate-effect="fadeInLeft">
										<a href="{{ route('services') }}">
											<div class="colorlib-icon">
												<i class="flaticon-sketch"></i>
											</div>
											<div class="colorlib-text">
												<h3>Tank, Vessel and Piping Inspections</h3>
												<p>Uniqseed Industries Limited is the one name to know when it comes to complete tank, vessel, and piping 
													inspections. With UIL, there are no delays or scheduling of multiple inspections. Our inspectors are fully-equipped with 
													the technology - including an ultrasonic magnetic tank crawler and drones/UAVs
												</p>
											</div>
										</a>
									</div>

									<div class="colorlib-feature animate-box" data-animate-effect="fadeInLeft">
										<a href="{{ route('services') }}">
											<div class="colorlib-icon">
												<i class="flaticon-worker"></i>
											</div>
											<div class="colorlib-text">
												<h3>Works</h3>
												<p>
													Our services teams located at strategic sites are professionally trained, flexible,
													reliable, and ready to work. We understand the intricacies of the manufacturing industry, 
													ensuring unparalleled results, constant communication, and strong attention to detail and safety.
												</p>
											</div>
										</a>
									</div>

									<div class="colorlib-feature animate-box" data-animate-effect="fadeInLeft">
										<a href="{{ route('services') }}">
											<div class="colorlib-icon">
												<i class="flaticon-engineering"></i>
											</div>
											<div class="colorlib-text">
												<h3>Commisioning and Decommisioning</h3>
												<p>
													Commissioning is a critical stage in the life of any facility. The process may be thought of as a 
													series of vital checks that are undertaken before actual operation begins.
													Decommissioning experts have experience of large-scale decommissioning, unique tools and a global network of
													expertise at their fingertips, we can be trusted to safely and cost-effectively remove your redundant facilities. 
												</p>
											</div>
										</a>
									</div>

									<div class="colorlib-feature animate-box" data-animate-effect="fadeInLeft">
										<a href="{{ route('services') }}">
											<div class="colorlib-icon">
												<i class="flaticon-crane"></i>
											</div>
											<div class="colorlib-text">
												<h3>Online Task Manager Software</h3>
												<p>Our compliance reporting is best handled proactively. Online Task Manager (OTM) will 
													help you stay on top of your documentation and organize all of it in one place. 
												</p>
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-6">
									<a href="{{ route('services') }}" class="services-wrap animate-box" data-animate-effect="fadeInRight">
										<div class="services-img" style="background-image: url(images/serv1.jpg)"></div>
										<div class="desc">
											<h3>Engineering</h3>
										</div>
									</a>
									<a href="{{ route('services') }}" class="services-wrap animate-box" data-animate-effect="fadeInRight">
										<div class="services-img" style="background-image: url(images/img_tnk.png)"></div>
										<div class="desc">
											<h3>Tank, Vessel and Piping Inspections</h3>
										</div>
									</a>
									<a href="{{ route('services') }}" class="services-wrap animate-box" data-animate-effect="fadeInRight">
										<div class="services-img" style="background-image: url(images/serv2.jpg)"></div>
										<div class="desc">
											<h3>Works</h3>
										</div>
									</a>
								</div>
								<div class="col-md-6 move-bottom">
									<a href="{{ route('services') }}" class="services-wrap animate-box" data-animate-effect="fadeInRight">
										<div class="services-img" style="background-image: url(images/img_bg_55.jpeg)"></div>
										<div class="desc">
											<h3>Commisioning and Decommisioning</h3>
										</div>
									</a>
									<a href="{{ route('services') }}" class="services-wrap animate-box" data-animate-effect="fadeInRight">
										<div class="services-img" style="background-image: url(images/img_soft.jpg)"></div>
										<div class="desc">
											<h3>Online Task Manager Software</h3>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id="get-in-touch" class="colorlib-bg-color">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<h2>Get in Touch!</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<p class="colorlib-lead">For your cost effective engineering solutions</p>
							<p><a href="{{ route('contact') }}" class="btn btn-primary btn-learn" 
								style="background-color: #78608B; border: solid 3px #baaabb;">Contact Us</a>
							</p>
						</div>
						
					</div>
				</div>
			</div>
		</div>

    @endsection