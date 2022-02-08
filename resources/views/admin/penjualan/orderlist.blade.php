@extends('admin.layouts.navbar')


@section('content')
<div class="colorlib-product">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="row">
                        <div class="cart-alamat">
                            <h2>Alamat Pemesan</h2>
                            <ul>
                                <li>
                                    <ul>
                                        <li><span>Nama Penerima</span> <span style="float: left;">{{ $alamat->cust_address->nama_penerima }}</span></li>
                                        <li><span>Alamat</span> <span>{{ $alamat->cust_address->alamat }}</span></li>
                                    </ul>
                                </li>
                                <li><span>Kota & Provinsi</span> <span>{{ $alamat->cust_address->kota }}, {{ $alamat->cust_address->provinsi }}</span></li>
                                <li><span>Kode Pos & No HP</span> <span>{{ $alamat->cust_address->kode_pos }} / {{ $alamat->cust_address->no_hp }}</span></li>
                            </ul>
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
                    <div class="one-forth">
                        <span>Catatan</span>
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
                    {{-- <div class="one-eight text-center px-4">
                        <span>Remove</span>
                    </div> --}}
                </div>


                @foreach ($order as $orders)

                <div class="product-cart d-flex">
                    <div class="one-forth">
                        <div class="product-img" style="background-image: url({{asset('storage/img/'.$orders->keranjang->products->image1)}}); margin-left: 25px;">
                        </div>
                        <div class="display-tc">
                            <h3>{{ $orders->keranjang->products->name }}</h3>
                        </div>
                    </div>
                    <div class="one-forth">
                        <div class="display-tc">
                            <p style="font-size: 13px; color: black;">{{ $orders->keranjang->catatan }}</p>
                        </div>
                    </div>
                    <div class="one-eight text-center">
                        <div class="display-tc">
                            <span class="price"> {{ $orders->keranjang->warna }}</span>
                        </div>
                    </div>
                    <div class="one-eight text-center">
                        <div class="display-tc">
                            <span class="price">{{ $orders->unit_price }}</span>
                        </div>
                    </div>
                    <div class="one-eight text-center">
                        <div class="display-tc">
                            <form action="#">
                                <input type="text" name="quantity" class="form-control input-number text-center" value="{{ $orders->jumlah }}" min="1" max="100" readonly>
                            </form>
                        </div>
                    </div>
                    <div class="one-eight text-center">
                        <div class="display-tc">
                            <span class="price">{{ $orders->total_price }}</span>
                        </div>
                        {{-- @php($totalharga += $cart->products->pivot->price)
                        @endphp --}}

                    </div>
                    {{-- <div class="one-eight text-center">
                        <div class="display-tc">
                            <a href="#" class="closed"></a>
                        </div>
                    </div> --}}
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
                                        <a class="btn btn-primary" href="{{ route('admin.penjualan.index') }}">Kembali</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-4 text-center" style="margin-top: -6%">
                            <div class="total">
                                <div class="sub">
                                    <p><span>Bukti DP:</span> <span></span></p>
                                    <p><span>
                                        <img id="myImg" src="{{asset('storage/img/'.$alamat->bukti)}}">
                                        <!-- The Modal -->
                                 <!-- The Modal -->
                                        <div id="myModal" class="modalimg">
                                            <img class="modalimg-content" id="img01">
                                        <div id="caption"></div>
                                        </div>
                                    </span>
                                    <span> </span></p>

                                </div>
                                <div class="grand-total">
                                    <p><span><strong>Down Payment</span><span  class="money">{{ $alamat->down_payment }}</span></p>

                                    <p><span><strong>Total Harga</span><span  class="money">{{ $alamat->total_cost }}</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Start Footer -->
<script>
let x = document.querySelectorAll(".money");
for (let i = 0, len = x.length; i < len; i++) {
let num = Number(x[i].innerHTML)
          .toLocaleString('en');
x[i].innerHTML = num;
x[i].classList.add("currSign");
}
</script>

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
@endsection
