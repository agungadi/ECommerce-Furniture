@extends('admin.layouts.navbar')

@section('content')
<section id="services">
    <div class="container">

        <div class="row">


        <div class="col-md-12">

            <div  class="content-box-large">

<div class="row">
    <div class="col-lg-12 margin-tb" style="margin-top: 40px;">

        <form method="get" action="/admin/penjualansearch">
            <div class="float-left my-2" style="margin-right:20px; float:left">
                <button type="submit" class="btn btn-primary">Search</button>

            </div>

            <div class="float-left my-2" style="float: left">
                <input type="search" name="search" class="form-control" id="cari" aria-describedby="search" >

            </div>

        </form>
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
                <th>Id</th>
                <th>UserId</th>
                <th>Total Harga</th>
                <th>Order Date</th>
                <th>Status Order</th>
                <th>Estimasi Selesai</th>
                <th>Progres</th>
                <th>Bukti</th>
                <th width="250px">Action</th>
            </thead>

                </tr>
                @foreach ($order as $orders)
                <tr>
                <td>{{ $orders->id }}</td>
                <td>{{ $orders->user_id }}</td>
                <td>{{ $orders->total_cost }}</td>
                <td>{{ $orders->order_date }}</td>
                <td>{{ $orders->order_status }}</td>
                <td>{{ $orders->estimasi_date }}</td>
                <td>{{ $orders->progress }}</td>
                <td>{{ $orders->bukti }}</td>

                <td>
                 <a class="btn btn-primary" href="{{ route('admin.penjualan.edit', $orders->id) }}">Edit</a>
                 <a class="btn btn-primary" href="{{ route('admin.penjualan.show', $orders->id) }}">Show</a>

                <form action="{{ route('admin.penjualan.destroy', $orders->id) }}" method="POST">


                @csrf
                 @method('DELETE')

            <button type="submit" class="btn btn-danger" onClick="return confirm('Are you sure you want to delete?')">Delete</button>
            </form>
            </td>
            </tr>
                @endforeach
            </table>
            </div>
        </div>
        </div>

@endsection
