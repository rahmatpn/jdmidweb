@extends('layouts.guest')

@section('content')
{{--    --}}
{{--    <div class="container">--}}
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-md-8">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-header">Dashboard</div>--}}
{{--                        @foreach($pekerjaan as $pekerjaan)--}}
{{--                            <div class="col mb-3">--}}
{{--                                <div class="card shadow">--}}
{{--                                    <div class="card-body">--}}
{{--                                        <div>--}}
{{--                                            <img src="{{asset($pekerjaan->hotel->profile->hotelPhoto())}}" class="w-100">--}}
{{--                                            <h4 class="overlay">{{$pekerjaan->getPosisi()}}</h4>--}}
{{--                                        </div>--}}
{{--                                        <h2>{{$pekerjaan->hotel->profile->nama}}</h2>--}}
{{--                                        <h5>@currency($pekerjaan->bayaran)</h5>--}}
{{--                                        <p>{{$pekerjaan->tanggal_mulai}}</p>--}}

{{--                                        <div class="desc">  {!!html_entity_decode($pekerjaan->deskripsi)!!}</div>--}}
{{--                                        <a href="{{url("/job/$pekerjaan->url_slug")}}" class="btn aqua-gradient">Selengkapnya</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            @endforeach--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
@if(Session::has('expired'))
    <script>
        $(function() {
            $('#modalexpired').modal('show');
        });
    </script>
@endif
@if(session()->get('expired'))
    <div class="modal fade" id="modalexpired" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-notify modal-danger" role="document">
            <!--Content-->
            <div class="modal-content">
                <!--Header-->
                <div class="modal-header">
                    <p class="heading lead">Oops</p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="white-text">&times;</span>
                    </button>
                </div>

                <!--Body-->
                <div class="modal-body">
                    <div class="text-center">
                        <i class="fas fa-times fa-4x mb-3 animated rotateIn"></i>
                        <p>{{session()->get('expired')}}</p>
                    </div>
                </div>

                <!--Footer-->
                <div class="modal-footer justify-content-center">
                    <a type="button" class="btn btn-outline-danger waves-effect" data-dismiss="modal">Ok, Siap</a>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>
    @endif
<div class="container py-5">
    <div class="row my-5">
        <div class="col-md-3">
            @auth('hotel')
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4 mb-2 align-items-center">
                                <div class="avatar w-100 white d-flex justify-content-center align-items-center">
                                    <img src="{{asset($hotel->profile->hotelPhoto())}}"  class="img-fluid z-depth-1">
                                </div>
                            </div>
                            <div class="col-lg-8 text-muted d-flex flex-column justify-content-start pt-1">
                                <p class="mb-2"><strong>{{$hotel->profile->nama}}</strong></p>
                            </div>

                        </div>
                        <hr/>

                    </div>
                </div>
            @endauth
            @auth('user')
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4 mb-2 align-items-center">
                            <div class="avatar w-100 white d-flex justify-content-center align-items-center">
                            <img src="{{asset($user->profile->profileFoto())}}"  class="img-fluid z-depth-1">
                            </div>
                        </div>
                        <div class="col-lg-8 text-muted d-flex flex-column justify-content-start pt-1">
                            <p class="mb-2"><strong>{{$user->profile->nama}}</strong></p>
                        </div>

                    </div>
                    <hr/>
                    <p class="mb-2"><strong>Posisi</strong></p>


                        @if(is_array($user->posisi) || is_object($user->posisi))
                            @foreach($user->posisi as $posisi)
                        <p class="text-muted card-text mt-2 px-4 mb-2">{{$posisi->nama_posisi}}</p>
                        @endforeach
                    @endif

                </div>
            </div>
                @endauth
        </div>
        <div class="col-md-6">
            @foreach($pekerjaan as $pekerjaan)
            <div class="card">
                <div class="card-body">
{{--                    <div class="avatar w-100 white d-flex justify-content-center align-items-center">--}}
{{--                        <img src="{{asset($pekerjaan->hotel->profile->hotelPhoto())}}"  class="img-fluid z-depth-1">--}}
{{--                    </div>--}}
                    <div class="row">
                        <div class="col-8">
                            <h5 class="card-title">{{$pekerjaan->getPosisi()}}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{$pekerjaan->hotel->profile->nama}}</h6>
                            <p class="card-text desc">{!!html_entity_decode($pekerjaan->deskripsi)!!}</p>
                            <a href="{{url("/job/$pekerjaan->url_slug")}}" class="btn btn-md blue-gradient">Selengkapnya</a>

                        </div>
                        <div class="col-4 align-items-center">
                            <div class="avatar w-100 white d-flex justify-content-center align-items-center">
                                <img src="{{asset($pekerjaan->hotel->profile->hotelPhoto())}}"  class="img-fluid z-depth-1">
                            </div>
                        </div>

                    </div>


                </div>
            </div>
        <br/>
            @endforeach
        </div>
        <div class="col-md-3">
            <div class="card">

                <div class="card-body">
                    <div class="card-text">
                        <a href="#!" class="card-title">About us</a>
                        <a href="#!" class="card-title">Contact Us</a>
                        <a href="#!" class="card-title">Privacy Policy</a>
                        <a href="#!" class="card-title">© 2020 Kolega Hotel, Inc.</a>
                    </div>

{{--                    <h6 class="card-subtitle mb-2 text-muted">Contact User</h6>--}}

                   {{-- <p class="card-text">Some quick example text to build on the panel title and make up the bulk of the panel's content.</p>
                    <a href="#!" class="card-link mr-3">Card link</a>
                    <a href="#!" class="card-link ml-0">Another link</a>--}}
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="page-footer font-small indigo darken-4 py-4">

    <!-- Footer Elements -->
    <div class="container">

        <div class="row">
            <div class="col-md-6 d-flex justify-content-start">
                <!-- Copyright -->
                <div class="footer-copyright text-center bg-transparent">© 2020 Copyright:
                    <a href="#"> kolegahotel.com</a>
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
@endsection
