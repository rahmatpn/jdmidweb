@extends('layouts.auth')

@section('css')
    <style>
        /*.profile-header {*/
        /*    transform: translateY(5rem);*/
        /*}*/


        /*.fb-profile img.fb-image-lg{*/
        /*    !*z-index: 0;*!*/
        /*    !*width: 100%;*!*/
        /*    !*margin-bottom: 10px;*!*/
        /*    display: block;*/
        /*    width: 100%;*/
        /*    height: auto;*/
        /*}*/

        /*.fb-image-profile*/
        /*{*/
        /*    margin: -90px 10px 0px 50px;*/
        /*    z-index: 9;*/
        /*    width: 20%;*/
        /*}*/

        /*@media (max-width:768px)*/
        /*{*/

        /*    .fb-profile-text>h1{*/
        /*        font-weight: 700;*/
        /*        font-size:16px;*/
        /*    }*/

        /*    .fb-image-profile*/
        /*    {*/
        /*        margin: -45px 10px 0px 25px;*/
        /*        z-index: 9;*/
        /*        width: 20%;*/
        /*    }*/
        /*}*/
        body{
            background-color: #ffffff;
        }
        .border{
            border-bottom:1px solid #F1F1F1;
            margin-bottom:10px;
        }

        .image-section{
            padding: 0px;
        }
        .image-section img{
            width: 100%;
            height:450px;
            position: relative;
        }
        .user-image{
            position: absolute;
            margin-top: -100px;
        }
        .user-left-part{
            margin: 10px;
        }
        .user-image img{
            width:300px;
            height: 100%;
        }
        .user-profil-part{
            padding-bottom: 100px;
            background-color:#FAFAFA;
        }

        .user-detail-row{
            padding-top: 50px;
            margin:10px;
        }
        .user-detail-section2 p{
            font-size:15px;
            padding: 0px;
            margin: 0px;
        }
        .user-detail-section2{
            margin-top:10px;
        }
        .user-detail-section2 span{
            color:#7CBBC3;
            font-size: 20px;
        }
        .user-detail-section2 small{
            font-size:12px;
            color:#D3A86A;
        }
        .profile-right-section{
            padding: 20px 0px 10px 15px;
            background-color: #FFFFFF;
        }
        .profile-right-section-row{
            margin: 0px;
        }
        .profile-header-section1 h1{
            font-size: 25px;
            margin: 0px;
        }
        .profile-header-section1 p{
            color:#878787;
        }
        .req-btn{
            height:30px;
            font-size:12px;
        }
        .profile-tag{
            padding: 10px;
            border:1px solid #F6F6F6;
        }
        .profile-tag p{
            font-size: 12px;
            color:#ADADAD;
        }
        .profile-tag i{
            color:#ADADAD;
            font-size: 20px;
        }
        .image-right-part{
            background-color: #FCFCFC;
            margin: 0px;
            padding: 5px;
        }
        .img-main-rightPart{
            background-color: #FCFCFC;
        }
        .image-right-detail{
            padding: 0px;
        }
        .image-right-detail p{
            font-size: 12px;
        }
        .image-right-detail a:hover{
            text-decoration: none;
        }
        .image-right img{
            width: 100%;
        }
        .image-right-detail-section2{
            margin: 0px;
        }
        .image-right-detail-section2 p{
            color:#38ACDF;
            margin:0px;
        }
        .image-right-detail-section2 span{
            color:#7F7F7F;
        }
    </style>
@endsection

@section('content')

{{--    <div class="container">--}}
{{--        <div class="row py-lg px-4">--}}
{{--        <div class="fb-profile">--}}
{{--            <div class="col-xl-9 col-md-6 col-sm-10 mx-auto">--}}
{{--                        <div class="bg-white shadow rounded overflow-hidden">--}}
{{--            <img align="left" class="fb-image-lg" width="1000" height="1700" src="{{$user->profile->profileCover()}}" alt="Profile image example"/>--}}

{{--                                <div class="container pl-2">--}}
{{--                                    <img align="left" class="fb-image-profile thumbnail" width="" src="https://pbs.twimg.com/profile_images/1031323756512325632/jlW-_4yz_400x400.jpg" alt="Profile image example"/>--}}
{{--                                </div>--}}

{{--            <div class="fb-profile-text">--}}
{{--                <h1>Eli Macy</h1>--}}
{{--                <p>Girls just wanna go fun.</p>--}}
{{--            </div>--}}

{{--                    </div>--}}
{{--                    </div>--}}
{{--        </div>--}}
{{--            </div>--}}
{{--    </div> <!-- /container -->--}}

{{--        <div class="row py-lg px-4">--}}
{{--        <div class="col-xl-9 col-md-6 col-sm-10 mx-auto">--}}
{{--            <div class="bg-white shadow rounded overflow-hidden">--}}
{{--                <div class="px-4 pt-0 pb-4 bg-dark">--}}
{{--                <img src ="{{$user->profile->profileCover()}}" width="100" class="rounded-right mb-4 img-thumbnail">--}}
{{--                </div>--}}
{{--                    <div class="container pl-2">--}}

{{--                        <div class="media align-items-end profile-header">--}}

{{--                            <div class="profile mr-3">--}}

{{--                                <img src="{{$user->profile->profileFoto()}}" alt="..." width="200" class="rounded mb-4 img-thumbnail">--}}
{{--                            </div>--}}
{{--                            <div class="media-body mb-5 text-white">--}}
{{--                                <h4 class="mt-0 mb-0">{{$user->profile->nama_lengkap}}</h4>--}}
{{--                                <p class="small mb-4"> <i class="fa fa-map-marker mr-2"></i>{{$user->email}}</p>--}}

{{--                            </div>--}}
{{--                            <div class="justify-content-end">--}}
{{--                                <a href="/user/{{$user->id}}/edit" class="btn btn-dark btn-sm btn-block justify-content-end">Edit profile</a>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                    </div>--}}


{{--                <div class="bg-light p-5">--}}

{{--                    <ul class="list-inline mb-0">--}}
{{--                        <li class="list-inline-item">--}}

{{--                            <div class="pt-1 font-weight-bold">Username : {{$user->profile->nama}}</div>--}}
{{--                            <div class="pt-1 font-weight-bold">Nama : {{$user->profile->nama_lengkap}}</div>--}}
{{--                            <div class="pt-1 font-weight-bold">Nomor Telepon : {{$user->profile->nomor_telepon}}</div>--}}
{{--                            <div class="pt-1 font-weight-bold">Social Media: {{$user->profile->social_media}}</div>--}}
{{--                            <div class="pt-1 font-weight-bold">Alamat: {{$user->profile->alamat}}</div>--}}

{{--                        </li>--}}
{{--                        <ul class="list-inline mb-0">--}}
{{--                            <li class="list-inline-item">--}}


{{--                            </li>--}}
{{--                        </ul>--}}

{{--                    </ul>--}}
{{--                </div>--}}
{{--        </div>--}}

{{--    </div>--}}


{{--    </div>--}}
    <div class="row py-lg px-4">
        <div class="col-xl-7 col-md-6 col-sm-10 mx-auto">
            <div class="bg-white shadow rounded overflow-hidden">





<div class="container main-secction">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 image-section">
            <img src="{{asset($user->profile->profileCover())}}">
        </div>
        <div class="row py-lg px-2 user-left-part">
            <div class="col-md-3 col-sm-3 col-xs-11 user-profil-part pull-left">
                <div class="row user-detail-section2">
                    <div class="col-md-12 col-md-12-sm-12 col-xs-12 user-image text-center">
                        <img src="{{asset($user->profile->profileFoto())}}" class="img-thumbnail">
                    </div>
                    <br/>
                    <br/>
                    <br/>
{{--                    <div class="col-md-12 col-sm-12 col-xs-12 user-detail-section1 text-center">--}}
{{--                    </div>--}}
                    <div class="row user-detail-row">
                        <div class="col-md-12 col-sm-12 col-xs-12 user-detail-section2 pull-left text-left">
                            <div class="border"></div>
                            <p>Nama Lengkap</p>
                            <span>{{$user->profile->nama_lengkap}}</span>
                        </div>
                        <div class="col-md-12 col-sm-12 user-detail-section2 pull-right">
                            <div class="border"></div>
                            <p>Username</p>
                            <span>{{$user->profile->nama}}</span>
                        </div>
                        <div class="col-md-12 user-detail-section2 fa-pull-left">
                            <div class="border"></div>
                            <p>Jenis Kelamin</p>
                            @if($user->profile->jenis_kelamin === 'L')
                            <span>Laki-laki</span>
                            @elseif($user->profile->jenis_kelamin === 'P')
                            <span>Perempuan</span>
                            @else
                            <span></span>
                            @endif
                        </div>
                        <div class="col-md-12 user-detail-section2 pull-right">
                            <div class="border"></div>
                            <p>Social Media</p>
                            <span>{{$user->profile->social_media}}</span>
                        </div>
                        <div class="col-md-12 user-detail-section2 pull-right">
                            <div class="border"></div>
                            <p>Nomor telepon</p>
                            <span>{{$user->profile->nomor_telepon}}</span>
                        </div>
                    </div>

{{--                    <div class="col-md-12 user-detail-section2">--}}
{{--                        <div class="border"></div>--}}
{{--                        <p>Nomor telepon</p>--}}
{{--                        <span>{{$user->profile->nomor_telepon}}</span>--}}
{{--                    </div>--}}
                </div>
            </div>

            <div class="col-md-9 col-sm-9 col-xs-12 pull-right profile-right-section">
                <div class="row profile-right-section-row">
                    <div class="col-md-12 profile-header">
                        <div class="row">
                            <div class="col-md-8 col-sm-6 col-xs-6 profile-header-section1 pull-left">
                                <h1>{{$user->profile->nama_lengkap}}</h1>
                                <p>{{$user->email}}</p>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-6 profile-header-section1 text-right pull-right">
                                <a class="btn btn-info req-btn" style="height: 40px;" href="/user/{{$user->id}}/edit" > Edit Profil</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
    </div>



{{--    <div class="row">--}}
{{--        <div class="col-3 p-5">--}}
{{--            <img src="{{$user->profile->profileFoto()}}" class="rounded-circle w-100">--}}
{{--        </div>--}}
{{--        <div class="col-9 pt-5">--}}

{{--            <div class="d-flex justify-content-between align-items-baseline">--}}

{{--                <div class="d-flex align-items-center pb-3">--}}
{{--                    <div class="h4">{{$user->profile->nama}}</div>--}}

{{--                </div>--}}

{{--            </div>--}}

{{--            <a href="/user/{{$user->id}}/edit">Edit Profile</a>--}}


{{--            <div class="pt-4 font-weight-bold" >{{$user->email}}</div>--}}
{{--            <div class="pt-4 font-weight-bold" >{{$user->profile->nama_lengkap}}</div>--}}
{{--            <div class="pt-4 font-weight-bold" >{{$user->profile->nomor_telepon}}</div>--}}
{{--            <div class="pt-4 font-weight-bold" >{{$user->profile->social_media}}</div>--}}
{{--            <div class="pt-4 font-weight-bold" >{{$user->profile->alamat}}</div>--}}

{{--        </div>--}}

{{--    </div>--}}




@endsection
