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
    <h1>{{$hotel->nama}}</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="d-flex my-5">
                    <table class="table">
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

                        <tr>
                            <td>
                                <a href="{{url('admin/hotel/'.$hotel->url_slug.'/verifyHotel')}}" class="btn btn-success btn-block btn-lg fa fa-check "> Verify</a></td>
                                <hr>
                            <td>
                                <div><a href="{{url('admin/hotel/'.$hotel->url_slug.'/rejectHotel')}}" class="btn btn-danger btn-block btn-lg fa fa-close "> Reject</a> </div>
                            </td>
                        </tr>

                    </table>

                    <div class="ml-4">
                        <img src="{{asset($hotel->hotelPhoto())}}" class="w-100">
                    </div>

                </div>

            </div>
        </div>
    </div>




@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
