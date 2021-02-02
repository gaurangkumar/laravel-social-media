<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{{title}}</title>

    <!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700%7CPoppins:400,500" rel="stylesheet">
	
	<!-- Stylesheets -->
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css" integrity="sha512-JApjWRnfonFeGBY7t4yq8SWr1A6xVYEJgO/UMIYONxaR3C9GETKUg0LharbJncEzJF5Nmiv+Pr5QNulr81LjGQ==" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('comming-soon/common-css/jquery.classycountdown.css') }}" />
		
	<link href="{{ asset('comming-soon/01-comming-soon/css/styles.css') }}" rel="stylesheet">
	<link href="{{ asset('comming-soon/01-comming-soon/css/responsive.css') }}" rel="stylesheet">

    <link rel="canonical" href="{{app_url}}">
    <link rel="alternate" href="{{app_url}}" hreflang="{{lang}}">

	<meta name="description" content="{{description}}">
    <meta name="referrer" content="always">
	<meta name="keywords" content="{{keywords}}">
	<meta name="robots" content="index, follow">
	<meta name="robots" content="all">
	<meta name="HandheldFriendly" content="true">
	<meta name="rating" content="General">
	<meta name="distribution" content="Global">
	<meta name="language" content="{{lang}}">

    <meta itemprop="name" content="{{title}}">
	<meta itemprop="description" content="{{description}}">
	<meta itemprop="image" content="{{brand_image}}">
	<meta itemprop="thumbnailUrl" content="{{brand_image}}">

	<link rel="icon" href="{{favicon}}" type="image/x-icon">
	<link rel="shortcut icon" href="{{favicon}}" type="image/x-icon">
	<link href="{{brand_image}}" rel="apple-touch-icon-precomposed" type="image/png" sizes="50x50">
	<link href="{{brand_image}}" rel="apple-touch-icon">
	<meta name="apple-mobile-web-app-title" content="{{title}}">
	<meta name="google-site-verification" content="">
	<meta name="msvalidate.01" content="">

    <meta property="og:site_name" content="{{app_url}}">
	<meta property="og:url" content="{{app_url}}">
	<meta property="og:type" content="website">
	<meta property="og:title" content="{{title}}">
	<meta property="og:description" content="{{description}}">
	<meta property="og:image" content="{{brand_image}}">

    <meta name="GENERATOR" content="MSHTML 11.00.10240.16384">
</head>
<body>
	
	<div class="main-area">
		<div class="container full-height position-static">
			
			<section class="left-section full-height">
		
				<a class="logo" href="#">
                    AGWIS.com
                    <!--<img src="{{ asset('comming-soon/images/logo-black.png') }}" alt="Logo">-->
                </a>
				
				<div class="display-table">
					<div class="display-table-cell">
						<div class="main-content">
							<h1 class="title"><b>Under Construction</b></h1>
							<p>Our website is currently undergoing scheduled maintenance.
								We Should be back shortly. Thank you for your patience.</p>

							<form action="{{ route('query') }}" method="post">
                                @csrf
                                <div class="email-input-area my-3">
                                    <input class="email-input" name="msg" type="text" placeholder="Enter your message">
                                </div><!-- msg-input-area -->

                                <div class="email-input-area my-3">
                                    <input class="email-input" name="name" type="text" placeholder="Enter your name *" required>
                                </div><!-- name-input-area -->

                                <div class="email-input-area my-2">
                                    <input class="email-input" name="email" type="email" placeholder="Enter your email *" required>
                                    <button class="submit-btn" name="submit" type="submit"><b>NOTIFY US</b></button>
                                </div><!-- email-input-area -->
                            </form>
							
							<p class="post-desc">Send your suggestion, query or other message. Sign up now to get early notification of our lauch date!</p>
						</div><!-- main-content -->
					</div><!-- display-table-cell -->
				</div><!-- display-table -->
				
				<ul class="footer-icons">
					<li>Stay in touch : </li>
					<li><a href="https://www.facebook.com/Agwis-106634964390012/?modal=admin_todo_tour"><i class="ion-social-facebook"></i></a></li>
					<li><a href="https://www.linkedin.com/company/agwis/"><i class="ion-social-linkedin"></i></a></li>
					<li><a href="https://www.instagram.com/agwis_com/"><i class="ion-social-instagram"></i></a></li>
					<li><a href="https://www.youtube.com/channel/UCMDw7oxCFVt7uKo0nuZMCuQ"><i class="ion-social-youtube"></i></a></li>
					<li><a href="https://twitter.com/AgwisCom"><i class="ion-social-twitter"></i></a></li>
				</ul>
		
			</section><!-- left-section -->
		
			<section class="right-section" style="background-image: url({{ asset('comming-soon/images/countdown-1-1000x1000.jpg') }});opacity: 1">
			
				<div class="display-table center-text" style="background: linear-gradient(red,blue);opacity: 0.7">
					<div class="display-table-cell" style="opacity: 1.0 !important">
						
						<div id="rounded-countdown" style="opacity: 1.0 !important">
							<div class="countdown" data-remaining-sec="{{ strtotime($launch_date) - time() }}" style="opacity: 1.0 !important"></div>
						</div>
						
					</div><!-- display-table-cell -->
				</div><!-- display-table -->
				
			</section><!-- right-section -->
		
		</div><!-- container -->
	</div><!-- main-area -->
	
	<!-- SCIPTS -->
	
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.7/js/tether.min.js" integrity="sha512-X7kCKQJMwapt5FCOl2+ilyuHJp+6ISxFTVrx+nkrhgplZozodT9taV2GuGHxBgKKpOJZ4je77OuPooJg9FJLvw==" crossorigin="anonymous"></script>
    <!--
	<script src="{{ asset('comming-soon/common-js/jquery-3.1.1.min.js') }}"></script>
	<script src="{{ asset('comming-soon/common-js/tether.min.js') }}"></script>
    -->
    <!-- Option 1: Bootstrap Bundle with Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy" crossorigin="anonymous"></script>
    <!--
	<script src="{{ asset('comming-soon/common-js/bootstrap.js') }}"></script>
    -->
	<script src="{{ asset('comming-soon/common-js/jquery.classycountdown.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Knob/1.2.13/jquery.knob.min.js" integrity="sha512-NhRZzPdzMOMf005Xmd4JonwPftz4Pe99mRVcFeRDcdCtfjv46zPIi/7ZKScbpHD/V0HB1Eb+ZWigMqw94VUVaw==" crossorigin="anonymous"></script>
    <!--
	<script src="{{ asset('comming-soon/common-js/jquery.knob.js') }}"></script>
    -->
	<script src="{{ asset('comming-soon/common-js/jquery.throttle.js') }}"></script>
	
	<script src="{{ asset('comming-soon/common-js/scripts.js') }}"></script>
	
</body>
</html>
