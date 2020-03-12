@extends('layouts.guest')

@section('content')
    <style>
        html,
        body,
        header,
        .view {

            background: linear-gradient(45deg, rgba(137, 247, 254, 0.6), rgba(102, 166, 255, 0.69) 100%);
        }
    </style>
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

            <div class="card">
                @foreach($kerja as $pekerjaan)
                <div class="card-body">
{{--                    <div class="avatar w-100 white d-flex justify-content-center align-items-center">--}}
{{--                        <img src="{{asset($pekerjaan->hotel->profile->hotelPhoto())}}"  class="img-fluid z-depth-1">--}}
{{--                    </div>--}}
                    <div class="row">
                        <div class="col-8">
                            <h5 class="card-title">{{$pekerjaan->getPosisi()}}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{$pekerjaan->hotel->profile->nama}}</h6>
                            <p class="card-text desc">{!!html_entity_decode($pekerjaan->deskripsi)!!}</p>
                            <a href="{{url("/job/$pekerjaan->url_slug")}}" class="btn btn-md blue">Selengkapnya</a>

                        </div>
                        <div class="col-4 align-items-center">
                            <div class="avatar w-100 white d-flex justify-content-center align-items-center">
                                <img src="{{asset($pekerjaan->foto ?? $pekerjaan->hotel->profile->hotelPhoto())}}"  class="img-fluid z-depth-1">
                            </div>
                        </div>

                    </div>
                </div>
                    <hr>
                @endforeach
            </div>
        <br/>

                <nav aria-label="Page navigation example">
                    <ul class="pagination pagination-circle pg-blue">
                        {!! $kerja->render() !!}
                    </ul>
                </nav>

{{--                {!! $kerja->render() !!}--}}
        </div>

{{--        <div class="col-md-3">--}}
{{--            <div class="card">--}}

{{--                <div class="card-body">--}}
{{--                    <div class="card-text">--}}
{{--                        <a href="#!" class="card-title">About us</a>--}}
{{--                        <a href="#!" class="card-title">Contact Us</a>--}}
{{--                        <a href="#!" class="card-title">Privacy Policy</a>--}}
{{--                        <a href="#!" class="card-title">© 2020 Kolega Hotel, Inc.</a>--}}
{{--                    </div>--}}

{{--                    <h6 class="card-subtitle mb-2 text-muted">Contact User</h6>--}}

{{--                   --}}{{-- <p class="card-text">Some quick example text to build on the panel title and make up the bulk of the panel's content.</p>--}}
{{--                    <a href="#!" class="card-link mr-3">Card link</a>--}}
{{--                    <a href="#!" class="card-link ml-0">Another link</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
</div>
    <!-- Footer -->
    <footer class="page-footer font-small black-text white pt-4 shadow">

        <!-- Footer Links -->
        <div class="container text-center text-md-left mt-3">

            <!-- Grid row -->
            <div class="row mt-3">

                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mb-4">

                    <!-- Content -->
                    <h6 class="text-uppercase font-weight-bold">Hotel name</h6>
                    <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">

                    <div class="row">
                        <img src="{{asset('/image/logo_head.png')}}" alt="" width="180">
                    </div>


                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold">Trivia</h6>
                    <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>Lorem ipsum</p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold">Contact us</h6>
                    <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <i class="fas fa-home mr-3"></i>Lorem Ipsum</p>
                    <p>
                        <i class="fas fa-envelope mr-3"></i>info@kolegahotel.com</p>
                    <p>
                        <i class="fas fa-phone mr-3"></i>123125346</p>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center text-black-50 py-3">© 2020 Kolega Hotel, Inc.
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->
@endsection
