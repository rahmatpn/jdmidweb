@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

    <h1>{{$hotel->nama}}</h1>
@stop

@section('content')
    <div class="row my-9">
        <div class="card">
            <div class="card-body">
                <div class="d-flex my-5">
                    <table class="table table-responsive-md">
                        <tr>
                            <th><h5> Nama Hotel: </h5></th>
                            <td class="text-md-center">{{$hotel->nama}}</td>
                        </tr>

                        <tr>
                            <th><h5> Alamat: </h5></th>
                            <td class="text-md-center">{{$hotel->alamat}}</td>
                        </tr>

                        <tr>
                            <th><h5> Email: </h5></th>
                            <td class="text-md-center">{{$hotel->email}}</td>
                        </tr>

                        <tr>
                            <th><h5> Deskripsi: </h5></th>
                            <td class="text-md-center">{{$hotel->deskripsi}}</td>
                        </tr>

                        <tr>
                            <th><h5> Nomor telepon: </h5></th>
                            <td class="text-md-center">{{$hotel->nomor_telepon}}</td>
                        </tr>

                        <tr>
                            <th><h5> Social media: </h5></th>
                            <td class="text-md-center">{{$hotel->social_media}}</td>
                        </tr>

                        <tr>
                            <th><h5> Website: </h5></th>
                            <td class="text-md-center"><a href="{{$hotel->website}}">{{$hotel->website}}</a> </td>
                        </tr>
                    </table>

                    <div class="ml-4">
                        <img src="{{asset($hotel->hotelPhoto())}}" class="w-100">
                    </div>
                </div>
            </div>
            <td><a href="{{url('admin/hotel/'.$hotel->url_slug.'/verifyHotel')}}" class="btn btn-success"> Verify</a> </td>
            <td><a href="{{url('admin/hotel/'.$hotel->url_slug.'/rejectHotel')}}" class="btn btn-danger"> Reject</a> </td>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
