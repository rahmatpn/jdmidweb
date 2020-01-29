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
                <h5 class="h5 orange-text"><i class="fas fa-suitcase"></i>Deskripsi Pekerjaan</h5>
                <h2 class="card-title h2 my-4 py-2">Jumbotron with image overlay</h2>
                <p class="mb-4 pb-2 px-md-5 mx-md-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur obcaecati vero aliquid libero doloribus ad, unde tempora maiores, ullam, modi qui quidem minima debitis perferendis vitae cumque et quo impedit.</p>
                <a class="btn peach-gradient"><i class="fas fa-clone left"></i> View project</a>

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
                        <h5>Rp:{{$pekerjaan->bayaran}}</h5>
                        <div>abcdefg</div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

@endsection
