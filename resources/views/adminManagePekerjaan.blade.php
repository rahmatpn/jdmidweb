@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <table class="table table-responsive-md table-hover">
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
            <td class="text-justify">{{$pekerjaan->deskripsi}}</td>
            <td><a href="{{url('/admin/pekerjaan/'.$pekerjaan->url_slug.'/delete')}}" class="btn btn-danger">Delete</a> </td>
            <td><a href="{{url('/admin/pekerjaan/'.$pekerjaan->url_slug.'/edit')}}" class="btn btn-primary">Edit</a> </td>
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
