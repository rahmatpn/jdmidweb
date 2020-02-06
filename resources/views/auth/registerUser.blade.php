<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Halaman Masuk Part Timer</title>

    <!-- Scripts -->
    <script src="{{ asset('js/loginhotel.js') }}" defer></script>
{{--    <script src="{{ asset('js/app.js') }}" defer></script>--}}
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- Fonts -->
{{--    <link rel="dns-prefetch" href="//fonts.gstatic.com">--}}
{{--    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">--}}
    <link rel="stylesheet" type="text/css" href="css/roboto-font.css">
{{--    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-5/css/fontawesome-all.min.css">--}}
{{--    <!-- Styles -->--}}
{{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
{{--    <link href="{{ asset('css/style.css')}}" rel="stylesheet">--}}
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        /*body{*/
        /*    background-image: url("https://images.pexels.com/photos/1267473/pexels-photo-1267473.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260");*/
        /*    background-size:cover;*/

        /*}*/
        /*.backgroundimg{*/

        /*    opacity: 0.5;*/
        /*}*/
    </style>
</head>

<body class="form-v8 ">
<div class="page-content">
    <div class="form-v8-content  shadow-lg">
        <div class="form-left ">
            <img src="/image/user.jpg"  class="img-fluid" style="padding-top: 50px"  alt="form">
        </div>

        <div class="form-right">
            <div class="tab">
                <div class="tab-inner">
                    <button class="tablinks" onclick="openCity(event, 'sign-in')" id="defaultOpen"  >Sign In</button>
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
                                    <input type="submit" name="register" class="register" value="Sign In">
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
                                        <input type="submit" name="register" class="register" value="Register">
                                    </div>
                                </div>
                            </form>
                    </form>
        </div>
    </div>
</div>
</body>
</html>
