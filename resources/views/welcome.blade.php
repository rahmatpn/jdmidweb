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
        background-color: white;
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
            background: #ffffff !important;

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
        background-position: 50% 50%;
        background-size: cover;


    }
    .parallax h1{
        color: rgba(255, 255, 255, 0.8);
        font-size: 60px;
        text-align: center;
        padding-top: 60px;
        line-height: 100px;
    }
    .jumbotron{margin-bottom: 0;}
    .paralsec {
        background-image: url("https://images.pexels.com/photos/453201/pexels-photo-453201.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940");
    }
    .parallaxx {
        /* The image used */
        background-image: url("https://images.pexels.com/photos/248021/pexels-photo-248021.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940");


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
    (function ($){
        $.fn.counter = function() {
            const $this = $(this),
                numberFrom = parseInt($this.attr('data-from')),
                numberTo = parseInt($this.attr('data-to')),
                delta = numberTo - numberFrom,
                deltaPositive = delta > 0 ? 1 : 0,
                time = parseInt($this.attr('data-time')),
                changeTime = 10;

            let currentNumber = numberFrom,
                value = delta*changeTime/time;
            var interval1;
            const changeNumber = () => {
                currentNumber += value;
                //checks if currentNumber reached numberTo
                (deltaPositive && currentNumber >= numberTo) || (!deltaPositive &&currentNumber<= numberTo) ? currentNumber=numberTo : currentNumber;
                this.text(parseInt(currentNumber));
                currentNumber == numberTo ? clearInterval(interval1) : currentNumber;
            }

            interval1 = setInterval(changeNumber,changeTime);
        }
    }(jQuery));

    $(document).ready(function(){

        $('.count-up').counter();
        $('.count1').counter();
        $('.count2').counter();
        $('.count3').counter();

        new WOW().init();

        setTimeout(function () {
            $('.count5').counter();
        }, 3000);
    });
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
                <img src="{{asset('/image/logo_head.png')}}" height="50" alt="logo">
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
                    <a href="{{url('/masuk/hotel')}}" class="btn btn-amber">Hotel</a>
                    <a href="{{url('/masuk/user')}}" class="btn btn-deep-purple">Part Timer</a>
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
                                    <a class="dropdown-item" href="{{url(route('logout'))}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Log Out</a>
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
                        <a class="btn btn-black wow fadeInLeftBig" href="{{url('/masuk/hotel')}}"><strong>Post a Job</strong></a>
                        <a class="btn btn-outline-blue wow fadeInRightBig" href="{{url('/masuk/user')}}"><strong>Cari Lowongan</strong></a>
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

<div class="mask rgba-blue-slight">
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

<div class="container pt-5 my-5 z-depth-1 bg-white wow fadeIn">
    <section class="p-md-3 mx-md-5">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-5 wow fadeInLeft" data-wow-delay="0.2s">
                <h4 class="font-weight-bold mb-3">
                    <i class="far fa-user indigo-text pr-2"></i> Laundry
                </h4>
                <p class="text-muted pt-3">
                    Laundry adalah bagian dari housekeeping yang bertanggung jawab atas pencucian semua linen, baik itu house laundry maupun guest laundry.
                </p>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 wow fadeInUp" data-wow-delay="0.3s">
                <h4 class="font-weight-bold mb-3">
                    <i class="fas fa-water blue-text pr-2"></i> Pool Maintenance
                </h4>
                <p class="text-muted pt-3">
                    Pool Maintenance adalah bagian yang bertugas dan bertanggung jawab menjaga kebersihan kolam renang.
                </p>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 wow fadeInRight" data-wow-delay="0.4s">
                <h4 class="font-weight-bold mb-3">
                    <i class="fas fa-tools orange-text pr-2"></i> Equipment Maintenance
                </h4>
                <p class="text-muted pt-3">
                    Staff Maintenance adalah bagian yang bertugas dan bertanggung jawab menjaga alat - alat yang ada di hotel.
                </p>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 wow fadeInLeft" data-wow-delay="0.6s">
                <h4 class="font-weight-bold mb-3">
                    <i class="fas fa-user-plus red-text pr-2"></i> Receptionist
                </h4>
                <p class="text-muted pt-3">
                    Resepsionis adalah pegawai yang memiliki tugas untuk menyapa, melayani, memberikan informasi kepada pengunjung,
                    pelanggan atau pihak yang berkepentingan terkait tujuan yang diinginkan.
                </p>

            </div>
            <div class="col-lg-4 col-md-6 mb-5 wow fadeInDown" data-wow-delay="0.8s">
                <h4 class="font-weight-bold mb-3">
                    <i class="fas fa-suitcase brown-text pr-2"></i> Porter
                </h4>
                <p class="text-muted pt-3">
                   Porter adalah orang yang membawa barang bawaan atau mengurus bagian bagasi di hotel.
                </p>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 wow fadeInRight" data-wow-delay="0.9s">
                <h4 class="font-weight-bold mb-3">
                    <i class="fas fa-user-secret black-text pr-2"></i> Security
                </h4>
                <p class="text-muted pt-3">
                    departemen keamanan (Security Departement) yang memiliki fungsi dan peran penting untuk menjaga serta memberi kenyamanan kepada setiap tamu yang ingin berkunjung ataupun menginap di hotel.
                </p>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 wow fadeInLeft" data-wow-delay="1s">
                <h4 class="font-weight-bold mb-3">
                    <i class="fas fa-user-circle orange-text pr-2"></i> Valet
                </h4>
                <p class="text-muted pt-3">
                    Yang bertugas untuk melayani pelayanan personal dan spesifik kepada tamu selama masa inap mereka.
                </p>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 wow fadeInUp" data-wow-delay="1.2s">
                <h4 class="font-weight-bold mb-3">
                    <i class="fas fa-car lime-text pr-2"></i> Concierge
                </h4>
                <p class="text-muted pt-3">
                    Yang bertugas untuk membukakan pintu mobil, pintu hotel, dan membawa pengunjung ke receptionist.
                </p>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 wow fadeInRight" data-wow-delay="1.3s">
                <h4 class="font-weight-bold mb-3">
                    <i class="fas fa-home purple-text pr-2"></i> Housekeeping
                </h4>
                <p class="text-muted pt-3">
                    Housekeeping adalah salah satu bagain  atau department yang ada di hotel yang bertugas menjaga, merawat,
                    dan membersihkan serta memelihara rooms atau kamar kamar hotel maupun area diluar kamar hotel atau area yang tergolong kedalam area umum (public areas) di hotel agar tetap nyaman,
                    indah, dan aman.
                </p>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 wow fadeInLeft" data-wow-delay="1s">
                <h4 class="font-weight-bold mb-3">
                    <i class="fas fa-utensils red-text pr-2"></i> Room Service
                </h4>
                <p class="text-muted pt-3">
                    room service adalah untuk menyajikan makanandan minuman dikamar tamu,
                    termasuk menyiapkan pesanan tamu, melayani tamu, danmelakukan clear up kamar tamu serta menyampaikan tagihan pelayanan kamar (bill).
                </p>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 wow fadeInDown" data-wow-delay="1.2s">
                <h4 class="font-weight-bold mb-3">
                    <i class="fas fa-user yellow-text pr-2"></i> Waiter/Waitress
                </h4>
                <p class="text-muted pt-3">
                   Waiter/Waitress mempunyai tugas dan tanggung jawab untuk melayani kebutuhan makanan dan minuman bagi para pelanggan hotel secara professional.
                </p>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 wow fadeInRight" data-wow-delay="1.3s">
                <h4 class="font-weight-bold mb-3">
                    <i class="fas fa-fish blue-text pr-2"></i> Crew Restaurant
                </h4>
                <p class="text-muted pt-3">
                    Mempersiapkan bahan-bahan makanan yang akan diolah.
                </p>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 wow fadeInLeft" data-wow-delay="1.3s">
                <h4 class="font-weight-bold mb-3">
                    <i class="fas fa-coffee brown-text pr-2"></i> Barista / Bartender
                </h4>
                <p class="text-muted pt-3">
                    Membuat minuman sesuai dengan order tamu dan harus sesuai denganstandard Perusahaan serta memberikan kepuasan kepada tamu semaksimal mungkin.
                </p>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 wow fadeInUp" data-wow-delay="1.4s">
                <h4 class="font-weight-bold mb-3">
                    <i class="fas fa-camera black-text pr-2"></i> Photographer
                </h4>
                <p class="text-muted pt-3">
                    Fotografer memiliki tugas untuk mengambil foto guna mengabadikan berbagai momen dalam suatu gambar.
                </p>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 wow fadeInRight" data-wow-delay="1.5s">
                <h4 class="font-weight-bold mb-3">
                    <i class="fas fa-broom pink-text pr-2"></i> Cleaning Service
                </h4>
                <p class="text-muted pt-3">
                    Cleaning Housekeeping sendiri merupakan salah satu lembaga departemen yang ada di hotel, yang bertugas menjaga, merawat, dan membersihkan serta memelihara rooms atau kamar-kamar hotel maupun area di luar kamar hotel atau area yang tergolong kedalam area umum.
                </p>
            </div>
        </div>
    </section>
</div>

<div class="mask rgba-blue-slight">
    <div data-jarallax data-speed="0.2" class="parallaxx wow fadeIn">
        <br/>
        <div class="container flex-center text-center">
            <div class="row mt-lg-5">
                <div class="col-md-12 col-xl-9 mx-auto wow fadeIn">
                    <br/>
                    <br/>
                    <br/>
                    <h1 class="display-3 font-weight-bold mb-2 wow fadeInDown" style="color: white" data-wow-delay="0.3s">Tersedia Aplikasi Android</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container" >


    <!--Section: Content-->
    <section class="dark-grey-text">

        <!-- Section heading -->
        <h2 class="text-center font-weight-bold mb-4 pb-2 wow fadeInUp">Why is it so great?</h2>
        <!-- Section description -->
        <p class="text-center lead grey-text mx-auto mb-5 wow fadeInDown">Dengan aplikasi yang sudah tersedia untuk mobile, sekarang semakin mudah untuk melakukan pekerjaan</p>

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-md-4">

                <!-- Grid row -->
                <div class="row mb-3 wow fadeInLeft">

                    <!-- Grid column -->
                    <div class="col-2">
                        <i class="fas fa-2x fa-flag-checkered orange-text"></i>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-10">
                        <h5 class="font-weight-bold mb-3">International</h5>
                        <p class="grey-text">Dapat juga diakses di luar negeri.</p>
                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

                <!-- Grid row -->
                <div class="row mb-3 wow fadeInLeft" data-wow-delay="0.2s">

                    <!-- Grid column -->
                    <div class="col-2">
                        <i class="fas fa-2x fa-flask orange-text"></i>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-10">
                        <h5 class="font-weight-bold mb-3">Efisien</h5>
                        <p class="grey-text">Dengan sekali klik bisa menjalankan apa saja</p>
                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

                <!-- Grid row -->
                <div class="row mb-md-0 mb-3 wow fadeInLeft" data-wow-delay="0.3s">

                    <!-- Grid column -->
                    <div class="col-2">
                        <i class="fas fa-2x fa-glass-martini orange-text"></i>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-10">
                        <h5 class="font-weight-bold mb-3">Simple</h5>
                        <p class="grey-text mb-md-0">Tidak perlu membuka desktop untuk membuka sistem atau website.</p>
                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 text-center wow bounceInDown">
                <img class="img-fluid" src="{{asset('/image/phone.png')}}"
                     alt="Sample image">
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4">

                <!-- Grid row -->
                <div class="row mb-3 wow fadeInRight">

                    <!-- Grid column -->
                    <div class="col-2">
                        <i class="far fa-2x fa-heart orange-text"></i>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-10">
                        <h5 class="font-weight-bold mb-3">Pas</h5>
                        <p class="grey-text">Mudah dan pas karena bisa di akses dimana saja.</p>
                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

                <!-- Grid row -->
                <div class="row mb-3 wow fadeInRight" data-wow-delay="0.2s">

                    <!-- Grid column -->
                    <div class="col-2">
                        <i class="fas fa-2x fa-bolt orange-text"></i>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-10">
                        <h5 class="font-weight-bold mb-3">Rapid</h5>
                        <p class="grey-text">Dengan tampilan dan data yang dibutuhkan sedikit, dapat memuat konten secara cepat. </p>
                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

                <!-- Grid row -->
                <div class="row wow fadeInRight"data-wow-delay="0.3s">

                    <!-- Grid column -->
                    <div class="col-2">
                        <i class="fas fa-2x fa-magic orange-text" ></i>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-10">
                        <h5 class="font-weight-bold mb-3">All in One</h5>
                        <p class="grey-text mb-0">User dapat membuat akun atau memonitoring pekerjaan dengan menggunakan satu sentuhan.</p>
                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </section>
    <!--Section: Content-->
</div>
<div class="container my-5">


    <!--Section: Content-->
    <section id="what-we-do">

        <h3 class="text-center font-weight-bold mb-5">Our Beloved Things</h3>

        <div class="row d-flex justify-content-center">

            <div class="col-md-6 col-lg-3 mb-4 text-center">
                <h4 class="h1 font-weight-normal mb-3">
                    <i class="fas fa-file-alt indigo-text"></i>
                    <span class="d-inline-block count-up" data-from="0" data-to="{{\App\Pekerjaan::all()->count()}}" data-time="2000">{{\App\Pekerjaan::all()->count()}}</span>
                </h4>
                <p class="font-weight-normal text-muted">Total Jobs</p>
            </div>

            <div class="col-md-6 col-lg-3 mb-4 text-center">
                <h4 class="h1 font-weight-normal mb-3">
                    <i class="fas fa-user indigo-text"></i>
                    <span class="d-inline-block count1" data-from="0" data-to="{{\App\User::all()->count()}}" data-time="2000">{{\App\User::all()->count()}}</span>
                </h4>
                <p class="font-weight-normal text-muted">Our User</p>
            </div>

            <div class="col-md-6 col-lg-3 mb-4 text-center">
                <h4 class="h1 font-weight-normal mb-3">
                    <i class="fas fa-home indigo-text"></i>
                    <span class="d-inline-block count2" data-from="0" data-to="{{\App\Hotel::all()->count()}}" data-time="2000">{{\App\Hotel::all()->count()}}</span>
                </h4>
                <p class="font-weight-normal text-muted">The Great Hotels</p>
            </div>


        </div>

    </section>
    <!--Section: Content-->


</div>
<div class="container my-5">
    <!--Section: Content-->
    <section>

        <h6 class="font-weight-normal text-uppercase font-small grey-text mb-4 text-center">FAQ</h6>
        <!-- Section heading -->
        <h3 class="font-weight-bold black-text mb-4 pb-2 text-center">Frequently Asked Questions</h3>
        <hr class="w-header">
        <!-- Section description -->
        <p class="lead text-muted mx-auto mt-4 pt-2 mb-5 text-center">Punya pertanyaan? Kami punya jawabannya. Jika memiliki pertanyaan lebih lanjut silahkan hubungi support centre kami.</p>

        <div class="row">
            <div class="col-md-12 col-lg-10 mx-auto mb-5">

                <!--Accordion wrapper-->
                <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

                    <!-- Accordion card -->
                    <div class="card border-top border-bottom-0 border-left border-right border-light">

                        <!-- Card header -->
                        <div class="card-header border-bottom border-light" role="tab" id="headingOne1">
                            <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
                               aria-controls="collapseOne1">
                                <h5 class="black-text font-weight-normal mb-0">
                                    Apakah sistem ini cocok untuk mencari pekerjaan sampingan? <i class="fas fa-angle-down rotate-icon"></i>
                                </h5>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
                             data-parent="#accordionEx">
                            <div class="card-body">
                                 Sangat cocok bagi yang ingin mencari pekerjaan sampingan terutama di hotel.
                            </div>
                        </div>

                    </div>
                    <!-- Accordion card -->

                    <!-- Accordion card -->
                    <div class="card border-bottom-0 border-left border-right border-light">

                        <!-- Card header -->
                        <div class="card-header border-bottom border-light" role="tab" id="headingTwo2">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2"
                               aria-expanded="false" aria-controls="collapseTwo2">
                                <h5 class="black-text font-weight-normal mb-0">
                                   Apakah terdapat pembayaran di situs ini? <i class="fas fa-angle-down rotate-icon"></i>
                                </h5>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2"
                             data-parent="#accordionEx">
                            <div class="card-body">
                                Sekarang, kami belum menentukan apakah akan ada in-payment di dalam situs ini.
                            </div>
                        </div>

                    </div>
                    <!-- Accordion card -->

                    <!-- Accordion card -->
                    <div class="card border-bottom-0 border-left border-right border-light">

                        <!-- Card header -->
                        <div class="card-header border-bottom border-light" role="tab" id="headingThree3">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3"
                               aria-expanded="false" aria-controls="collapseThree3">
                                <h5 class="black-text font-weight-normal mb-0">
                                   Apakah saya dapat menghapus akun saya? <i class="fas fa-angle-down rotate-icon"></i>
                                </h5>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3"
                             data-parent="#accordionEx">
                            <div class="card-body">
                                Jika ingin menghapus akun anda, silahkan hubungi support centre untuk penanganan lebih lanjut.
                            </div>
                        </div>

                    </div>
                    <!-- Accordion card -->

                    <!-- Accordion card -->
                    <div class="card border-left border-right border-light">

                        <!-- Card header -->
                        <div class="card-header border-bottom border-light" role="tab" id="headingThree4">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree4"
                               aria-expanded="false" aria-controls="collapseThree4">
                                <h5 class="black-text font-weight-normal mb-0">
                                   Apakah saya dapat memanage akun hotel saya sendiri? <i class="fas fa-angle-down rotate-icon"></i>
                                </h5>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapseThree4" class="collapse" role="tabpanel" aria-labelledby="headingThree4" data-parent="#accordionEx">
                            <div class="card-body">
                               Bisa, bagi anda yang memiliki wewenang untuk mengatur dari pihak hotel yang bersangkutan.
                            </div>
                        </div>

                    </div>
                    <!-- Accordion card -->

                </div>
                <!-- Accordion wrapper -->

            </div>
        </div>

    </section>


</div>
{{--<main>--}}
{{--    <div class="container">--}}
{{--        <!--Grid row-->--}}
{{--        <div class="row py-5">--}}

{{--            <!--Grid column-->--}}
{{--            <div class="col-md-12 text-center">--}}
{{--                <p>giat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>--}}
{{--            </div>--}}
{{--            <!--Grid column-->--}}
{{--        </div>--}}
{{--        <!--Grid row-->--}}
{{--    </div>--}}
{{--</main>--}}
<!--Main Layout-->
<!-- Footer -->
<footer class="bg-white">
    <div class="container py-5">
        <div class="row py-4">
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0"><img src="{{asset('/image/logo2.png')}}" alt="" width="180" class="mb-3">
                <p class="font-italic text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
            </div>
            <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                <h6 class="text-uppercase font-weight-bold mb-4">Hotel</h6>
                <ul class="list-unstyled mb-0">
                    <li class="mb-2"><a href="{{url('/home')}}" class="text-muted">Home</a></li>
                    <li class="mb-2"><a href="#" class="text-muted">Profil</a></li>
                    <li class="mb-2"><a href="#" class="text-muted">Job</a></li>

                </ul>
            </div>
            <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                <h6 class="text-uppercase font-weight-bold mb-4">Part-Timer</h6>
                <ul class="list-unstyled mb-0">
                    <li class="mb-2"><a href="{{url('/home')}}" class="text-muted">Home</a></li>
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


</body>
</html>
