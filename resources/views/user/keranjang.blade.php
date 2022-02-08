@extends('user.layouts.navbar')


@section('content')
		<div class="colorlib-product">
			<div class="container">
				<div class="row row-pb-lg">
					<div class="col-md-10 offset-md-1">
						<div class="process-wrap">
							<div class="process text-center active">
								<p><span>01</span></p>
								<h3>Shopping Cart</h3>
							</div>
							<div class="process text-center">
								<p><span>02</span></p>
								<h3>Checkout</h3>
							</div>
							<div class="process text-center">
								<p><span>03</span></p>
								<h3>Order Complete</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="row row-pb-lg">
					<div class="col-md-12">
						<div class="product-name d-flex">
							<div class="one-forth text-left px-4">
								<span>Product Details</span>
							</div>

                            <div class="one-eight text-center">
								<span>Color</span>
							</div>
							<div class="one-eight text-center">
								<span>Price</span>
							</div>
							<div class="one-eight text-center">
								<span>Quantity</span>
							</div>
							<div class="one-eight text-center">
								<span>Total</span>
							</div>
							<div class="one-eight text-center px-4">
								<span>Remove</span>
							</div>
						</div>
                        @foreach ($keranjang as $cart)
                        <?php
                            $qty = (int)$cart->jumlah;
                            $prices = (int)$cart->products->price;
                            $total = $qty * $prices;
                        ?>

                        {{-- @php
                        $totalharga = isset($totalharga) ? $totalharga + $cart->products->pivot->price : 0;
                        @endphp --}}

						<div class="product-cart d-flex">
							<div class="one-forth">
								<div class="product-img" style="background-image: url({{asset('storage/img/'.$cart->products->image1)}}); margin-left: 25px;">
								</div>
								<div class="display-tc">
									<h3>{{ $cart->products->name }}</h3>
								</div>
							</div>
                            {{-- <div class="one-forth pl-10">
								<div class="display-tc">
                                    <p style="font-size: 13px; color: black;">{{ $cart->catatan }}</p>
								</div>
							</div> --}}
                            <div class="one-eight text-center">
								<div class="display-tc">
									<span class="price">{{ $cart->warna }}</span>
								</div>
							</div>
							<div class="one-eight text-center">
								<div class="display-tc">
									<span class="price money">{{ $cart->products->price }}</span>
								</div>
							</div>
							<div class="one-eight text-center">
								<div class="display-tc">
									<form action="#">
										<input type="text" name="quantity" class="form-control input-number text-center" value="{{ $cart->jumlah }}" min="1" max="100" readonly>
									</form>
								</div>
							</div>
							<div class="one-eight text-center">
								<div class="display-tc">
									<span class="price money"><?php echo $total; ?></span>
								</div>
                                {{-- @php($totalharga += $cart->products->pivot->price)
                                @endphp --}}

							</div>
							<div class="one-eight text-center">
								<div class="display-tc">
                                    <form action="{{ route('hapuskeranjang', $cart->id) }}" method="POST">


                                        @csrf
                                        @method('DELETE')
                                    <button type="submit" class="closed"></button>
                                    {{-- <a href="#" class="closed"></a> --}}

                                </form>
								</div>
							</div>
						</div>
                        @endforeach
					</div>
				</div>
				<div class="row row-pb-lg">
					<div class="col-md-12">
						<div class="total-wrap">
							<div class="row">
								<div class="col-sm-8">
									<form action="#">
										<div class="row form-group">
											<div class="col-sm-9">
												{{-- <input type="text" name="quantity" class="form-control input-number" placeholder="Your Coupon Number..."> --}}
											</div>
											<div class="col-sm-3">
                                                <a class="btn btn-primary" href="{{ route('checkout') }}">Checkout</a>
											</div>
										</div>
									</form>
								</div>
								<div class="col-sm-4 text-center" style="margin-top: -6%">
									<div class="total">
										<div class="sub">
											<p><span>Total Product:</span> <span>{{ $count }}</span></p>

										</div>
										<div class="grand-total">
											<p><span><strong>Total Harga</span><span  class="money">{{ $purchases }} </span></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
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
