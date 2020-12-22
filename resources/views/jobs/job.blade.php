
@section('css')
<style>
body{
    margin: 0 auto;
    background-color: white;
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
.img-gradient {
    position:relative;
    display:inline-block;
}
.img-gradient:after {
    content:'';
    position:absolute;
    left:0; top:0;
    width:100%; height:100%;
    display:inline-block;
    background: -moz-linear-gradient(top, rgba(0,47,75,0.5) 0%, rgba(220, 66, 37, 0.5) 100%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(220, 66, 37, 0.5)), color-stop(100%,rgba(0,47,75,0.5))); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(top, rgba(0,47,75,0.5) 0%,rgba(220, 66, 37, 0.5) 100%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(top, rgba(0,47,75,0.5) 0%,rgba(220, 66, 37, 0.5) 100%); /* Opera 11.10+ */
    background: -ms-linear-gradient(top, rgba(0,47,75,0.5) 0%,rgba(220, 66, 37, 0.5) 100%); /* IE10+ */
    background: linear-gradient(to bottom, rgba(0,47,75,0.5) 0%,rgba(220, 66, 37, 0.5) 100%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#002f4b', endColorstr='#00000000',GradientType=0 ); /* IE6-9 */
}
.img-gradient img{
    display:block;
}

.img-gradient-overlay { /* FF3.6+ */ /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(rgba(0,47,75,0.5) 0%, rgba(220, 66, 37, 0.5) 100%);
    background: -o-linear-gradient(rgba(0,47,75,0.5) 0%, rgba(220, 66, 37, 0.5) 100%);
    background: linear-gradient(rgba(0,47,75,0.5) 0%, rgba(220, 66, 37, 0.5) 100%); /* Chrome10+,Safari5.1+ */ /* Opera 11.10+ */ /* IE10+ */ /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#002f4b', endColorstr='#00000000',GradientType=0 ); /* IE6-9 */
    border-radius: .3rem;
}
.text {
    display: block;/* or inline-block */
    text-overflow: ellipsis;
    word-wrap: break-word;
    overflow: hidden;
    max-height: 3.6em;
    line-height: 1.8em;
    width: 100px;
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
                                <a type="button" class="btn blue-gradient rounded waves-effect rounded-pill" data-dismiss="modal">Yay</a>
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
                                <a type="button" class="btn blue-gradient rounded waves-effect rounded-pill" data-dismiss="modal">:(</a>
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
                            <a type="button" class="btn blue-gradient rounded waves-effect rounded-pill" data-dismiss="modal">Oke :(</a>
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
                            <a type="button" class="btn blue-gradient rounded waves-effect rounded-pill" data-dismiss="modal">Oke :(</a>
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
                            <a type="button" class="btn blue-gradient rounded waves-effect rounded-pill" data-dismiss="modal">Silahkan Coba Lagi di lain waktu</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

<!-- Jumbotron -->


<body>  
@extends('layouts.jobnav')
<div class="container-md">




<section id="productDetails" class="pb-5 pt-3">
<!--News card-->
<div class="card mt-5 hoverable">
  <div class="row mt-5">
    <div class="col-lg-6">

      <!--Carousel Wrapper-->
      <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">

        <!--Slides-->
        <div class="carousel-inner text-center text-md-left" role="listbox">
          <div class="carousel-item active">
            <img src="{{asset($pekerjaan->foto ?? $pekerjaan->hotel->profile->hotelPhoto())}}" alt="First slide" class="img-fluid p-5">
          </div>
        </div>
        <!--/.Slides-->

      </div>
      <!--/.Carousel Wrapper-->
    </div>
    <div class="col-lg-5 mr-3 text-center text-md-left">
      <h2 class="h2-responsive text-center text-md-left product-name font-weight-bold dark-grey-text mb-1 ml-xl-0 ml-4">
        <strong>{{$pekerjaan->area}}</strong>
      </h2>
      <span class="badge badge-danger product mb-4 ml-xl-0 ml-4">{{$pekerjaan->getPosisi()}}</span>
      <h3 class="h3-responsive text-center text-md-left mb-5 ml-xl-0 ml-4">
        <span class="red-text font-weight-bold">
          <strong>{{"IDR: ".number_format($pekerjaan->bayaran)}},00</strong>
        </span>
      </h3>
      <p class="ml-xl-0 ml-4">
        <strong>Tahun: </strong>{{$pekerjaan->kuota}}</p>
        <p class="ml-xl-0 ml-4">
        <strong>Warna: </strong>{{$pekerjaan->warna}}</p>
        <p class="ml-xl-0 ml-4">
        <strong>Mesin: </strong>{{$pekerjaan->mesin}}cc</p>
      <p class="ml-xl-0 ml-4">
        <strong>Kondisi: </strong>{{$pekerjaan->kondisi}}</p>
        <p class="ml-xl-0 ml-4"> <strong>Alamat: </strong> {{$pekerjaan->getAlamat()}}
        </p>

        @auth('hotel')
                                            <form id="apply_form" action="/job/{{$pekerjaan->url_slug}}/apply" method="post">
                                                @csrf
                                                <a href="javascript:{}"  onclick="document.getElementById('apply_form').submit();" class="btn btn-block btn-primary btn-md rounded-pill">Booking</a>
                                            </form>
                                        @endauth
                                        @auth('user')
                                            <form id="apply_form" action="/job/{{$pekerjaan->url_slug}}/apply" method="post">
                                                @csrf
                                                <a href="javascript:{}" onclick="document.getElementById('apply_form').submit();" class="btn btn-block btn-primary btn-md shadow-sm rounded-pill" style="font-size: medium">Booking</a>
                                            </form>
                                        @endauth
                                        
</section>

<!-- <div class="card shadow-none">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-8 offset-sm-2">
                    <div class="container">
                        @auth('hotel')
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
                                <div class="row mb-5 ">
                                    <div class="col-lg-8 d-inline-flex align-items-center mb-2">
                                        <img class="img-fluid img-thumbnail" style="max-width: 40%" src="{{asset($pekerjaan->foto ?? $pekerjaan->hotel->profile->hotelPhoto())}}">
                                        <div class="col-sm-8 align-items-center flex-column align-content-lg-start">
                                            <h3 class="font-weight-bold">{{$pekerjaan->getPosisi()}}</h3>
                                            <span class="mr-2"><i class="fas fa-hotel mr-2 grey-text"></i>{{$pekerjaan->getNama()}}</span>

                                            <span class="mr-2"><i class="fas fa-male mr-2 grey-text"></i>{{$pekerjaan->kuota}}</span>
                                            <span class="mr-2"><i class="far fa-calendar-alt mr-2 grey-text"></i>{{date('l, F jS, Y', strtotime($pekerjaan->tanggal_mulai))}}</span>


                                        </div>

                                    </div>

                                    <div class="col-sm-4 align-self-center ">
                                        @auth('hotel')
                                            <form id="apply_form" action="/job/{{$pekerjaan->url_slug}}/apply" method="post">
                                                @csrf
                                                <a href="javascript:{}" style="display: none" onclick="document.getElementById('apply_form').submit();" class="btn btn-block btn-primary btn-md rounded-pill">Apply</a>
                                            </form>
                                        @endauth
                                        @auth('user')
                                            <form id="apply_form" action="/job/{{$pekerjaan->url_slug}}/apply" method="post">
                                                @csrf
                                                <a href="javascript:{}" onclick="document.getElementById('apply_form').submit();" class="btn btn-block btn-primary btn-md shadow-sm rounded-pill" style="font-size: medium">Apply</a>
                                            </form>
                                        @endauth
                                    </div>




                                  


                                    <div class="col-lg-auto justify-content-end mb-0 mt-4">
                                        <span><h4 class="font-weight-bold mb-4"><i class="fas fa-align-left mr-3 "></i>Deskripsi Pekerjaan</h4></span>
                                        <p class="text-justify"> {!!html_entity_decode($pekerjaan->deskripsi)!!}</p>

                                        <span><h4 class="font-weight-bold mb-4 mt-4"><i class="far fa-building mr-3"></i>Area Kerja</h4></span>
                                        <p class="text-justify">{{$pekerjaan->area}}</p>



                                        @if($pekerjaan->tinggi_minimal != null || $pekerjaan->tinggi_maksimal != null || $pekerjaan->berat_minimal !=null || $pekerjaan->berat_maksimal != null)
                                            <span><h4 class="font-weight-bold mb-4 mt-4"><i class="fas fa-file-contract mr-3"></i>Kualifikasi</h4></span>
                                            <div class="row row-cols-2">
                                                @if($pekerjaan->tinggi_minimal !=null)
                                                    <div class="col">
                                                        <h5>Tinggi Badan</h5>
                                                    </div>
                                                @endif
                                                @if($pekerjaan->berat_minimal !=null)
                                                    <div class="col">
                                                        <h5>Berat Badan</h5>
                                                    </div>
                                                @endif
                                                <div class="col">
                                                    @if($pekerjaan->tinggi_minimal !=null)
                                                        <div>Minimal: {{$pekerjaan->tinggi_minimal ?? '-'}} Cm</div>
                                                    @endif
                                                    @if($pekerjaan->tinggi_maksimal != null)
                                                        <div>Maksimal: {{$pekerjaan->tinggi_maksimal ?? '-' }} Cm </div>
                                                    @endif
                                                </div>
                                                <div class="col">
                                                    @if($pekerjaan->berat_minimal !=null)
                                                        <div>Minimal: {{$pekerjaan->berat_minimal ?? '-'}} Kg</div>
                                                    @endif
                                                    @if($pekerjaan->berat_maksimal != null)
                                                        <div>Maksimal: {{$pekerjaan->berat_maksimal ?? '-' }} Kg </div>
                                                    @endif

                                                </div>
                                            </div>
                                        @endif

                                        <span><h4 class="font-weight-bold mb-4 mt-4"><i class="far fa-clock mr-3"></i>Waktu</h4></span>
                                        <div class="row row-cols-2">

                                            <div class="col">
                                                <h5>Mulai</h5>
                                            </div>


                                            <div class="col">
                                                <h5>Selesai</h5>
                                            </div>

                                            <div class="col">

                                                <div>{{date("H:m A", strtotime($pekerjaan->waktu_mulai))}}</div>

                                            </div>
                                            <div class="col">
                                                <div>{{date("H:m A", strtotime($pekerjaan->waktu_selesai))}}</div>
                                            </div>
                                        </div>


                                        <span><h4 class="font-weight-bold mb-4 mt-4"><i class="fas fa-hand-holding-usd mr-3"></i>Upah</h4></span>
                                        <p class="text-justify">{{"IDR: ".number_format($pekerjaan->bayaran)}},00</p>

                                        <span><h4 class="font-weight-bold mb-4 mt-4"><i class="fas fa-map-marker-alt mr-3"></i>Alamat</h4></span>
                                        <p class="text-justify">{{$pekerjaan->getAlamat()}}</p>



                                    </div>

                                </div>
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
                                        @foreach($pelamars as $pelamar)
                                        <tr>
                                            <th scope="row">{{$loop->index + 1}}</th>
                                            <td><a href="{{url('user/'.$pelamar->profile->url_slug)}}">{{$pelamar->profile->nama}}</a></td>
                                         @if($pelamar->pivot->status < '1' )
                                            <td><a href="{{url('/job/'.$pekerjaan->url_slug.'/accept/'.$pelamar->profile->url_slug)}}" class="btn btn-success btn-md">Terima</a></td>
                                                <td><a href="{{url('user/'.$pelamar->profile->url_slug)}}" class="btn btn-info btn-md">Kunjungi Profil</a></td>

                                         @else
                                            <td>Diterima</td>
                                          @endif
                                        </tr>
                                            @endforeach
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
                                            <th scope="col" style="width: 80%">Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                        @foreach($pelamarDiterima as $pelamarD)
                                            <tr>
                                                <th scope="row">{{$loop->index + 1}}</th>
                                                <td>{{$pelamarD->profile->nama}}</td>
                                                @if($pelamarD->pivot->status == '1')
                                                <td>
                                                    Belum Selesai
                                                </td>
                                                <td></td>
                                                <td>
                                                <a href="{{url('/job/'.$pekerjaan->url_slug.'/cancel/'.$pelamarD->profile->url_slug)}}"><i class="btn btn-danger btn-sm fa fa-times" aria-hidden="true"></i></a>
                                                </td>
                                                @elseif($pelamarD->pivot->status == '2')
                                                    <td>
                                                        Menunggu konfirmasi
                                                    </td>
                                                    <td>
                                                        <a href="{{url('/job/'.$pekerjaan->url_slug.'/confirm/'.$pelamarD->profile->url_slug)}}"><i class="btn btn-sm btn-success fa fa-check" aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="{{url('/job/'.$pekerjaan->url_slug.'/reset/'.$pelamarD->profile->url_slug)}}"><i class="btn btn-sm btn-warning fa fa-undo" aria-hidden="true"></i></a>
                                                    </td>
                                                @elseif($pelamarD->pivot->status == '3')
                                                    <td>
                                                        Menunggu konfirmasi user
                                                    </td>
                                                @elseif($pelamarD->pivot->status == '4')
                                                    <td>
                                                        Selesai
                                                    </td>
                                                @endif
                                        </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                    @endauth
                    @auth('user')
                            <div class="card-body">
                             <div class="row mb-5 ">
                                 <div class="col-lg-8 d-inline-flex align-items-center mb-2">
                                     <img class="img-fluid img-thumbnail" style="max-width: 40%" src="{{asset($pekerjaan->foto ?? $pekerjaan->hotel->profile->hotelPhoto())}}">
                                     <div class="col-sm-8 align-items-center flex-column align-content-lg-start">
                                         <h3 class="font-weight-bold">{{$pekerjaan->getPosisi()}}</h3>
                                         <span class="mr-2"><i class="fas fa-hotel mr-2 grey-text"></i>{{$pekerjaan->getNama()}}</span>

                                         <span class="mr-2"><i class="fas fa-male mr-2 grey-text"></i>{{$pekerjaan->kuota}}</span>
                                         <span class="mr-2"><i class="far fa-calendar-alt mr-2 grey-text"></i>{{date('l, F jS, Y', strtotime($pekerjaan->tanggal_mulai))}}</span>


                                     </div>

                                 </div>

                                 <div class="col-sm-4 align-self-center ">
                                     @auth('hotel')
                                         <form id="apply_form" action="/job/{{$pekerjaan->url_slug}}/apply" method="post">
                                             @csrf
                                             <a href="javascript:{}" style="display: none" onclick="document.getElementById('apply_form').submit();" class="btn btn-block btn-primary btn-md">Apply</a>
                                         </form>
                                     @endauth
                                     @auth('user')
                                            @if($pekerjaan->isApplied == true)
                                                 <a href="{{url('/job/'.$pekerjaan->url_slug.'/cancelApply/'.$user->profile->url_slug)}}"  class="btn btn-block btn-sm btn-warning">Cancel</a>
                                             @elseif($pekerjaan->isApplied == false)
                                                 <form id="apply_form" action="/job/{{$pekerjaan->url_slug}}/apply" method="post">
                                                 @csrf
                                                 <a href="javascript:{}" onclick="document.getElementById('apply_form').submit();" class="btn btn-block btn-primary btn-md shadow-sm" style="font-size: medium">Apply</a>
                                                 </form>
                                                @endif

                                         @endauth
                                 </div>




                             


                                 <div class="col-lg-auto justify-content-end mb-0 mt-4">
                                     <span><h4 class="font-weight-bold mb-4"><i class="fas fa-align-left mr-3 "></i>Deskripsi Pekerjaan</h4></span>
                                     <p class="text-justify"> {!!html_entity_decode($pekerjaan->deskripsi)!!}</p>

                                     <span><h4 class="font-weight-bold mb-4 mt-4"><i class="far fa-building mr-3"></i>Area Kerja</h4></span>
                                     <p class="text-justify">{{$pekerjaan->area}}</p>



                                     @if($pekerjaan->tinggi_minimal != null || $pekerjaan->tinggi_maksimal != null || $pekerjaan->berat_minimal !=null || $pekerjaan->berat_maksimal != null)
                                     <span><h4 class="font-weight-bold mb-4 mt-4"><i class="fas fa-file-contract mr-3"></i>Kualifikasi</h4></span>
                                     <div class="row row-cols-2">
                                         @if($pekerjaan->tinggi_minimal !=null)
                                             <div class="col">
                                                 <h5>Tinggi Badan</h5>
                                             </div>
                                         @endif
                                             @if($pekerjaan->berat_minimal !=null)
                                             <div class="col">
                                                 <h5>Berat Badan</h5>
                                             </div>
                                             @endif
                                         <div class="col">
                                             @if($pekerjaan->tinggi_minimal !=null)
                                                 <div>Minimal: {{$pekerjaan->tinggi_minimal ?? '-'}} Cm</div>
                                             @endif
                                                 @if($pekerjaan->tinggi_maksimal != null)
                                                     <div>Maksimal: {{$pekerjaan->tinggi_maksimal ?? '-' }} Cm </div>
                                                 @endif
                                         </div>
                                         <div class="col">
                                                 @if($pekerjaan->berat_minimal !=null)
                                                     <div>Minimal: {{$pekerjaan->berat_minimal ?? '-'}} Kg</div>
                                                 @endif
                                                 @if($pekerjaan->berat_maksimal != null)
                                                     <div>Maksimal: {{$pekerjaan->berat_maksimal ?? '-' }} Kg </div>
                                                 @endif

                                         </div>
                                     </div>
                                     @endif

                                     <span><h4 class="font-weight-bold mb-4 mt-4"><i class="far fa-clock mr-3"></i>Waktu</h4></span>
                                     <div class="row row-cols-2">

                                             <div class="col">
                                                 <h5>Mulai</h5>
                                             </div>


                                             <div class="col">
                                                 <h5>Selesai</h5>
                                             </div>

                                         <div class="col">

                                                 <div>{{date("H:m A", strtotime($pekerjaan->waktu_mulai))}}</div>

                                         </div>
                                         <div class="col">
                                                 <div>{{date("H:m A", strtotime($pekerjaan->waktu_selesai))}}</div>
                                         </div>
                                     </div>


                                     <span><h4 class="font-weight-bold mb-4 mt-4"><i class="fas fa-hand-holding-usd mr-3"></i>Upah</h4></span>
                                     <p class="text-justify">{{"IDR: ".number_format($pekerjaan->bayaran)}},00</p>

                                     <span><h4 class="font-weight-bold mb-4 mt-4"><i class="fas fa-map-marker-alt mr-3"></i>Alamat</h4></span>
                                     <p class="text-justify">{{$pekerjaan->getAlamat()}}</p>



                                 </div>

                             </div>
                            </div>
                    @endauth

                </div>
  
            </div>

        </div> -->

        
        </div>

    <section id="deskripsi_products" class="pb-5 mt-4">

    <div class="container">


    <hr class="mb-5">
            <h4 class="h4-responsive dark-grey-text font-weight-bold my-5 text-center">
                <strong>Deskripsi</strong>
            </h4>
          

            <p class="text-center w-responsive mx-auto mb-5 dark-grey-text justify-align-content-center">
            {!!html_entity_decode($pekerjaan->deskripsi)!!}
            </p>

            <hr class="mb-5">
            <h4 class="h4-responsive dark-grey-text font-weight-bold my-5 text-center">
                <strong>Detail Mobil</strong>
            </h4>
            <div class="card mb-5">
            <div class="card-body">

                <table class="table table-responsive-md">
                    <thead>
                        <tr>
                            <th>
                                <strong>Detail</strong>
                            </th>
                            <th>
                                <strong>Deskripsi</strong>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Nama</th>
                            <td>{{$pekerjaan->area}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Merk</th>
                            <td>{{$pekerjaan->getPosisi()}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Tahun</th>
                            <td>{{$pekerjaan->kuota}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Dimensi</th>
                            <td>{{$pekerjaan->dimensi}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Mesin</th>
                            <td>{{$pekerjaan->mesin}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Kondisi</th>
                            <td>{{$pekerjaan->kondisi}} </td>
                        </tr>
                    </tbody>
                </table>

            </div>

        </div>
        </section>
        </div>
        <div class="card shadow-none">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-8 offset-sm-2">
                    <div class="container">
                        @auth('hotel')
                        <ul id="myTab2" role="tablist" class="nav nav-tabs nav-pills with-arrow lined flex-column flex-sm-row text-center">
                            <li class="nav-item flex-sm-fill">
                                <a id="home2-tab" data-toggle="tab" href="#home2" role="tab" aria-controls="home2" aria-selected="true" class="nav-link text-uppercase font-weight-bold mr-sm-3 rounded-0 active">Deskripsi</a>
                            </li>
                            <li class="nav-item flex-sm-fill">
                                <a id="profile2-tab" data-toggle="tab" href="#profile2" role="tab" aria-controls="profile2" aria-selected="false" class="nav-link text-uppercase font-weight-bold mr-sm-3 rounded-0">Peminat</a>
                            </li>
                            <li class="nav-item flex-sm-fill">
                                <a id="contact2-tab" data-toggle="tab" href="#contact2" role="tab" aria-controls="contact2" aria-selected="false" class="nav-link text-uppercase font-weight-bold rounded-0">Deal</a>
                            </li>
                        </ul>
                        <div id="myTab2Content" class="tab-content">
                           
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
                                        @foreach($pelamars as $pelamar)
                                        <tr>
                                            <th scope="row">{{$loop->index + 1}}</th>
                                            <td><a href="{{url('user/'.$pelamar->profile->url_slug)}}">{{$pelamar->profile->nama}}</a></td>
                                         @if($pelamar->pivot->status < '1' )
                                            <td><a href="{{url('/job/'.$pekerjaan->url_slug.'/accept/'.$pelamar->profile->url_slug)}}" class="btn btn-success btn-md">Terima</a></td>
                                                <td><a href="{{url('user/'.$pelamar->profile->url_slug)}}" class="btn btn-info btn-md">Kunjungi Profil</a></td>

                                         @else
                                            <td>Diterima</td>
                                          @endif
                                        </tr>
                                            @endforeach
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
                                            <th scope="col" style="width: 80%">Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                        @foreach($pelamarDiterima as $pelamarD)
                                            <tr>
                                                <th scope="row">{{$loop->index + 1}}</th>
                                                <td>{{$pelamarD->profile->nama}}</td>
                                                @if($pelamarD->pivot->status == '1')
                                                <td>
                                                    COD 
                                                </td>
                                                <td></td>
                                                <td>
                                                <a href="{{url('/job/'.$pekerjaan->url_slug.'/cancel/'.$pelamarD->profile->url_slug)}}"><i class="btn btn-danger btn-sm fa fa-times" aria-hidden="true"></i></a>
                                                </td>
                                                @elseif($pelamarD->pivot->status == '2')
                                                    <td>
                                                        Menunggu konfirmasi
                                                    </td>
                                                    <td>
                                                        <a href="{{url('/job/'.$pekerjaan->url_slug.'/confirm/'.$pelamarD->profile->url_slug)}}"><i class="btn btn-sm btn-success fa fa-check" aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="{{url('/job/'.$pekerjaan->url_slug.'/reset/'.$pelamarD->profile->url_slug)}}"><i class="btn btn-sm btn-warning fa fa-undo" aria-hidden="true"></i></a>
                                                    </td>
                                                @elseif($pelamarD->pivot->status == '3')
                                                    <td>
                                                        Menunggu konfirmasi user
                                                    </td>
                                                @elseif($pelamarD->pivot->status == '4')
                                                    <td>
                                                        Selesai
                                                    </td>
                                                @endif
                                        </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                    @endauth

                </div>
            </div>

        </div>

    </div>

    <div class="card rounded-0 card-image view " style="background-image: url('https://images.pexels.com/photos/3593922/pexels-photo-3593922.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940'); background-position: center; background-size: cover">
                <div class="text-white text-center img-gradient-overlay py-5 px-4">
                    <div class="py-5">
                        <h5 class="h5 yellow-text"><i class="fas fa-suitcase mr-2"></i>{{$pekerjaan->getNama()}}</h5>
                        <h3 class="card-title pt-2">@<strong>  {{$pekerjaan->getSocial()}}</strong></h3>
                        <p class="mb-4 pb-2 px-md-5 mx-md-5">{{$pekerjaan->getHP()}}</p>
                    </div>

                </div>

     </div>

  
</body>
<footer class="page-footer text-center text-md-left stylish-color-dark pt-0">

        <div style="background-color: #4285f4;">
            <div class="container">
                <!--Grid row-->
                <div class="row py-4 d-flex align-items-center">

                    <!--Grid column-->
                    <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                        <h6 class="mb-0 white-text">Get connected with us on social networks!</h6>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6 col-lg-7 text-center text-md-right">
                        <!--Facebook-->
                        <a class="fb-ic ml-0 px-2">
                            <i class="fab fa-facebook-f white-text"> </i>
                        </a>
                        <!--Twitter-->
                        <a class="tw-ic px-2">
                            <i class="fab fa-twitter white-text"> </i>
                        </a>
                        <!--Google +-->
                        <a class="gplus-ic px-2">
                            <i class="fab fa-google-plus-g white-text"> </i>
                        </a>
                        <!--Linkedin-->
                        <a class="li-ic px-2">
                            <i class="fab fa-linkedin-in white-text"> </i>
                        </a>
                        <!--Instagram-->
                        <a class="ins-ic px-2">
                            <i class="fab fa-instagram white-text"> </i>
                        </a>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </div>
        </div>

        <!--Footer Links-->
        <div class="container mt-5 mb-4 text-center text-md-left">
            <div class="row mt-3">

                <!--First column-->
                <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
                    <h6 class="text-uppercase font-weight-bold">
                        <strong>Company name</strong>
                    </h6>
                    <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>Here you can use rows and columns here to organize your footer content. Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit.</p>
                </div>
                <!--/.First column-->

                <!--Second column-->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">
                        <strong>Products</strong>
                    </h6>
                    <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a href="#!">MDBootstrap</a>
                    </p>
                    <p>
                        <a href="#!">MDWordPress</a>
                    </p>
                    <p>
                        <a href="#!">BrandFlow</a>
                    </p>
                    <p>
                        <a href="#!">Bootstrap Angular</a>
                    </p>
                </div>
                <!--/.Second column-->

                <!--Third column-->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">
                        <strong>Useful links</strong>
                    </h6>
                    <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a href="#!">Your Account</a>
                    </p>
                    <p>
                        <a href="#!">Become an Affiliate</a>
                    </p>
                    <p>
                        <a href="#!">Shipping Rates</a>
                    </p>
                    <p>
                        <a href="#!">Help</a>
                    </p>
                </div>
                <!--/.Third column-->

                <!--Fourth column-->
                <div class="col-md-4 col-lg-3 col-xl-3">
                    <h6 class="text-uppercase font-weight-bold">
                        <strong>Contact</strong>
                    </h6>
                    <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
                    <p>
                        <i class="fas fa-envelope mr-3"></i> info@example.com</p>
                    <p>
                        <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                    <p>
                        <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
                </div>
                <!--/.Fourth column-->

            </div>
        </div>
        <!--/.Footer Links-->

        <!-- Copyright-->
        <div class="footer-copyright py-3 text-center">
            <div class="container-fluid">
                © 2020 Copyright: JDMid
            </div>
        </div>
        <!--/.Copyright -->

    </footer>
@endsection
