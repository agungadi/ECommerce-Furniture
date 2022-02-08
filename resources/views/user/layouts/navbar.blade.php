<!DOCTYPE html>
<html lang="en">

<head>
    <title>KMS.</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- <link rel="apple-touch-icon" href="{{ asset('assesthome/img/apple-icon.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assesthome/img/favicon.ico') }}"> --}}

    <link rel="stylesheet" href="{{ asset('assesthome/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assesthome/css/templatemo.css') }}">
    <link rel="stylesheet" href="{{ asset('assesthome/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('assesthome/css/main.css') }}">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="{{ asset('assesthome/css/fontawesome.min.css') }}">
<!--

TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->

      <!-- For favicon png -->
		{{-- <link rel="shortcut icon" type="image/icon" href="{{asset('assets/logo/favicon.png')}}"/> --}}
        <!--font-awesome.min.css-->
        <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">

        <!--linear icon css-->
		<link rel="stylesheet" href="{{asset('assets/css/linearicons.css')}}">

		<!--animate.css-->
        <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">

        <!--owl.carousel.css-->
        <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
		<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

        <!--bootstrap.min.css-->

		<!-- bootsnav -->
		<link rel="stylesheet" href="{{asset('assets/css/bootsnav.css')}}" >

        <!--style.css-->
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

        <!--responsive.css-->
        <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">


        <!--checkout-->
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{asset('css/animate.css')}}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
	<!-- Ion Icon Fonts-->
	<link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{asset('css/flexslider.css')}}">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">

	<!-- Date Picker -->
	<link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="{{asset('fonts/flaticon/font/flaticon.css')}}">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{asset('css/style.css')}}">

    <style>
        .currSign:before {
            content: 'Rp. ';
        }
    </style>
</head>

<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand text-success logo h1 align-self-center" href="{{ route('home') }}">
                KMS.
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Home</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Kategori</a>
                            <div class="dropdown-menu">
                                <a href="{{ route('kursi') }}" class="dropdown-item">Rak</a>
                                <a href="{{ route('meja') }}" class="dropdown-item">Meja</a>
                                <a href="{{ route('lemari') }}" class="dropdown-item">Lemari</a>
                                <div class="dropdown-divider">Set</div>
                                <a href="{{ route('kitchen') }}"class="dropdown-item">Kitchen</a>
                                <a href="{{ route('livingroom') }}"class="dropdown-item">Living Room</a>
                                <a href="{{ route('lain') }}"class="dropdown-item">Lain-lain</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('pesanan') }}">Pesanan</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                    <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                        <div class="input-group">
                            <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                            <div class="input-group-text">
                                <i class="fa fa-fw fa-search"></i>
                            </div>
                        </div>
                    </div>
                    <a class="nav-icon d-none d-lg-inline" href="" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                        <i class="fa fa-fw fa-search text-dark mr-2"></i>
                    </a>
                    <a class="nav-icon position-relative text-decoration-none" href="{{ route('keranjang') }}">
                        <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark"></span>
                    </a>
                        <a href="#" class="nav-link dropdown-toggle nav-icon position-relative text-decoration-none" data-bs-toggle="dropdown">
                        <i class="fa fa-fw fa-user text-dark mr-3"></i>
                        </a>
                        <div class="dropdown-menu">
                            <a href="{{ route('alamat.index') }}" class="dropdown-item">Alamat</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"> {{ __('Logout') }} </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>

                </div>
            </div>

        </div>
    </nav>
    <!-- Close Header -->

   <!--extends -->
   @yield('content')
   <!--extends -->

    <!-- Start Script -->
    <script src="{{ asset('assesthome/js/jquery-1.11.0.min.js') }}"></script>
    <script src="{{ asset('assesthome/js/jquery-migrate-1.2.1.min.js') }}"></script>
    <script src="{{ asset('assesthome/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assesthome/js/templatemo.js') }}"></script>
    <script src="{{ asset('assesthome/js/custom.js') }}"></script>
    <!-- End Script -->
</body>

</html>
