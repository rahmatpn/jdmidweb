@extends('layouts.auth')

@section('content')
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scroll/16.1.0/smooth-scroll.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>
    </head>
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
                <form action="{{url('/job/'.$pekerjaan->url_slug.'/done')}}" enctype="multipart/form-data"  data-toggle="validator" method="post">
                @csrf
                <h3 class="font-weight-bold black-text mb-4 pb-2 text-center">To-Do List</h3>
                <hr class="w-header">
                <div class="card shadow-sm">
                    @foreach($todolist as $todo)
                        <div class="card-body align-items-center justify-content-between">
                            <i class="fab fa-1x mr-4 blue p-3 white-text rounded " aria-hidden="true">{{$loop->index + 1}}</i>
                            {{$todo->nama_pekerjaan}}
                            @if($kerjakan->pivot->status == 1)
                                <div class="form-check fa-pull-right fa-2x">
                                    <label>
                                        <input type="checkbox"  id="todolist_user" name="todolist_user[]"  value="{{$todo->id}}" {{($todo->todo==1)?  "checked" : "" }}> <span class="label-text"></span>
                                    </label>
                                </div>
                            @else
                               <button class=" btn btn-success fa-pull-right fa-2x fa fa-check"> </button>
                            @endif
                            <hr>
                        </div>
                    @endforeach
                </div>
                    @if($kerjakan->pivot->status == '4')
                        <a href="#" class="btn btn-success container-fluid shadow-sm">Pekerjaan selesai</a>
                    @elseif($kerjakan->pivot->status == '3')
                        <br><p>Pekerjaan telah dikonfirmasi selesai oleh Hotel, silakan lakukan konfirmasi jika sudah dibayar</p>
                        <a href="{{url('/job/'.$pekerjaan->url_slug.'/finish/'.$user->profile->url_slug)}}" class="btn btn-success container-fluid shadow-sm">Konfirmasi</a>
                    @elseif($kerjakan->pivot->status == '2')
                        <div class="btn btn-grey container-fluid shadow-sm">Menunggu Konfirmasi Hotel</div>
                    @else
                        <button type="submit" class="btn btn-primary container-fluid shadow-sm">Simpan</button>
                    @endif
                </form>
            </div>
        </div>
    </div>
@endsection
