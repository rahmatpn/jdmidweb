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
    <h1>{{$pekerjaan->nama}}</h1>
@stop

@section('content')
    <div class="row my-9">
        <div class="card">
            <div class="card-body">
                <div class="d-flex my-5">
                    <table class="table">
                        <tr>
                            <th><h5> Nama Hotel: </h5></th>
                            <td class="text-md-left">{{$pekerjaan->hotel->profile->nama}}</td>
                        </tr>

                        <tr>
                            <th><h5> Posisi: </h5></th>
                            <td class="text-md-left">{{$pekerjaan->posisi->nama_posisi}}</td>
                        </tr>

                        <tr>
                            <th><h5> Area: </h5></th>
                            <td class="text-md-left">{{$pekerjaan->area}}</td>
                        </tr>

                        <tr>
                            <th><h5> Tanggal mulai: </h5></th>
                            <td class="text-md-left">{{$pekerjaan->tanggal_mulai}}</td>
                        </tr>

                        <tr>
                            <th><h5> Waktu mulai: </h5></th>
                            <td class="text-md-left">{{$pekerjaan->waktu_mulai}}</td>
                        </tr>

                        <tr>
                            <th><h5> Waktu selesai: </h5></th>
                            <td class="text-md-left">{{$pekerjaan->waktu_selesai}}</td>
                        </tr>

                        <tr>
                            <th><h5> Tinggi Minimal/Maksimal: </h5></th>
                            <td class="text-md-left">{{$pekerjaan->tinggi_minimal ?? '~'}}/{{$pekerjaan->tinggi_maksimal ?? '~'}}</td>
                        </tr>
                        <tr>
                            <th><h5> Berat Minimal/Maksimal: </h5></th>
                            <td class="text-md-left">{{$pekerjaan->berat_minimal ?? '~'}}/{{$pekerjaan->berat_maksimal ?? '~'}}</td>
                        </tr>
                        <tr>
                            <th><h5> Waktu bayaran: </h5></th>
                            <td class="text-md-left">{{$pekerjaan->bayaran}}</td>
                        </tr>
                        <tr>
                            <th><h5> Kuota: </h5></th>
                            <td class="text-md-left">{{$pekerjaan->kuota}}</td>
                        </tr>
                        <tr>
                            <th><h5> Deskripsi: </h5></th>
                            <td>{{$pekerjaan->deskripsi}}</td>
                        </tr>
                        <tr>
                            <td>
                                <a href="{{url('admin/pekerjaan/'.$pekerjaan->url_slug.'/verifyPekerjaan')}}" class="btn btn-success btn-block btn-lg fa fa-check ml-5"> Verify</a>

                            </td>
                            <td>
                              <a href="{{url('admin/pekerjaan/'.$pekerjaan->url_slug.'/rejectPekerjaan')}}" class="btn btn-danger btn-lg  fa fa-close ml-5"> Reject</a>
                            </td>
                        </tr>
                    </table>

                    <div class="ml-4">
                        <img src="{{asset($pekerjaan->foto ?? $pekerjaan->hotel->profile->hotelPhoto())}}" class="w-100">
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
