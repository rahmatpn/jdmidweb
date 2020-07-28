<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Halaman Masuk Part Timer</title>
    <link rel="icon" href="{{asset("/image/logo2.png")}}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <script src="{{ asset('js/loginhotel.js') }}" defer></script>
    <script src="{{ asset('js/mdb.js') }}"></script>

    <link rel="stylesheet" type="text/css" href="css/roboto.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    {{--    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-5/css/fontawesome-all.min.css">--}}



</head>
<script>
    $( document ).ready(function() {
        new WOW().init();
    });

</script>
<style>
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

    label ,p{
        font-family: "Roboto", sans-serif;
    }
</style>
<body class="form-v8 ">
<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{url('/')}}">
            <img src="{{asset('/image/logo_head.png')}}" height="50" alt="logo">
        </a>

        <a class="navbar-link black-text mr-3" href="{{url('/')}}">Kembali</a>

    </div>

</nav>
<div class="container">


@if(session()->get('gagalLoginuser'))
    <!-- Central Modal Medium Warning -->
        <div class="modal fade" id="modalGagalLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-notify modal-danger" role="document">
                <!--Content-->
                <div class="modal-content">
                    <!--Header-->
                    <div class="modal-header">
                        <p class="heading lead">Login Gagal</p>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="white-text">&times;</span>
                        </button>
                    </div>

                    <!--Body-->
                    <div class="modal-body">
                        <div class="text-center">
                            <i class="fas fa-frown fa-4x mb-3 animated rotateIn"></i>
                            <div>{{session()->get('gagalLoginuser')}}</div>
                        </div>
                    </div>

                </div>
                <!--/.Content-->
            </div>
        </div>
        <!-- Central Modal Medium Warning-->
@endif
    @if ($errors->any())
    <!-- Central Modal Medium Warning -->
        <div class="modal fade" id="modalGagal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-notify modal-warning" role="document">
                <!--Content-->
                <div class="modal-content">
                    <!--Header-->
                    <div class="modal-header">
                        <p class="heading lead">Login Gagal</p>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="white-text">&times;</span>
                        </button>
                    </div>

                    <!--Body-->
                    <div class="modal-body">
                        <div class="text-center">
                            <i class="fas fa-times fa-4x mb-3 animated rotateIn"></i>
                            @foreach ($errors->all() as $error)
                            <div>{{ $error }}</div>
                                @endforeach
                        </div>
                    </div>

                </div>
                <!--/.Content-->
            </div>
        </div>
        <!-- Central Modal Medium Warning-->
    @endif
@if (session()->get('gagal'))
    <!-- Central Modal Medium Warning -->
        <div class="modal fade" id="modalGagal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-notify modal-warning" role="document">
                <!--Content-->
                <div class="modal-content">
                    <!--Header-->
                    <div class="modal-header">
                        <p class="heading lead">Login Gagal</p>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="white-text">&times;</span>
                        </button>
                    </div>

                    <!--Body-->
                    <div class="modal-body">
                        <div class="text-center">
                            <i class="fas fa-times fa-4x mb-3 animated rotateIn"></i>
                                <p>{{session()->get('gagal')}}</p>
                        </div>
                    </div>

                </div>
                <!--/.Content-->
            </div>
        </div>
        <!-- Central Modal Medium Warning-->
    @endif

    @if(session()->get('success'))
        <div class="modal fade top" id="modalCookie1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true" data-backdrop="true">
            <div class="modal-dialog modal-frame modal-top modal-notify modal-info" role="document">
                <!--Content-->
                <div class="modal-content">
                    <!--Body-->
                    <div class="modal-body">
                        <div class="row d-flex justify-content-center align-items-center">

                            <p class="pt-3 pr-2">{{session()->get('success')}}</p>

                            <a type="button" class="btn btn-outline-primary waves-effect rounded-pill" data-dismiss="modal">Ok, thanks</a>
                        </div>
                    </div>
                </div>
                <!--/.Content-->
            </div>
        </div>
    @endif
    @if(Session::has('success'))
        <script>
            $(function() {
                $('#modalCookie1').modal('show');
            });
        </script>
    @endif
    @if($errors->any())
        <script>
            $(function() {
                $('#modalGagal').modal('show');
            });
        </script>
    @endif
    @if(Session::has('gagal'))
        <script>
            $(function() {
                $('#modalGagal1').modal('show');
            });
        </script>
    @endif
    @if(Session::has('gagalLoginuser'))
        <script>
            $(function() {
                $('#modalGagalLogin').modal('show');
            });
        </script>
    @endif
</div>
<div class="page-content">
    <div class="form-v8-content  shadow-md ">
        <div class="form-left ">
            <img src="{{asset('/image/user.jpg')}}"  class="img-fluid mr-auto mt-auto mb-auto" style="padding-top: 50px"  alt="form">
        </div>

        <div class="form-right">
            <div class="tab">
                <div class="tab-inner">
                    <button class="tablinks" onclick="openCity(event, 'sign-in')" id="defaultOpen">Sign In</button>
                </div>
                <div class="tab-inner">
                    <button class="tablinks" onclick="openCity(event, 'sign-up')">Sign Up</button>
                </div>

            </div>
            @isset($url)
                <form method="POST" class="form-detail" action='{{ url("login/$url")}}'>
                    @else
                        <form method="POST" class="form-detail" action="{{route('login')}}">
                            @endisset
                            @csrf
                            <div class="tabcontent" id="sign-in">
                                <div class="form-row">
                                    <label class="form-row-inner">
                                        <input type="text" name="email" id="email" class="input-text" required>
                                        <span class="label">Email</span>
                                        <span class="border"></span>
                                    </label>
                                </div>
                                <div class="form-row">
                                    <label class="form-row-inner">
                                        <input type="password" name="password" id="password" class="input-text" required>
                                        <span class="label">Password</span>
                                        <span class="border"></span>
                                    </label>
                                </div>

                                <div class="form-row-last">
                                    <input type="submit" name="register" class="register rounded-pill" value="Sign In">
                                </div>
                                <p style="font-size: 14px">Tidak Punya Akun? Silahkan Registrasi Terlebih Dahulu</p>
                            </div>
                        </form>
                </form>
                @isset($url)
                    <form method="POST" class="form-detail" action='{{ url("masuk/$url") }}'>
                        @else
                            <form method="POST" class="form-detail" action="{{ route('register') }}" >
                                @endisset
                                @csrf
                                <div class="tabcontent" id="sign-up">
                                    <div class="form-row">
                                        <label class="form-row-inner">
                                            <input type="text" name="name" id="name" class="input-text" required>
                                            <span class="label">Nama Anda</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                    <div class="form-row">
                                        <label class="form-row-inner">
                                            <input type="text" name="email" id="email" class="input-text" required>
                                            <span class="label">E-Mail</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                    <div class="form-row">
                                        <label class="form-row-inner">
                                            <input type="password" name="password" id="password" class="input-text" required>
                                            <span class="label">Password</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                    <div class="form-row">
                                        <label class="form-row-inner">
                                            <input type="password" name="password_confirmation" id="password-confirm" class="input-text" required autocomplete="new-password">
                                            <span class="label">Confirm Password</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                    <div class="form-row-last">
                                        <input type="submit" name="register" class="register rounded-pill" value="Register">
                                    </div>
                                </div>
                            </form>
                    </form>
        </div>
    </div>
</div>
</body>
</html>
