<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>@yield('title')</title>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

    <link rel="stylesheet" href="{{asset('css/lib/font-awesome/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/lib/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    @yield('css')

</head>
<body class="with-side-menu">

	<header class="site-header">
	    <div class="container-fluid">
	        <a href="#" class="site-logo">
	            <img class="hidden-md-down" src="{{asset('img/Kazee_Logo_web2.jpg')}}"" alt="">
	            <img class="hidden-lg-up" src="{{asset('img/logo-2-mob.png')}}"" alt="">
	        </a>
	
	        <button id="show-hide-sidebar-toggle" class="show-hide-sidebar">
	            <span>toggle menu</span>
	        </button>
	
	        <button class="hamburger hamburger--htla">
	            <span>toggle menu</span>
	        </button>
	        @include('layouts.navbar')
	        
	    </div><!--.container-fluid-->
	</header><!--.site-header-->

	<div class="mobile-menu-left-overlay"></div>
		@include('layouts.sidebar')

	<div class="page-content">
		<div class="container-fluid">
<!-- 			<header class="page-content-header">
				<div class="container-fluid">
					<div class="tbl">
						<div class="tbl-row">
							<div class="tbl-cell">
								<h4>@yield('header')</h4>
							</div>
						</div>
					</div>
					
				</div>
			</header> -->
			<!-- Content -->
         <div class="main-content-container container-fluid px-4">
            @yield('content')
         </div>
		</div><!--.container-fluid-->
	</div><!--.page-content-->

	<script src="{{asset('js/lib/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('js/lib/tether/tether.min.js')}}"></script>
	<script src="{{asset('js/lib/bootstrap/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/plugins.js')}}"></script>
	@yield('script')
	<script src="{{asset('js/app.js')}}"></script>
</body>
</html>