@extends('layouts.auth')

@section('content')


<section>
        <div class="container-fluid white">
            <hr class="mb-5 mt-0">
            <div class="container">

                <!--Section: Blog v.3-->
                <section class="section extra-margins mt-5 py-5 text-center text-lg-left">

                    <!--Grid row-->
                    <div class="row my-xl-5 py-xl-4">

                        <!--Grid column-->
                        <div class="col-sm-12 col-md-5 col-xl-5 mb-4">

                            <!--Image-->
                            <div class="view overlay">
                                <img src="{{asset($user->profile->profileFoto())}}" class="img-fluid z-depth-1" alt="">
                                <div class="mask rgba-white-slight"></div>
                            </div>
                            <!--/.Image-->

                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-sm-12 col-md-6 col-xl-6 ml-3">

                            <h3 class="dark-grey-text pb-2 font-weight-bold">
                                <strong>{{$user->profile->nama_lengkap}}</strong>
                            </h3>
                            <p class="gold-text mb-4 text-uppercase font-weight-bold">Biodata</p>
                            <hr>

                            <p class="dark-grey-text mt-4 text-justify"><strong>Nama : </strong>{{$user->profile->nama_lengkap}} </p>
                            <p class="dark-grey-text mt-4 text-justify"><strong>Jenis Kelamin :</strong> {{$user->profile->jenis_kelamin}} </p>
                            <p class="dark-grey-text text-justify"><strong>Tanggal Lahir :</strong> {{$user->profile->tanggal_lahir}}</p>
                            <p class="dark-grey-text text-justify"><strong>Alamat :</strong> {{$user->profile->alamat}}</p>
                            <p class="dark-grey-text text-justify"><strong>Nomor Telepon :</strong> {{$user->profile->nomor_telepon}}</p>
                            <p class="dark-grey-text text-justify"><strong>Sosial Media :</strong> {{$user->profile->social_media}}</p>
                            @if(is_array($user->posisi) || is_object($user->posisi))
@foreach($user->posisi as $posisi)
                            <p class="dark-grey-text">

                            <strong>Minat Mobil : </strong>

                            {{$posisi->nama_posisi}}</p>
                            @endforeach
            @endif
                            <h5 class="text-right font-weight-bold dark-grey-text mt-5">
                                <em>{{$user->profile->nama}}</em>
                            </h5>
                        </div>
                        <!--Grid column-->

                    </div>
                    <!--/Grid row-->

                </section>
                <!--/Section: Blog v.3-->

            </div>

        </div>

    </section>

    <!-- Footer -->
    <footer class="page-footer font-small indigo darken-4 py-4">

        <!-- Footer Elements -->
        <div class="container">

            <div class="row">
                <div class="col-md-6 d-flex justify-content-start">
                    <!-- Copyright -->
                    <div class="footer-copyright text-center bg-transparent">© 2020 Copyright:
                        <a href="https://mdbootstrap.com/education/bootstrap/"> JDM.id</a>
                    </div>
                    <!-- Copyright -->
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <ul class="list-unstyled d-flex mb-0">
                        <li>
                            <a class="mr-3" role="button"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a class="mr-3" role="button"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a class="mr-3" role="button"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a class="" role="button"><i class="fab fa-youtube"></i></a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <!-- Footer Elements -->

    </footer>
    <!-- Footer -->

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
{{--    <div class="row py-lg px-4">--}}
{{--        <div class="col-xl-7 col-md-6 col-sm-10 mx-auto">--}}
{{--            <div class="bg-white shadow rounded overflow-hidden">--}}





{{--<div class="container main-secction">--}}
{{--    <div class="row">--}}
{{--        <div class="col-md-12 col-sm-12 col-xs-12 image-section">--}}
{{--            <img src="{{asset($user->profile->profileCover())}}">--}}
{{--        </div>--}}
{{--        <div class="row py-lg px-2 user-left-part">--}}
{{--            <div class="col-md-3 col-sm-3 col-xs-11 user-profil-part pull-left">--}}
{{--                <div class="row user-detail-section2">--}}
{{--                    <div class="col-md-12 col-md-12-sm-12 col-xs-12 user-image text-center">--}}
{{--                        <img src="{{asset($user->profile->profileFoto())}}" class="img-thumbnail">--}}
{{--                    </div>--}}
{{--                    <br/>--}}
{{--                    <br/>--}}
{{--                    <br/>--}}
{{--                    <div class="col-md-12 col-sm-12 col-xs-12 user-detail-section1 text-center">--}}
{{--                    </div>--}}
{{--                    <div class="row user-detail-row">--}}
{{--                        <div class="col-md-12 col-sm-12 col-xs-12 user-detail-section2 pull-left text-left">--}}
{{--                            <div class="border"></div>--}}
{{--                            <p>Nama Lengkap</p>--}}
{{--                            <span>{{$user->profile->nama_lengkap}}</span>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-12 col-sm-12 user-detail-section2 pull-right">--}}
{{--                            <div class="border"></div>--}}
{{--                            <p>Username</p>--}}
{{--                            <span>{{$user->profile->nama}}</span>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-12 user-detail-section2 fa-pull-left">--}}
{{--                            <div class="border"></div>--}}
{{--                            <p>Jenis Kelamin</p>--}}
{{--                            @if($user->profile->jenis_kelamin === 'L')--}}
{{--                            <span>Laki-laki</span>--}}
{{--                            @elseif($user->profile->jenis_kelamin === 'P')--}}
{{--                            <span>Perempuan</span>--}}
{{--                            @else--}}
{{--                            <span></span>--}}
{{--                            @endif--}}
{{--                        </div>--}}
{{--                        <div class="col-md-12 user-detail-section2 pull-right">--}}
{{--                            <div class="border"></div>--}}
{{--                            <p>Social Media</p>--}}
{{--                            <span>{{$user->profile->social_media}}</span>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-12 user-detail-section2 pull-right">--}}
{{--                            <div class="border"></div>--}}
{{--                            <p>Nomor telepon</p>--}}
{{--                            <span>{{$user->profile->nomor_telepon}}</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-md-12 user-detail-section2">--}}
{{--                        <div class="border"></div>--}}
{{--                        <p>Nomor telepon</p>--}}
{{--                        <span>{{$user->profile->nomor_telepon}}</span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-md-9 col-sm-9 col-xs-12 pull-right profile-right-section">--}}
{{--                <div class="row profile-right-section-row">--}}
{{--                    <div class="col-md-12 profile-header">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-8 col-sm-6 col-xs-6 profile-header-section1 pull-left">--}}
{{--                                <h1>{{$user->profile->nama_lengkap}}</h1>--}}
{{--                                <p>{{$user->email}}</p>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-4 col-sm-6 col-xs-6 profile-header-section1 text-right pull-right">--}}
{{--                                <a class="btn btn-info req-btn" style="height: 40px;" href="{{url('/user/'.$user->profile->url_slug.'/edit')}}" > Edit Profil</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-12">--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--    </div>--}}



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
