@extends('user.layouts.navbar')


@section('content')
<body>


    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>



    <!-- Open Content -->
    <section class="bg-light">
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-5 mt-5">
                    @foreach($product as $products)

                    <div class="card mb-3">
                        <img class="card-img img-fluid" src="{{asset('storage/img/'.$products->image1)}}" alt="Card image cap" id="product-detail">
                        <div id="myModal" class="modalimg">
                            <img class="modalimg-content" id="img01">
                        <div id="caption"></div>
                        </div>
                    </div>
                    <div class="row">
                        <!--Start Controls-->
                        <div class="col-1 align-self-center">
                            <a href="#multi-item-example" role="button" data-bs-slide="prev">
                                <i class="text-dark fas fa-chevron-left"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                        </div>
                        <!--End Controls-->
                        <!--Start Carousel Wrapper-->
                        <div id="multi-item-example" class="col-10 carousel slide carousel-multi-item" data-bs-ride="carousel">
                            <!--Start Slides-->
                            <div class="carousel-inner product-links-wap" role="listbox">

                                <!--First slide-->
                                <div class="carousel-item active">
                                    <div class="row">
                                        @if (!empty($products->image1))
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid"  src="{{asset('storage/img/'.$products->image1)}}" alt="Product Image 1">
                                            </a>
                                        </div>
                                        @endif

                                        @if (!empty($products->image2))
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="{{asset('storage/img/'.$products->image2)}}" alt="Product Image 2">
                                            </a>
                                        </div>
                                        @endif

                                        @if (!empty($products->image3))
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="{{asset('storage/img/'.$products->image3)}}" alt="Product Image 3">
                                            </a>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                <!--/.First slide-->

                                <!--Second slide-->
                                <div class="carousel-item">
                                    <div class="row">
                                        @if (!empty($products->image4))
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="{{asset('storage/img/'.$products->image4)}}" alt="Product Image 4">
                                            </a>
                                        </div>
                                        @endif

                                        @if (!empty($products->image5))
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="{{asset('storage/img/'.$products->image5)}}" alt="Product Image 5">
                                            </a>
                                        </div>
                                        @endif

                                        @if (!empty($products->image6))
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="{{asset('storage/img/'.$products->image6)}}" alt="Product Image 6">
                                            </a>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                <!--/.Second slide-->


                            </div>
                            <!--End Slides-->
                        </div>
                        <!--End Carousel Wrapper-->
                        <!--Start Controls-->
                        <div class="col-1 align-self-center">
                            <a href="#multi-item-example" role="button" data-bs-slide="next">
                                <i class="text-dark fas fa-chevron-right"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <!--End Controls-->
                    </div>
                </div>
                <!-- col end -->

                <div class="col-lg-7 mt-5">
                    <div class="card">
                        <div class="card-body">

                            <h1 class="h1">{{ $products->name }}</h1>
                            <p class="h2 py-2 money">{{ $products->price }}</p>


                            @endforeach

                            <h6>Description:</h6>
                            <p>{{ ($products->deskripsi) }}</p>

                        </br>


                                {{-- <li>{{ Str::words($products->deskripsi, 1, '') }}</li> --}}

{{--
                                <div class="col-md-6">
                                    <input id="price" type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ $produk->price }}" required autocomplete="price">

                                    @error('price')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div> --}}

                            <form action="{{ route('konfirmasikeranjang') }}" method="POST"  enctype="multipart/form-data">
                                @csrf

                                {{-- <input type="hidden" name="product-title" value="Activewear"> --}}
                                <div class="row">
                                        <ul class="list-inline pb-8 pl-2">
                                            <li class="list-inline-item">Color :
                                                <input type="text" placeholder="Pilih warna" id="warna" name="warna" class=" @error('warna') is-invalid @enderror" style="width: auto; background-color:#E6E6E6; border: 2px solid #ced4da;  padding: 0.375rem 0.75rem;" required autocomplete="price">
                                                @error('warna')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                            </li>

                                        </ul>

                                        <ul class="list-inline pt-3 pb-3 pl-2">
                                            <li class="list-inline-item text-right ">
                                                Jumlah
                                                <input type="hidden" name="jumlah" id="product-quanity" value="1">
                                            </li>
                                            <li class="list-inline-item"><span class="btn btn-success" id="btn-minus">-</span></li>
                                            <li class="list-inline-item"><span class="badge bg-secondary" id="var-value">1</span></li>
                                            <li class="list-inline-item"><span class="btn btn-success" id="btn-plus">+</span></li>
                                        </ul>

                                    <li class="list-inline-item">Note :
                                        <input type="text" name="catatan" placeholder="Permintaan Lain" id="product-size" style="width: auto; background-color:#E6E6E6; border: 2px solid #ced4da;  padding: 0.375rem 0.75rem;">
                                    </li>
                                </div>
                                <input id="user_id" type="hidden" class="form-control @error('') is-invalid @enderror" name="product_id" value="{{ $products->id }}" required autocomplete="tentang_buku">
                                <input id="id_product" type="hidden" class="form-control @error('') is-invalid @enderror" name="user_id" value="{{ Auth::user()->id }}" required autocomplete="tentang_buku">


                            </br></br>

                                <div class="row pb-3">

                                    <div class="col d-grid">
                                        <button type="submit" class="btn btn-success btn-lg" name="submit" value="addtocard">Add To Cart</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Close Content -->

    <!-- Start Footer -->
    <footer class="bg-dark" id="tempaltemo_footer">
        <div class="container">
            <div class="row">


                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-success border-bottom pb-3 border-light logo">Kms. Furniture</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li>
                            <i class="fas fa-map-marker-alt fa-fw"></i>
                            Jl. Untung Suropati No.92, Klangon, Kec. Bojonegoro, Kabupaten Bojonegoro, Jawa Timur 62115
                        </li>
                        <li>
                            <i class="fa fa-phone fa-fw"></i>
                            <a class="text-decoration-none" href="tel:010-020-0340">0821-3112-5123</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope fa-fw"></i>
                            <a class="text-decoration-none" href="mailto:info@company.com">Yudhaerian@gmail.com</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Collection</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="#">Kitchen</a></li>
                        <li><a class="text-decoration-none" href="#">Living room</a></li>
                        <li><a class="text-decoration-none" href="#">Bathroom</a></li>
                        <li><a class="text-decoration-none" href="#">Cafe</a></li>
                        <li><a class="text-decoration-none" href="#">Office</a></li>
                         <li><a class="text-decoration-none" href="#">Bedroom</a></li>

                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Info</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="#">Home</a></li>
                        <li><a class="text-decoration-none" href="#">About Us</a></li>
                        <li><a class="text-decoration-none" href="#">FAQs</a></li>

                    </ul>
                </div>

            </div>

            <div class="row text-light mb-4">
                <div class="col-12 mb-3">
                    <div class="w-100 my-3 border-top border-light"></div>
                </div>
                <div class="col-auto me-auto">
                    <ul class="list-inline text-left footer-icons">
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="http://facebook.com/"><i class="fab fa-facebook-f fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/"><i class="fab fa-twitter fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.linkedin.com/"><i class="fab fa-linkedin fa-lg fa-fw"></i></a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>


    </footer>
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->

    <!-- Start Slider Script -->
    <script src="assets/js/slick.min.js"></script>
    <script>
        $('#carousel-related-product').slick({
            infinite: true,
            arrows: false,
            slidesToShow: 4,
            slidesToScroll: 3,
            dots: true,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                }
            ]
        });
    </script>
    <!-- End Slider Script -->


<script>
    // Get the modal
    var modalimg = document.getElementById('myModal');

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById('myImg');
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    img.onclick = function(){
        modalimg.style.display = "block";
        modalImg.src = this.src;
        modalImg.alt = this.alt;
        captionText.innerHTML = this.alt;
    }


    // When the user clicks on <span> (x), close the modal
    modalimg.onclick = function() {
        img01.className += " out";
        setTimeout(function() {
           modalimg.style.display = "none";
           img01.className = "modalimg-content";
         }, 400);

     }

    </script>

<script>
    let x = document.querySelectorAll(".money");
    for (let i = 0, len = x.length; i < len; i++) {
        let num = Number(x[i].innerHTML)
                  .toLocaleString('en');
        x[i].innerHTML = num;
        x[i].classList.add("currSign");
    }
</script>
    @endsection
