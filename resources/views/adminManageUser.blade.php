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
        <div class="justify-content-end d-flex col-md-4" >
            <button  data-toggle="modal" data-target="#myModal"  class="btn btn-success justify-content-end fa fa-plus"> Tambah User</button>
        </div>
    </div>
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title float-left">Add User</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form method="POST" class="form-detail" action="{{url('/admin/user/create')}}" >
                    @csrf
                    <div class="form-col">

                        <label class="form-row">
                            Nama    <input type="text" name="name" id="name" class="input-text" required>
                        </label>
                        <label class=" form-row">
                            Email   <input type="text" name="email" id="email" class="input-text" required>
                        </label>
                        <label class=" form-row">
                            Password <input type="password" name="password" id="password" class="input-text" required>
                        </label>
                        <label class=" form-row">
                            Confirm password <input type="password" name="password_confirmation" id="password-confirm" class="input-text" required autocomplete="new-password">
                        </label>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-default">Submit</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

@stop

@section('content')
    <div class="card shadow-sm">
        <div class="card-body">
    <table class="table table-sm table-hover">
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
            <th class="align-middle">Status KTP</th>
            <th class="align-middle">Status SKCK</th>
            <th class="align-middle text-md-center">Foto</th>
            <th class="align-middle text-md-center">Cover</th>
            <th class="align-middle text-md-center">Action</th>
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
                @if($user->profile->status_ktp == null)
                    <td><button class="btn btn-sm btn-dark fa fa-clock-o"></button></td>
                @elseif($user->profile->status_ktp == '1')
                    <td><button class="btn btn-sm btn-success fa fa-check"></button></td>
                @else
                    <td><button class="btn btn-sm btn-danger fa fa-close"></button></td>
                @endif
                @if($user->profile->status_skck == null)
                    <td><button class="btn btn-sm btn-dark fa fa-clock-o"></button></td>
                @elseif($user->profile->status_skck == '1')
                    <td><button class="btn btn-sm btn-success fa fa-check"></button></td>
                @else
                    <td><button class="btn btn-sm btn-danger fa fa-close"></button></td>
                @endif
                <td> <img src="{{asset($user->profile->profileFoto())}}" class="w-100"></td>
                <td> <img src="{{asset($user->profile->profileCover())}}" class="w-100"></td>
                <td class="text-sm"><a style="margin-bottom: 5px;" href="{{url('/admin/user/'.$user->profile->url_slug.'/delete')}}" class="btn btn-sm btn-danger fa fa-trash"></a>
                <a style="margin-bottom: 5px;" href="{{url('/admin/user/'.$user->profile->url_slug.'/edit')}}" class="btn btn-sm btn-info fa fa-pencil"></a>
                <a style="margin-bottom: 5px;" href="{{url('/admin/user/'.$user->profile->url_slug.'/verify')}}" class="btn btn-sm btn-outline-warning fa fa-eye"></a> </td>
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
