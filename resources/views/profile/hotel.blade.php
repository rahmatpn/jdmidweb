@extends('layouts.auth')



@section('content')

    <div class="container" style="margin-top:30px;">
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        <div class="row">
            <div class="col-sm-4">
                <div class="card shadow" style="width: 20rem">
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
                                    <div href="http:{{$hotel->profile->website   }}" class="pl-2">{{$hotel->profile->website}}</div>
                                </li>

                            </ul>
                            <a href="/hotel/{{$hotel->profile->url_slug}}/edit" class="btn btn-info">Edit Profile</a>

                        </div>

                        <a href="/job/postjob" type="button" class="btn aqua-gradient">Post A Job</a>

            </div>

            <div class="col-sm-8">
                @foreach($hotel->pekerjaan as $pekerjaan)
                    <div class="col mb-3">

                    <div class="card shadow">


                        <div class="card-body">
                            <h4>{{$pekerjaan->getPosisi()}}</h4>
                            <h2>{{$hotel->profile->nama}}</h2>
                            <h5>@currency($pekerjaan->bayaran)</h5>
                            <p>{{$pekerjaan->waktu_mulai}}</p>

                         <div class="desc">  {!!html_entity_decode($pekerjaan->deskripsi)!!}</div>

                            <a href="/job/{{$pekerjaan->url_slug}}" class="btn aqua-gradient">Selengkapnya</a>
                            <a href="/job/{{ $pekerjaan->url_slug}}/delete" class="btn aqua-gradient">Hapus</a>
                            <a href="/job/{{ $pekerjaan->url_slug}}/edit" class="btn aqua-gradient">Edit</a>
                        </div>

                    </div>

                    </div>

                @endforeach
        </div>

    </div>
</div>
{{--    <div class="container" style="margin-left:50px">--}}
{{--        <div class="card shadow" style="width: 20rem">--}}
{{--            <img class="card-img-top img-fluid" src="{{$hotel->profile->hotelPhoto()}}" alt="card hotel image">--}}
{{--            <div class="card-body">--}}
{{--                <h4 title="card-title" >{{$hotel->profile->nama}}</h4>--}}

{{--                <span class="fa fa-home d-flex">--}}
{{--                <div class="pl-2">--}}
{{--                     <p class="card-text">--}}
{{--                    {{$hotel->profile->alamat}}--}}
{{--                      </p>--}}
{{--                </div>--}}
{{--            </span>--}}
{{--            </div>--}}
{{--            <ul class="list-group list-group-flush">--}}
{{--                <li class="list-group-item fa fa-envelope d-flex">--}}
{{--                    <div class="pl-2">--}}
{{--                        {{ $hotel->profile->email}}--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="list-group-item fa fa-whatsapp d-flex">--}}
{{--                    <div class="pl-2">--}}
{{--                        {{$hotel->profile->nomor_telepon}}--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="list-group-item fa fa-instagram d-flex">--}}
{{--                    <div class="pl-2">--}}
{{--                        {{$hotel->profile->social_media}}--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="list-group-item fa fa-globe d-flex">--}}
{{--                    <div class="pl-2">{{$hotel->profile->website}}</div>--}}
{{--                </li>--}}

{{--            </ul>--}}
{{--            <a href="/hotel/{{$hotel->id}}/edit" class="btn btn-info">Edit Profile</a>--}}

{{--        </div>--}}

{{--        <a href="/job/postjob" type="button" class="btn-danger">Post A Job</a>--}}
{{--        --}}
{{--    </div>--}}
{{--    <div class="container flex-lg-nowrap col-lg-auto">--}}
{{--        @foreach($hotel->pekerjaan as $pekerjaan)--}}
{{--            <div class="row">--}}
{{--                <div class="tab-content pt-1">--}}

{{--                    <div class="col mb-3">--}}
{{--                        <div class="card shadow-sm" style="margin-right: 10px">--}}
{{--                            <h4>{{$pekerjaan->nama_posisi}}</h4>--}}
{{--                            <div class="card-body">--}}
{{--                                <h4>{{$hotel->profile->nama}}</h4>--}}
{{--                                <h6>{{$hotel->profile->alamat}}</h6>--}}
{{--                                <p>{{$pekerjaan->deskripsi}}</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        @endforeach--}}
{{--    </div>--}}







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
