@extends('user.layouts.navbar')


@section('content')
    <div class="container">

    <div class="row">
        <div class="col-lg-12 margin-tb" style="margin-top: 40px;">
{{--
            <form method="get" action="/admin/users/search">
                <div class="float-left my-2" style="margin-right:20px; float:left">
                    <button type="submit" class="btn btn-primary">Search</button>

                </div>

                <div class="float-left my-2" style="float: left">
                    <input type="search" name="search" class="form-control" id="cari" aria-describedby="search" >

                </div>

            </form> --}}
            <div class="float-right my-2" style="margin-right:20px; float:right">
                <a href="{{ route('alamat.create') }}" class="btn btn-success">Tambah Alamat</a>
            </div>
        </div>
    </div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

            <table class="table table-bordered">
                <thead class="thead">
                <tr>
                <th>Nama Penerima</th>
                <th>Alamat Lengkap</th>
                <th>Kota</th>
                <th>Provinsi</th>
                <th>Kode Pos</th>
                <th>No Hp</th>
                <th width="180px">Action</th>
            </thead>

                </tr>
                @foreach ($address as $alamat)
                <tr>
                <td>{{ $alamat->nama_penerima }}</td>
                <td>{{ $alamat->alamat }}</td>
                <td>{{ $alamat->kota }}</td>
                <td>{{ $alamat->provinsi }}</td>
                <td>{{ $alamat->kode_pos }}</td>
                <td>{{ $alamat->no_hp }}</td>


                <td>
                 <a class="btn btn-primary" href="{{ route('alamat.edit', $alamat->id) }}">Edit</a>

                <form action="{{ route('alamat.destroy', $alamat->id) }}" method="POST">


                @csrf
                @method('DELETE')
            <button type="submit" class="btn btn-danger" onClick="return confirm('Are you sure you want to delete?')">Delete</button>
            </form>
            </td>
            </tr>
                @endforeach
            </table>


    </div>
@endsection
