@extends('layouts.auth')

    @section('content')

    @foreach($kerjakan as $pekerjaan)
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h4><{{$pekerjaan->getPosisi()}}/h4>
                    </div>
                </div>
            </div>
        </div>
    <div>{{$pekerjaan->id}}</div>
    <div>{{$pekerjaan->area}}</div>
    <div>{{$pekerjaan->getPosisi()}}</div>
{{--        <div>{{$pekerjaan->with}}</div>--}}
    @endforeach

    @endsection
