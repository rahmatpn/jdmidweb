@extends('layouts.guest')

    @section('content')

    <style>
    .parent {
        position: relative;
    }
    .child {
        position: absolute;
        justify-content:center;
        align-items:center;
        right: 20px;
        top:20px;
    }
    .md-v-line {
        position: absolute;
        border-left: 1px solid rgba(0,0,0,.125);
        height: 47px;
        top:0px;
        left:54px;
    }
    .list-group {
        list-style: decimal inside;
    }

    .list-group-item {
        display: list-item;
    }
    </style>
        <div class="container my-5 py-5">
            @foreach($kerjakan as $pekerjaan)
            <div class="card my-3">
                <div class="card-body parent">
                    <div class="card-title">
                        <div class="row">
                            <div class="col-sm-4 text-center">
                                @if($pekerjaan->pivot->status == '1' & $pekerjaan->isExpired == true)
                                    <p>Pekerjaan Kadaluarsa</p>
                                @elseif($pekerjaan->pivot->status == '1')
                                    <p>Belum Dikerjakan</p>
                                @elseif($pekerjaan->pivot->status == '2')
                                    <p>Menunggu Konfirmasi Hotel & Pembayaran </p>
                                @elseif($pekerjaan->pivot->status == '3')
                                    <p>Menunggu Konfirmasi User</p>
                                @else
                                    <p>Selesai</p>
                                @endif
                            </div>
                            <div class="col-sm-8 fa-pull-right">
{{--                                @if($pekerjaan->pivot->status == '1')--}}
{{--                                    --}}{{--                                    <span><i class="far fa-times-circle fa-2x fa-fw red-text align-items-center"></i>--}}
{{--                                    --}}{{--                                    test--}}
{{--                                    --}}{{--                                    </span>--}}
{{--                                    Belum Dikerjakan--}}

{{--                                @elseif($pekerjaan->pivot->status == '2')--}}
{{--                                    <span><i class="far fa-clock fa-2x fa-fw  align-items-center"></i>--}}
{{--                                          test--}}
{{--                                    </span>--}}
{{--                                @elseif($pekerjaan->pivot->status == '3')--}}
{{--                                    <span><i class="far fa fa-check-circle fa-2x fa-fw grey-text align-items-center"></i></span>--}}
{{--                                @else--}}
{{--                                    <span><i class="far fa fa-check-circle fa-2x fa-fw green-text align-items-center"></i></span>--}}
{{--                                @endif--}}
                            </div>
                            <div class="col-sm-4 my-sm-auto ">
                                <div class="avatar w-100 white d-flex justify-content-center align-items-center">
                                    <img src="{{asset($pekerjaan->foto ?? $pekerjaan->hotel->profile->hotelPhoto())}}"  class="img-fluid shadow-sm" style="width: 50%;">
                                </div>
                            </div>
                            <div class="col-sm-8 my-sm-auto">
                                <h4 class="card-title blue-text"><strong>{{$pekerjaan->hotel->profile->nama}}</strong></h4>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div style="display: none">{{$pekerjaan->id}}</div>
                                        <div class="card-text">
                                            <span class="blue-text text"><strong>Posisi : </strong></span>
                                            {{$pekerjaan->getPosisi()}}
                                        </div>

                                        <div class="card-text">
                                            <span class="blue-text text"><strong>Area : </strong></span>
                                            {{$pekerjaan->area}}
                                        </div>
                                        <div class="card-text">
                                            <span class="blue-text text"><strong>Upah : </strong></span>
                                            {{"IDR: ".number_format($pekerjaan->bayaran)}},00
                                        </div>
                                        <div class="card-text">
                                            <span class="blue-text text"><strong>Waktu: </strong></span>
                                            {{date("H:m", strtotime($pekerjaan->waktu_mulai))}} s/d {{date("H:m", strtotime($pekerjaan->waktu_selesai))}}
                                        </div>

                                    </div>
                                    <div class="col-sm-8">
                                        @if($pekerjaan->tinggi_minimal != null || $pekerjaan->tinggi_maksimal != null)
                                            <div class="card-text">
                                                <span class="blue-text text"><strong>Tinggi : </strong></span>

                                            @if($pekerjaan->tinggi_minimal !=null)
                                                Min. {{$pekerjaan->tinggi_minimal ?? '-'}} Cm
                                            @endif
                                            @if($pekerjaan->tinggi_maksimal != null)
                                                Max. {{$pekerjaan->tinggi_maksimal ?? '-' }} Cm
                                            @endif
                                            </div>
                                        @endif
                                        @if($pekerjaan->berat_minimal !=null || $pekerjaan->berat_maksimal != null)
                                                <div class="card-text">
                                                    <span class="blue-text text"><strong>Berat badan : </strong></span>

                                                @if($pekerjaan->berat_minimal !=null)
                                                Min. {{$pekerjaan->berat_minimal ?? '-'}} Kg
                                            @endif
                                            @if($pekerjaan->berat_maksimal != null)
                                                Max. {{$pekerjaan->berat_maksimal ?? '-' }} Kg
                                            @endif
                                                </div>
                                        @endif
                                        <div class="card-text">
                                            <span class="blue-text text"><strong>Tanggal Mulai :</strong></span>
                                            {{date('l, F jS, Y', strtotime($pekerjaan->tanggal_mulai))}}
                                        </div>
                                    </div>
                                        @if($pekerjaan->isExpired == true)
                                            <p></p>
                                        @elseif($pekerjaan->pivot->status == '1')
                                            <a class="btn btn-success rounded shadow-sm" type="button" href="{{url("/joblist/$pekerjaan->url_slug/todolist")}}">To-do list</a>
                                        @else
                                            <a class="btn btn-success rounded shadow-sm" type="button" href="{{url("/joblist/$pekerjaan->url_slug/todolist")}}">Detail</a>
                                        @endif
                                </div>

                                </div>
                            <div class="child">
                                @if($pekerjaan->pivot->status == '1')
                                    <span><i class="fas fa-briefcase fa-2x fa-fw red-text align-items-center"></i></span>
                                @elseif($pekerjaan->pivot->status == '2')
                                    <span><i class="fas fa-business-time fa-2x fa-fw  align-items-center"></i>
                                    </span>
                                @elseif($pekerjaan->pivot->status == '3')
                                    <span><i class="far fa fa-check-circle fa-2x fa-fw grey-text align-items-center"></i></span>
                                @else
                                    <span><i class="far fa fa-check-circle fa-2x fa-fw green-text align-items-center"></i></span>
                                @endif



                            </div>



                            </div>

                        </div>



                </div>

            </div>
            @endforeach
        </div>
{{--    <div>{{$pekerjaan->id}}</div>--}}
{{--    <div>{{$pekerjaan->area}}</div>--}}
{{--    <div>{{$pekerjaan->getPosisi()}}</div>--}}
{{--        <div>{{$pekerjaan->with}}</div>--}}

    @endsection
