@extends('layouts.guest')


<div class="container my-5 py-5">
    <div class="card">
        <div class="card-body">
         <div class="card-text">

                 @foreach($pekerjaan as $pkrjn)
                     <a>{{$pkrjn->area}}</a>
                     <a href="{{url("hotel/".$pkrjn->hotel->profile->url_slug)}}">{{$pkrjn->hotel->profile->nama}}</a>
                     <a href="{{url("/job/$pkrjn->url_slug")}}">{{$pkrjn->posisi->nama_posisi}}</a>
                     <div>{{$pkrjn->bayaran}}</div>
                     <div>{{$pkrjn->kuota}}</div>
                     <hr>
                 @endforeach


         </div>
        </div>
    </div>
</div>


