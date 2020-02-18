@extends('layouts.auth')

@section('content')
    <style>
        .rgba-gradient {
            background: -moz-linear-gradient(45deg, rgba(42, 27, 161, 0.7), rgba(29, 210, 177, 0.7) 100%);
            background: -webkit-linear-gradient(45deg, rgba(42, 27, 161, 0.7), rgba(29, 210, 177, 0.7) 100%);
            background: -webkit-gradient(linear, 45deg, from(rgba(42, 27, 161, 0.7)), to(rgba(29, 210, 177, 0.7)));
            background: -o-linear-gradient(45deg, rgba(42, 27, 161, 0.7), rgba(29, 210, 177, 0.7) 100%);
            background: linear-gradient(to 45deg, rgba(42, 27, 161, 0.7), rgba(29, 210, 177, 0.7) 100%);
        }

        .center-cropped {
            width: 100px;
            height: 100px;
            background-position: center center;
            background-repeat: no-repeat;
        }
    </style>

    <header class="masthead text-white text-center " style="background-image: url({{asset($user->profile->profileCover())}}); background-repeat: no-repeat;
        background-size: cover;">
        <div class="container d-flex align-items-center flex-column">

            <!-- Masthead Avatar Image -->
            <img class="masthead-avatar center-cropped rounded-circle z-depth-1 mb-5 "  src="{{asset($user->profile->profileFoto())}}" alt="">

            <!-- Masthead Heading -->
            <h1 class="masthead-heading  text-uppercase mb-0">{{$user->profile->nama_lengkap}}</h1>

            <!-- Icon Divider -->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon">
                    <i class="fas fa-user"></i>
                </div>
                <div class="divider-custom-line"></div>
            </div>
            <h5 class="masthead-subheading"></h5>

            <!-- Masthead Subheading -->
            @if(is_array($user->posisi) || is_object($user->posisi))
                @foreach($user->posisi as $posisi)
                <p class="masthead-subheading font-weight-light mb-0">{{$posisi->nama_posisi}}</p>
                @endforeach
            @endif
        </div>

    </header>

    <div class="container my-5">

        <!--Section: Content-->
        <section>

            <!-- Section heading -->
            <h3 class="font-weight-bold black-text mb-4 pb-2 text-center">Biodata</h3>
            <hr class="w-header">
            <!-- Section description -->



            <div class="row text-center text-md-left">
                <div class="col-md-6 mb-4">
                    <h5 class="font-weight-normal mb-3">Nama</h5>
                    <p class="text-muted">{{$user->profile->nama}}</p>
                </div>

                <div class="col-md-6 mb-4">
                    <h5 class="font-weight-normal mb-3">Nama Lengkap</h5>
                    <p class="text-muted">{{$user->profile->nama_lengkap}}</p>
                </div>

                <div class="col-md-6 mb-4">
                    <h5 class="font-weight-normal mb-3">Nomor Telepon</h5>
                    <p class="text-muted">
                        {{$user->profile->nomor_telepon}}</p>
                </div>

                <div class="col-md-6 mb-4">
                    <h5 class="font-weight-normal mb-3">Tanggal Lahir</h5>
                    <p class="text-muted"> {{$user->profile->tanggal_lahir}}</p>
                </div>

                <div class="col-md-6 mb-4">
                    <h5 class="font-weight-normal mb-3">Jenis Kelamin</h5>
                    <p class="text-muted"> {{$user->profile->jenis_kelamin}}</p>
                </div>

                <div class="col-md-6 mb-4">
                    <h5 class="font-weight-normal mb-3">Alamat</h5>
                    <p class="text-muted"> {{$user->profile->alamat}}</p>
                </div>
                <div class="col-md-6 mb-4">
                    <h5 class="font-weight-normal mb-3">Berat Badan</h5>
                    <p class="text-muted"> {{$user->profile->berat_badan}}</p>
                </div>

                <div class="col-md-6 mb-4">
                    <h5 class="font-weight-normal mb-3">Tinggi Badan</h5>
                    <p class="text-muted"> {{$user->profile->tinggi_badan}}</p>
                </div>

                <div class="col-md-6 mb-4">
                    <h5 class="font-weight-normal mb-3">Pendidikan Terakhir</h5>
                    <p class="text-muted"> {{$user->profile->pendidikan_terakhir}}</p>
                </div>
                <div class="col-md-6 mb-4">
                    <h5 class="font-weight-normal mb-3">Social Media</h5>
                    <p class="text-muted"> {{$user->profile->alamat}}</p>
                </div>
            </div>

        </section>


        <!-- Section -->
        <section>

            <style>
                .md-pills .nav-link.active {
                    color: #fff;
                    background-color: #616161;
                }
                button.close {
                    position: absolute;
                    right: 0;
                    z-index: 2;
                    padding-right: 1rem;
                    padding-top: .6rem;
                }
            </style>



            <h6 class="font-weight-bold text-center grey-text text-uppercase small mb-4">portfolio</h6>
            <h3 class="font-weight-bold text-center dark-grey-text pb-2">Pengalaman Bekerja</h3>
            <hr class="w-header my-4">
            <p class="lead text-center text-muted pt-2 mb-5">Semua jenis pekerjaan yang telah dilakukan oleh {{$user->profile->nama_lengkap}}</p>


            <!--First row-->

            <!--Tab panels-->
            <div class="tab-content mb-5">

                <!--Panel 1-->
                <div class="tab-pane fade show in active" id="panel31" role="tabpanel">

                    <!-- Grid row -->
                    <div class="row">

                        <!-- Grid column -->
                        <div class="col-md-12 col-lg-4">

                            <!-- Card -->
                            <a class="card hoverable mb-4" data-toggle="modal" data-target="#basicExampleModal">

                                <!-- Card image -->
                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img3.jpg" alt="Card image cap">

                                <!-- Card content -->
                                <div class="card-body">

                                    <h5 class="my-3">Phone Bag</h5>
                                    <p class="card-text text-uppercase mb-3">Bag, Box</p>

                                </div>

                            </a>
                            <!-- Card -->

                            <!-- Card -->
                            <a class="card hoverable mb-4" data-toggle="modal" data-target="#basicExampleModal">

                                <!-- Card image -->
                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img9.jpg" alt="Card image cap">

                                <!-- Card content -->
                                <div class="card-body">

                                    <h5 class="my-3">Paper Bag</h5>
                                    <p class="card-text text-uppercase mb-3">Bag</p>

                                </div>

                            </a>
                            <!-- Card -->

                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-6 col-lg-4">

                            <!-- Card -->
                            <a class="card hoverable mb-4" data-toggle="modal" data-target="#basicExampleModal">

                                <!-- Card image -->
                                <img class="card-img-top" src=" https://mdbootstrap.com/img/Photos/Others/img4.jpg" alt="Card image cap">

                                <!-- Card content -->
                                <div class="card-body">

                                    <h5 class="my-3">Book</h5>
                                    <p class="card-text text-uppercase mb-3">Book</p>

                                </div>

                            </a>
                            <!-- Card -->

                            <!-- Card -->
                            <a class="card hoverable mb-4" data-toggle="modal" data-target="#basicExampleModal">

                                <!-- Card image -->
                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img5.jpg" alt="Card image cap">

                                <!-- Card content -->
                                <div class="card-body">

                                    <h5 class="my-3">Notes</h5>
                                    <p class="card-text text-uppercase mb-3">Note</p>

                                </div>

                            </a>
                            <!-- Card -->

                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-6 col-lg-4">

                            <!-- Card -->
                            <a class="card hoverable mb-4" data-toggle="modal" data-target="#basicExampleModal">

                                <!-- Card image -->
                                <img class="card-img-top" src=" https://mdbootstrap.com/img/Photos/Others/img10.jpg" alt="Card image cap">

                                <!-- Card content -->
                                <div class="card-body">

                                    <h5 class="my-3">T-shirt</h5>
                                    <p class="card-text text-uppercase mb-3">Box</p>

                                </div>

                            </a>
                            <!-- Card -->

                            <!-- Card -->
                            <a class="card hoverable mb-4" data-toggle="modal" data-target="#basicExampleModal">

                                <!-- Card image -->
                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img8.jpg" alt="Card image cap">

                                <!-- Card content -->
                                <div class="card-body">

                                    <h5 class="my-3">Magazine</h5>
                                    <p class="card-text text-uppercase mb-3">Book</p>

                                </div>

                            </a>
                            <!-- Card -->

                        </div>
                        <!-- Grid column -->

                    </div>
                    <!-- Grid row -->

                </div>
                <!--Panel 1-->

                <!--Panel 2-->
                <div class="tab-pane fade" id="panel32" role="tabpanel">

                    <!-- Grid row -->
                    <div class="row">

                        <!-- Grid column -->
                        <div class="col-md-12 col-lg-4">

                            <!-- Card -->
                            <a class="card hoverable mb-4" data-toggle="modal" data-target="#basicExampleModal">

                                <!-- Card image -->
                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img9.jpg" alt="Card image cap">

                                <!-- Card content -->
                                <div class="card-body">

                                    <h5 class="my-3">Paper Bag</h5>
                                    <p class="card-text text-uppercase mb-3">Bag</p>

                                </div>

                            </a>
                            <!-- Card -->

                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-6 col-lg-4">

                            <!-- Card -->
                            <a class="card hoverable mb-4" data-toggle="modal" data-target="#basicExampleModal">

                                <!-- Card image -->
                                <img class="card-img-top" src=" https://mdbootstrap.com/img/Photos/Others/img4.jpg" alt="Card image cap">

                                <!-- Card content -->
                                <div class="card-body">

                                    <h5 class="my-3">Book</h5>
                                    <p class="card-text text-uppercase mb-3">Book</p>

                                </div>

                            </a>
                            <!-- Card -->

                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-6 col-lg-4">

                            <!-- Card -->
                            <a class="card hoverable mb-4" data-toggle="modal" data-target="#basicExampleModal">

                                <!-- Card image -->
                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img8.jpg" alt="Card image cap">

                                <!-- Card content -->
                                <div class="card-body">

                                    <h5 class="my-3">Magazine</h5>
                                    <p class="card-text text-uppercase mb-3">Book</p>

                                </div>

                            </a>
                            <!-- Card -->

                        </div>
                        <!-- Grid column -->

                    </div>
                    <!-- Grid row -->

                </div>
                <!--Panel 2-->

                <!--Panel 3-->
                <div class="tab-pane fade" id="panel33" role="tabpanel">

                    <!-- Grid row -->
                    <div class="row">

                        <!-- Grid column -->
                        <div class="col-md-12 col-lg-4">

                            <!-- Card -->
                            <div class="card hoverable mb-4" data-toggle="modal" data-target="#basicExampleModal">

                                <!-- Card image -->
                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img3.jpg" alt="Card image cap">

                                <!-- Card content -->
                                <div class="card-body">

                                    <h5 class="my-3">Phone Bag</h5>
                                    <p class="card-text text-uppercase mb-3">Bag, Box</p>

                                </div>

                            </div>
                            <!-- Card -->

                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-6 col-lg-4">

                            <!-- Card -->
                            <a class="card hoverable mb-4" data-toggle="modal" data-target="#basicExampleModal">

                                <!-- Card image -->
                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img5.jpg" alt="Card image cap">

                                <!-- Card content -->
                                <div class="card-body">

                                    <h5 class="my-3">Notes</h5>
                                    <p class="card-text text-uppercase mb-3">Note</p>

                                </div>

                            </a>
                            <!-- Card -->

                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-6 col-lg-4">

                            <!-- Card -->
                            <a class="card hoverable mb-4" data-toggle="modal" data-target="#basicExampleModal">

                                <!-- Card image -->
                                <img class="card-img-top" src=" https://mdbootstrap.com/img/Photos/Others/img10.jpg" alt="Card image cap">

                                <!-- Card content -->
                                <div class="card-body">

                                    <h5 class="my-3">T-shirt</h5>
                                    <p class="card-text text-uppercase mb-3">Box</p>

                                </div>

                            </a>
                            <!-- Card -->

                        </div>
                        <!-- Grid column -->

                    </div>
                    <!-- Grid row -->

                </div>
                <!--Panel 3-->

            </div>
            <!--Tab panels-->

        </section>
        <!-- Section -->

    </div>
    <!-- Footer -->
    <footer class="page-footer font-small indigo darken-4 py-4">

        <!-- Footer Elements -->
        <div class="container">

            <div class="row">
                <div class="col-md-6 d-flex justify-content-start">
                    <!-- Copyright -->
                    <div class="footer-copyright text-center bg-transparent">© 2020 Copyright:
                        <a href="https://mdbootstrap.com/education/bootstrap/"> kolegahotel.com</a>
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
