@extends('layouts.guest')


<div class="container my-5 py-5">
    <div class="card">
        <div class="card-body">
         <div class="card-text">
             @foreach($pekerjaan as $pkrjn)
                 <div>{{$pkrjn->area}}</div>
                 <div>{{$pkrjn->hotel->profile->nama}}</div>
                 <div>{{$pkrjn->posisi->nama_posisi}}</div>
                 <div>{{$pkrjn->bayaran}}</div>
                 <div>{{$pkrjn->kuota}}</div>
                 <hr>
                 @endforeach
         </div>
        </div>
    </div>
</div>


