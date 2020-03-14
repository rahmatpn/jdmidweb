@extends('layouts.auth')

@section('content')
    <style>

        input[type="checkbox"], input[type="radio"]{
            position: absolute;
            right: 9000px;
        }

        /*Check box*/
        input[type="checkbox"] + .label-text:before{
            content: "\f096";
            font-family: "FontAwesome";
            speak: none;
            font-style: normal;
            font-weight: normal;
            font-variant: normal;
            text-transform: none;
            line-height: 1;
            -webkit-font-smoothing:antialiased;
            width: 1em;
            display: inline-block;
            margin-right: 5px;
        }

        input[type="checkbox"]:checked + .label-text:before{
            content: "\f14a";
            color: #2980b9;
            animation: effect 250ms ease-in;
        }

        input[type="checkbox"]:disabled + .label-text{
            color: #aaa;
        }

        input[type="checkbox"]:disabled + .label-text:before{
            content: "\f0c8";
            color: #ccc;
        }

        @keyframes effect{
            0%{transform: scale(0);}
            25%{transform: scale(1.3);}
            75%{transform: scale(1.4);}
            100%{transform: scale(1);}
        }

    </style>
    <div class="card card-image shadow-none rounded-0" style="background-image: url('https://images.pexels.com/photos/262978/pexels-photo-262978.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260'); background-position: center; background-size: cover">
        <div class="text-white text-center rgba-stylish-strong py-5 px-4">
            <div class="py-5">

                <!-- Content -->
                <br/>
                <h5 class="h5 orange-text"><i class="fas fa-file-contract"></i></h5>
                <h2 class="card-title h2 my-4 py-2"> {{$pekerjaan->getPosisi()}}</h2>
                <p class="mb-4 pb-2 px-md-5 mx-md-5">{{$pekerjaan->hotel->profile->nama}}</p>
                <br/>

            </div>
        </div>
    </div>
        <div class="card shadow-none rounded-0">
            <div class="container">
            <div class="card-body">
                <h3 class="font-weight-bold black-text mb-4 pb-2 text-center">To-Do List</h3>
                <hr class="w-header">
                <div class="card shadow-sm">
                    @foreach($todolist as $todo)
                    <div class="card-body align-items-center justify-content-between">
                        <i class="fab fa-1x mr-4 blue p-3 white-text rounded " aria-hidden="true">{{$loop->index + 1}}</i>
                        {{$todo->nama_pekerjaan}}
                        <div class="form-check fa-pull-right fa-2x">
                            <label>
                                <input type="checkbox" name="check"> <span class="label-text"></span>
                            </label>
                        </div>
                        <hr>

                    </div>

                    @endforeach
                </div>

{{--                <div class="list-group-flush ">--}}
{{--                    @foreach($todolist as $todo)--}}
{{--                        <div class="list-group-item">--}}
{{--                            <div class="d-flex align-items-center">--}}
{{--                                <i class="fab fa-2x mr-4 blue p-3 white-text rounded " aria-hidden="true">{{$loop->index + 1}}</i>--}}
{{--                               <!-- Joblist -->--}}
{{--                                {{$todo->nama_pekerjaan}}--}}

{{--                                <div class="custom-control custom-checkbox checkbox-lg">--}}
{{--                                    <input type="checkbox" class="custom-control-input" id="defaultUnchecked">--}}
{{--                                    <label class="custom-control-label" for="defaultUnchecked"></label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <hr>--}}
{{--                        </div>--}}
{{--                    @endforeach--}}
{{--                </div>--}}


            </div>
                <button type="submit" class="btn btn-primary container-fluid shadow-sm">Selesai</button>

            </div>
        </div>
@endsection
