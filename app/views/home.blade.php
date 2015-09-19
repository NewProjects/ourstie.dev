@extends('layouts.master')
@section('title')Home
@stop
@section('home')

<style type="text/css">
	#arrlogo {
		padding-top: 50px;
		/*padding-bottom: 40px;*/
	}

	#conceptsconstruction {
		padding-top: 12px;
		/*padding-bottom: 40px;*/
	}
</style>

	<!-- banner start -->
	<!-- ================ -->
	<div class="banner">

		<!-- slideshow start -->
		<!-- ================ -->
		<div class="slideshow white-bg">

			<!-- slider revolution start -->
			<!-- ================ -->
			<div class="slider-banner-container">
				<div class="slider-banner-fullscreen">
					<ul>
						<!-- slide 1 start -->
						<li data-transition="fade" data-slotamount="7" data-masterspeed="1000" data-saveperformance="on" data-title="">

						<!-- main image -->
						<img src="images/background.jpg"  alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

						<!-- Translucent background -->
						<div class="tp-caption light-translucent-bg"
							data-x="center"
							data-y="bottom"
							data-speed="400"
							data-start="0"
							style="background-color:rgba(255,255,255,0.3);">
						</div>

						<!-- LAYER NR. 1 -->
						<div class="tp-caption very_large_text black sfl tp-resizeme"
							data-x="center"
							data-y="70"
							data-speed="400"
							data-start="0"
							data-endspeed="200">Boost Your Online Presence
						</div>

						<br>
						<br>


						<!-- LAYER NR. 2 -->
						{{-- <div class="tp-caption sfr small_thin_dark text-center tp-resizeme"
							data-x="center"
							data-y="170"
							data-speed="400"
							data-start="0"
							data-endspeed="200">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Quia dolorum consectetur doloremque a aliquam ullam labore, ducimus adipisci iste animi <br> natus asperiores sequi assumenda minima blanditiis. Culpa quis consectetur ratione.
						</div> --}}

						</li>
						<!-- slide 1 end -->
					</ul>
				</div>
			</div>
			<!-- slider revolution end -->

		</div>
		<!-- slideshow end -->

	</div>
	<!-- banner end -->

	<!-- page-top start-->
	<!-- ================ -->
	<a name="services"></a>
	<div class="page-top object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="100">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<br>
					<br>
					<h1 class="text-center title">Services</h1>
					<div class="separator"></div>
					<p class="text-center">We offer digital and physical marketing implementations.</p>
					<div class="row grid-space-20">
						<div class="col-sm-12 col-md-4 col-md-push-4">
							<img src="images/section-image-5.png" alt="" class="object-non-visible" data-animation-effect="fadeInUp" data-effect-delay="0">
						</div>
						<div class="col-sm-6 col-md-4 col-md-pull-4">
							<div class="box-style-3 right object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="0">
								<div class="icon-container default-bg">
									<i class="fa fa-laptop"></i>
								</div>
								<div class="body">
									<h2>Web Design and Development</h2>
									<p>Custom and templated designing available.</p>
									{{-- <a href="page-services.html" class="link"><span>Read More</span></a> --}}
								</div>
							</div>
							<div class="box-style-3 right object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="200">
								<div class="icon-container default-bg">
									<i class="fa fa-bullseye"></i>
								</div>
								<div class="body">
									<h2>Branding / Identity Design</h2>
									<p>Provide consistent branding for maximum recognition.</p>
									{{-- <a href="page-services.html" class="link"><span>Read More</span></a> --}}
								</div>
							</div>
							<div class="box-style-3 right object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="400">
								<div class="icon-container default-bg">
									<i class="fa fa-copy"></i>
								</div>
								<div class="body">
									<h2>Print Collateral</h2>
									<p>Supporting print materials.</p>
									{{-- <a href="page-services.html" class="link"><span>Read More</span></a> --}}
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-4">
							<div class="box-style-3 object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="0">
								<div class="icon-container default-bg">
									<i class="fa fa-eye"></i>
								</div>
								<div class="body">
									<h2>Graphics / Signage</h2>
									<p>Reinforce your brand identity in creative ways.</p>
									{{-- <a href="page-services.html" class="link"><span>Read More</span></a> --}}
								</div>
							</div>
							<div class="box-style-3 object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="200">
								<div class="icon-container default-bg">
									<i class="fa fa-flag"></i>
								</div>
								<div class="body">
									<h2>Banners</h2>
									<p>Instant recognition at shows and events.</p>
									{{-- <a href="page-services.html" class="link"><span>Read More</span></a> --}}
								</div>
							</div>
							<div class="box-style-3 object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="400">
								<div class="icon-container default-bg">
									<i class="fa fa-server"></i>
								</div>
								<div class="body">
									<h2>Web Hosting</h2>
									<p>Let us ensure your site is up and running.</p>
									{{-- <a href="page-services.html" class="link"><span>Service Price Sheet</span></a> --}}
								</div>
							</div>
							<div>
								<div class="body">
									<a href="{{{ action ('HomeController@showPrice')}}}" class="link"><span>Service Price Sheet</span></a>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- page-top end -->

	<hr>

	<!-- section start -->
	<!-- ================ -->
	<a name="aboutus"></a>
	<div class="section clearfix object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="200">
		<div class="container">
			<br>
			<br>
			<h1 class="text-center">Who We Are</h1>
			<div class="separator"></div>
			<p class="lead text-center">We are a team of professional web developers dedicated to creating value for our clients. <br> Let us craft your online presence.</p>
			<br>
			<div class="row">
				<div class="col-md-6">
					<img src="images/section-image-4.png" alt="">
					<div class="space hidden-md hidden-lg"></div>
				</div>
				<div class="col-md-6">
					<p class="space-top">We strive to deliver the exact desired online presence for each and every client.  Our experience allows for custom development of web applications for a robust user expereience.  In addition to your online presence, we offer a complete suite of marketing materials.</p>
				</div>
			</div>
		</div>
	</div>
	<!-- section end -->



	<!-- section start -->
	<!-- ================ -->
	<div class="section gray-bg clearfix object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="300">
		<div class="container">

			<h2 class="title">Our Team</h2>
			<div class="separator-2"></div>

			<div class="row grid-space-20">
				<div class="col-md-3 col-sm-6">
					<div class="box-style-1 white-bg team-member">
						<div class="overlay-container">
							<img src="images/profile_pic.jpg" alt="">
							<div class="overlay">
								<ul class="social-links clearfix">
									<li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
									<li class="github"><a target="_blank" href="https://github.com/neon670"><i class="fa fa-github"></i></a></li>
									<li class="linkedin"><a target="_blank" href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
								</ul>
							</div>
						</div>
						<h3>Noe</h3>
						CTO
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="box-style-1 white-bg team-member">
						<div class="overlay-container">
							<img src="images/team-member-2.jpg" alt="">
							<div class="overlay">
								<ul class="social-links clearfix">
									<li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
									<li class=""><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li>
									<li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
								</ul>
							</div>
						</div>
						<h3>Benny</h3>
						COO
					</div>
				</div>
				{{-- <div class="col-md-3 col-sm-6">
					<div class="box-style-1 white-bg team-member">
						<div class="overlay-container">
							<img src="images/team-member-3.jpg" alt="">
							<div class="overlay">
								<ul class="social-links clearfix">
									<li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
									<li class="skype"><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li>
									<li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
								</ul>
							</div>
						</div>
						<h3>Mike</h3>
						CMO
					</div>
				</div> --}}
			</div>
		</div>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
	</div>
	<!-- section end -->

	<!-- section start -->
	<!-- ================ -->
	<a name="ourwork"></a>
	<div class="section clearfix object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="300">

		<div class="container">
			<div class="row">
				<br>

				<div class="col-md-12">
					<a name="ourwork"></a>
					<h2>Some of Our Projects</h2>
					<div class="separator-2"></div>

					<!-- isotope filters start -->
					{{-- <div class="filters">
						<ul class="nav nav-pills">
							<li class="active"><a href="#" data-filter="*">All</a></li>
							<li><a href="#" data-filter=".web-design">Web design</a></li>
							<li><a href="#" data-filter=".app-development">App development</a></li>
							<li><a href="#" data-filter=".site-building">Site building</a></li>
						</ul>
					</div> --}}
					<!-- isotope filters end -->

					<!-- portfolio items start -->
					<div class="isotope-container row grid-space-20">
						
						<div class="col-sm-6 col-md-4 isotope-item web-design">
							<div class="image-box" align="center" id="arrlogo">
								{{-- <div class="overlay-container"> --}}
									<img src="images/arrlogo.png" alt="">
									<a href="http://www.goamericanrandr.com/" target="blank" class="overlay small">
										<i class="fa fa-link"></i>
										<span>Web Design</span>
									</a>
								{{-- </div> --}}
								<a href="portfolio-item.html" class="btn btn-light-gray btn-lg btn-block">American Remodeling & Roofing</a>
							</div>
						</div>
						
						<div class="col-sm-6 col-md-4 isotope-item web-design">
							<div class="image-box" align="center" id="conceptsconstruction">
								{{-- <div class="overlay-container"> --}}
									<img src="images/conceptsconstruction.png" alt="">
									<a href="http://conceptsconstruction.com/" target="blank" class="overlay small">
										<i class="fa fa-link"></i>
										<span>Web Design</span>
									</a>
								{{-- </div> --}}
								<a href="portfolio-item.html" class="btn btn-light-gray btn-lg btn-block">Concepts Construction</a>
							</div>
						</div>
						
						<div class="col-sm-6 col-md-4 isotope-item web-design" id="sunsafe">
							<div class="image-box" align="center">
								{{-- <div class="overlay-container"> --}}
									<img src="images/sunsafe.png" alt="">
									<a href="http://www.sunsafefilm.com/" target="blank" class="overlay small">
										<i class="fa fa-link"></i>
										<span>Web Design</span>
									</a>
								{{-- </div> --}}
								<a href="portfolio-item.html" class="btn btn-light-gray btn-lg btn-block">Sunsafe Film</a>
							</div>
						</div>

						{{-- <div class="col-sm-6 col-md-4 isotope-item app-development">
							<div class="image-box">
								<div class="overlay-container">
									<img src="images/portfolio-5.jpg" alt="">
									<a href="portfolio-item.html" class="overlay small">
										<i class="fa fa-link"></i>
										<span>App Development</span>
									</a>
								</div>
								<a href="portfolio-item.html" class="btn btn-light-gray btn-lg btn-block">Project Title</a>
							</div>
						</div> --}}

						{{-- <div class="col-sm-6 col-md-4 isotope-item site-building">
							<div class="image-box">
								<div class="overlay-container">
									<img src="images/portfolio-4.jpg" alt="">
									<a href="portfolio-item.html" class="overlay small">
										<i class="fa fa-link"></i>
										<span>Site Building</span>
									</a>
								</div>
								<a href="portfolio-item.html" class="btn btn-light-gray btn-lg btn-block">Project Title</a>
							</div>
						</div> --}}

						{{-- <div class="col-sm-6 col-md-4 isotope-item app-development">
							<div class="image-box">
								<div class="overlay-container">
									<img src="images/portfolio-2.jpg" alt="">
									<a href="portfolio-item.html" class="overlay small">
										<i class="fa fa-link"></i>
										<span>App Development</span>
									</a>
								</div>
								<a href="portfolio-item.html" class="btn btn-light-gray btn-lg btn-block">Project Title</a>
							</div>
						</div> --}}
					</div>
					<!-- portfolio items end -->

				</div>
			</div>
		</div>

	</div>
	<!-- section end -->

@stop