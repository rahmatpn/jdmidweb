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
    <h1>Pekerjaan</h1>
    <style>
        .desc {
            white-space: nowrap;
            width: 200px;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .text {
            display: block;/* or inline-block */
            text-overflow: ellipsis;
            word-wrap: break-word;
            overflow: hidden;
            max-height: 4.2em;
            line-height: 1.8em;
        }

    </style>
@stop

@section('content')
    <div class="card shadow-sm" >
        <div class="card-body">
    <table class="table table-hover table-sm ">
        <thead>
        <tr>
            <th class="align-middle">Id</th>
            <th class="align-middle">Posisi</th>
            <th class="align-middle">Hotel</th>
            <th class="align-middle">Area</th>
            <th class="align-middle">Tanggal</th>
            <th class="align-middle">Waktu mulai</th>
            <th class="align-middle">Waktu selesai</th>
            <th class="align-middle">Tinggi minimal</th>
            <th class="align-middle">Tinggi maksimal</th>
            <th class="align-middle">Berat minimal</th>
            <th class="align-middle">Berat Maksimal</th>
            <th class="align-middle">Bayaran</th>
            <th class="align-middle">Kuota</th>
            <th class="align-middle text-md-center">Deskripsi</th>
            <th class="align-middle">Status</th>
            <th class="align-middle">Foto</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($pekerjaan as $pekerjaan)
            <tr>
            <td>{{$pekerjaan->id}}</td>
            <td>{{$pekerjaan->posisi->nama_posisi}}</td>
            <td>{{$pekerjaan->hotel->profile->nama}}</td>
            <td>{{$pekerjaan->area}}</td>
            <td>{{$pekerjaan->tanggal_mulai}}</td>
            <td>{{$pekerjaan->waktu_mulai}}</td>
            <td>{{$pekerjaan->waktu_selesai}}</td>
            <td>{{$pekerjaan->tinggi_minimal ?? '-'}}</td>
            <td>{{$pekerjaan->tinggi_maksimal ?? '-'}}</td>
            <td>{{$pekerjaan->berat_minimal ?? '-'}}</td>
            <td>{{$pekerjaan->berat_maksimal ?? '-'}}</td>
            <td>Rp.{{$pekerjaan->bayaran}}</td>
            <td>{{$pekerjaan->kuota}}</td>
            <td class="text desc">{{$pekerjaan->deskripsi}}</td>
                @if($pekerjaan->status == null)
                    <td><button class="btn btn-dark fa fa-clock-o"></button></td>
                    {{--                <td>Belum diverifikasi</td>--}}
                @elseif($pekerjaan->status == '1')
                    <td><button class="btn btn-success fa fa-check"></button></td>
                    {{--                <td>Terverifikasi</td>--}}
                @else
                    <td><button class="btn btn-danger fa fa-close"></button></td>
                @endif
            <td><img src="{{asset($pekerjaan->foto ?? $pekerjaan->hotel->profile->hotelPhoto())}}" class="w-100"></td>
            <td><a href="{{url('/admin/pekerjaan/'.$pekerjaan->url_slug.'/delete')}}" class="btn btn-danger fa fa-trash"></a></td>
            <td><a href="{{url('/admin/pekerjaan/'.$pekerjaan->url_slug.'/edit')}}" class="btn btn-info fa fa-pencil"></a></td>
{{--               @if($pekerjaan->status == null)--}}
                        <td><a href="{{url('admin/pekerjaan/'.$pekerjaan->url_slug.'/verify')}}" class="btn btn-outline-warning fa fa-eye"></a></td>
{{--                   @elseif($pekerjaan->status == '1')--}}
{{--                        <td><a href="{{url('admin/pekerjaan/'.$pekerjaan->url_slug.'/verify')}}" class="btn btn-success fa fa-check"></a></td>--}}
{{--                   @else--}}
{{--                        <td><a href="{{url('admin/pekerjaan/'.$pekerjaan->url_slug.'/verify')}}" class="btn btn-danger fa fa-close"></a></td>--}}
{{--                   @endif--}}
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
