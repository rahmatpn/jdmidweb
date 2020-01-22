@extends('layouts.auth')

@section('content')
    <div class="row">
        <div class="col-3 p-5">
            <img src="{{$user->profile->profileFoto()}}" class="rounded-circle w-100">
        </div>
        <div class="col-9 pt-5">
            <div>
                <img src="{{$user->profile->profileCover()}}" class="w-100">
            </div>

            <div class="d-flex justify-content-between align-items-baseline">

                <div class="d-flex align-items-center pb-3">
                    <div class="h4">{{$user->profile->nama}}</div>

                </div>

            </div>

            <a href="/user/{{$user->id}}/edit">Edit Profile</a>


            <div class="pt-4 font-weight-bold" >{{$user->email}}</div>
            <div class="pt-4 font-weight-bold" >{{$user->profile->nama_lengkap}}</div>
            <div class="pt-4 font-weight-bold" >{{$user->profile->nomor_telepon}}</div>
            <div class="pt-4 font-weight-bold" >{{$user->profile->social_media}}</div>
            <div class="pt-4 font-weight-bold" >{{$user->profile->alamat}}</div>

        </div>

    </div>




@endsection
