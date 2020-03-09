@extends('layouts.auth')
@section('css')
    <style>
body{
    margin: 0 auto;
    background: #f8f8f8;
}

.with-arrow .nav-link.active {
    position: relative;
}

.with-arrow .nav-link.active::after {
    content: '';
    border-left: 6px solid transparent;
    border-right: 6px solid transparent;
    border-top: 6px solid #2b90d9;
    position: absolute;
    bottom: -6px;
    left: 50%;
    transform: translateX(-50%);
    display: block;
}

/* lined tabs */

.lined .nav-link {
    border: none;
    border-bottom: 3px solid transparent;
}

.lined .nav-link:hover {
    border: none;
    border-bottom: 3px solid transparent;
}

.lined .nav-link.active {
    background: none;
    color: #555;
    border-color: #2b90d9;
}

    </style>

@endsection
@section('content')

        @if(Session::has('success'))
            <script>
                $(function() {
                    $('#modalCookie1').modal('show');
                });
            </script>
        @elseif(Session::has('gagalProfile'))
            <script>
                $(function() {
                    $('#modalCookie2').modal('show');
                });
            </script>
        @elseif(Session::has('gagalTinggi'))
            <script>
                $(function() {
                    $('#modalCookie3').modal('show');
                });
            </script>
    @elseif(Session::has('gagalBerat'))
        <script>
            $(function() {
                $('#modalCookie4').modal('show');
            });
        </script>
    @elseif(Session::has('kuotaPenuh'))
        <script>
            $(function() {
                $('#modalCookie5').modal('show');
            });
        </script>
        @endif



        @if(session()->get('success'))
            <div class="modal fade top" id="modalCookie1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                 aria-hidden="true" data-backdrop="true">
                <div class="modal-dialog modal-frame modal-top modal-notify modal-info" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="row d-flex justify-content-center align-items-center">
                                <p class="pt-3 pr-2">{{session()->get('success')}}</p>
                                <a type="button" class="btn blue-gradient rounded waves-effect" data-dismiss="modal">Yay</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        @if(session()->get('gagalProfile'))
            <div class="modal fade top" id="modalCookie2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                 aria-hidden="true" data-backdrop="true">
                <div class="modal-dialog modal-frame modal-top modal-notify modal-info" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="row d-flex justify-content-center align-items-center">
                                <p class="pt-3 pr-2">{{session()->get('gagalProfile')}}</p>
                                <a type="button" class="btn blue-gradient rounded waves-effect" data-dismiss="modal">:(</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @if(session()->get('gagalTinggi'))
        <div class="modal fade top" id="modalCookie3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true" data-backdrop="true">
            <div class="modal-dialog modal-frame modal-top modal-notify modal-info" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row d-flex justify-content-center align-items-center">
                            <p class="pt-3 pr-2">{{session()->get('gagalTinggi')}}</p>
                            <a type="button" class="btn blue-gradient rounded waves-effect" data-dismiss="modal">Oke :(</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    @if(session()->get('gagalBerat'))
        <div class="modal fade top" id="modalCookie4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true" data-backdrop="true">
            <div class="modal-dialog modal-frame modal-top modal-notify modal-info" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row d-flex justify-content-center align-items-center">
                            <p class="pt-3 pr-2">{{session()->get('gagalBerat')}}</p>
                            <a type="button" class="btn blue-gradient rounded waves-effect" data-dismiss="modal">Oke :(</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    @if(session()->get('kuotaPenuh'))
        <div class="modal fade top" id="modalCookie5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true" data-backdrop="true">
            <div class="modal-dialog modal-frame modal-top modal-notify modal-info" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row d-flex justify-content-center align-items-center">
                            <p class="pt-3 pr-2">{{session()->get('kuotaPenuh')}}</p>
                            <a type="button" class="btn blue-gradient rounded waves-effect" data-dismiss="modal">Silahkan Coba Lagi di lain waktu</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

            <div class="card card-image" style="background-image: url('https://images.pexels.com/photos/262047/pexels-photo-262047.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=1260'); background-position: center; background-size: cover">
                <div class="text-white text-center rgba-stylish-strong py-5 px-4">
                    <div class="py-5">

                        <!-- Content -->
                        <br/>
                            <h5 class="h5 orange-text"><i class="fas fa-suitcase"></i>{{$pekerjaan->getNama()}}</h5>
                                        <h2 class="card-title h2 my-4 py-2">{{$pekerjaan->getPosisi()}}</h2>
                                        <p class="mb-4 pb-2 px-md-5 mx-md-5">{{$pekerjaan->getSocial()}}</p>
                        <br/>

                    </div>
                </div>
            </div>
{{--    <div class="card card-image" style="background-image: url(https://images.pexels.com/photos/262047/pexels-photo-262047.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940)">--}}
{{--        <div class="text-white text-center rgba-stylish-strong py-5 px-4">--}}
{{--            <div class="py-5">--}}

{{--                <!-- Content -->--}}
{{--                <h5 class="h5 orange-text"><i class="fas fa-suitcase"></i>{{$pekerjaan->getNama()}}</h5>--}}
{{--                <h2 class="card-title h2 my-4 py-2">{{$pekerjaan->getPosisi()}}</h2>--}}
{{--                <p class="mb-4 pb-2 px-md-5 mx-md-5">{{$pekerjaan->getSocial()}}</p>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!-- Jumbotron -->--}}



    <div class="card shadow-none">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-8 offset-sm-2">
                    <div class="container">
                        <ul id="myTab2" role="tablist" class="nav nav-tabs nav-pills with-arrow lined flex-column flex-sm-row text-center">
                            <li class="nav-item flex-sm-fill">
                                <a id="home2-tab" data-toggle="tab" href="#home2" role="tab" aria-controls="home2" aria-selected="true" class="nav-link text-uppercase font-weight-bold mr-sm-3 rounded-0 active">Deskripsi</a>
                            </li>
                            <li class="nav-item flex-sm-fill">
                                <a id="profile2-tab" data-toggle="tab" href="#profile2" role="tab" aria-controls="profile2" aria-selected="false" class="nav-link text-uppercase font-weight-bold mr-sm-3 rounded-0">Pendaftar</a>
                            </li>
                            <li class="nav-item flex-sm-fill">
                                <a id="contact2-tab" data-toggle="tab" href="#contact2" role="tab" aria-controls="contact2" aria-selected="false" class="nav-link text-uppercase font-weight-bold rounded-0">Lolos</a>
                            </li>
                        </ul>
                        <div id="myTab2Content" class="tab-content">
                            <div id="home2" role="tabpanel" aria-labelledby="home-tab" class="tab-pane fade px-4 py-5 show active">
                                <h4>Deskripsi Pekerjaan</h4>
                                <h5> {!!html_entity_decode($pekerjaan->deskripsi)!!}</h5>
                                <br/>
                                <h4>Area Kerja</h4>
                                <h5>{{$pekerjaan->area}}</h5>
                                <br/>
                                <h4>Upah</h4>
                                <h4>{{"IDR: ".number_format($pekerjaan->bayaran)}},00</h4>
                                <br/>
                                <h4>Tanggal</h4>
                                <h5>{{date('l, F jS, Y', strtotime($pekerjaan->tanggal_mulai))}}</h5>
                                <br/>
                                <h4>Waktu Mulai</h4>
                                <h5>{{date("H:m", strtotime($pekerjaan->waktu_mulai))}}</h5>
                                <br/>
                                <h4>Waktu Selesai</h4>
                                <h5>{{date("H:m", strtotime($pekerjaan->waktu_selesai))}}</h5>
                                <br/>
                                @if($pekerjaan->tinggi_minimal != null || $pekerjaan->tinggi_maksimal != null)
                                    <h4>Tinggi Badan</h4>
                                    @if($pekerjaan->tinggi_minimal !=null)
                                        <h5>minimal: {{$pekerjaan->tinggi_minimal ?? '-'}}</h5>
                                    @endif
                                    @if($pekerjaan->tinggi_maksimal != null)
                                        <h5>maksimal: {{$pekerjaan->tinggi_maksimal ?? '-' }} </h5>
                                    @endif
                                    <br>
                                @endif
                                @if($pekerjaan->berat_minimal !=null || $pekerjaan->berat_maksimal != null)
                                    <h4>Berat Badan</h4>
                                    @if($pekerjaan->berat_minimal !=null)
                                        <h5>minimal: {{$pekerjaan->berat_minimal ?? '-'}}</h5>
                                    @endif
                                    @if($pekerjaan->berat_maksimal != null)
                                        <h5>maksimal: {{$pekerjaan->berat_maksimal ?? '-' }} </h5>
                                    @endif
                                    <br/>
                                @endif
                                <h4>Kuota tersisa</h4>
                                <h5>{{($pekerjaan->kuota)-($pekerjaan->dikerjakan()->count())}} Orang</h5>
                                <br/>

                                <h4>Alamat Hotel</h4>
                                <h5>{{$pekerjaan->getAlamat()}}</h5>
                            </div>
                            <div id="profile2" role="tabpanel" aria-labelledby="profile-tab" class="tab-pane fade px-4 py-5">
                                <div class="container-fluid table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th scope="col" style="width: 10%">No</th>
                                            <th scope="col" style="width: 50%">Nama</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td><button type="button" class="btn btn-success">Terima</button>
                                                <button type="button" class="btn btn-danger">Tolak</button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            <div id="contact2" role="tabpanel" aria-labelledby="contact-tab" class="tab-pane fade px-4 py-5">
                                <div class="container-fluid table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th scope="col" style="width: 10%">No</th>
                                            <th scope="col" style="width: 80%">Nama</th>
                                            <th scope="col"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>
                                                <a href="#"><i class="fa fa-times" aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>





                    </div>
                    @auth('user')
                        <h4>Deskripsi Pekerjaan</h4>
                        <h5> {!!html_entity_decode($pekerjaan->deskripsi)!!}</h5>
                        <br/>
                        <h4>Area Kerja</h4>
                        <h5>{{$pekerjaan->area}}</h5>
                        <br/>
                        <h4>Upah</h4>
                        <h4>{{"IDR: ".number_format($pekerjaan->bayaran)}},00</h4>
                        <br/>
                        <h4>Tanggal</h4>
                        <h5>{{date('l, F jS, Y', strtotime($pekerjaan->tanggal_mulai))}}</h5>
                        <br/>
                        <h4>Waktu Mulai</h4>
                        <h5>{{date("H:m", strtotime($pekerjaan->waktu_mulai))}}</h5>
                        <br/>
                        <h4>Waktu Selesai</h4>
                        <h5>{{date("H:m", strtotime($pekerjaan->waktu_selesai))}}</h5>
                        <br/>
                        @if($pekerjaan->tinggi_minimal != null || $pekerjaan->tinggi_maksimal != null)
                            <h4>Tinggi Badan</h4>
                            @if($pekerjaan->tinggi_minimal !=null)
                                <h5>minimal: {{$pekerjaan->tinggi_minimal ?? '-'}}</h5>
                            @endif
                            @if($pekerjaan->tinggi_maksimal != null)
                                <h5>maksimal: {{$pekerjaan->tinggi_maksimal ?? '-' }} </h5>
                            @endif
                            <br>
                        @endif
                        @if($pekerjaan->berat_minimal !=null || $pekerjaan->berat_maksimal != null)
                            <h4>Berat Badan</h4>
                            @if($pekerjaan->berat_minimal !=null)
                                <h5>minimal: {{$pekerjaan->berat_minimal ?? '-'}}</h5>
                            @endif
                            @if($pekerjaan->berat_maksimal != null)
                                <h5>maksimal: {{$pekerjaan->berat_maksimal ?? '-' }} </h5>
                            @endif
                            <br/>
                        @endif
                        <h4>Kuota tersisa</h4>
                        <h5>{{($pekerjaan->kuota)-($pekerjaan->dikerjakan()->count())}} Orang</h5>
                        <br/>

                        <h4>Alamat Hotel</h4>
                        <h5>{{$pekerjaan->getAlamat()}}</h5>
                        @endauth
                    <br/>
                    @auth('hotel')
                    <form action="/job/{{$pekerjaan->url_slug}}/apply" method="post">
                        @csrf
                        <input type="hidden" class="btn aqua-gradient-rgba" value="Apply">
                    </form>
                    @endauth
                    @auth('user')
                        <form action="/job/{{$pekerjaan->url_slug}}/apply" method="post">
                            @csrf
                            <input type="submit" class="btn aqua-gradient-rgba" value="Apply">
                        </form>
                        @endauth
                </div>
            </div>

        </div>

    </div>


@endsection
