<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="{{ asset('asset/img/logo.png')}}" />
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>K1Zura Shop | @yield('title')</title>
	<!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="{{ asset('asset/css/linearicons.css')}}">
	<link rel="stylesheet" href="{{ asset('asset/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{ asset('asset/css/themify-icons.css')}}">
	<link rel="stylesheet" href="{{ asset('asset/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{ asset('asset/css/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{ asset('asset/css/nice-select.css')}}">
	<link rel="stylesheet" href="{{ asset('asset/css/nouislider.min.css')}}">
	<link rel="stylesheet" href="{{ asset('asset/css/ion.rangeSlider.css')}}" />
	<link rel="stylesheet" href="{{ asset('asset/css/ion.rangeSlider.skinFlat.css')}}" />
	<link rel="stylesheet" href="{{ asset('asset/css/magnific-popup.css')}}">
	<link rel="stylesheet" href="{{ asset('asset/css/main.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
    crossorigin=""/>
</head>

<body style="display: flex;
flex-direction: column;
min-height: 100vh;
margin: 0;">

	<!-- Start Header Area -->
	<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.html"><img src="asset/img/logo.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item {{ Request::is('/') ? 'active' : '' }}"><a class="nav-link" href="/">Home</a></li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Shop</a>
								<ul class="dropdown-menu">
									<li class="nav-item {{ Request::is('shop') ? 'active' : '' }}"><a class="nav-link" href="/shop">Shop</a></li>
									<li class="nav-item {{ Request::is('toko') ? 'active' : '' }}"><a class="nav-link" href="/toko">Stores</a></li>
								</ul>
							</li>
							<li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
							<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="accountDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="fa fa-user"></i>
								</a>
								<ul class="dropdown-menu" aria-labelledby="accountDropdown">
									@if (auth('user')->check())
									<li><a class="dropdown-item" href="/logout">Logout</a></li>
									@else
									<li><a class="dropdown-item" href="/login-user">Login</a></li>
									@endif
									<li><a class="dropdown-item" href="/profil">My Profile</a></li>
								</ul>
							</li>
						</ul>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="nav-item"><a href="/bag" class="cart"><span class="ti-bag"></span></a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="nav-item"><a href="/wishlist" class="wishlist"><span class="fa fa-heart"></span></a></li>
                        </ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!-- End Header Area -->
    @yield('navbar')

	<!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>@yield('judul')</h1>
                    <nav class="d-flex align-items-center">
                        <a href="/"><i class="fa fa-home" aria-hidden="true"></i>
							<span class="lnr lnr-arrow-right"></span></a>
                        <a href="/toko">@yield('akhir')</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

	<div class="container">
		@yield('content')
	</div>

    @if (session('success'))
    <div class="success-message">
        <p>{{ session('success') }}</p>
    </div>
    @elseif(session('error'))
        <div class="success-message">
            <p>{{ session('error') }}</p>
        </div>
    @endif
    @if (session('hapus'))
    <div class="success-message">
        <p>{{ session('hapus') }}</p>
    </div>
    @endif


	<!-- start footer Area -->
	<footer class="footer-area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>About Us</h6>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore
							magna aliqua.
						</p>
					</div>
				</div>
				<div class="col-lg-4  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Newsletter</h6>
						<p>Stay update with our latest</p>
						<div class="" id="mc_embed_signup">

							<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
							 method="get" class="form-inline">

								<div class="d-flex flex-row">

									<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '"
									 required="" type="email">


									<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
									<div style="position: absolute; left: -5000px;">
										<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
									</div>

									<!-- <div class="col-lg-4 col-md-4">
												<button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
											</div>  -->
								</div>
								<div class="info"></div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget mail-chimp">
						<h6 class="mb-20">Instragram Feed</h6>
						<ul class="instafeed d-flex flex-wrap">
							<li><img src="asset/img/i1.jpg" alt=""></li>
							<li><img src="asset/img/i2.jpg" alt=""></li>
							<li><img src="asset/img/i3.jpg" alt=""></li>
							<li><img src="asset/img/i4.jpg" alt=""></li>
							<li><img src="asset/img/i5.jpg" alt=""></li>
							<li><img src="asset/img/i6.jpg" alt=""></li>
							<li><img src="asset/img/i7.jpg" alt=""></li>
							<li><img src="asset/img/i8.jpg" alt=""></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Follow Us</h6>
						<p>Let us be social</p>
						<div class="footer-social d-flex align-items-center">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
				<p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
			</div>
		</div>
	</footer>
	<!-- End footer Area -->

	<script src="asset/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="{{ asset('asset/js/vendor/bootstrap.min.js')}}"></script>
	<script src="{{ asset('asset/js/jquery.ajaxchimp.min.js')}}"></script>
	<script src="{{ asset('asset/js/jquery.nice-select.min.js')}}"></script>
	<script src="{{ asset('asset/js/jquery.sticky.js')}}"></script>
	<script src="{{ asset('asset/js/nouislider.min.js')}}"></script>
	<script src="{{ asset('asset/js/countdown.js')}}"></script>
	<script src="{{ asset('asset/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{ asset('asset/js/owl.carousel.min.js')}}"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="{{ asset('asset/js/gmaps.min.js')}}"></script>
	<script src="{{ asset('asset/js/main.js')}}"></script>
    <script>
        $(document).ready(function () {
            $(".success-message").delay(3000).fadeOut(500); // Hide after 3 seconds
        });
    </script>
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
    integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
    crossorigin=""></script>
    <script>
        var map = L.map('map').setView([-7.668707, 111.108892], 10, {
                    "animate": true,
                    "pan": {
                        "duration": 30
                    }
                    });
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 30,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);
        var marker = L.marker([-7.668707, 111.108892]).addTo(map);
        setTimeout(() => {
            map.flyTo([-7.668707, 111.108892], 15, {
            animate: true,
            duration: 2
            });
        },1000);
    </script>
</body>
</html>
