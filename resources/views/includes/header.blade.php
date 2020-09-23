<!DOCTYPE html>
	<html lang={{$lang}}  dir={{$dir}}>
	<head>
		<meta charset="utf-8">
	
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="{{asset('')}}{{ __('body.logo') }}">
		<!-- Author Meta -->
		<meta name="author" content="CodePixar">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<meta charset="utf-8"/>
		
		
		<!-- Site Title -->
		<title>{{ __('body.title') }}</title>
		
		<!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="{{asset('')}}{{ __('body.logo') }}">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('')}}{{ __('body.logo') }}">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('')}}{{ __('body.logo') }}">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('')}}{{ __('body.logo') }}">
        <link rel="apple-touch-icon-precomposed" href="{{asset('')}}{{ __('body.logo') }}">

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
		
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		
		<link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">


		
		<!--
			CSS
			============================================= -->
			
			<!-- Bootstrap -->
			@if($lang=='en')
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
			@else
				<link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/3.3.7/css/bootstrap.min.css"integrity="sha384-cSfiDrYfMj9eYCidq//oGXEkMc0vuTxHXizrMOFAaPsLt1zoCUVnSsURN+nef1lj"crossorigin="anonymous"> <!-- bootstrap rtl -->
			@endif
			<link rel="stylesheet" href="{{asset('css/linearicons.css')}}">
			<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
			<link rel="stylesheet" href="{{asset('css/jquery.DonutWidget.min.css')}}">
			<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
			
			

		
			<link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
			<link rel="stylesheet" href="{{asset('css/main.css')}}">
			
			<!-- me -->
			<link rel="stylesheet" href="{{asset('css/ArabicFonts.css')}}">
			<link rel="stylesheet" href="{{asset('css/ShowMore.css')}}">
			<link rel="stylesheet" href="{{asset('css/developer.css')}}">
			
			<!-- Custom stlylesheet -->
			<link type="text/css" rel="stylesheet" href="{{asset('css/coursal.css')}}"/>
			<link type="text/css" rel="stylesheet" href="{{asset('css/card.css')}}"/>
			<link rel="stylesheet" href="{{asset('css/ModelBox.css')}}">
			<link rel="stylesheet" href="{{asset('css/register.css')}}">
			<link type="text/css" rel="stylesheet" href="{{asset('css/select.css')}}"/>
			<link rel="stylesheet" href="{{asset('css/font-awesome-animation.css')}}">
			<link rel="stylesheet" href="{{asset('css/uploadImage1.css')}}">
			<link rel="stylesheet" href="{{asset('css/rightNavBar.css')}}">
		
	</head>	

	<body>
				<!-- Start Header Area -->
			<header id="header" class="default-header reem_kufi">
				<!-- TOP HEADER -->
				<div id="top-header">
					<div class="container">
						<ul class="header-links pull-right">
							<li><a href="#"><i class="fas fa-language"></i> {{ __('body.language') }} </a></li>
							<!-- Dropdown -->
							<li>
								<div class="btn-group">
								  <button type="button" class=" dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-tie"></i>
									طارق بخيت 
								  </button>
								  <div class="dropdown-menu">
									<a class="dropdown-item" href="#">{{ __('body.profile') }}</a>
									<a class="dropdown-item" href="#">{{ __('body.sign out') }}</a>
								  </div>
								</div>
							</li>
							<li><a href="#"><i class="fa fa-user"></i>{{ __('body.visitor') }}</a></li>
							<li><a href="#"><i class="fas fa-users-cog"></i>{{ __('body.admin') }}</a></li>
							<li><a href="#" class="faa-parent animated-hover"><i class="fa fa-cog faa-cog "></i>{{ __('body.setting') }}</a></li>

							
						</ul>
					</div>
				</div>
				<!-- /TOP HEADER -->

				<nav class="navbar navbar-expand-lg  navbar-light">
					<div class="container-fluid">
						  <div class="collapse navbar-collapse align-items-center" id="navbarSupportedContent">
						    <ul class="navbar-nav">
								<a class=" "href="@if($toAnotherPage){{route('admin')}}@endif#home"> 
									<img src={{asset('')}}{{ __('body.logo') }} alt="" width="135">
									
								</a>
							</ul>
							<ul class="navbar-nav">
								<li>
									<a href="@if($toAnotherPage){{route('admin')}}@endif#account_service">{{ __('body.account_service') }}</a>
								</li>
								<li>
									<a href="@if($toAnotherPage){{route('admin')}}@endif#electronic_service">{{ __('body.electronic_service') }}</a>
								</li>
								<li>
									<a href="@if($toAnotherPage){{route('admin')}}@endif#courses">{{ __('body.courses') }}</a>
								</li>
								<li>
									<a href="@if($toAnotherPage){{route('admin')}}@endif#aboutUs">{{ __('body.aboutUs') }}</a>
								</li>
								<li>
									<a @if(!$adminPage) href="#footer" @else href="#branches" @endif>{{ __('body.branches') }}</a>
								</li>
								<li><a @if(!$adminPage) href="#footer" @else href="#contacts" @endif>{{ __('body.contacts') }}</a></li>
								<li><a href="{{route('applicants')}}">{{ __('body.applicant') }}</a></li>
							  </ul>
						  </div>						
					</div>
				</nav>
			</header>
			<!-- End Header Area -->
	
	</body>
	
