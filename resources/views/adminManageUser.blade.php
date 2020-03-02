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
        <h1 class="text-uppercase col-md-8">User</h1>
        <div class="justify-content-end d-flex col-md-4">
            <a href="{{url('admin/user/add')}}" class="btn btn-success justify-content-end">Tambah user</a>
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
            <th class="align-middle">Email</th>
            <th class="align-middle">Tanggal lahir</th>
            <th class="align-middle">Jenis kelamin</th>
            <th class="align-middle">Tinggi</th>
            <th class="align-middle">Berat</th>
            <th class="align-middle">Alamat</th>
            <th class="align-middle">Social Media</th>
            <th class="align-middle">Pendidikan Terakhir</th>
            <th class="align-middle text-md-center">foto</th>
            <th class="align-middle text-md-center">cover</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($user as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td><a href="{{url('admin/user/'.$user->profile->url_slug.'/verifikasi')}}">{{$user->profile->nama}}</a></td>
                <td>{{$user->profile->email}}</td>
                <td>{{$user->profile->tanggal_lahir}}</td>
                <td>{{$user->profile->jenis_kelamin}}</td>
                <td>{{$user->profile->tinggi_badan}}</td>
                <td>{{$user->profile->berat_badan}}</td>
                <td>{{$user->profile->alamat}}</td>
                <td>{{$user->profile->social_media}}</td>
                <td>{{$user->profile->pendidikan_terakhir}}</td>
                <td> <img src="{{asset($user->profile->profileFoto())}}" class="w-75"></td>
                <td> <img src="{{asset($user->profile->profileCover())}}" class="w-100"></td>
                <div class="button-group">
                    <td><a href="{{url('/admin/user/'.$user->profile->url_slug.'/delete')}}" class="btn btn-danger fa fa-trash"></a></td>
                    <td><a href="{{url('/admin/user/'.$user->profile->url_slug.'/edit')}}" class="btn btn-info fa fa-pencil"></a></td>
                    @if($user->profile->status_ktp != '1' or $user->profile->status_skck !=1 )
                        <td><a href="{{url('/admin/user/'.$user->profile->url_slug.'/verify')}}" class="btn btn-outline-warning  fa fa-check"></a> </td>
                        @else
                        <td><a href="{{url('/admin/user/'.$user->profile->url_slug.'/verify')}}" class="btn btn-success  fa fa-check"></a> </td>
                    @endif
                </div>

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
