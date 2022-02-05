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
								<p>Uniqseed Industries Limited (UIL) is among company in engineering, procurement, drilling and construction of major 
                                    projects in the energy and infrastructure sectors. The company is organized in three business divisions, 
                                    Offshore E&C, Onshore E&C (dedicated to conceptual design) and supply chain in procurement. 
                                    Uniqseed is an excellent solution provider with distinctive skills and competences by applying high-techology 
                                    assets to identified solutions aimed at satisfying customer requirements.
								</p>
							</div>
							<div class="row padding">
								<div class="col-md-4 no-gutters animate-box" data-animate-effect="fadeInLeft">
									<a href="#" class="steps active">
										<p class="icon"><span><i class="icon-check" Style="color: #0cf834 !important;"></i></span></p>
										<h3>We are <br>pasionate</h3>
									</a>
								</div>
								<div class="col-md-4 no-gutters animate-box" data-animate-effect="fadeInLeft">
									<a href="#" class="steps">
										<p class="icon"><span><i class="icon-check" Style="color: #0cf834 !important;"></i></span></p>
										<h3>Honest <br>Dependable</h3>
									</a>
								</div>
								<div class="col-md-4 no-gutters animate-box" data-animate-effect="fadeInLeft">
									<a href="#" class="steps">
										<p class="icon"><span><i class="icon-check" Style="color: #0cf834 !important;"></i></span></p>
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
										
											<div class="colorlib-icon">
												<i class="flaticon-conveyor"></i>
											</div>
											<div class="colorlib-text">
												<h3>Engineering</h3>
												<p>The nation’s largest and most respected companies choose UIL for our 
													skilled field services crews and equipment fleet, both of which are ready and able to respond to any situation,
													anywhere. Our field service workers and engineers are trained up, educated, and certified to handle any need your company may have.	
												</p>
												<p style=" margin-top: -20px !important;"><a href="{{ route('services') }}" class="btn btn-primary btn-learn" 
													style="background-color: #78608B; border-radius: 10px; border: solid 3px #baaabb;">Learn more</a>
												</p>
											</div>
										
									</div>

									<div class="colorlib-feature animate-box" data-animate-effect="fadeInLeft">
										
											<div class="colorlib-icon">
												<i class="flaticon-engineer"></i>
											</div>
											<div class="colorlib-text">
												<h3>Tank, Vessel and Piping Inspections</h3>
												<p>Uniqseed Industries Limited is the one name to know when it comes to complete tank, vessel, and piping 
													inspections. With UIL, there are no delays or scheduling of multiple inspections. Our inspectors are fully-equipped with 
													the technology - including an ultrasonic magnetic tank crawler and drones/UAVs
												</p>
												<p style=" margin-top: -20px !important;"><a href="{{ route('services') }}" class="btn btn-primary btn-learn" 
													style="background-color: #78608B; border-radius: 10px; border: solid 3px #baaabb;">See Details</a>
												</p>
											</div>
									
									</div>

									<div class="colorlib-feature animate-box" data-animate-effect="fadeInLeft">
										
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
												<p style=" margin-top: -20px !important;"><a href="{{ route('services') }}" class="btn btn-primary btn-learn" 
													style="background-color: #78608B; border-radius: 10px; border: solid 3px #baaabb;">View Details</a>
												</p>
											</div>
										
									</div>

									<div class="colorlib-feature animate-box" data-animate-effect="fadeInLeft">
											<div class="colorlib-icon">
												<i class="flaticon-skyline "></i>
											</div>
											<div class="colorlib-text">
												<h3>Commisioning and Decommisioning</h3>
												<p>
													Commissioning is a critical stage in the life of any facility. The process may be thought of as a 
													series of vital checks that are undertaken before actual operation begins.
													Decommissioning experts have experience of large-scale decommissioning, unique tools and a global network of
													expertise at their fingertips, we can be trusted to safely and cost-effectively remove your redundant facilities. 
												</p>
												<p style=" margin-top: -20px !important;"><a href="{{ route('services') }}" class="btn btn-primary btn-learn" 
													style="background-color: #78608B; border-radius: 10px; border: solid 3px #baaabb;">More</a>
												</p>
											</div>
										
									</div>

									<div class="colorlib-feature animate-box" data-animate-effect="fadeInLeft">
											<div class="colorlib-icon">
												<i class="flaticon-sketch"></i>
											</div>
											<div class="colorlib-text">
												<h3>Online Task Manager Software</h3>
												<p>Our compliance reporting is best handled proactively. Online Task Manager (OTM) will 
													help you stay on top of your documentation and organize all of it in one place. 
												</p>
												<p style=" margin-top: -20px !important;"><a href="{{ route('services') }}" class="btn btn-primary btn-learn" 
													style="background-color: #78608B; border-radius: 10px; border: solid 3px #baaabb;">Learn more</a>
												</p>
											</div>
									</div>

									<div class="colorlib-feature animate-box" data-animate-effect="fadeInLeft">
										
											<div class="colorlib-icon">
												<i class="flaticon-crane"></i>
											</div>
											<div class="colorlib-text">
												<h3>Manufacturing</h3>
												<p>We are committed towards the manufacturing of different agricultural products.<br/>
													Agro products are the life force, the very source of survival for the human kind. 
													Uniqseed Industries concentrates in the manufacturing of grains, Oil Seeds, and other unique agricultural products
												</p>
												<p style=" margin-top: -20px !important;"><a href="{{ route('services') }}" class="btn btn-primary btn-learn" 
													style="background-color: #78608B; border-radius: 10px; border: solid 3px #baaabb;">See Details</a>
												</p>
											</div>
										
									</div>

									<div class="colorlib-feature animate-box" data-animate-effect="fadeInLeft">
						
											<div class="colorlib-icon">
												<i class="flaticon-architect-with-helmet"></i>
											</div>
											<div class="colorlib-text">
												<h3>Procurement</h3>
												<p>Uniqseed will handle your projects from start to finish, starting from planning, design, costly, proceurement,construction
													and hand over. All the necessary equipments and materials required for a particular job will be acquired by us.
												</p>
												<p style=" margin-top: -20px !important;"><a href="{{ route('services') }}" class="btn btn-primary btn-learn" 
													style="background-color: #78608B; border-radius: 10px; border: solid 3px #baaabb;">View Details</a>
												</p>
											</div>
										
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
										<div class="services-img" style="background-image: url(images/serv4.jpg)"></div>
										<div class="desc">
											<h3>Tank, Vessel and Piping Inspections</h3>
										</div>
									</a>
									<a href="{{ route('services') }}" class="services-wrap animate-box" data-animate-effect="fadeInRight">
										<div class="services-img" style="background-image: url(images/serv3.jpg)"></div>
										<div class="desc">
											<h3>Works</h3>
										</div>
									</a>
									<a href="{{ route('services') }}" class="services-wrap animate-box" data-animate-effect="fadeInRight">
										<div class="services-img" style="background-image: url(images/serv5.jpg)"></div>
										<div class="desc">
											<h3>Procurement</h3>
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
									<a href="{{ route('services') }}" class="services-wrap animate-box" data-animate-effect="fadeInRight">
										<div class="services-img" style="background-image: url(images/serv2.jpg)"></div>
										<div class="desc">
											<h3>Manufacturing</h3>
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