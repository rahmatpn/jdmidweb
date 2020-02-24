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

        </tr>
        </thead>
        <tbody>
        @foreach($user as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->profile->nama}}</td>
                <td>{{$user->profile->email}}</td>
                <td>{{$user->profile->tanggal_lahir}}</td>
                <td>{{$user->profile->jenis_kelamin}}</td>
                <td>{{$user->profile->tinggi_badan}}</td>
                <td>{{$user->profile->berat_badan}}</td>
                <td>{{$user->profile->alamat}}</td>
                <td>{{$user->profile->social_media}}</td>
                <td>{{$user->profile->pendidikan_terakhir}}</td>
                <td> <img src="{{asset($user->profile->profileFoto())}}" class="w-100"></td>
                <td> <img src="{{asset($user->profile->profileCover())}}" class="w-100"></td>
                <td><a href="{{url('/admin/user/'.$user->profile->url_slug.'/delete')}}" class="btn btn-danger">Delete</a> </td>
                <td><a href="{{url('/admin/user/'.$user->profile->url_slug.'/edit')}}" class="btn btn-primary">Edit</a> </td>

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
