<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="icon" href="{{asset('/image/jdmid_logo.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="{{ asset('css/freelancer.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">

    {{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@dashboardcode/bsmultiselect@0.5.9/dist/css/BsMultiSelect.min.css">--}}
    {{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@dashboardcode/bsmultiselect@0.5.9/dist/css/BsMultiSelect.min.css.map">--}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scroll/16.1.0/smooth-scroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>
    <script src="{{ asset('js/mdb.js') }}"></script>
    @yield('css')
    <style>
        /* Required for full background image */

        body{
            background-color: white;
        }


        .btn .fa {
            margin-left: 3px;
        }
        .desc {
            white-space: nowrap;
            white-space: -o-pre-wrap;
            width: 300px;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .top-nav-collapse {
            background-color: #FFFFFF !important;
            text-decoration: white;

        }

        .navbar:not(.top-nav-collapse) {
            background: white !important;
            box-shadow: black;
            text-emphasis-color: white;
            text-decoration: white;



        }

        @media (max-width: 991px) {
            .navbar:not(.top-nav-collapse) {
                background: #f8f8f8 !important;
                text-shadow: black;
            }
        }


    </style>
</head>
<script>
    $( document ).ready(function() {
        new WOW().init();
    });

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#imageResult')
                    .attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

</script>
<body>

<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{url('/')}}">
            <img src="{{asset('/image/jdmid_logo.png')}}" height="50" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="dark-blue-text"><i class="fas fa-bars fa-1x"></i></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <!-- Left Side Of Navbar -->
            <!-- Search form -->

{{--                <form action="{{url('/search')}}" class="form-inline active-cyan-4 mr-auto" method="GET">--}}
{{--                    <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search" name="searchTerm"--}}
{{--                           aria-label="Search">--}}
{{--                    <i class="fas fa-search text-light" aria-hidden="true"></i>--}}
{{--                    <button type="submit" class="btn fa fa-search text-light" aria-hidden="true"></button>--}}
{{--                </form>--}}

            <form class="form-inline mr-auto" action="{{url('/search')}}" method="GET">
                <input class="form-control" type="text" placeholder="Search" aria-label="Search" name="searchTerm">
                <button class="btn btn-elegant btn-rounded btn-sm my-0 ml-sm-2" type="submit">Search</button>
            </form>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                @auth('user')
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/user/'.\Illuminate\Support\Str::slug(auth()->guard('user')->user()->name))}}">
                            <i class="fa fa-user-circle"></i>
                            Profil
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>

                @endauth
                @auth('hotel')
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/seller/'.\Illuminate\Support\Str::slug(auth()->guard('hotel')->user()->name))}}">
                            <i class="fa fa-user-circle"></i>
                            Profil
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                @endauth
                    @auth('user')
                <!-- <li class="nav-item">
                    <a class="nav-link" href="{{url('/home')}}">
                        <i class="fa fa-home"></i>
                        Catalogue
                        <span class="sr-only">(current)</span>
                    </a>
                </li>  !-->
                    @endauth
                    @auth('hotel')
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/home/seller')}}">
                                <i class="fa fa-home"></i>
                                List Product
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        @endauth
                    @auth('user')
                <!-- <li class="nav-item">
                    <a class="nav-link" href="{{url('/joblist')}}">
                        <i class="fa fa-angellist"></i>
                        Job-List
                        <span class="sr-only">(current)</span>
                    </a>
                </li> -->
                    @endauth
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" type="button" id="dropdownMenu3" data-toggle="dropdown" href="#">--}}
{{--                            <i class="fa fa-whatsapp "></i>--}}
{{--                            Notifikasi--}}
{{--                            <span class="badge badge-danger">11</span>--}}
{{--                        </a>--}}
{{--                        <div class="dropdown">--}}
{{--                            <div class="dropdown-menu" aria-labelledby="dropdownMenu3">--}}

{{--                                <div class="card-body">--}}
{{--                                    <h5 class="card-title">Judul Notifikasi</h5>--}}
{{--                                    <p class="card-text">isi notifikasi</p>--}}
{{--                                </div>--}}
{{--                                <div class="card-body">--}}
{{--                                    <h5 class="card-title">Judul Notifikasi</h5>--}}
{{--                                    <p class="card-text">isi notifikasi</p>--}}
{{--                                </div>--}}
{{--                                <div class="card-body">--}}
{{--                                    <h5 class="card-title">Judul Notifikasi</h5>--}}
{{--                                    <p class="card-text">isi notifikasi</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </li>--}}
                    @auth('hotel')
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                <img src="{{asset(\Illuminate\Support\Facades\Auth::guard('hotel')->user()->profile->hotelPhoto())}}" class="rounded-circle z-depth-0"
                                     alt="avatar image" height="30">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-default"
                                 aria-labelledby="navbarDropdownMenuLink-333">
                                <a class="dropdown-item" href="{{url('/seller/'.auth()->guard('hotel')->user()->profile->url_slug.'/edit')}}">Edit Profil</a>
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
                                <img src="{{asset(\Illuminate\Support\Facades\Auth::guard('user')->user()->profile->profileFoto())}}" class="rounded-circle z-depth-0"
                                     alt="avatar image" height="30">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-default"
                                 aria-labelledby="navbarDropdownMenuLink-333">
                                <a class="dropdown-item" href="{{url('/user/'.auth()->guard('user')->user()->profile->url_slug.'/edit')}}">Edit Profile</a>
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

<main>
    @yield('content')
</main>


</body>

</html>
