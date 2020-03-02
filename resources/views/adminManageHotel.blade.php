@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scroll/16.1.0/smooth-scroll.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>

    </head>
    <div class="row">
        <h1 class="text-uppercase col-md-8">Hotel</h1>
        <div class="justify-content-end d-flex col-md-4" >
            <a href="{{url('admin/hotel/add')}}" class="btn btn-success justify-content-end">Tambah Hotel</a>
        </div>
    </div>

@stop


@section('content')
    <div class="card shadow-sm">
        <div class="card-body">

    <table class="table table-responsive-md table-hover">
        <thead>
        <tr>
            <th class="align-middle">Id</th>
            <th class="align-middle">Nama</th>
            <th class="align-middle">Alamat</th>
            <th class="align-middle">Deskripsi</th>
            <th class="align-middle">Nomor Telepon</th>
            <th class="align-middle">Social Media</th>
            <th class="align-middle">Website</th>
            <th class="align-middle text-md-center">Foto</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($hotel as $hotel)
            <tr>
                <td>{{$hotel->id}}</td>
                <td>{{$hotel->profile->nama}}</td>
                <td>{{$hotel->profile->alamat}}</td>
                <td>{{$hotel->profile->deskripsi}}</td>
                <td>{{$hotel->profile->nomor_telepon}}</td>
                <td>{{$hotel->profile->social_media}}</td>
                <td>{{$hotel->profile->weabsite}}</td>
                <td class="text-md-center"><img src="{{asset($hotel->profile->hotelPhoto())}}" class="h-25"></td>
                <td><a href="{{url('/admin/hotel/'.$hotel->profile->url_slug.'/delete')}}" class="btn btn-danger fa fa-trash"></a> </td>
                <td><a href="{{url('/admin/hotel/'.$hotel->profile->url_slug.'/edit')}}" class="btn btn-info fa fa-pencil"></a> </td>
                @if($hotel->profile->status_verifikasi != '1')
                <td><a href="{{url('admin/hotel/'.$hotel->profile->url_slug.'/verify')}}" class="btn btn-outline-warning fa fa-check"></a> </td>
                @else
                    <td><a href="{{url('admin/hotel/'.$hotel->profile->url_slug.'/verify')}}" class="btn btn-success fa fa-check"></a> </td>
                    @endif
            </tr>
        @endforeach
        </tbody>
    </table>

        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
