@extends('admin.layouts.navbarform')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="login100-form-title" style="background-image: url(/bootstrap/bg-02.jpg);">
					<span class="login100-form-title-1" style="color: white">
						Edit Penjualan
					</span>
				</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.penjualan.update', $order->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        {{-- <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Total Harga</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="total_cost" value="{{ $order->total_cost }}" required autocomplete="total_cost" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> --}}

                        {{-- <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">Tanggal Order</label>

                            <div class="col-md-6">
                                <input id="price" type="date" class="form-control @error('price') is-invalid @enderror" name="order_date" value="{{ $order->order_date }}" required autocomplete="order_date">

                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> --}}

                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">Order Status</label>

                            <div class="col-md-6">
                                <select name="order_status" class="form-control">
                                    <option value="Menunggu Konfirmasi" {{ $order->order_status == 'Menunggu Konfirmasi' ? 'selected' : ''}}>Menunggu Konfirmasi</option>
                                    <option value="Diproses" {{ $order->order_status == 'Diproses' ? 'selected' : ''}}>Diproses</option>
                                    <option value="Pengiriman" {{ $order->order_status == 'Pengiriman' ? 'selected' : ''}}>Pengiriman</option>
                                    <option value="Selesai" {{ $order->order_status == 'Selesai' ? 'selected' : ''}}>Selesai</option>
                                    </select>
                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">Estimasi</label>

                            <div class="col-md-6">
                                <input id="price" type="date" class="form-control @error('price') is-invalid @enderror" name="estimasi_date" value="{{ $order->estimasi_date }}" required autocomplete="estimasi_date">

                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">Progress</label>

                            <div class="col-md-6">
                                <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="progress" value="{{ $order->progress }}" required autocomplete="progress">

                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- <div class="form-group row">
                            <label for="file1" class="col-md-4 col-form-label text-md-right">Foto 1</label>
                            <div class="col-md-6">
                                <input id="image" type="file" class="form-control" name="file1" value="{{ $produk->image1 }}">
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
 --}}

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </br>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
