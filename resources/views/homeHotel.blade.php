@extends('layouts.guest')


@section('content')
    <style>
        body{
            background-color: #f8f8f8;
        }
        .text {
            display: block;/* or inline-block */
            text-overflow: ellipsis;
            word-wrap: break-word;
            overflow: hidden;
            max-height: 3.6em;
            line-height: 1.8em;
        }
        .md-pills .nav-link.active {
            color: #fff;
            background-color: #616161;
        }
        button.close {
            position: absolute;
            right: 0;
            z-index: 2;
            padding-right: 1rem;
            padding-top: .6rem;
        }

        .parent {
            position: relative;
        }
        .child {
            position: absolute;
            font-family: Arial;
            display:flex;
            justify-content:center;
            align-items:center;
            position: absolute;
            right: 10px;
            top:10px;
            color: white;

        }

    </style>
    <div class="container py-5">
        <div class="row my-5">
            <div class="col-md-8">

                @foreach($pekerjaan as $pkerja)
                    <a  class="card hoverable mb-1" href="{{url("/job/$pkerja->url_slug")}}">
                        <div  class="card-body wow fadeIn">
                            {{--                    <div class="avatar w-100 white d-flex justify-content-center align-items-center">--}}
                            {{--                        <img src="{{asset($pkerja->hotel->profile->hotelPhoto())}}"  class="img-fluid z-depth-1">--}}
                            {{--                    </div>--}}
                            <div class="row">
                                <div class="col-8">
                                    <h5 class="card-title">{{$pkerja->getPosisi()}}</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">{{$pkerja->hotel->profile->nama}}</h6>
                                    <div class="card-text text">{!!html_entity_decode($pkerja->deskripsi)!!}</div>
{{--                                    <a href="{{url("/job/$pkerja->url_slug")}}" class="btn btn-md blue-gradient">Selengkapnya</a>--}}
                                    <table class="table">
                                        <thead class="black white-text">
                                        <tr>
                                            <th scope="col">Applyer</th>
                                        </tr>
                                        </thead>
                                    </table>
                                    <table class="table">
                                        <thead class="grey lighten-2">
                                        <tr>
                                            <th scope="col">Lolos</th>
                                            <th scope="col">Terdaftar</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">{{$pkerja->dikerjakan()->where('status', '1')->count()}}</th>
                                            <td>{{$pkerja->dikerjakan->count()}}</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-4 align-items-center">
                                    <div class="avatar w-100 white d-flex justify-content-center align-items-center">
                                        <img src="{{asset(!empty($pkerja->foto) ? $pkerja->foto : $hotel->profile->hotelPhoto())}}"  class="img-fluid z-depth-1">
                                    </div>
                                </div>

                            </div>


                        </div>

                    </a>
                    <br/>
                @endforeach
                    <nav aria-label="Page navigation example">
                        <ul class="pagination pagination-circle pg-blue">
                            {!! $pekerjaan->render() !!}
                        </ul>
                    </nav>

            </div>

            <div class="col-md-4">
                <div class="card">

                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col"><i class="fas fa-user mr-2 blue-text" aria-hidden="true"></i>Total Applyer</th>
                                <th scope="col"><i class="fas fa-briefcase mr-2 blue-text" aria-hidden="true"></i>Pekerjaan</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">0</th>
                                <td>{{\App\Pekerjaan::where('hotel_id', $hotel->id)->count()}}</td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="card-text">
{{--                            <a href="#!" class="card-title">Pekerjaan {{\App\Pekerjaan::where('hotel_id', $hotel->id)->count()}}</a>--}}
{{--                            <a href="#!" class="card-title">Contact Us</a>--}}
                            <a href="#!" class="card-title">© 2020 Kolega Hotel, Inc.</a>
                        </div>

                        {{--<h6 class="card-subtitle mb-2 text-muted">Contact User</h6>--}}

                        {{-- <p class="card-text">Some quick example text to build on the panel title and make up the bulk of the panel's content.</p>
                         <a href="#!" class="card-link mr-3">Card link</a>
                         <a href="#!" class="card-link ml-0">Another link</a>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="page-footer font-small light-blue">

        <div style="background-color: #043A70;">
            <div class="container">

                <!-- Grid row-->
                <ul class="list-unstyled list-inline text-center py-2">
                    <li class="list-inline-item">
                        <h5 class="mb-1">Buat lowongan pekerjaan sekarang</h5>
                    </li>
                    <li class="list-inline-item">
                        <a href="{{url('/job/postjob')}}" class="btn btn-outline-white rounded">Post it!</a>
                    </li>
                </ul>

            </div>
        </div>

        <!-- Footer Links -->
        <div class="container text-center text-md-left mt-5">

            <!-- Grid row -->
            <div class="row mt-3">

                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mb-4">

                    <!-- Content -->
                    <h6 class="text-uppercase font-weight-bold">Hotel name</h6>
                    <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <h1>{{$hotel->profile->nama}}</h1>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold">Hotel Brief</h6>
                    <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>{{$hotel->profile->deskripsi}}</p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold">Contact</h6>
                    <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <i class="fas fa-home mr-3"></i>{{$hotel->profile->alamat}}</p>
                    <p>
                        <i class="fas fa-envelope mr-3"></i>{{$hotel->email}}</p>
                    <p>
                        <i class="fas fa-phone mr-3"></i>{{$hotel->profile->nomor_telepon}}</p>
                    <p>
                        <i class="fas fa-globe mr-3"></i>{{$hotel->profile->website}}</p>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center text-black-50 py-3">© 2020 Kolega Hotel, Inc.
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->
@endsection
