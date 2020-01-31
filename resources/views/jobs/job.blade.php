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
                        <h4>Kuota</h4>
                        <h5>{{$pekerjaan->kuota}}</h5>
                        <br/>

                        <h4>Alamat Hotel</h4>
                        <h5>{{$pekerjaan->getAlamat()}}</h5>
                    </div>
                    <br/>
                    <button type="button" class="btn aqua-gradient">Apply Sekarang</button>
                </div>
            </div>
        </div>

    </div>

</div>

@endsection
