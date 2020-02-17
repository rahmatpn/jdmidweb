@extends('layouts.auth')



@section('content')
        <!-- Main navigation -->
        <style>
            @media (min-width: 800px) and (max-width: 850px) {
                html,
                body,
                header,
                .view {
                    height: 600px;
                }
            }

            @media (min-width: 800px) and (max-width: 850px) {
                html,
                body,
                header,
                .view{
                    height: auto;
                }

            }

            .paral {



                /* Set a specific height */
                min-height: 400px;

                /* Create the parallax scrolling effect */
                background-attachment: fixed;
                background-position: 50% 50%;
                background-size: cover;


            }
            .parallax{
                /* The image used */
                background-image: url("https://images.pexels.com/photos/260922/pexels-photo-260922.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260");
            }
            .paral h1{
                color: rgba(255, 255, 255, 0.8);
                font-size: 60px;
                text-align: center;
                padding-top: 60px;
                line-height: 100px;
            }
            .hm-gradient {
                background: linear-gradient(40deg, rgba(0,51,199,.3), rgba(209,149,249,.3));
            }
            .heading {
                margin: 0 6rem;
                font-size: 3.8rem;
                font-weight: 700;
                color: #5d4267;
            }
            .subheading {
                margin: 2.5rem 6rem;
                color: #bcb2c0;
            }
            .btn.btn-margin {
                margin-left: 6rem;
                margin-top: 3rem;
            }
            .btn.btn-lily {
                background: linear-gradient(40deg, rgba(0,51,199,.7), rgba(209,149,249,.7));
                color: #fff;
            }
            .title {
                margin-top: 6rem;
                margin-bottom: 2rem;
                color: #5d4267;
            }
            .subtitle {
                color: #bcb2c0;
                margin-left: 20%;
                margin-right: 20%;
                margin-bottom: 6rem;
            }

        </style>

        @if(Session::has('success'))
            <script>
                $(function() {
                    $('#modalCookie1').modal('show');
                });
            </script>
        @endif
        @if(session()->get('success'))
            <div class="modal fade top" id="modalCookie1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                 aria-hidden="true" data-backdrop="true">
                <div class="modal-dialog modal-frame modal-top modal-notify modal-info" role="document">
                    <!--Content-->
                    <div class="modal-content">
                        <!--Body-->
                        <div class="modal-body">
                            <div class="row d-flex justify-content-center align-items-center">

                                <p class="pt-3 pr-2">{{session()->get('success')}}</p>

                                <a type="button" class="btn blue-gradient rounded waves-effect" data-dismiss="modal">Ok, thanks</a>
                            </div>
                        </div>
                    </div>
                    <!--/.Content-->
                </div>
            </div>
        @endif
        <!-- Main navigation -->
        <header>
            <!-- Intro -->
            <section class="view">
                <div class="row">
                    <div class="col-md-6">

                        <div class="view">
                            <img src="{{asset($hotel->profile->hotelPhoto())}}" style="background-size: cover; width: 110%;" class="d-flex" alt="Foto Profile Hotel">
                            <div class="mask flex-center hm-gradient">
                            </div>
                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="d-flex flex-column justify-content-center align-items-baseline h-100">
                            <h4 class="subheading font-weight-bold">Hello We Are</h4>
                            <h1 class="heading">{{$hotel->profile->nama}}</h1>
                            <h4 class="subheading font-weight-bold">{{$hotel->profile->deskripsi}}</h4>

                            <div class="mr-4">
                                <button type="button" class="btn btn-lily btn-margin rounded">Edit Profile <i class="fas fa-caret-right ml-3"></i></button>
                                <button type="button" class="btn btn-lily btn-margin rounded">Post A Job<i class="fas fa-caret-right ml-3"></i></button>
                            </div>
                        </div>

                    </div>
                </div>

            </section>
            <!-- Intro -->

        </header>

        <div class="jumbotron paral parallax">
            <h1 class="display-3">About Us</h1>

        </div>

        <div class="container my-5">
            <section>

                <!-- Section heading -->
                <h3 class="font-weight-bold black-text mb-4 pb-2 text-center">Our Profile</h3>
                <hr class="w-header">
                <!-- Section description -->



                <div class="row text-center text-md-left">
                    <div class="col-md-6 mb-4">
                        <h5 class="font-weight-normal mb-3">Nama</h5>
                        <p class="text-muted">{{$hotel->profile->nama}}</p>
                    </div>


                    <div class="col-md-6 mb-4">
                        <h5 class="font-weight-normal mb-3">Nomor Telepon</h5>
                        <p class="text-muted">
                            {{$hotel->profile->nomor_telepon}}</p>
                    </div>

                    <div class="col-md-6 mb-4">
                        <h5 class="font-weight-normal mb-3">Website</h5>
                        <p class="text-muted">{{$hotel->profile->website}}</p>
                    </div>

                    <div class="col-md-6 mb-4">
                        <h5 class="font-weight-normal mb-3">Alamat</h5>
                        <p class="text-muted"> {{$hotel->profile->alamat}}</p>
                    </div>
                    <div class="col-md-6 mb-4">
                        <h5 class="font-weight-normal mb-3">Social Media</h5>
                        <p class="text-muted"> {{$hotel->profile->alamat}}</p>
                    </div>
                </div>

            </section>


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




{{--        <div class="row">--}}
{{--            <div class="col-sm-4">--}}
{{--                <div class="card shadow" style="width: 20rem">--}}
{{--                <img class="card-img-top img-fluid" src="{{asset($hotel->profile->hotelPhoto())}}" alt="card hotel image">--}}
{{--                            <div class="card-body">--}}
{{--                                <h4 title="card-title">{{$hotel->profile->nama}}</h4>--}}
{{--                                <span class="fa fa-home d-flex">--}}
{{--                                <div class="pl-2">--}}
{{--                                     <p class="card-text">--}}
{{--                                    {{$hotel->profile->alamat}}--}}
{{--                                      </p>--}}
{{--                                </div>--}}
{{--                            </span>--}}
{{--                            </div>--}}
{{--                            <ul class="list-group list-group-flush">--}}
{{--                                <li class="list-group-item fa fa-envelope d-flex">--}}
{{--                                    <div class="pl-2">--}}
{{--                                        {{ $hotel->profile->email}}--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="list-group-item fa fa-whatsapp d-flex">--}}
{{--                                    <div class="pl-2">--}}
{{--                                        {{$hotel->profile->nomor_telepon}}--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="list-group-item fa fa-instagram d-flex">--}}
{{--                                    <div class="pl-2">--}}
{{--                                        {{$hotel->profile->social_media}}--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="list-group-item fa fa-globe d-flex">--}}

{{--                                    <div href="{{url('http:'.$hotel->profile->website)}}" class="pl-2">{{$hotel->profile->website}}</div>--}}

{{--                                </li>--}}

{{--                            </ul>--}}
{{--                            <a href="{{url('/hotel/'.$hotel->profile->url_slug.'/edit')}}" class="btn btn-info">Edit Profile</a>--}}

{{--                        </div>--}}

{{--                        <a href={{url('/job/postjob')}} type="button" class="btn aqua-gradient">Post A Job</a>--}}
{{--            </div>--}}

{{--            <div class="col-sm-8">--}}
{{--                @foreach($hotel->pekerjaan as $pekerjaan)--}}
{{--                    <div class="col mb-3">--}}

{{--                    <div class="card shadow">--}}


{{--                        <div class="card-body">--}}
{{--                            <h4>{{$pekerjaan->getPosisi()}}</h4>--}}
{{--                            <h2>{{$hotel->profile->nama}}</h2>--}}
{{--                            <h5>@currency($pekerjaan->bayaran)</h5>--}}
{{--                            <p>{{$pekerjaan->waktu_mulai}}</p>--}}

{{--                         <div class="desc">  {!!html_entity_decode($pekerjaan->deskripsi)!!}</div>--}}

{{--                            <a href="{{url("/job/$pekerjaan->url_slug")}}" class="btn aqua-gradient">Selengkapnya</a>--}}
{{--                            <a href="{{url("/job/$pekerjaan->url_slug/delete")}}" class="btn aqua-gradient">Hapus</a>--}}
{{--                            <a href="{{url("/job/$pekerjaan->url_slug/edit")}}" class="btn aqua-gradient">Edit</a>--}}
{{--                        </div>--}}

{{--                    </div>--}}

{{--                    </div>--}}

{{--                @endforeach--}}
{{--        </div>--}}

{{--    </div>--}}
{{--</div>--}}
{{--    <div class="container" style="margin-left:50px">--}}
{{--        <div class="card shadow" style="width: 20rem">--}}
{{--            <img class="card-img-top img-fluid" src="{{$hotel->profile->hotelPhoto()}}" alt="card hotel image">--}}
{{--            <div class="card-body">--}}
{{--                <h4 title="card-title" >{{$hotel->profile->nama}}</h4>--}}

{{--                <span class="fa fa-home d-flex">--}}
{{--                <div class="pl-2">--}}
{{--                     <p class="card-text">--}}
{{--                    {{$hotel->profile->alamat}}--}}
{{--                      </p>--}}
{{--                </div>--}}
{{--            </span>--}}
{{--            </div>--}}
{{--            <ul class="list-group list-group-flush">--}}
{{--                <li class="list-group-item fa fa-envelope d-flex">--}}
{{--                    <div class="pl-2">--}}
{{--                        {{ $hotel->profile->email}}--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="list-group-item fa fa-whatsapp d-flex">--}}
{{--                    <div class="pl-2">--}}
{{--                        {{$hotel->profile->nomor_telepon}}--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="list-group-item fa fa-instagram d-flex">--}}
{{--                    <div class="pl-2">--}}
{{--                        {{$hotel->profile->social_media}}--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="list-group-item fa fa-globe d-flex">--}}
{{--                    <div class="pl-2">{{$hotel->profile->website}}</div>--}}
{{--                </li>--}}

{{--            </ul>--}}
{{--            <a href="/hotel/{{$hotel->id}}/edit" class="btn btn-info">Edit Profile</a>--}}

{{--        </div>--}}

{{--        <a href="/job/postjob" type="button" class="btn-danger">Post A Job</a>--}}
{{--        --}}
{{--    </div>--}}
{{--    <div class="container flex-lg-nowrap col-lg-auto">--}}
{{--        @foreach($hotel->pekerjaan as $pekerjaan)--}}
{{--            <div class="row">--}}
{{--                <div class="tab-content pt-1">--}}

{{--                    <div class="col mb-3">--}}
{{--                        <div class="card shadow-sm" style="margin-right: 10px">--}}
{{--                            <h4>{{$pekerjaan->nama_posisi}}</h4>--}}
{{--                            <div class="card-body">--}}
{{--                                <h4>{{$hotel->profile->nama}}</h4>--}}
{{--                                <h6>{{$hotel->profile->alamat}}</h6>--}}
{{--                                <p>{{$pekerjaan->deskripsi}}</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        @endforeach--}}
{{--    </div>--}}







{{--    --}}
{{--    <div class="row">--}}
{{--        <div class="col-3 p-5">--}}
{{--            <img src="https://steamcdn-a.akamaihd.net/apps/570/icons/econ/voicepack/juggernaut_arcana_voicepack_large.38f2a62f17b0593d02edd7adad28e1d960ed5ddf.png" class="rounded-circle w-100">--}}
{{--        </div>--}}
{{--        <div class="col-9 pt-5">--}}
{{--            <div class="d-flex justify-content-between align-items-baseline">--}}

{{--                <div class="d-flex align-items-center pb-3">--}}
{{--                    <div class="h4">{{$hotel->name}}</div>--}}


{{--                </div>--}}


{{--            </div>--}}


{{--            <div class="d-flex">--}}
{{--                <div class="pr-4"><strong>1111</strong> posts</div>--}}
{{--                <div class="pr-4"><strong>2222</strong> followers</div>--}}
{{--                <div class="pr-4"><strong>3333</strong> following</div>--}}
{{--            </div>--}}
{{--            <div class="pt-4 font-weight-bold" >{{$hotel->email}}</div>--}}
{{--            <div class="text-justify">BBBB</div>--}}
{{--            <div><a href="#">CCCC</a> </div>--}}
{{--        </div>--}}
{{--    </div>--}}




@endsection
