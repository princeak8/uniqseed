@extends('layouts.main')

@section('content')

<div id="colorlib-main">

<div class="colorlib-about">
    <div class="colorlib-narrow-content">
        <div class="row row-bottom-padded-md">
            <div class="col-md-6">
                <div class="about-img animate-box" data-animate-effect="fadeInLeft" style="background-image: url(images/img_bg_44.jpg);">
                </div>
            </div>
            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
            <div class="about-desc">
								<span class="heading-meta">Welcome</span>
								<h2 class="colorlib-heading">Who we are</h2>
								<p>Uniqseed Industries Limited is among company in engineering, procurement, drilling and construction of major 
                                    projects in the energy and infrastructure sectors. The company is organized in three business divisions, 
                                    Offshore E&C, Onshore E&C (dedicated to conceptual design) and supply chain in procurement. 
                                    Uniqseed is an excellent solution provider with distinctive skills and competences by applying high-techology 
                                    assets to identified solutions aimed at satisfying customer requirements.
								</p>
								<p>Uniqseed Industries Limited offers environmental consulting (geologists, engineers, chemists, 
									biologists, regulatory experts), industrial services (industrial technicians, experienced heavy equipment operators,
									and drillers) and emergency response (spill response personnel and equipment). 
									This unique combination allows us to be flexible and cost-effective when planning and implementing projects.With offices
									throughout the central states, UIL serves manufacturing companies, intermodal transportation companies,
									 petroleum companies, government organizations (state, federal, local), real estate developers, financial and educational
									  institutions, and more.
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
                            <p class="icon"><span><i class="icon-check" Style="color: #0cf834 !important;" ></i></span></p>
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