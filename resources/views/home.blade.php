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

<div class="container-fluid">


    <div class="row my-5">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4 d-flex mb-2 align-items-center">
                            <div class="avatar w-100 white d-flex justify-content-center align-items-center">
                            <img src="{{asset($user->profile->profileFoto())}}"  class="img-fluid rounded-circle z-depth-1">
                            </div>
                        </div>
                        <div class="col-lg-8 text-muted d-flex flex-column justify-content-start pt-3">
                            <p class="mb-1"><strong>{{$user->profile->nama}}</strong></p>

                            @if(is_array($user->posisi) || is_object($user->posisi))
                                @foreach($user->posisi as $posisi)
                                    <p class="mb-1">{{$posisi->nama_posisi}}</p>
                                @endforeach
                            @endif


                        </div>

                    </div>
                    <hr/>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            @foreach($pekerjaan as $pekerjaan)
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$pekerjaan->getPosisi()}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$pekerjaan->hotel->profile->nama}}</h6>
                    <p class="card-text">Some quick example text to build on the panel title and make up the bulk of the panel's content.</p>
                    <a href="#!" class="card-link mr-3">Card link</a>
                    <a href="#!" class="card-link ml-0">Another link</a>
                </div>
            </div>
        <br/>
            @endforeach
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Panel title</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Panel subtitle</h6>
                    <p class="card-text">Some quick example text to build on the panel title and make up the bulk of the panel's content.</p>
                    <a href="#!" class="card-link mr-3">Card link</a>
                    <a href="#!" class="card-link ml-0">Another link</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
