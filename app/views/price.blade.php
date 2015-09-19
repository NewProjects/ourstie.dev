@extends('layouts.master')
@section('title')Price Sheet
@stop
@section('price')
<div class="section clearfix">
	<div class="container">
		<h1>The Process We Follow</h1>
		<!-- pills start -->
		<div class="process">
			<!-- Tab panes -->
			<div class="tab-content clear-style">
				<div class="tab-pane active" id="pill-1">
					<h3>User-Driven Power</h3>
					<div class="row">
						<div class="col-md-6">
							<p>Our process involves a thorough evaluation of the client's business mode l and market.  Using a variety of methods, a strategy will be developed that allows for maximum online impact as a natural extension of any business process.</p>

							<p>Our methods range from user-centric feedback driving an interface to granular analysis of the experience with traffic tracking.  Our clients are our partners and as such we will work in an open and transparent manner for maximum effectiveness throughout the design and rollout processes.  We view client engagement as a critical success factor for maximum ROI of your web presence.{{--           and experience throughout Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea sit enim sint deleniti saepe esse nisi nesciunt fuga eaque dicta tenetur, cupiditate illo, consequuntur unde dolores quis dolore rem ex asperiores error. Labore saepe beatae harum quod fuga ipsam! Iusto earum iste similique, quam esse rerum, quae atque inventore consequuntur voluptatum amet deserunt mollitia? Tempore fugit, cumque dolor eaque doloremque iusto nostrum excepturi unde! Similique ipsum fugit eius laboriosam nihil quos, quia et! Earum iure, sapiente. Molestiae unde earum fugiat voluptate incidunt. --}}</p>
						</div>
					</div>
				</div>
				<div class="tab-pane" id="pill-2">
					<h3>Lorem ipsum dolor sit amet</h3>
					<div class="row">
						<div class="col-md-6">
							<img src="images/section-image-1.png" alt="">
						</div>
						<div class="col-md-6">
							<p>Ipsum dolor sit amet, consectetur adipisicing elit. Sit, labore iste! Pariatur tempore, dicta voluptatibus quis blanditiis voluptates in. Molestiae asperiores sed, pariatur nesciunt saepe. Culpa ipsam ut enim reiciendis!</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea sit enim sint deleniti saepe esse nisi nesciunt fuga eaque dicta tenetur, cupiditate illo, consequuntur unde dolores quis dolore rem ex asperiores error. Labore saepe beatae harum quod fuga ipsam! Iusto earum iste similique, quam esse rerum, quae atque inventore consequuntur voluptatum amet deserunt mollitia? Tempore fugit, cumque dolor eaque doloremque iusto nostrum excepturi unde! Similique ipsum fugit eius laboriosam nihil quos, quia et! Earum iure, sapiente. Molestiae unde earum fugiat voluptate incidunt.</p>
						</div>
					</div>
				</div>
				<div class="tab-pane" id="pill-3">
					<h3>Dolor lorem ipsum sit amet</h3>
					<p>Consectetur adipisicing elit. Sit, labore iste! Pariatur tempore, dicta voluptatibus quis blanditiis voluptates in. Molestiae asperiores sed, pariatur nesciunt saepe. Culpa ipsam ut enim reiciendis!</p>
					<p>Ipsum dolor sit amet, consectetur adipisicing elit. Debitis eaque nihil obcaecati minus perferendis officiis cumque nesciunt quae dolorem ad tenetur voluptate blanditiis labore libero id veritatis similique facere, fugiat soluta omnis minima? Iusto optio hic a reiciendis, inventore numquam impedit quaerat deserunt, voluptatum illum in magni, aspernatur corporis mollitia nam? Ipsum, cumque facilis recusandae commodi dolorum sequi quis possimus, aut, ab incidunt dolorem perferendis rerum tenetur. Labore exercitationem magni perspiciatis laborum, aliquam officia molestias obcaecati, voluptatum quidem eum iure aut, officiis dicta cupiditate ab, sit aliquid. Corporis ducimus ab commodi officia? Inventore suscipit saepe dolorem vitae aperiam autem, iusto id, enim assumenda modi a voluptate aliquam molestiae quidem sapiente, obcaecati recusandae. Magni repellat dignissimos sint iste dolorem maxime accusantium quas repellendus quam ipsa, sapiente, beatae enim ab ex. Optio eveniet necessitatibus, tempora dolor eaque saepe, ipsam vero at officiis cumque, maxime consequuntur in ea, voluptate quae nesciunt hic delectus.</p>
				</div>
			</div>
		</div>
		<!-- pills end -->
	</div>
</div>
<!-- section end -->

{{-- <!-- section start -->
<!-- ================ -->
<div class="section clearfix">
	<div class="container">
		<h2>Logo Pricing</h2>
		<hr>
		<!-- pricing tables start -->
		<div class="pricing-tables gray object-non-visible" data-animation-effect="fadeInUpSmall">
			<div class="row grid-space-0">
				<!-- pricing table start -->
				<div class="col-sm-4 plan">
					<div class="header">
						<h3>Economy</h3>
						<div class="price"><span>$199</span></div>
					</div>
					<ul>
						<li>1 User</li>
						<li>
							<a href="#" class="pt-popover" data-toggle="popover" data-placement="right" data-content="Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." title="" data-original-title="15GB Storage" data-trigger="hover">1GB Storage</a>
						</li>
						<li>
							<a href="#" class="pt-popover" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." title="" data-original-title="15 Email Acounts">1 Email Acounts</a>
						</li>
						<li>Subdomains</li>
						<li>Security</li>
						<li>Bandwidth</li>
						<li>Databases</li>
						<li><a href="{{{action ('HomeController@showLogo')}}}" class="btn btn-gray"><i class="fa fa-shopping-cart pr-10"></i>Order Now</a></li>
					</ul>
				</div>
				<!-- pricing table end -->

				<!-- pricing table start -->
				<div class="col-sm-4 plan best-value">
					<div class="header">
						<h3>Standard</h3>
						<div class="price"><span>$299</span></div>
					</div>
					<ul>
						<li>80 Users</li>
						<li>Unlimited Disk Space</li>
						<li>
							<a href="#" class="pt-popover" data-toggle="popover" data-placement="right" data-content="Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." title="" data-original-title="Unlimited Subdomains">Unlimited Email Acounts</a>
						</li>        
						<li>Subdomains</li>
						<li>Security</li>
						<li>500 Visitors per month</li>
						<li>1 Database</li>
						<li><a href="{{{action ('HomeController@showLogo')}}}" class="btn btn-gray"><i class="fa fa-shopping-cart pr-10"></i>Order Now</a></li>
					</ul>
				</div>
				<!-- pricing table end -->

				<!-- pricing table start -->
				<div class="col-sm-4 plan">
					<div class="header">
						<h3>Premium</h3>
						<div class="price"><span>$599</span></div>
					</div>
					<ul>
						<li>Unlimited Users</li>
						<li>Unlimited Disk Space</li>
						<li>Unlimited Email Acounts</li>
						<li>Unlimited Subdomains</li>
						<li>
							<a href="#" class="pt-popover" data-toggle="popover" data-placement="right" data-content="Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." title="" data-original-title="Enchaned Security">Enchaned Security</a>
						</li>
						<li>Unlimited Bandwidth</li>
						<li>Unlimited Databases</li>
						<li><a href="{{{action ('HomeController@showLogo')}}}" class="btn btn-gray"><i class="fa fa-shopping-cart pr-10"></i>Order Now</a></li>
					</ul>
				</div>
				<!-- pricing table end -->
			</div>
		</div>
	</div>
</div> --}}
		<!-- pricing tables end -->
{{-- <div class="container"> --}}
{{-- <h3>Website Pricing</h3></div> --}}
<!-- section start -->
<!-- ================ -->
<div class="section clearfix">
	<div class="container">
		<h2>Website Pricing</h2>
		<hr>
		<!-- pricing tables start -->
		<div class="pricing-tables gray object-non-visible" data-animation-effect="fadeInUpSmall">
			<div class="row grid-space-0">
				<!-- pricing table start -->
				<div class="col-sm-4 plan">
					<div class="header">
						<h3>Economy</h3>
						<div class="price"><span>$1300</span></div>
					</div>
					<ul>
						<li>Our most basic package</li>
						<li>
							A one page basic marketing website.
							{{-- <a href="#" class="pt-popover" data-toggle="popover" data-placement="right" data-content="Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." title="" data-original-title="15GB Storage" data-trigger="hover">1GB Storage</a> --}}
						</li>
						<li>
							{{-- <a href="#" class="pt-popover" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." title="" data-original-title="15 Email Acounts">1 Email Acounts</a> --}}
							Email Accounts
						</li>
						<li>Hosting Available</li>
						<li>Periodic Updates Available</li>
						<{{-- li>Bandwidth</li>
						<li>Databases</li> --}}
						<li><a href="{{{action ('HomeController@showWebsite')}}}" class="btn btn-gray"><i class="fa fa-shopping-cart pr-10"></i>Order Now</a></li>
					</ul>
				</div>
				<!-- pricing table end -->

				<!-- pricing table start -->
				<div class="col-sm-4 plan best-value">
					<div class="header">
						<h3>Premium</h3>
						<div class="price"><span>$2200</span></div>
					</div>
					<ul>
						<li>Admin Panel</li>
						<li>eCommerce</li>
						{{-- <li>
							<a href="#" class="pt-popover" data-toggle="popover" data-placement="right" data-content="Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." title="" data-original-title="Unlimited Subdomains">Unlimited Email Acounts</a>
						</li> --}}
						<li>Logo Design</li>
						<li>Search Optimization</li>
						<li>Image Gallery</li>
						<li>Hosting Available</li>
						<li>1 Database</li>
						<li>User Experience Research</li>
						<li><a href="{{{action ('HomeController@showWebsite')}}}" class="btn btn-gray"><i class="fa fa-shopping-cart pr-10"></i>Order Now</a></li>
					</ul>
				</div>
				<!-- pricing table end -->

				<!-- pricing table start -->
				<div class="col-sm-4 plan">
					<div class="header">
						<h3>Standard</h3>
						<div class="price"><span>$1800</span></div>
					</div>
					<ul>
						<li>Marketing Site</li>
						<li>Multiple Pages</li>
						<li>Image Gallery</li>
						<li>Logo Design</li>
						<li>
							{{-- <a href="#" class="pt-popover" data-toggle="popover" data-placement="right" data-content="Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." title="" data-original-title="Enchaned Security">Enchaned Security</a> --}}
							Hosting Available
						</li>
						<li>1 Database</li>
						{{-- <li>Unlimited Databases</li> --}}
						<li><a href="{{{action ('HomeController@showWebsite')}}}" class="btn btn-gray"><i class="fa fa-shopping-cart pr-10"></i>Order Now</a></li>
					</ul>
				</div>
				<!-- pricing table end -->
			</div>
		</div>
	</div>
</div>
		<!-- pricing tables end -->
@stop