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
</style>
<script>
    $( document ).ready(function() {
        new WOW().init();
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
                    <a href="/register/hotel" class="btn btn-amber">Hotel</a>
                    <a href="/register/user" class="btn btn-deep-purple">Part Timer</a>
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
                        <a class="btn btn-black wow fadeInLeftBig" href="/register/hotel"><strong>Post a Job</strong></a>
                        <a class="btn btn-outline-blue wow fadeInRightBig" href="/register/user"><strong>Cari Lowongan</strong></a>
                    </div>
                    <!--Grid column-->
                    <!--Grid column-->
                    <div class="col-md-6 col-xl-6 mt-xl-5 wow fadeInRight" data-wow-delay="0.3s">
                        <img src="{{asset('/image/login.bmp')}}" alt="foto_pekerja" class="img-fluid">
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
