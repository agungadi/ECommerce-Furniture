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
                    <div class="process text-center active">
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
        <div class="row">
            <div class="col-lg-12">
                <form method="POST"  action="{{ route('ordernow') }}" enctype="multipart/form-data" class="colorlib-form">
                    @csrf
                    {{-- @method('PUT') --}}

                    <h2>Alamat Pengiriman</h2>
                    <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="country">Pilih Alaamt Pengiriman</label>

                            <div class="form-field">
                                <i class="icon icon-arrow-down3"></i>
                                <select name="alamat_id" id="alamat_id" class="form-control">
                                    @foreach ($address as $key)
                                    <option value="{{ $key->id }}" >Nama Penerima :{{ $key->nama_penerima }}, Alamat: {{ $key->alamat }} , {{ $key->kota }}, {{ $key->provinsi }}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="float-right my-2" style="margin-right:20px; float:right">
                                <a href="{{ route('alamat.create') }}" class="btn btn-success">Tambah Alamat</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 float-left">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="cart-detail">
                                    <h2>Detail Order</h2>
                                    <ul>
                                        <li>
                                            <span>Subtotal</span>
                                            <ul>
                                                @foreach ($borrows as $produk)
                                                <?php
                                                $qty = (int)$produk->jumlah;
                                                $prices = (int)$produk->products->price;
                                                $total = $qty * $prices;
                                            ?>

                                                <li><span>{{ $produk->jumlah }} x {{ $produk->products->name }} : {{ $produk->catatan }}</span> <span class='money'><?php echo $total; ?></span></li>
                                                @endforeach
                                                {{-- <li><span>1 x Product Name</span> <span>$78.00</span></li> --}}
                                            </ul>
                                        </li>
                                        <li><strong><span>Order Total</span> <span class="money">{{$totalharga}}</span></strong></li>
                                    </ul>
                                </div>
                        </div>
                        </div>
                    </div>
                        <input id="id_product" type="hidden" class="form-control @error('') is-invalid @enderror" name="user_id" value="{{ Auth::user()->id }}" required autocomplete="tentang_buku">
                        <input id="id_product" type="hidden" class="form-control @error('') is-invalid @enderror" name="total_cost" value="{{$totalharga}}" required autocomplete="tentang_buku">

                    <div class="col-md-12 text-center">
                        </br>

                        <button type="submit" class="btn btn-primary">
                            Submit
                        </button>

                    </div>
                </form>

            </div>
            </div>

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
