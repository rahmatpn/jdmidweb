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
    <h1>PEKERJAAN</h1>
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
    <table class="table table-sm table-hover">
        <thead>
        <tr>
            <th class="align-middle text-sm">Id</th>
            <th class="align-middle text-sm">Posisi</th>
            <th class="align-middle text-sm">Hotel</th>
            <th class="align-middle text-sm">Area</th>
            <th class="align-middle text-sm">Tanggal</th>
            <th class="align-middle text-sm">Waktu mulai</th>
            <th class="align-middle text-sm">Waktu selesai</th>
            <th class="align-middle text-sm">Tinggi minimal</th>
            <th class="align-middle text-sm">Tinggi maksimal</th>
            <th class="align-middle text-sm">Berat minimal</th>
            <th class="align-middle text-sm">Berat Maksimal</th>
            <th class="align-middle text-sm">Bayaran</th>
            <th class="align-middle text-sm">Kuota</th>
{{--            <th class="align-middle text-sm text-md-center">Deskripsi</th>--}}
            <th class="align-middle text-sm">Status</th>
            <th class="align-middle text-sm">Foto</th>
            <th> </th>
        </tr>
        </thead>
        <tbody>
        @foreach($pekerjaan as $pekerjaan)
            <tr>
            <td class="text-sm">{{$pekerjaan->id}}</td>
            <td class="text-sm">{{$pekerjaan->posisi->nama_posisi}}</td>
            <td class="text-sm">{{$pekerjaan->hotel->profile->nama}}</td>
            <td class="text-sm">{{$pekerjaan->area}}</td>
            <td class="text-sm">{{$pekerjaan->tanggal_mulai}}</td>
            <td class="text-sm">{{$pekerjaan->waktu_mulai}}</td>
            <td class="text-sm">{{$pekerjaan->waktu_selesai}}</td>
            <td class="text-sm">{{$pekerjaan->tinggi_minimal ?? '-'}}</td>
            <td class="text-sm">{{$pekerjaan->tinggi_maksimal ?? '-'}}</td>
            <td class="text-sm">{{$pekerjaan->berat_minimal ?? '-'}}</td>
            <td class="text-sm">{{$pekerjaan->berat_maksimal ?? '-'}}</td>
            <td class="text-sm">Rp.{{$pekerjaan->bayaran}}</td>
            <td class="text-sm">{{$pekerjaan->kuota}}</td>
{{--            <td class="text desc text-sm">{{$pekerjaan->deskripsi}}</td>--}}
                @if($pekerjaan->status == null)
                    <td class="text-sm"><button class="btn btn-sm btn-dark fa fa-clock-o"></button></td>

                @elseif($pekerjaan->status == '1')
                    <td class="text-sm"><button class="btn btn-sm btn-success fa fa-check"></button></td>

                @else
                    <td class="text-sm"><button class="btn btn-sm btn-danger fa fa-close"></button></td>
                @endif
            <td class="text-sm"><img src="{{asset($pekerjaan->foto ?? $pekerjaan->hotel->profile->hotelPhoto())}}" class="w-100"></td>
            <td class="text-sm"><a style="margin-bottom: 5px;" href="{{url('/admin/pekerjaan/'.$pekerjaan->url_slug.'/delete')}}" class="btn btn-sm btn-danger fa fa-trash"></a>
                <a style="margin-bottom: 5px;" href="{{url('/admin/pekerjaan/'.$pekerjaan->url_slug.'/edit')}}" class="btn btn-sm btn-info fa fa-pencil"></a>
                <a style="margin-bottom: 5px;" href="{{url('admin/pekerjaan/'.$pekerjaan->url_slug.'/verify')}}" class="btn btn-sm btn-outline-warning fa fa-eye"></a></td>

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
