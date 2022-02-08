@extends('user.layouts.navbar')


@section('content')
<div class="colorlib-product">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form method="post"  action="{{ route('buktiupload', $order->id) }}" enctype="multipart/form-data" class="colorlib-form">
                    @csrf
                    <h2 style="text-align: center; font-weight:bold;">Upload Bukti Pembayaran</h2>

                    <div class="row">
                        <div class="col-sm-10 offset-sm-1 text-center">

                            <h2 class="mb-4">Jumlah Down Payment yang harus dibayarkan : <strong class='money'>{{ $order->down_payment }}</strong></h2>
                            <h2 class="mb-4">No Rekening BCA <strong> 00289119 </strong> A/N KMS Furniture</h2>

                        </div>
                    </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="bukti">Upload Foto Bukti Pembayaran</label>
                                {{-- <input type="text" id="zippostalcode" name="kode_pos" class="form-control" placeholder="Postal Code/zip"> --}}
                                <div class="col-md-6">
                                    <input id="imgInp" accept="image/*" type="file" class="@error('file6') is-invalid @enderror" name="bukti" value="{{ old('bukti') }}">
                                    @error('bukti')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </br>
                                <img id="blah" src="#" alt="your image" />

                            </div>
                        </div>

                        <input id="id_product" type="hidden" class="form-control @error('') is-invalid @enderror" name="user_id" value="{{ Auth::user()->id }}" required autocomplete="tentang_buku">


                        <div class="col-md-12 text-center">
                        </br>

                        <button type="submit" class="btn btn-primary">
                            Submit
                        </button>
                                            </div>
            </div>
            </form>
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

    <script>
    imgInp.onchange = evt => {
    const [file] = imgInp.files
    if (file) {
        blah.src = URL.createObjectURL(file)
    }
    }
    </script>
@endsection
