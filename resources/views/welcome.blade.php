<!doctype html>
<html class="no-js" lang="en">

    <head>
        <!-- meta data -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

        <!-- title of site -->
        <title>KMS.</title>


        <!-- For favicon png -->
		<link rel="shortcut icon" type="image/icon" href="{{asset('assets/logo/favicon.png')}}"/>
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
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

		<!-- bootsnav -->
		<link rel="stylesheet" href="{{asset('assets/css/bootsnav.css')}}" >

        <!--style.css-->
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

        <!--responsive.css-->
        <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->


        <!--checkout-->
        <link href="{{asset('icofont/icofont.min.css')}}" rel="stylesheet">

        <style>
            .currSign:before {
                content: 'Rp. ';
            }
        </style>
</head>

        <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

	<body>
		<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->



		<!--welcome-hero start -->
		<header id="home" class="welcome-hero">

			<div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
				<!--/.carousel-indicator -->

				<!--/.carousel-indicator -->

				<!--/.carousel-inner -->
				<div class="carousel-inner" role="listbox">
					<!-- .item -->

                    @foreach ($product as $produk)

					<div class="item active">
						<div class="single-slide-item slide1">
							<div class="container">
								<div class="welcome-hero-content">
									<div class="row">

										<div class="col-sm-7">
											<div class="single-welcome-hero">
												<div class="welcome-hero-txt">
													<h4>New Product Available</h4>
													<h2>{{ $produk->name }}</h2>
													<p>
														{{ $produk->deskripsi }}
													</p>
													<div class="packages-price">
														<h2 class="money">
															{{ $produk->price }}
														</h2>
													</div>
													<button class="btn-cart welcome-add-cart" onclick="window.location.href='{{ route('detailproduk', $produk->id) }}'">
														<span class="lnr lnr-plus-circle"></span>
														add <span>to</span> cart
													</button>

												</div><!--/.welcome-hero-txt-->
											</div><!--/.single-welcome-hero-->
										</div><!--/.col-->
										<div class="col-sm-5">
											<div class="single-welcome-hero">
												<div class="welcome-hero-img">
													<img src="{{asset('storage/img/'.$produk->image1)}}" alt="slider image">
												</div><!--/.welcome-hero-txt-->
											</div><!--/.single-welcome-hero-->
										</div><!--/.col-->

									</div><!--/.row-->
								</div><!--/.welcome-hero-content-->
							</div><!-- /.container-->
						</div><!-- /.single-slide-item-->
					</div><!-- /.item .active-->
                    @endforeach



					</div><!-- /.item .active-->
				</div><!-- /.carousel-inner-->

			</div><!--/#header-carousel-->

			<!-- top-area Start -->
			<div class="top-area">
				<div class="header-area">
					<!-- Start Navigation -->
				    <nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy"  data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">

				        <!-- Start Top Search -->
				        <div class="top-search">
				            <div class="container">
				                <div class="input-group">
				                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
				                    <input type="text" class="form-control" placeholder="Search">
				                    <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
				                </div>
				            </div>
				        </div>
				        <!-- End Top Search -->

				        <div class="container">
				            <!-- Start Atribute Navigation -->
				            <div class="attr-nav">

				                <ul>
				                	<li>
                                        <a href="{{ route('register') }}">Register</a>
				                	</li><!--/.search-->
				                	<li >
                                        <a href="{{ route('login') }}">Login</a>
				                	</li><!--/.search-->
				                </ul>
				            </div><!--/.attr-nav-->
				            <!-- End Atribute Navigation -->

				            <!-- Start Header Navigation -->
				            <div class="navbar-header">
				                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
				                    <i class="fa fa-bars"></i>
				                </button>
				                <a class="navbar-brand" href="index.html">KMS.</a>

				            </div><!--/.navbar-header-->
				            <!-- End Header Navigation -->

				            <!-- Collect the nav links, forms, and other content for toggling -->
				            <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
				                <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
				                    <li class="scroll active"><a href="#home">home</a></li>
				                    <li class="scroll"><a href="#new-arrivals">Produk Baru</a></li>
				                    <li class="scroll"><a href="#contact">contact</a></li>
				                </ul><!--/.nav -->
				            </div><!-- /.navbar-collapse -->
				        </div><!--/.container-->
				    </nav><!--/nav-->
				    <!-- End Navigation -->
				</div><!--/.header-area-->
			    <div class="clearfix"></div>

			</div><!-- /.top-area-->
			<!-- top-area End -->

		</header><!--/.welcome-hero-->
		<!--welcome-hero end -->


		</section><!--/.populer-products-->
		<!--populer-products end-->

		<!--new-arrivals start -->
		<section id="new-arrivals" class="new-arrivals">
			<div class="container">
				<div class="section-header">
					<h2>Produk Baru</h2>
                </br></br></br>
                    @foreach($products->chunk(4) as $chunk)

                    <div class="row">

                            <!-- Produk -->
                            @foreach ($chunk as $produk)

                        <div class="col-md-3 col-sm-4">
                            <div class="single-new-arrival" >
                                <div class="single-new-arrival-bg" >
                                    <img src="{{asset('storage/img/'.$produk->image1)}}"  alt="new-arrivals images"/>
                                    <div class="single-new-arrival-bg-overlay"></div>
                                    <div class="sale bg-1">
                                        <p>New</p>
                                    </div>
                                    <div class="new-arrival-cart">

                                        <p style="margin-left: 10px;">

                                            <span class="lnr lnr-frame-expand"></span>
                                            <a href="{{ route('detailproduk', $produk->id) }}">Show</a>
                                        </p>

                                    </div>
                                </div>
                                <h4><a href="{{ route('detailproduk', $produk->id) }}">{{ $produk->name }}</a></h4>
                                <p class="arrival-product-price money">{{ $produk->price }}</p>
                            </div>
                        </div>

                        @endforeach


                             <!-- Produk -->

                    </div>
                    @endforeach

				</div>
			</div><!--/.container-->

		</section><!--/.new-arrivals-->
		<!--new-arrivals end -->

		<!--sofa-collection start -->
		<section id="sofa-collection">
			<div class="owl-carousel owl-theme" id="collection-carousel">
				<div class="sofa-collection collectionbg1">
					<div class="container">

					</div>
				</div><!--/.sofa-collection-->
				<div class="sofa-collection collectionbg2">
					<div class="container">

					</div>
				</div><!--/.sofa-collection-->
			</div><!--/.collection-carousel-->

		</section><br><!--/.sofa-collection-->
		<!--sofa-collection end -->



		<!--newsletter strat -->

        <section id="contact" class="contact">
            <div class="container">

              <div class="section-title" data-aos="fade-up">
                <h2>Contact</h2>
                <p>Office KMS Furniture Location</p>
              </div>

              <div class="row no-gutters justify-content-center" data-aos="fade-up">

                <div class="col-lg-6 d-flex align-items-stretch">
                  <div class="info">
                    <div class="address">
                      <i class="icofont-google-map"></i>
                      <h4>Location:</h4>
                      <p>Jl. Untung Suropati No.92, Klangon, Kec. Bojonegoro, Kabupaten Bojonegoro, Jawa Timur 62115</p>
                    </div>

                    <div class="email mt-4">
                      <i class="icofont-envelope"></i>
                      <h4>Email:</h4>
                      <p>Yudhaerian@gmail.com</p>
                    </div>

                    <div class="phone mt-4">
                      <i class="icofont-phone"></i>
                      <h4>Call:</h4>
                      <p>0821-3112-5123</p>
                    </div>

                </div>

                </div>

                <div class="col-lg-6 d-flex align-items-stretch">
                  <iframe style="border:0; width: 100%; height: 320px;" src="https://maps.google.com/maps?q=KMS%20INTERIOR%20BOJONEGORO&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" allowfullscreen></iframe>

                </div>

            </div>
          </section><!-- End Contact Section -->
		<!--newsletter end -->


		<!--footer start-->
		<footer id="footer"  class="footer">
			<div class="container">
				<div class="hm-footer-copyright text-center">
				<div class="footer-social">
						<a href="https://www.facebook.com/kmsejahtera20"><i class="fa fa-facebook"></i></a>
						<a href="https://www.instagram.com/kms.interior.property/"><i class="fa fa-instagram"></i></a>
						<a href="https://api.whatsapp.com/send?phone=+62%20821-3112-5123&text=Saya%20ingin%20order/berkonsultasi%20di%20Karyamuda%20sejahtera"><i class="fa fa-whatsapp"></i></a>
						<a href="https://mail.google.com/mail/u/0/?view=cm&tf=1&fs=1&to=yudhaerian111@gmail.com"><i class="fa fa-envelope"></i></a>
						<a href="https://goo.gl/maps/QM6hntrKa77gpk1w5"><i class="fa fa-map-marker"></i></a>
					</div>
					<p>
						&copy;Copyright. designed and developed by <a href="#">Karyamuda Sejahtera</a>
					</p><!--/p-->
				</div><!--/.text-center-->
			</div><!--/.container-->

			<div id="scroll-Top">
				<div class="return-to-top">
					<i class="fa fa-angle-up " id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
				</div>

			</div><!--/.scroll-Top-->

        </footer><!--/.footer-->
		<!--footer end-->

		<!-- Include all js compiled plugins (below), or include individual files as needed -->

		<script src="assets/js/jquery.js"></script>

        <!--modernizr.min.js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

		<!--bootstrap.min.js-->
        <script src="assets/js/bootstrap.min.js"></script>

		<!-- bootsnav js -->
		<script src="assets/js/bootsnav.js"></script>

		<!--owl.carousel.js-->
        <script src="assets/js/owl.carousel.min.js"></script>


		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>


        <!--Custom JS-->
        <script src="assets/js/custom.js"></script>

        <script>
            let x = document.querySelectorAll(".money");
            for (let i = 0, len = x.length; i < len; i++) {
                let num = Number(x[i].innerHTML)
                          .toLocaleString('en');
                x[i].innerHTML = num;
                x[i].classList.add("currSign");
            }
        </script>
    </body>

</html>
