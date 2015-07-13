<!-- header start classes:
fixed: fixed navigation mode (sticky menu) e.g. <header class="header fixed clearfix">
 dark: dark header version e.g. <header class="header dark clearfix">
================ -->
<header class="header fixed header-small clearfix">
<div class="container">
<div class="row">
<div class="col-md-3">

	<!-- header-left start -->
	<!-- ================ -->
	<div class="header-left clearfix">

		<!-- logo -->
		<div class="logo">
			<a href="{{{action('HomeController@showHome')}}}"><img id="logo" src="images/logo_red.png" alt="iDea"></a>
		</div>

		<!-- name-and-slogan -->
		<div class="site-slogan">
			Clean &amp; Powerful Bootstrap Theme
		</div>

	</div>
	<!-- header-left end -->

</div>
<div class="col-md-9">

<!-- header-right start -->
<!-- ================ -->
<div class="header-right clearfix">

<!-- main-navigation start -->
<!-- ================ -->
<div class="main-navigation animated">

<!-- navbar start -->
<!-- ================ -->
<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">

		<!-- Toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="{{{action('HomeController@showHome')}}}">Home</a>
					</li>
					<li>
						<a href="#">About Us</a>
					</li>													
						<!-- mega-menu start -->
						<li>
							<a href="#">Services</a>
						</li>
						<!-- mega-menu end -->
						<li>
							<a href="#">Our Work</a>
						</li>
						<li>
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Contact Us</a>
						</li>
						</ul>
			 		</div>
				</div>
			</nav>
			<!-- navbar end -->
		</div>
		<!-- main-navigation end -->
	</div>
	<!-- header-right end -->
</div>
</div>
</div>
</header>
	<!-- header end -->