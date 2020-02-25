@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Hotel</h1>
    <div class="justify-content-end d-flex">
        <a href="{{url('admin/hotel/add')}}" class="btn btn-success justify-content-end">Tambah Hotel</a>
    </div>
@stop

@section('content')
@section('content')
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
                <td><a href="{{url('/admin/hotel/'.$hotel->profile->url_slug.'/delete')}}" class="btn btn-danger">Hapus</a> </td>
                <td><a href="{{url('/admin/hotel/'.$hotel->profile->url_slug.'/edit')}}" class="btn btn-info">Edit</a> </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
