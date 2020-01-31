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
                <p class="mb-4 pb-2 px-md-5 mx-md-5"></p>

            </div>
        </div>
    </div>
    <!-- Jumbotron -->
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-8 offset-sm-2">
                    <div class="container">

                        {{--            <div>{{$hotel->pekerjaan->posisi->nama_posisi}}</div>--}}
                        <h4>Deskripsi Pekerjaan</h4>
                        <h5> {!!html_entity_decode($pekerjaan->deskripsi)!!}</h5>
{{--                        <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque varius ligula at tellus condimentum, at elementum neque faucibus.--}}
{{--                            Donec ac condimentum nulla, ut pellentesque est. Ut aliquet, turpis eget posuere cursus, massa nisl vulputate ipsum, ac placerat ligula nunc in ex. Nullam vel velit eleifend, accumsan diam vel, condimentum lectus. Nunc ut erat nunc. Integer ut maximus lectus. Morbi metus quam, faucibus a viverra et,--}}
{{--                            finibus ut risus. Sed vel metus eget urna feugiat ullamcorper. Ut fermentum mattis tincidunt. Nulla nibh nulla, suscipit vel justo ac, feugiat fermentum lectus.</h5>--}}
{{--                        <br/>--}}
{{--                        <h4>Kualifikasi Pekerjaan</h4>--}}
{{--                        <ul>--}}
{{--                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>--}}
{{--                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>--}}
{{--                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>--}}
{{--                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>--}}
{{--                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>--}}
{{--                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>--}}
{{--                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>--}}
{{--                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>--}}
{{--                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>--}}
{{--                        </ul>--}}
{{--                        <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque varius ligula at tellus condimentum, at elementum neque faucibus.--}}
{{--                            Donec ac condimentum nulla, ut pellentesque est. Ut aliquet, turpis eget posuere cursus, massa nisl vulputate ipsum, ac placerat ligula nunc in ex. Nullam vel velit eleifend, accumsan diam vel, condimentum lectus. Nunc ut erat nunc. Integer ut maximus lectus. Morbi metus quam, faucibus a viverra et,--}}
{{--                            finibus ut risus. Sed vel metus eget urna feugiat ullamcorper. Ut fermentum mattis tincidunt. Nulla nibh nulla, suscipit vel justo ac, feugiat fermentum lectus.</h5>--}}
                        <br/>
                        <h4>Upah</h4>
                        <h4>Rp:{{$pekerjaan->bayaran}},00</h4>
                        <br/>
                        <h4>Tanggal Bekerja</h4>
                        <h5>{{$pekerjaan->waktu_mulai}}</h5>
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
