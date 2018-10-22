<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Marine Students, Seaman, Filipino Seaman, Review Center, Cebu Gems Review Center, Training Center, United Marine Training Center, Globe Maritime, NewSim, Navigator, Meridian"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Serapio is a platform to empower each seafarer by offering high quality services and related products at great value thru the leverage of the power of our networks, mindful technology, and ethical systems.">
	<meta name="author" content="The Develovers">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<!-- CSS -->
	<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('css/my-custom-styles.css')}}" rel="stylesheet" type="text/css">
	
	<!-- IE 9 Fallback-->
	<!--[if IE 9]>
		<link href="assets/css/ie.css" rel="stylesheet">
	<![endif]-->
	<!-- GOOGLE FONTS -->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400italic,400,600,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300italic,400italic,700,400,300' rel='stylesheet' type='text/css'>
	<!-- FAVICONS -->
	
</head>
<body>

	<!-- WRAPPER -->
	<div class="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default " role="navigation">
			<div class="container">
				<!-- TOPBAR -->
				<div class="topbar">
					
					
					<a href="" class="btn btn-success btn-lg" style="color:white;">Request for Quotation</a>
					<ul class="list-inline top-nav">
						<!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
							<li>Welcome! {{ Auth::user()->first_name }}</li>
							<li><a href="">Profile</a></li>
							<li><a href="">Change Password</a></li>
							<li>
								<a href="{{ route('logout') }}"
										onclick="event.preventDefault();
										 document.getElementById('logout-form').submit();">
									Logout
								</a>

								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									{{ csrf_field() }}
								</form>
							</li>
                           
                        @endif
					</ul>
					
				
				</div>
				<!-- END TOPBAR -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
						<span class="sr-only">Toggle Navigation</span>
						<i class="fa fa-bars"></i>
					</button>
					
					<a href="" class="navbar-brand navbar-logo navbar-logo-bigger">
						<img src="{{ asset('images/serapio-seal4.png')}}" alt="Serapio.ph">
					</a>
					
				</div>
				<!-- MAIN NAVIGATION -->
				<div id="main-nav" class="navbar-collapse collapse navbar-mega-menu">
					@if (Auth::guest())
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown ">
							<a href="" >HOME</a>
							
						</li>
						<li class="">
							<a href="{{ url('about-us') }}" >ABOUT US</a>
							
						</li>
						<li class="">
							<a href="{{ url('services') }}">SERVICES</a>
							
						</li>
						<li class="dropdown ">
							<a href="{{ url('contact-us') }}">CONTACT US</a>		
						</li>
					
					</ul>
					@else
					<ul class="nav navbar-nav navbar-right">
						 @if (Auth::user()->status == "admin")
							 <li class="">
								<a href="{{ url('company-registration-form') }}">Company Registration Form</a>
							</li>
							
							<li class="dropdown ">
								<a href="">Training/Review Registration Form  <i class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu" role="menu">
									<li class="">
										<a href="">Training Table List</a>
									</li>
									<li class="">
										<a href="">Review Table List</a>
									</li>
									<li class="">
										<a href="">Manning Table List</a>
									</li>
									<li class="">
										<a href="">Shipboard Training Table List</a>
									</li>
								</ul>
							</li>
							<li class="">
								<a href="" >All User Enrolled</a>
								
							</li>
							<li class="">
								<a href="" >Registered Users</a>
								
							</li>
						 
						 @else
							<li class="">
								<a href="">Home</a>
							</li>
							<li class="">
								<a href="">My Enrollment</a>	
							</li>
						 @endif
					</ul>
					@endif
				</div>
				<!-- END MAIN NAVIGATION -->
			</div>
		</nav>
		<!-- END NAVBAR -->
	 @yield('content')
	<!-- FOOTER -->
	<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<!-- COLUMN 1 -->
						<h3 class="sr-only">ABOUT US</h3>
						<img src="{{ asset('images/serapio-seal4.png')}}" class="logo" alt="Repute">
						<p>
							Serapio is a platform to empower each seafarer by offering high quality services and related products at great value thru the leverage of the power of our networks, mindful technology, and ethical systems.
						</p>
						<br>
						<address class="margin-bottom-30px">
							<ul class="list-unstyled">
								<li>
								RO2, 3/f UP Cebu Campus, 
									<br/>Gorordo Ave. Lahug, Cebu City, 6000 </li>							</li>
								<li>Phone: (032) 2328187 local 208</li>
								<li>Cell: 09176236527</li>
								<li>Email: hello@serapio.ph, cebuinit.upcebu@up.edu.ph</li>
							</ul>
						</address>
						<!-- END COLUMN 1 -->
					</div>
					<div class="col-md-4">
						<!-- COLUMN 2 -->
						<h3 class="footer-heading">SITEMAPS</h3>
						<div class="row margin-bottom-30px">
							
							<div class="col-xs-6">
								<ul class="list-unstyled footer-nav">
									<li><a href="">Home</a></li>
									<li><a href="">About Us</a></li>
									<li><a href="">Services</a></li>
									<li><a href="">Contact Us</a></li>
								</ul>
							</div>
						
						</div>
						<!-- END COLUMN 2 -->
					</div>
					<div class="col-md-4">
						
						<div class="social-connect">
							<h3 class="footer-heading">GET CONNECTED</h3>
							<ul class="list-inline social-icons">
								<li><a target="_blank" href="https://facebook.com/serapio.ph" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
								<li><a target="_blank" href="https://twitter.com/PhSerapio?lang=en" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
								
							</ul>
							<!-- Load Facebook SDK for JavaScript -->
							<img style="cursor: pointer;" id="seal_2_certificate_image" src="https://www.crazydomains.ph/certification/seal/2/8b633476ad2744208c6819e0a65bff791538107633/" onclick="if (document.getElementById('seal_2_certificate').style.display == 'none') document.getElementById('seal_2_certificate').style.display = ''; else document.getElementById('seal_2_certificate').style.display = 'none';"><div style="display:none;position: fixed; top: 50%; left: 50%; margin-left: -303px; margin-top: -313px;" id="seal_2_certificate"><a href="javascript:void(0);" onclick="javascript:document.getElementById('seal_2_certificate').style.display = 'none';" style=" font-size: 13px !important; top: -25px;  right: 607px; color: #484848;  opacity: 0.8;  float: right; font-weight: bold; position: relative;  line-height: 20px;  font-family: Verdana, Arial, sans-serif;" class="close">[×] close</a><iframe style="height:626px; width:607px; 690px; border: none; background: white; box-shadow: 0 0 20px rgba(0, 0, 0, 0.2); border-radius: 6px;" scrolling="no" src="https://www.crazydomains.ph/certification/certificate/?token=8b633476ad2744208c6819e0a65bff791538107633"></iframe></div>
							
						</div>
						<!-- END COLUMN 3 -->
					</div>
				</div>
			</div>
			
			<!-- COPYRIGHT -->
			<div class="text-center copyright">
					
						
				&copy;2018 Serapio.ph All Rights Reserved.
			</div>
			<!-- END COPYRIGHT -->
			<!-- Load Facebook SDK for JavaScript -->
			
		</footer>
		<!-- END FOOTER -->
	</div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
	<!-- END WRAPPER -->
	<!-- JAVASCRIPTS -->
	<script src="{{ asset('js/jquery-2.1.1.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/plugins/slick/slick.min.js') }}"></script>
	<script src="{{ asset('js/plugins/stellar/jquery.stellar.min.js') }}"></script>
	<script src="{{ asset('js/plugins/jquery-easypiechart/jquery.easypiechart.min.js') }}"></script>
	<script src="{{ asset('js/plugins/autohidingnavbar/jquery.bootstrap-autohidingnavbar.min.js') }}"></script>
	<script src="{{ asset('js/repute-scripts.js') }}"></script>
	
	</body>
</html>
