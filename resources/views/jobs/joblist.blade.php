@extends('layouts.auth')

    @section('content')

    @foreach($kerjakan as $pekerjaan)
    <div>{{$pekerjaan->id}}</div>
    <div>{{$pekerjaan->area}}</div>
    <div>{{$pekerjaan->getPosisi()}}</div>
{{--        <div>{{$pekerjaan->with}}</div>--}}
    @endforeach

    @endsection
