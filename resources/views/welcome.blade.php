<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JDM.id</title>
    <link rel="icon" href="{{asset('/image/jdmid_logo.png')}}">
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
            height: 900px;
        }
    }
    @media (min-width: 800px) and (max-width: 850px) {
        html,
        body,
        header,
        .view {
            height: 500px;
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
        padding-left: 80px;
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

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{asset('/image/jdmid_logo.png')}}" height="50" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="dark-blue-text"><i
                         class="fas fa-bars fa-1x"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
                <ul class="navbar-nav mr-auto">
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @guest('hotel') @guest('user')
                    <a href="{{url('/masuk/seller')}}" class="btn btn-amber shadow-none rounded-pill">Jual</a>
                    <a href="{{url('/masuk/user')}}" class="btn btn-deep-purple shadow-none rounded-pill">Beli</a>
                    @endguest @endguest
                                    @auth('hotel')
                             <li class="nav-item">
                           <a class="nav-link" href="{{url('/home/')}}">
                               <i class="fa fa-home"></i>
                               Catalogue
                               <span class="sr-only">(current)</span>
                           </a>
                       </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false">
                                    <img src="{{asset(\Illuminate\Support\Facades\Auth::guard('hotel')->user()->profile->foto)}}" class="rounded-circle z-depth-0"
                                         alt="avatar image" height="3">
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
                         <li class="nav-item">
                           <a class="nav-link" href="{{url('/wishlist')}}">
                               <i class="fa fa-heart"></i>
                               Wishlist
                               <span class="sr-only">(current)</span>
                           </a>
                       </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{url('/home/')}}">
                               <i class="fa fa-home"></i>
                               Catalogue
                               <span class="sr-only">(current)</span>
                           </a>
                       </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false">
                                    <img src="{{asset(\Illuminate\Support\Facades\Auth::guard('user')->user()->profile->foto)}}" class="rounded-circle z-depth-0"
                                         alt="avatar image" height="35">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-default"
                                     aria-labelledby="navbarDropdownMenuLink-333">

                                    <a class="dropdown-item" href="{{url('/user/'.\Illuminate\Support\Str::slug(auth()->guard('user')->user()->name))}}">Profil</a>
                                    <a class="dropdown-item" href="{{url(route('logout'))}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Log Out</a>
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
                    <div class="col-md-6 black-text text-center text-md-left mt-xl-5 mb-5 justify-content-around" data-wow-delay="0.3s">
                        <h5 class="mb-3 font-weight-bold wow fadeInDownBig">Tersedia <span style="color: orangered">{{\App\Pekerjaan::all()->count()}}</span> Jumlah Mobil</h5>
                        <h1 class="h1-responsive font-weight-bold mt-sm-5 wow bounceIn">JDM.id</h1>
                        <hr class="hr-dark wow bounceInDown">
                        <h6 class="mb-3 wow fadeInDownBig">Kami adalah pintu utama bagi anda yang ingin membeli mobil pabrikan Jepang</h6>
                        @guest('hotel') @guest('user')
                        <a class="btn btn-black  wow fadeInLeftBig rounded-pill" href="{{url('/masuk/seller')}}"><strong>Jual</strong></a>
                            <a class="btn btn-outline-blue wow fadeInRightBig rounded-pill" href="{{url('/masuk/user')}}"><strong>Cari Mobil</strong></a>
                        @endguest @endguest
                        @auth('hotel')
                            <a class="btn btn-black wow fadeInLeftBig" href="{{url('/job/postjob')}}"><strong>Post a Car</strong></a>
                        @endauth
                        @auth('user')
                            <a class="btn btn-outline-blue wow fadeInRightBig" href="{{url('/home')}}"><strong>Cari Mobil</strong></a>
                        @endauth
                    </div>
                    <!--Grid column-->
                    <!--Grid column-->
                    <div class="col-md-6 col-xl-6 mt-xl-5 wow fadeInRight" data-wow-delay="0.3s">
                        <img src="{{asset('/image/cover_nissan.webp')}}" alt="foto_pekerja" class="img-fluid">
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

<!-- Main navigation -->
<!--Main Layout-->
<!-- Services section -->
   <div class="container mt-5">


  <!--Section: Content-->
  <section class="">

  	<!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-lg-5 col-md-12 mb-lg-0 mb-4">

				<!-- Featured image -->
        <div class="view overlay rounded  mb-lg-0 mb-4">
          <img class="img-fluid wow fadeInLeft" src="{{asset('/image/rx7.webp')}}" alt="Sample image">
          <a>
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-lg-7 col-md-6 mb-md-0 mb-4 mt-xl-4">

      	 <h3 class="font-weight-normal mb-4">Apa itu JDM.id?</h3>
         <p class="text-muted">Sebuah layanan e-commerce yang ditujukan untuk menyediakan produk berupa mobil buatan Jepang, baik baru masupun second. JDM.id sarana pendukung seorang JDM car-enthusiast mencari mobil domestik Jepang yang diproduksi pabrikan Jepang ataupun pabrikan Amerika.</p>


      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </section>
  <!--Section: Content-->


</div>

<!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="1"></li>
    <li data-target="#carousel-example-2" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <div class="view">
        <img class="d-block w-100" src="https://c4.wallpaperflare.com/wallpaper/324/828/920/toyota-sprinter-trueno-ae86-gt-apex-toyota-jdm-japanese-cars-sports-car-hd-wallpaper-preview.jpg"
          alt="First slide">
        <div class="mask rgba-black-light"></div>
      </div>

    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="https://wallpapercave.com/wp/wp3082128.jpg"
          alt="Second slide">
        <div class="mask rgba-black-light"></div>
      </div>

    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="https://wallpapercave.com/wp/yc4MME0.jpg"
          alt="Third slide">
        <div class="mask rgba-black-light"></div>
      </div>

    </div>
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->

<div class="container my-5  bg-white wow fadeIn">

  <!-- Section: Block Content -->
  <section class="dark-grey-text">
<!-- Grid row -->
<h3 class="text-center font-weight-bold mb-4 pb-2">Our Best Projects</h3>

<!-- Grid row -->
<div class="row">

  <!-- Grid column -->
  <div class="col-lg-7">

    <ul class="list-unstyled fa-ul mb-lg-0 mb-5">
      <li class="d-flex justify-content-center pl-4">
        <span class="fa-li"><i class="far fa-chart-bar fa-2x indigo-text"></i></span>
        <div>
          <h5 class="font-weight-bold mb-3">Kualitas Terbaik</h5>
          <p class="text-muted">Mobil kami selalu dalam kondisi terbaik dan penilaian setiap mobil berada pada tangan yang tepat sehingga hampir selalu akurat.</p>
        </div>
      </li>
      <li class="d-flex justify-content-center pl-4">
        <span class="fa-li"><i class="fas fa-music fa-2x pink-text"></i></span>
        <div>
          <h5 class="font-weight-bold mb-3">Pelayanan 24/7</h5>
          <p class="text-muted">Pelayanan yang akan selalu tersedia kapanpun anda mau! Namun tidak hanya kuantitas, kami juga menawarkan kualitas.</p>
        </div>
      </li>
      <li class="d-flex justify-content-center pl-4">
        <span class="fa-li"><i class="far fa-grin fa-2x blue-text"></i></span>
        <div>
          <h5 class="font-weight-bold mb-3">Surat Kendaraan Lengkap</h5>
          <p class="text-muted mb-0">Surat kendaraan selalu lengkap dan telah diverifikasi oleh pihak yang terjamin.</p>
        </div>
      </li>
    </ul>

  </div>
   <div class="col-lg-5">

      <img src="https://mdbootstrap.com/img/Photos/Others/images/82.jpg" class="img-fluid rounded z-depth-1" alt="Sample project image">

    </div>
    <!-- Grid column -->

<hr class="my-5">

</section>
<!-- Section: Block Content -->
</div>

<div class="container" >


<div class="container my-5">


    <!--Section: Content-->
    <section id="what-we-do">

        <h3 class="text-center font-weight-bold mb-5 section-title">Our Beloved Things</h3>

        <div class="row d-flex justify-content-center">

            <div class="col-md-6 col-lg-3 mb-4 text-center">
                <h4 class="h1 font-weight-normal mb-3">
                    <i class="fas fa-cars indigo-text"></i>
                    <span class="d-inline-block count-up" data-from="0" data-to="{{\App\Pekerjaan::all()->count()}}" data-time="2000">{{\App\Pekerjaan::all()->count()}}</span>
                </h4>
                <p class="font-weight-normal text-muted">Total Cars</p>
            </div>

            <div class="col-md-6 col-lg-3 mb-4 text-center">
                <h4 class="h1 font-weight-normal mb-3">
                    <i class="fas fa-user indigo-text"></i>
                    <span class="d-inline-block count1" data-from="0" data-to="{{\App\User::all()->count()}}" data-time="2000">{{\App\User::all()->count()}}</span>
                </h4>
                <p class="font-weight-normal text-muted">Buyer</p>
            </div>

            <div class="col-md-6 col-lg-3 mb-4 text-center">
                <h4 class="h1 font-weight-normal mb-3">
                    <i class="fas fa-home indigo-text"></i>
                    <span class="d-inline-block count2" data-from="0" data-to="{{\App\Hotel::all()->count()}}" data-time="2000">{{\App\Hotel::all()->count()}}</span>
                </h4>
                <p class="font-weight-normal text-muted">Seller</p>
            </div>


        </div>

    </section>
    <!--Section: Content-->


</div>
<div class="container my-5">
    <!--Section: Content-->
    <section id="faq">
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
                                    Apakah sistem ini cocok untuk mencari Mobil Pabrikan Jepang? <i class="fas fa-angle-down rotate-icon"></i>
                                </h5>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
                             data-parent="#accordionEx">
                            <div class="card-body">
                                 Sangat cocok bagi yang ingin mencari Mobil Pabrikan Jepang.
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
                                   Apakah saya dapat membooking mobil pesanan saya? <i class="fas fa-angle-down rotate-icon"></i>
                                </h5>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3"
                             data-parent="#accordionEx">
                            <div class="card-body">
                                Bisa jika anda sudah memilih.
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
                                   Apakah saya dapat memanage akun penjual saya sendiri? <i class="fas fa-angle-down rotate-icon"></i>
                                </h5>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapseThree4" class="collapse" role="tabpanel" aria-labelledby="headingThree4" data-parent="#accordionEx">
                            <div class="card-body">
                               Bisa, bagi anda yang memiliki wewenang untuk mengatur.
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
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0"><img src="{{asset('/image/jdmid_logo.png')}}" alt="" width="180" class="mb-3">
                <p class="font-italic text-muted">Raih kesempatanmu untuk mendapatkan mobil impian mu.</p>
            </div>
            <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
               <h6 class="text-uppercase font-weight-bold">Contact us</h6>
                    <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <i class="fas fa-home mr-3"></i>Lorem Ipsum</p>
                    <p>
                        <i class="fas fa-envelope mr-3"></i>info@jdmid.com</p>
                    <p>
                        <i class="fas fa-phone mr-3"></i>123125346</p>
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
            <p class="text-muted mb-0 py-2">© 2020 JDM.id All rights reserved.</p>
        </div>
    </div>
</footer>
<!-- End -->


</body>
</html>
