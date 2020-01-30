<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kolega Hotel</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Proxima Nova:200,600" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">
{{--    <link href="{{asset('css/app.css')}}" rel="stylesheet">--}}
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
        .navbar-inner{
            background-color: transparent;
            background:transparent;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
        .navbar.transparent.navbar-inverse .navbar-inner {
            border-width: 0px;
            -webkit-box-shadow: 0px 0px;
            box-shadow: 0px 0px;
            background-color: rgba(0,0,0,0.0);
        }

        .jumbotron{
            background:
                linear-gradient(
                    rgba(0, 0, 250, 0.25),
                    rgba(125, 250, 250, 0.45)
                ),
                url("https://images.pexels.com/photos/271639/pexels-photo-271639.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260");
            background-repeat: no-repeat;
            background-attachment: fixed;
            padding-top: 20%;
            padding-bottom: 20%;
            color:white !important;
            height:100vh;
        }
        footer {
            background-color: #000000;
            padding: 25px;
        }
        /*.span4 img {*/
        /*    margin-right: 10px;*/
        /*}*/
        /*.span4 .img-left {*/
        /*    float: left;*/
        /*}*/
        /*.span4 .img-right {*/
        /*    float: right;*/
        /*}*/
        .how-section1{
            margin-top:-15%;
            padding: 10%;
        }
        .how-section1 h4{
            color: #ffa500;
            font-weight: bold;
            font-size: 30px;
        }
        .how-section1 .subheading{
            color: #3931af;
            font-size: 20px;
        }
        .how-section1 .row
        {
            margin-top: 10%;
        }
        .how-img
        {
            text-align: center;
        }
        .how-img img{
            width: 40%;
        }

    </style>
</head>
<body>

<div class="container">
    <nav class="navbar navbar-inverse navbar-expand-lg navbar-inner">
        <a class="navbar-brand">Kolega Hotel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Tentang</a>
                </li>
            </ul>

                <ul class="nav navbar-nav navbar-right">
{{--                    @auth--}}
{{--                        <li class="nav-item dropdown">--}}
{{--                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                                @if(Auth::guard('user')->check())--}}
{{--                               Hello {{Auth::guard('user')->user()->name}} <span class="caret"></span>--}}
{{--                            @elseif(Auth::guard('hotel')->check())--}}
{{--                                Hello {{ Auth::guard('hotel')->user()->name}} <span class="caret"></span></a>--}}
{{--                            @endif--}}
{{--                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
{{--                                <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                                   onclick="event.preventDefault();--}}
{{--                    document.getElementById('logout-form').submit();">--}}
{{--                                    {{ __('Logout') }}--}}
{{--                                </a>--}}
{{--                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--                                    @csrf--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                    @endauth--}}
                    @auth('hotel')
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle nav-item active" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Akun <span class="sr-only">(current)</span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>


                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endauth
                    @auth('user')
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle nav-item active" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Akun <span class="sr-only">(current)</span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>


                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endauth

                        @guest('hotel') @guest('user')
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Masuk</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="/register/user">Part Timer</a>
                                <a class="dropdown-item" href="/register/hotel">Hotel</a>
                            </div>
                        </li>
                        @endguest @endguest



{{--                        @guest('user') @guest('hotel')--}}

{{--                        @endguest @endguest--}}
                </ul>


        </div>
    </nav>
</div>

{{--<div id="slideWelcome" class="carousel slide" data-ride="carousel">--}}
{{--    <ul class="carousel-indicators">--}}
{{--        <li data-target="#slideWelcome" data-slide-to="0" class="active"></li>--}}
{{--        <li data-target="#slideWelcome" data-slide-to="1"></li>--}}
{{--        <li data-target="#slideWelcome" data-slide-to="2"></li>--}}
{{--    </ul>--}}
{{--    <div class="carousel-inner">--}}
{{--        <div class="carousel-item active">--}}
{{--            <img src="https://images.pexels.com/photos/271639/pexels-photo-271639.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Los Angeles" width="1100" height="500">--}}
{{--            <div class="carousel-caption">--}}
{{--                <h3>Los Angeles</h3>--}}
{{--                <p>We had such a great time in LA!</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="carousel-item">--}}
{{--            <img src="https://images.pexels.com/photos/573552/pexels-photo-573552.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Chicago" width="1100" height="500">--}}
{{--            <div class="carousel-caption">--}}
{{--                <h3>Chicago</h3>--}}
{{--                <p>Thank you, Chicago!</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="carousel-item">--}}
{{--            <img src="https://images.pexels.com/photos/1134176/pexels-photo-1134176.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="New York" width="1100" height="500">--}}
{{--            <div class="carousel-caption">--}}
{{--                <h3>New York</h3>--}}
{{--                <p>We love the Big Apple!</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <a class="carousel-control-prev" href="#slideWelcome" data-slide="prev">--}}
{{--        <span class="carousel-control-prev-icon"></span>--}}
{{--    </a>--}}
{{--    <a class="carousel-control-next" href="#slideWelcome" data-slide="next">--}}
{{--        <span class="carousel-control-next-icon"></span>--}}
{{--    </a>--}}
{{--</div>--}}

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="title display-3 text-center" style="color:white; font-size:100px; text-align:center;">Job Hotel Menunggu</h1>
        <h5 style="color:white; text-align:center;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tristique turpis at elementum elementum.</h5>
        <div class ="col text-center">
            <a href="#" class="btn btn-warning">Cari Lowongan</a>
        </div>
    </div>
</div>

<div class="content">
    <div class="title m-b-md">
        Welcome
    </div>
</div>
<div class="how-section1">
    <div class="row">
        <div class="col-md-6 how-img">
            <img src="https://images.pexels.com/photos/244133/pexels-photo-244133.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="rounded-bottom rounded-top img-fluid" alt=""/>
        </div>
        <div class="col-md-6">
            <h4>Testing</h4>
            <h4 class="subheading">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dictum tellus tortor, sed eleifend tortor gravida sed. Etiam non ipsum quis ligula laoreet consectetur. Morbi aliquet nulla id metus efficitur maximus. </h4>
            <p class="text-muted">Fusce ullamcorper erat eu libero scelerisque, condimentum gravida mauris semper. Suspendisse sed pellentesque quam. Mauris fermentum sem libero, bibendum consequat lacus vulputate consequat.
                Nam a viverra arcu. Sed ac ipsum consectetur, tempus libero id, vehicula felis.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <h4>Testing</h4>
            <h4 class="subheading">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dictum tellus tortor, sed eleifend tortor gravida sed. Etiam non ipsum quis ligula laoreet consectetur. Morbi aliquet nulla id metus efficitur maximus. </h4>
            <p class="text-muted">Fusce ullamcorper erat eu libero scelerisque, condimentum gravida mauris semper. Suspendisse sed pellentesque quam. Mauris fermentum sem libero, bibendum consequat lacus vulputate consequat.
                Nam a viverra arcu. Sed ac ipsum consectetur, tempus libero id, vehicula felis.</p>
        </div>
        <div class="col-md-6 how-img">
            <img src="https://images.pexels.com/photos/2096983/pexels-photo-2096983.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="rounded-bottom rounded-top img-fluid" alt=""/>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 how-img">
            <img src="https://images.pexels.com/photos/3225531/pexels-photo-3225531.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="rounded-bottom rounded-top img-fluid" alt=""/>
        </div>
        <div class="col-md-6">
            <h4>Testing.</h4>
            <h4 class="subheading">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dictum tellus tortor, sed eleifend tortor gravida sed. Etiam non ipsum quis ligula laoreet consectetur. Morbi aliquet nulla id metus efficitur maximus. </h4>
            <p class="text-muted">Fusce ullamcorper erat eu libero scelerisque, condimentum gravida mauris semper. Suspendisse sed pellentesque quam. Mauris fermentum sem libero, bibendum consequat lacus vulputate consequat.
                Nam a viverra arcu. Sed ac ipsum consectetur, tempus libero id, vehicula felis.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <h4>Get paid on time</h4>
            <h4 class="subheading">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dictum tellus tortor, sed eleifend tortor gravida sed. Etiam non ipsum quis ligula laoreet consectetur. Morbi aliquet nulla id metus efficitur maximus. </h4>
            <p class="text-muted">Fusce ullamcorper erat eu libero scelerisque, condimentum gravida mauris semper. Suspendisse sed pellentesque quam. Mauris fermentum sem libero, bibendum consequat lacus vulputate consequat.
                Nam a viverra arcu. Sed ac ipsum consectetur, tempus libero id, vehicula felis.</p>
        </div>
        <div class="col-md-6 how-img">
            <img src="https://images.pexels.com/photos/1267320/pexels-photo-1267320.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="rounded-bottom rounded-top img-fluid" alt=""/>
        </div>
    </div>
</div>

<br/>
<br/>
<footer class="container-fluid text-center">
    <p>Footer Text</p>
</footer>
</body>
</html>
