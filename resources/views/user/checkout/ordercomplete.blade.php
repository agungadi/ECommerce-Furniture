@extends('user.layouts.navbar')


@section('content')
<div class="colorlib-product">
    <div class="container">
        <div class="row row-pb-lg">
            <div class="col-md-10 offset-md-1">
                <div class="process-wrap">
                    <div class="process text-center">
                        <p><span>01</span></p>
                        <h3>Shopping Cart</h3>
                    </div>
                    <div class="process text-center">
                        <p><span>02</span></p>
                        <h3>Checkout</h3>
                    </div>
                    <div class="process text-center active">
                        <p><span>03</span></p>
                        <h3>Order Complete</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-10 offset-sm-1 text-center">
                <p class="icon-addcart"><span><i class="fas fa-check"></i></span></p>
                <h2 class="mb-4">Terima kasih telah membeli, pesanan anda selesai</h2>
                <h2 class="mb-4">Jumlah yang DP harus dibayarkan : <strong class='money'>{{ $order->down_payment }}</strong></h2>
                <h2 class="mb-4">No Rekening BCA <strong> 00289119 </strong> A/N KMS Furniture</h2>
                <h4 class="mb-4">Setelah sukses melakukan pembayaran silahkan upload bukti pembayaran</h4>

                <p>
                    <a href="{{ route('home') }}" class="btn btn-primary btn-outline-primary">Home</a>
                    <a href="{{ route('showbukti', $order->id) }}"class="btn btn-primary btn-outline-primary"><i class="fas fa-image"></i></i> Upload Bukti Pembayaran</a>
                </p>
            </div>
        </div>

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
