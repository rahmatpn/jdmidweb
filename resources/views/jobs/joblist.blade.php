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
            <div class="modal fade" id="modalTodoList" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                 aria-hidden="true">

                <!-- Change class .modal-sm to change the size of the modal -->
                <div class="modal-dialog modal-lg" role="document">


                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title w-100 text-md-center" id="myModalLabel">To-Do List</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <ul class="list-group">

                                <!-- Ndoko For each e nek kene-->
                                <ul class="list-group">

                                    <li class="list-group-item d-flex justify-content-between align-items-center" style="font-size: 120%">
                                        <p class="mb-0">
                                        <span class="badge badge-primary">1</span>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a dui sit amet sapien accumsan blandit eget porttitor sapien. Mauris faucibus arcu eu facilisis aliquet.
                                        Etiam nec iaculis arcu. Nullam euismod quam a ligula egestas, a dapibus ante consequat. Curabitur id consectetur leo.
                                        Curabitur sodales eget urna ut dignissim. Pellentesque sodales neque a consectetur maximus.
                                        <!-- Default unchecked -->
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                                            <label class="custom-control-label" for="defaultUnchecked"></label>
                                        </div>
                                    </li>
                                </ul>
                                <!-- End For Each e nek kene -->
                            </ul>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-sm shadow-sm" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary btn-sm shadow-sm">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card ">
                @foreach($kerjakan as $pekerjaan)
                <div class="card-body parent">
                    <div class="card-title">
                        <div class="row">
                            <div class="col-sm-4 align-items-center">
                                <div class="avatar w-100 white d-flex justify-content-center align-items-center">
                                    <img src="{{asset($pekerjaan->foto ?? $pekerjaan->hotel->profile->hotelPhoto())}}"  class="img-fluid shadow-sm" style="width: 50%;">
                                </div>
                            </div>
                            <div class="col-sm-8">
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
                                        <a class="btn btn-success rounded shadow-sm" type="button" href="{{url("/joblist/$pekerjaan->url_slug/todolist")}}">To-do list</a>
                                </div>

                                </div>
                            <div class="child">
                                @if($pekerjaan->pivot->status == '2')
                                    <span><i class="far fa-clock fa-2x fa-fw  align-items-center"></i></span>
                                @elseif($pekerjaan->pivot->status == '1')
                                <span><i class="far fa-times-circle fa-2x fa-fw red-text align-items-center"></i></span>

                                @endif
{{--                                    <span><i class="fas fa-check-circle fa-2x green-text" style="display: none"></i></span>--}}


                            </div>



                            </div>

                        </div>



                </div>
                @endforeach
            </div>
        </div>
{{--    <div>{{$pekerjaan->id}}</div>--}}
{{--    <div>{{$pekerjaan->area}}</div>--}}
{{--    <div>{{$pekerjaan->getPosisi()}}</div>--}}
{{--        <div>{{$pekerjaan->with}}</div>--}}

    @endsection
