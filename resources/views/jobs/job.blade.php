@extends('layouts.auth')
@section('css')
    <style>
body{
    margin: 0 auto;
    background: #f8f8f8;
}
    </style>

@endsection
@section('content')
<div class="container">
    @if(session()->get('gagalProfile'))
        <div class="alert-danger">{{session()->get('gagalProfile')}}</div>
    @elseif(session()->get('gagalTinggi'))
        <div class="alert-danger">{{session()->get('gagalTinggi')}}</div>
    @elseif(session()->get('gagalBerat'))
        <div class="alert-danger">{{session()->get('gagalBerat')}}</div>
    @elseif(session()->get('kuotaPenuh'))
        <div class="alert-danger">{{session()->get('kuotaPenuh')}}</div>
    @elseif(session()->get('success'))
        <div class="alert-light">{{session()->get('success')}}</div>
    @endif

    <!-- Jumbotron -->
    <div class="card card-image" style="background-image: url(https://images.pexels.com/photos/262047/pexels-photo-262047.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940)">
        <div class="text-white text-center rgba-stylish-strong py-5 px-4">
            <div class="py-5">

                <!-- Content -->
                <h5 class="h5 orange-text"><i class="fas fa-suitcase"></i>{{$pekerjaan->getNama()}}</h5>
                <h2 class="card-title h2 my-4 py-2">{{$pekerjaan->getPosisi()}}</h2>
                <p class="mb-4 pb-2 px-md-5 mx-md-5">{{$pekerjaan->getSocial()}}</p>

            </div>
        </div>
    </div>
    <!-- Jumbotron -->
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-8 offset-sm-2">
                    <div class="container">

                        <h4>Deskripsi Pekerjaan</h4>
                        <h5> {!!html_entity_decode($pekerjaan->deskripsi)!!}</h5>
                        <br/>
                        <h4>Area Kerja</h4>
                        <h5>{{$pekerjaan->area}}</h5>
                        <br/>
                        <h4>Upah</h4>
                        <h4>{{"IDR: ".number_format($pekerjaan->bayaran)}},00</h4>
                        <br/>
                        <h4>Tanggal</h4>
                        <h5>{{date('l, F jS, Y', strtotime($pekerjaan->tanggal_mulai))}}</h5>
                        <br/>
                        <h4>Waktu Mulai</h4>
                        <h5>{{date("H:m", strtotime($pekerjaan->waktu_mulai))}}</h5>
                        <br/>
                        <h4>Waktu Selesai</h4>
                        <h5>{{date("H:m", strtotime($pekerjaan->waktu_selesai))}}</h5>
                        <br/>
                        @if($pekerjaan->tinggi_minimal != null || $pekerjaan->tinggi_maksimal != null)
                            <h4>Tinggi Badan</h4>
                            @if($pekerjaan->tinggi_minimal !=null)
                                <h5>minimal: {{$pekerjaan->tinggi_minimal ?? '-'}}</h5>
                            @elseif($pekerjaan->tinggi_maksimal != null)
                                <h5>maksimal: {{$pekerjaan->tinggi_maksimal ?? '-' }} </h5>
                            @endif
                            <br>
                        @endif

                        @if($pekerjaan->berat_minimal !=null || $pekerjaan->berat_maksimal != null)
                            <h4>Berat Badan</h4>
                            @if($pekerjaan->berat_minimal !=null)
                            <h5>minimal: {{$pekerjaan->berat_minimal ?? '-'}}</h5>
                            @elseif($pekerjaan->berat_maksimal != null)
                            <h5>maksimal: {{$pekerjaan->berat_maksimal ?? '-' }} </h5>
                            @endif
                            <br/>
                        @endif

                        <h4>Kuota tersisa</h4>
                        <h5>{{($pekerjaan->kuota)-($pekerjaan->dikerjakan()->count())}} Orang</h5>
                        <br/>

                        <h4>Alamat Hotel</h4>
                        <h5>{{$pekerjaan->getAlamat()}}</h5>
                    </div>
                    <br/>
                    @auth('hotel')
                    <form action="/job/{{$pekerjaan->url_slug}}/apply" method="post">
                        @csrf
                        <input type="hidden" class="btn aqua-gradient-rgba" value="Apply">
                    </form>
                    @endauth
                    @auth('user')
                        <form action="/job/{{$pekerjaan->url_slug}}/apply" method="post">
                            @csrf
                            <input type="submit" class="btn aqua-gradient-rgba" value="Apply">
                        </form>
                        @endauth
{{--                    <a class="btn btn-primary" href="/job/{{$pekerjaan->url_slug}}/postlist" >Buat To-do List</a>--}}
                </div>
            </div>

        </div>

    </div>

</div>
@endsection
