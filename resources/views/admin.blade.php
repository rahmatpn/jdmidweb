@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    @foreach($pekerjaan as $pekerjaan)
                        <div class="col mb-2">

                            <div class="card shadow">


                                <div class="card-body">


                                    <div>
                                        <img src="{{asset($pekerjaan->hotel->profile->hotelPhoto())}}" class="w-100">
                                        <h4 class="overlay">{{$pekerjaan->getPosisi()}}</h4>
                                    </div>
                                    <h2>{{$pekerjaan->hotel->profile->nama}}</h2>
                                    <h5>@currency($pekerjaan->bayaran)</h5>
                                    <p>{{$pekerjaan->tanggal_mulai}}</p>

                                    <div class="desc">  {!!html_entity_decode($pekerjaan->deskripsi)!!}</div>
                                    <a href="{{url("/job/$pekerjaan->url_slug")}}" class="btn aqua-gradient">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
