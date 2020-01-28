@extends('layouts.auth')

@section('content')


<div class="container float-left" style="margin-left:50px">
    <div class="card shadow" style="width: 18rem">
        <img class="card-img-top img-fluid" src="{{$hotel->profile->hotelPhoto()}}" alt="card hotel image">
        <div class="card-body">
            <h4 title="card-title" >{{$hotel->profile->nama}}</h4>

            <span class="fa fa-home d-flex">
                <div class="pl-2">
                     <p class="card-text">
                    {{$hotel->profile->alamat}}
                      </p>
                </div>
            </span>

        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item fa fa-envelope d-flex">
                <div class="pl-2">
                    {{ $hotel->profile->email}}
                </div>
            </li>
            <li class="list-group-item fa fa-whatsapp d-flex">
                <div class="pl-2">
                    {{$hotel->profile->nomor_telepon}}
                </div>
            </li>
            <li class="list-group-item fa fa-instagram d-flex">
                <div class="pl-2">
                    {{$hotel->profile->social_media}}
                </div>
            </li>
            <li class="list-group-item fa fa-globe d-flex">
                <div class="pl-2">{{$hotel->profile->website}}</div>
            </li>

        </ul>
        <a href="/hotel/{{$hotel->id}}/edit" class="btn btn-info">Edit Profile</a>

    </div>

        <a href="/job/postjob" type="button" class="btn-danger">Post A Job</a>
{{--    <div class="row">--}}
{{--        <div class="card card-img-bottomcol-sm-5">--}}
{{--            <div class="imghotel shadow">--}}
{{--                <img src="https://dhdzy64m58a2i.cloudfront.net/otakusquare-com/product-thumbnails/BANI57888-4/0.jpg" class="img img-responsive">--}}
{{--            </div>--}}
{{--            <h5>Nama Hotel : {{$hotel->name}}--}}

{{--    </div>--}}



    </div>

        <div class="row">
            <div class="container float-left" >
            <div class="col mb-3">

            <div class="tab-content">
                @foreach($hotel->pekerjaan as $pekerjaan)
                    <div class="col mb-3">
                        <div class="card shadow-sm">
                               <h4>{{$pekerjaan->nama_posisi}}</h4>
                            <div class="card-body">
                                <h4>{{$hotel->profile->nama}}</h4>
                                <h6>{{$hotel->profile->alamat}}</h6>
                                <p>{{$pekerjaan->deskripsi}}</p>
                            </div>
                        </div>
                    </div>


{{--                    <div class="col-10 bg-primary ">--}}
{{--                        <div class="pb-4">--}}
{{--                            <div>{{$hotel->profile->nama}}</div>--}}
{{--                            <div>{{$pekerjaan->kuota}}</div>--}}
{{--                            <div>{{$pekerjaan->deskripsi}}</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                @endforeach
            </div>
        </div>
         </div>

        </div>

{{--    --}}
{{--    <div class="row">--}}
{{--        <div class="col-3 p-5">--}}
{{--            <img src="https://steamcdn-a.akamaihd.net/apps/570/icons/econ/voicepack/juggernaut_arcana_voicepack_large.38f2a62f17b0593d02edd7adad28e1d960ed5ddf.png" class="rounded-circle w-100">--}}
{{--        </div>--}}
{{--        <div class="col-9 pt-5">--}}
{{--            <div class="d-flex justify-content-between align-items-baseline">--}}

{{--                <div class="d-flex align-items-center pb-3">--}}
{{--                    <div class="h4">{{$hotel->name}}</div>--}}


{{--                </div>--}}


{{--            </div>--}}


{{--            <div class="d-flex">--}}
{{--                <div class="pr-4"><strong>1111</strong> posts</div>--}}
{{--                <div class="pr-4"><strong>2222</strong> followers</div>--}}
{{--                <div class="pr-4"><strong>3333</strong> following</div>--}}
{{--            </div>--}}
{{--            <div class="pt-4 font-weight-bold" >{{$hotel->email}}</div>--}}
{{--            <div class="text-justify">BBBB</div>--}}
{{--            <div><a href="#">CCCC</a> </div>--}}
{{--        </div>--}}
{{--    </div>--}}




@endsection
