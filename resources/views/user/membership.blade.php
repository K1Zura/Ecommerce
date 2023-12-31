<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="{{ asset('asset/img/logo.png?v=2')}}" />
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Karma Shop</title>

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
</head>

<body>

	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Register</h1>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Login Box Area =================-->
	<section class="login_box_area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="login_form_inner">
						<h3>Membership</h3>
                        <p>Mau menjadi member? <strong>Ayo isi!</strong></p>
						@if(session('error'))
							<div class="alert alert-danger">
								{{ session('error') }}
							</div>
						@endif
						<form class="row login_form" action="/membership-update/{{$user->id}}" method="post" id="contactForm" novalidate="novalidate" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="name" value="{{$user->name}}" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">
							</div>
                            <div class="col-md-12 form-group">
								<input type="text" class="form-control" id="email" name="email" value="{{$user->email}}" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'">
							</div>
							<div class="col-md-12 form-group">
								<select name="role_id" id="">
									<option value="2">User</option>
                                    <option value="3">Membership</option>
								</select>
							</div>
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" class="primary-btn">Membership</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->


	<script src="{{ asset('asset/js/vendor/jquery-2.2.4.min.js')}}"></script>
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
</body>

</html>
