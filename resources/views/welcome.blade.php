<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kolega Hotel</title>
    <link rel="icon" href="/image/logo2.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <script src="{{ asset('js/mdb.js') }}"></script>

</head>
<style>
    /* Required for full background image */

    html,
    body,
    header,
    .view {
        height: 100%;
        color: #000000;
    }

    @media (max-width: 740px) {
        html,
        body,
        header,
        .view {
            height: 1000px;
        }
    }
    @media (min-width: 800px) and (max-width: 850px) {
        html,
        body,
        header,
        .view {
            height: 600px;
        }
    }

    .btn .fa {
        margin-left: 3px;
    }

    .top-nav-collapse {
        background-color: #FFFFFF !important;
    }

    .navbar:not(.top-nav-collapse) {
        background: transparent !important;
        box-shadow: none;
    }

    @media (max-width: 991px) {
        .navbar:not(.top-nav-collapse) {
            background: #fffdfd !important;
        }
    }

    .btn-white {
        color: black !important;
    }

    h6 {
        line-height: 1.7;
    }

    section{
        padding: 60px 0;
    }
    section .section-title{
        text-align:center;
        color:#17C0EB;
        margin-bottom:50px;
        text-transform:uppercase;
    }
    #what-we-do{
        background:#ffffff;
    }
    #what-we-do .card{
        padding: 1rem!important;
        border: none;
        margin-bottom:2rem;
        -webkit-transition: .5s all ease;
        -moz-transition: .5s all ease;
        transition: .5s all ease;
    }
    #what-we-do .card:hover{
        -webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
        -moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
        box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
    }
    #what-we-do .card .card-block{
        padding-left: 50px;
        position: relative;
    }
    #what-we-do .card .card-block a{
        color: #17C0EB !important;
        font-weight:700;
        text-decoration:none;
    }
    #what-we-do .card .card-block a i{
        display:none;

    }
    #what-we-do .card:hover .card-block a i{
        display:inline-block;
        font-weight:700;

    }
    #what-we-do .card .card-block:before{
        font-family: FontAwesome;
        position: absolute;
        font-size: 39px;
        color: #17C0EB;
        left: 0;
        -webkit-transition: -webkit-transform .2s ease-in-out;
        transition:transform .2s ease-in-out;
    }
    #what-we-do .card .block-1:before{
        content: "\f0e7";
    }
    #what-we-do .card .block-2:before{
        content: "\f2c2";
    }
    #what-we-do .card .block-3:before{
        content: "\f00c";
    }
    #what-we-do .card:hover .card-block:before{
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
        -webkit-transition: .5s all ease;
        -moz-transition: .5s all ease;
        transition: .5s all ease;
    }
    #button-addon1 {
        color: #ffc371;
    }

    i {
        color: #ffc371;
    }

    .form-control::placeholder {
        font-size: 0.95rem;
        color: #aaa;
        font-style: italic;
    }

    .form-control.shadow-0:focus {
        box-shadow: none;
    }
    .parallax {
        /* The image used */
        background-image: url("https://images.pexels.com/photos/453201/pexels-photo-453201.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940");


        /* Set a specific height */
        min-height: 500px;

        /* Create the parallax scrolling effect */
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;


    }

</style>
<script>
    $( document ).ready(function() {
        new WOW().init();
    });
    // object-fit polyfill run
    objectFitImages();

    /* init Jarallax */
    parallax(document.querySelectorAll('.parallax'));

    parallax(document.querySelectorAll('.parallax-keep-img'), {
        keepImg: true,
    });
</script>
<body>
<!-- Main navigation -->
<header>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="/image/logo_head.png" height="50" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profile</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @guest('hotel') @guest('user')
                    <a href="/masuk/hotel" class="btn btn-amber">Hotel</a>
                    <a href="/masuk/user" class="btn btn-deep-purple">Part Timer</a>
                    @endguest @endguest
                                    @auth('hotel')
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false">
                                    <img src="{{asset(\Illuminate\Support\Facades\Auth::guard('hotel')->user()->profile->foto)}}" class="rounded-circle z-depth-0"
                                         alt="avatar image" height="35">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-default"
                                     aria-labelledby="navbarDropdownMenuLink-333">
                                    <a class="dropdown-item" href="{{url('/hotel/'.\Illuminate\Support\Str::slug(auth()->guard('hotel')->user()->name))}}">Profil</a>
                                    <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Log Out</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                                        @endauth
                                    @auth('user')
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false">
                                    <img src="{{asset(\Illuminate\Support\Facades\Auth::guard('user')->user()->profile->foto)}}" class="rounded-circle z-depth-0"
                                         alt="avatar image" height="35">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-default"
                                     aria-labelledby="navbarDropdownMenuLink-333">
                                    <a class="dropdown-item" href="#">Profil</a>
                                    <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Log Out</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                                    @endauth

                                </ul>
            </div>
        </div>
    </nav>
    <!-- Full Page Intro -->
    <div class="view" style="background: #ffffff">
        <!-- Mask & flexbox options-->
        <div class="mask  d-flex justify-content-center align-items-center">
            <!-- Content -->
            <div class="container">
                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-md-6 black-text text-center text-md-left mt-xl-5 mb-5" data-wow-delay="0.3s">
                        <h5 class="mb-3 font-weight-bold wow fadeInDownBig">Tersedia <span style="color: orangered">{{\App\Pekerjaan::all()->count()}} </span>Lowongan sampingan untuk anda
                        </h5>
                        <h1 class="h1-responsive font-weight-bold mt-sm-5 wow bounceIn">Kolega Hotel </h1>
                        <hr class="hr-dark wow bounceInDown">
                        <h6 class="mb-4 wow fadeInDownBig">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor malesuada metus. Ut pellentesque,
                            purus non mollis sodales, arcu massa ornare sem, nec blandit ante lorem in sapien. Quisque tincidunt urna tortor, sed dignissim leo tristique non.
                            Nunc facilisis scelerisque massa et lacinia.</h6>
                        <a class="btn btn-black wow fadeInLeftBig" href="/masuk/hotel"><strong>Post a Job</strong></a>
                        <a class="btn btn-outline-blue wow fadeInRightBig" href="/masuk/user"><strong>Cari Lowongan</strong></a>
                    </div>
                    <!--Grid column-->
                    <!--Grid column-->
                    <div class="col-md-6 col-xl-6 mt-xl-5 wow fadeInRight" data-wow-delay="0.3s">
                        <img src="{{asset('/image/login.jpg')}}" alt="foto_pekerja" class="img-fluid">
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </div>
            <!-- Content -->
        </div>
        <!-- Mask & flexbox options-->
    </div>
    <!-- Full Page Intro -->
</header>
<!-- Main navigation -->
<!--Main Layout-->
<!-- Services section -->
<section id="what-we-do">
    <div class="container-fluid">
        <h2 class="section-title mb-2 h1">What you can do</h2>
        <p class="text-center text-muted h5">Cari Kerja anda, atur lowongan anda, bangun karir anda dengan satu sistem.</p>
        <div class="row mt-5">
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 wow fadeInLeft">
                <div class="card">
                    <div class="card-block block-1">
                        <h3 class="card-title">Permudah Cari Pekerjaan</h3>
                        <p class="card-text">Anda dapat mencari pekerjaan sesuai kemampuan anda.</p>

                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 wow fadeInUp">
                <div class="card">
                    <div class="card-block block-2">
                        <h3 class="card-title">Managing Job</h3>
                        <p class="card-text">Hotel dapat mengatur dan membuat lowongan pekerjaan dengan mudah.</p>

                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 wow fadeInRight">
                <div class="card">
                    <div class="card-block block-3">
                        <h3 class="card-title">Building Career</h3>
                        <p class="card-text">Dengan sistem ini anda dapat membangun jenjang karir anda.</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="mask rgba-blue-slightb">
<div data-jarallax data-speed="0.2" class="parallax wow fadeIn">
    <br/>
        <div class="container flex-center text-center">
            <div class="row mt-lg-5">
                <div class="col-md-12 col-xl-9 mx-auto wow fadeIn">
                    <br/>
                    <br/>
                    <br/>
                    <h1 class="display-3 font-weight-bold mb-2 wow fadeInDown" style="color: white" data-wow-delay="0.3s">Tersedia Berbagai Jenis Posisi</h1>
                </div>
            </div>
        </div>
</div>
</div>

<div class="container pt-5 my-5 z-depth-1 bg-white wow fadeInUpBig">
    <section class="p-md-3 mx-md-5">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-5">
                <h4 class="font-weight-bold mb-3">
                    <i class="far fa-paper-plane indigo-text pr-2"></i> Laundry
                </h4>
                <p class="text-muted pt-3">
                    Laundry adalah bagian dari housekeeping yang bertanggung jawab atas pencucian semua linen, baik itu house laundry maupun guest laundry.
                </p>
            </div>
            <div class="col-lg-4 col-md-6 mb-5">
                <h4 class="font-weight-bold mb-3">
                    <i class="fas fa-pen-alt green-text pr-2"></i> Pool Maintenance
                </h4>
                <p class="text-muted pt-3">
                    Pool Maintenance adalah bagian yang bertugas dan bertanggung jawab menjaga kebersihan kolam renang.
                </p>
            </div>
            <div class="col-lg-4 col-md-6 mb-5">
                <h4 class="font-weight-bold mb-3">
                    <i class="fas fa-user amber-text pr-2"></i> Equipment Maintenance
                </h4>
                <p class="text-muted pt-3">
                    Staff Maintenance adalah bagian yang bertugas dan bertanggung jawab menjaga alat - alat yang ada di hotel.
                </p>
            </div>
            <div class="col-lg-4 col-md-6 mb-5">
                <h4 class="font-weight-bold mb-3">
                    <i class="fas fa-rocket red-text pr-2"></i> Receptionist
                </h4>
                <p class="text-muted pt-3">
                    Resepsionis adalah pegawai yang memiliki tugas untuk menyapa, melayani, memberikan informasi kepada pengunjung,
                    pelanggan atau pihak yang berkepentingan terkait tujuan yang diinginkan.
                </p>

            </div>
            <div class="col-lg-4 col-md-6 mb-5">
                <h4 class="font-weight-bold mb-3">
                    <i class="fas fa-home lime-text pr-2"></i> Porter
                </h4>
                <p class="text-muted pt-3">
                   adalah orang yang membawa barang bawaan atau mengurus bagian bagasi di hotel.
                </p>
            </div>
            <div class="col-lg-4 col-md-6 mb-5">
                <h4 class="font-weight-bold mb-3">
                    <i class="fas fa-book-open blue-text pr-2"></i> Security
                </h4>
                <p class="text-muted pt-3">
                    departemen keamanan (Security Departement) yang memiliki fungsi dan peran penting untuk menjaga serta memberi kenyamanan kepada setiap tamu yang ingin berkunjung ataupun menginap di hotel.
                </p>
            </div>
            <div class="col-lg-4 col-md-6 mb-5">
                <h4 class="font-weight-bold mb-3">
                    <i class="fas fa-rocket red-text pr-2"></i> Valet
                </h4>
                <p class="text-muted pt-3">
                    Yang bertugas untuk melayani pelayanan personal dan spesifik kepada tamu selama masa inap mereka.
                </p>
            </div>
            <div class="col-lg-4 col-md-6 mb-5">
                <h4 class="font-weight-bold mb-3">
                    <i class="fas fa-home lime-text pr-2"></i> Concierge
                </h4>
                <p class="text-muted pt-3">
                    Yang bertugas untuk membukakan pintu mobil, pintu hotel, dan membawa pengunjung ke receptionist.
                </p>
            </div>
            <div class="col-lg-4 col-md-6 mb-5">
                <h4 class="font-weight-bold mb-3">
                    <i class="fas fa-book-open blue-text pr-2"></i> Housekeeping
                </h4>
                <p class="text-muted pt-3">
                    Housekeeping adalah salah satu bagain  atau department yang ada di hotel yang bertugas menjaga, merawat,
                    dan membersihkan serta memelihara rooms atau kamar kamar hotel maupun area diluar kamar hotel atau area yang tergolong kedalam area umum (public areas) di hotel agar tetap nyaman,
                    indah, dan aman.
                </p>
            </div>
            <div class="col-lg-4 col-md-6 mb-5">
                <h4 class="font-weight-bold mb-3">
                    <i class="fas fa-rocket red-text pr-2"></i> Room Service
                </h4>
                <p class="text-muted pt-3">
                    room service adalah untuk menyajikan makanandan minuman dikamar tamu,
                    termasuk menyiapkan pesanan tamu, melayani tamu, danmelakukan clear up kamar tamu serta menyampaikan tagihan pelayanan kamar (bill).
                </p>
            </div>
            <div class="col-lg-4 col-md-6 mb-5">
                <h4 class="font-weight-bold mb-3">
                    <i class="fas fa-home lime-text pr-2"></i> Waiter/Waitress
                </h4>
                <p class="text-muted pt-3">
                   Waiter/Waitress mempunyai tugas dan tanggung jawab untuk melayani kebutuhan makanan dan minuman bagi para pelanggan hotel secara professional.
                </p>
            </div>
            <div class="col-lg-4 col-md-6 mb-5">
                <h4 class="font-weight-bold mb-3">
                    <i class="fas fa-book-open blue-text pr-2"></i> Crew Restaurant
                </h4>
                <p class="text-muted pt-3">
                    Mempersiapkan bahan-bahan makanan yang akan diolah.
                </p>
            </div>
            <div class="col-lg-4 col-md-6 mb-5">
                <h4 class="font-weight-bold mb-3">
                    <i class="fas fa-rocket red-text pr-2"></i> Barista / Bartender
                </h4>
                <p class="text-muted pt-3">
                    Membuat minuman sesuai dengan order tamu dan harus sesuai denganstandard Perusahaan serta memberikan kepuasan kepada tamu semaksimal mungkin.
                </p>
            </div>
            <div class="col-lg-4 col-md-6 mb-5">
                <h4 class="font-weight-bold mb-3">
                    <i class="fas fa-home lime-text pr-2"></i> Photographer
                </h4>
                <p class="text-muted pt-3">
                    Fotografer memiliki tugas untuk mengambil foto guna mengabadikan berbagai momen dalam suatu gambar.
                </p>
            </div>
            <div class="col-lg-4 col-md-6 mb-5">
                <h4 class="font-weight-bold mb-3">
                    <i class="fas fa-book-open blue-text pr-2"></i> Cleaning Service
                </h4>
                <p class="text-muted pt-3">
                    Cleaning Housekeeping sendiri merupakan salah satu lembaga departemen yang ada di hotel, yang bertugas menjaga, merawat, dan membersihkan serta memelihara rooms atau kamar-kamar hotel maupun area di luar kamar hotel atau area yang tergolong kedalam area umum.
                </p>
            </div>
        </div>
    </section>
</div>
<main>
    <div class="container">
        <!--Grid row-->
        <div class="row py-5">

            <!--Grid column-->
            <div class="col-md-12 text-center">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->
    </div>
</main>
<!--Main Layout-->
<!-- Footer -->
<footer class="bg-white">
    <div class="container py-5">
        <div class="row py-4">
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0"><img src="image/logo2.png" alt="" width="180" class="mb-3">
                <p class="font-italic text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                <ul class="list-inline mt-4">
                    <li class="list-inline-item"><a href="#" target="" title="twitter"><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#" target="_blank" title="facebook"><i class="fa fa-facebook"></i></a></li>
                    <li class="list-inline-item"><a href="#" target="_blank" title="instagram"><i class="fa fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="#" target="_blank" title="pinterest"><i class="fa fa-pinterest"></i></a></li>
                    <li class="list-inline-item"><a href="#" target="_blank" title="vimeo"><i class="fa fa-vimeo"></i></a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                <h6 class="text-uppercase font-weight-bold mb-4">Hotel</h6>
                <ul class="list-unstyled mb-0">
                    <li class="mb-2"><a href="#" class="text-muted">Home</a></li>
                    <li class="mb-2"><a href="#" class="text-muted">Profil</a></li>
                    <li class="mb-2"><a href="#" class="text-muted">Job</a></li>

                </ul>
            </div>
            <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                <h6 class="text-uppercase font-weight-bold mb-4">Part-Timer</h6>
                <ul class="list-unstyled mb-0">
                    <li class="mb-2"><a href="#" class="text-muted">Home</a></li>
                    <li class="mb-2"><a href="#" class="text-muted">Profil</a></li>
                    <li class="mb-2"><a href="#" class="text-muted">Job</a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-6 mb-lg-0">
                <h6 class="text-uppercase font-weight-bold mb-4">Notification</h6>
                <p class="text-muted mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At itaque temporibus.</p>
                <div class="p-1 rounded border">
                    <div class="input-group">
                        <input type="email" placeholder="Enter your email address" aria-describedby="button-addon1" class="form-control border-0 shadow-0">
                        <div class="input-group-append">
                            <button id="button-addon1" type="submit" class="btn btn-link"><i class="fa fa-paper-plane"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Copyrights -->
    <div class="bg-light py-4">
        <div class="container text-center">
            <p class="text-muted mb-0 py-2">© 2020 Kolega Hotel All rights reserved.</p>
        </div>
    </div>
</footer>
<!-- End -->

{{--<div class="container">--}}
{{--    <nav class="navbar navbar-inverse navbar-expand-lg navbar-inner">--}}
{{--        <a class="navbar-brand">Kolega Hotel</a>--}}
{{--        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--            <span class="navbar-toggler-icon"></span>--}}
{{--        </button>--}}
{{--        <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--            <ul class="navbar-nav mr-auto">--}}
{{--                <li class="nav-item active">--}}
{{--                    <a class="nav-link" href="#">Home</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="#">Tentang</a>--}}
{{--                </li>--}}
{{--            </ul>--}}

{{--                <ul class="nav navbar-nav navbar-right">--}}
{{--                    @auth('hotel')--}}
{{--                        <li class="nav-item dropdown">--}}
{{--                            <a id="navbarDropdown" class="nav-link dropdown-toggle nav-item active" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                                Akun <span class="sr-only">(current)</span>--}}
{{--                            </a>--}}

{{--                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
{{--                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">--}}
{{--                                    {{ __('Logout') }}--}}
{{--                                </a>--}}


{{--                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--                                    @csrf--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        @endauth--}}
{{--                    @auth('user')--}}
{{--                        <li class="nav-item dropdown">--}}
{{--                            <a id="navbarDropdown" class="nav-link dropdown-toggle nav-item active" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                                Akun <span class="sr-only">(current)</span>--}}
{{--                            </a>--}}

{{--                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
{{--                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">--}}
{{--                                    {{ __('Logout') }}--}}
{{--                                </a>--}}


{{--                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--                                    @csrf--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                    @endauth--}}

{{--                        @guest('hotel') @guest('user')--}}
{{--                        <li class="nav-item dropdown">--}}
{{--                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Masuk</a>--}}
{{--                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">--}}
{{--                                <a class="dropdown-item" href="/register/user">Part Timer</a>--}}
{{--                                <a class="dropdown-item" href="/register/hotel">Hotel</a>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        @endguest @endguest--}}

{{--                </ul>--}}


{{--        </div>--}}
{{--    </nav>--}}
{{--</div>--}}


</body>
</html>
