@extends('admin.layouts.navbarform')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="login100-form-title" style="background-image: url(/bootstrap/bg-02.jpg);">
					<span class="login100-form-title-1" style="color: white">
						Tambah Produk
					</span>
				</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.produk.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nama Produk</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

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
                                <input id="price" type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price">

                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="deskripsi" class="col-md-4 col-form-label text-md-right">Deskripsi</label>

                            <div class="col-md-6">
                                {{-- <input id="deskripsi" type="number" class="form-control @error('deskripsi') is-invalid @enderror" name="stock" value="{{ old('deskripsi') }}" required autocomplete="deskripsi"> --}}
                                <textarea  id="deskripsi" class="form-control @error('jenis_hewan') is-invalid @enderror" rows="3" name="deskripsi" required autocomplete="deskripsi"></textarea>

                                @error('deskripsi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="file1" class="col-md-4 col-form-label text-md-right">Foto</label>
                            <div class="col-md-6">
                                <input id="file1" type="file" class="form-control @error('file1') is-invalid @enderror" name="file1" value="{{ old('file1') }}" required autocomplete="file1">
                                @error('file1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="file1" class="col-md-4 col-form-label text-md-right">Foto 2</label>
                            <div class="col-md-6">
                                <input id="file1" type="file" class="form-control @error('file1') is-invalid @enderror" name="file2" value="{{ old('file1') }}">
                                @error('file1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="file3" class="col-md-4 col-form-label text-md-right">Foto 3</label>
                            <div class="col-md-6">
                                <input id="file3" type="file" class="form-control @error('file3') is-invalid @enderror" name="file3" value="{{ old('file3') }}">
                                @error('file3')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="file4" class="col-md-4 col-form-label text-md-right">Foto 4</label>
                            <div class="col-md-6">
                                <input id="file4" type="file" class="form-control @error('file4') is-invalid @enderror" name="file4" value="{{ old('file4') }}">
                                @error('file4')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="file5" class="col-md-4 col-form-label text-md-right">Foto 5</label>
                            <div class="col-md-6">
                                <input id="file5" type="file" class="form-control @error('file5') is-invalid @enderror" name="file5" value="{{ old('file5') }}">
                                @error('file5')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="file6" class="col-md-4 col-form-label text-md-right">Foto 6</label>
                            <div class="col-md-6">
                                <input id="file6" type="file" class="form-control @error('file6') is-invalid @enderror" name="file6" value="{{ old('file6') }}">
                                @error('file6')
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
                                    <option value="{{ $key->id }}" >{{ $key->category }}</option>
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
