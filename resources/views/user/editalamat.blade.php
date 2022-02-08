@extends('user.layouts.navbar')


@section('content')
<div class="colorlib-product">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form method="POST"  action="{{ route('alamat.update', $address->id) }}" enctype="multipart/form-data" class="colorlib-form">
                    @csrf
                    @method('PUT')

                    <h2>Alamat Pelanggan</h2>
                <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="country">Provinsi</label>
                        <div class="form-field">
                            <i class="icon icon-arrow-down3"></i>
                            <select name="provinsi" id="provinsi" class="form-control">
                                <option value="Jawa Timur" {{ $address->provinsi == 'Jawa Timur' ? 'selected' : ''}}>Jawa Timur</option>
                                <option value="Jawa Tengah" {{ $address->provinsi == 'Jawa Tengah' ? 'selected' : ''}}>Jawa Tengah</option>
                                <option value="Jawa Barat" {{ $address->provinsi == 'Jawa Barat' ? 'selected' : ''}}>Jawa Barat</option>
                                <option value="Jakarta" {{ $address->provinsi == 'Jakarta' ? 'selected' : ''}}>Jakarta</option>
                                <option value="Bali" {{ $address->provinsi == 'Bali' ? 'selected' : ''}}>Bali</option>
                            </select>
                        </div>
                    </div>
                </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="fname">Nama Penerima</label>
                                <input type="text" id="fname" name="nama_penerima" value="{{ $address->nama_penerima }}"  class="form-control" placeholder="Your Name">
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="companyname">Alamat Lengkap</label>
                            <input type="text" id="companyname" name="alamat" class="form-control" value="{{ $address->alamat }}"  placeholder="Your Address">
                    </div>
                </div>


                <div class="col-md-12">
                            <div class="form-group">
                                <label for="companyname">Kota/Kab</label>
                            <input type="text" id="towncity" name="kota" class="form-control" value="{{ $address->kota }}"  placeholder="Town or City">
                    </div>
                </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Phone">Phone Number</label>
                                <input type="text" id="zippostalcode" name="no_hp" value="{{ $address->no_hp }}"  class="form-control" placeholder="08523456789">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="lname">Zip/Postal Code</label>
                                <input type="text" id="zippostalcode" name="kode_pos" value="{{ $address->kode_pos }}" class="form-control" placeholder="Postal Code/zip">
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
@endsection
