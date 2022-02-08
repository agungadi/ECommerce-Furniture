@extends('admin.layouts.navbarform')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="login100-form-title" style="background-image: url(/bootstrap/bg-02.jpg);">
					<span class="login100-form-title-1" style="color: white">
						Edit Produk
					</span>
				</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.produk.update', $produk->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nama Produk</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $produk->name }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">Harga</label>

                            <div class="col-md-6">
                                <input id="price" type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ $produk->price }}" required autocomplete="price">

                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="stock" class="col-md-4 col-form-label text-md-right">Deskripsi</label>

                            <div class="col-md-6">
                                {{-- <input id="deskripsi" type="number" class="form-control @error('deskripsi') is-invalid @enderror" name="stock" value="{{ old('deskripsi') }}" required autocomplete="deskripsi"> --}}
                                <textarea  id="deskripsi" class="form-control @error('jenis_hewan') is-invalid @enderror" rows="3" name="deskripsi" required autocomplete="deskripsi">{{ $produk->deskripsi }}</textarea>

                                @error('deskripsi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
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

                        <div class="form-group row">
                            <label for="file1" class="col-md-4 col-form-label text-md-right">Foto 2</label>
                            <div class="col-md-6">
                                <input id="image" type="file" class="form-control" name="file2" value="{{ $produk->image2 }}">
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="file1" class="col-md-4 col-form-label text-md-right">Foto 3</label>
                            <div class="col-md-6">
                                <input id="image" type="file" class="form-control" name="file3" value="{{ $produk->image3 }}">
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="file1" class="col-md-4 col-form-label text-md-right">Foto 4</label>
                            <div class="col-md-6">
                                <input id="image" type="file" class="form-control" name="file4" value="{{ $produk->image4 }}">
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="file1" class="col-md-4 col-form-label text-md-right">Foto 5</label>
                            <div class="col-md-6">
                                <input id="image" type="file" class="form-control" name="file5" value="{{ $produk->image5 }}">
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="file1" class="col-md-4 col-form-label text-md-right">Foto 6</label>
                            <div class="col-md-6">
                                <input id="image" type="file" class="form-control" name="file6" value="{{ $produk->image6 }}">
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>




                        <div class="form-group row">
                            <label for="category" class="col-md-4 col-form-label text-md-right">Category</label>

                            <div class="col-md-6">
                                <select name="category" class="form-control">

                                    @foreach ($categories as $key)
                                    <option value="{{ $key->id }}" {{ $produk->category ==  $key->id ? 'selected' : ''}}>{{ $key->category }}</option>
                                    @endforeach
                                </select>

                                @error('category')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



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
