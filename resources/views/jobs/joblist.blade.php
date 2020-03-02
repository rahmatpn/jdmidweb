@extends('layouts.editBar')

    @section('content')
{{--        <div class="container py-5">--}}
{{--            <div class="row my-5">--}}
{{--                <div class="col-md-3">--}}
{{--                        <div class="card">--}}
{{--                            <div class="card-body">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-lg-4 mb-2 align-items-center">--}}
{{--                                        <div class="avatar w-100 white d-flex justify-content-center align-items-center">--}}
{{--                                            <img src="{{asset($hotel->profile->hotelPhoto())}}"  class="img-fluid z-depth-1">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-8 text-muted d-flex flex-column justify-content-start pt-1">--}}
{{--                                        <p class="mb-2"><strong>{{$hotel->profile->nama}}</strong></p>--}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                                <hr/>--}}

{{--                            </div>--}}
{{--                        </div>--}}
    @foreach($kerjakan as $kerjakan)
    <div>{{$kerjakan->area}}</div>
    <div>{{$kerjakan->getPosisi()}}</div>
    @endforeach

    @endsection
