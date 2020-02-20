<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kolega Hotel</title>
    <link rel="icon" href="{{asset('/image/logo2.png')}}">
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
    <script type="text/javascript" src="scripts/jquery.formatCurrency.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>
    <script src="{{ asset('js/mdb.js') }}"></script>
    @yield('css')
    <style>
        /* Required for full background image */

        html,
        body,
        header,
        .view {
            height: 100%;
            background-color: white;
        }


        .btn .fa {
            margin-left: 3px;
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

        .imghotel{
            position:relative;
            overflow:hidden;
            padding-bottom:100%;
        }
        .imghotel img{
            position: absolute;
            max-width: 100%;
            max-height: 100%;
            top: 50%;
            left: 50%;
            transform: translateX(-50%) translateY(-50%);
        }

        .desc {
            display: block;
            width: 600px;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
        }
        /* Material design styling */

        /*placeholder style*/

        .note-placeholder {
            position: absolute;
            top: 20%;
            left: 5%;
            font-size: 2rem;
            color: #e4e5e7;
            pointer-events: none;
        }

        /*Toolbar panel*/

        .note-editor .note-toolbar {
            background: #f0f0f1;
            border-bottom: 1px solid #c2cad8;
            -webkit-box-shadow: 0 0 4px 0 rgba(0, 0, 0, 0.14), 0 3px 4px 0 rgba(0, 0, 0, 0.12), 0 1px 5px 0 rgba(0, 0, 0, 0.2);
            box-shadow: 0 0 4px 0 rgba(0, 0, 0, 0.14), 0 3px 4px 0 rgba(0, 0, 0, 0.12), 0 1px 5px 0 rgba(0, 0, 0, 0.2);
        }

        /*Buttons from toolbar*/

        .summernote .btn-group, .popover-content .btn-group {
            background: transparent;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .note-popover {
            background: #f0f0f1!important;
        }

        .summernote .btn, .note-btn {
            color: rgba(0, 0, 0, .54)!important;
            background-color: transparent!important;
            padding: 6px 12px;
            font-size: 14px;
            line-height: 1.42857;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .summernote .dropdown-toggle:after {
            vertical-align: middle;
        }

        .note-editor.card {
            -webkit-box-shadow: none;
            box-shadow: none;
            border-radius: 2px;
        }

        /* Border of the Summernote textarea */

        .note-editor.note-frame {
            border: 1px solid rgba(0, 0, 0, .14);
        }

        /* Padding of the text in textarea */

        .note-editor.note-frame .note-editing-area .note-editable {
            padding-top: 1rem;
        }
        .has-error input[type="text"], .has-error input[type="email"], .has-error input[type="number"], .has-error input[type="time"], .has-error input[type="date"] .has-error select {
            border: 1px solid #ff6162;
        }
        #upload {
            opacity: 0;
        }

        #upload-label {
            position: absolute;
            top: 50%;
            left: 1rem;
            transform: translateY(-50%);
        }

        .image-area {
            border: 2px dashed rgba(255, 255, 255, 0.7);
            padding: 1rem;
            position: relative;
        }

        .image-area::before {
            content: 'Uploaded image result';
            color: #fff;
            font-weight: bold;
            text-transform: uppercase;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 0.8rem;
            z-index: 1;
        }
        .upload {
            opacity: 0;
        }

        .upload-label {
            position: absolute;
            top: 50%;
            left: 1rem;
            transform: translateY(-50%);
        }


        .image-area img {
            z-index: 2;
            position: relative;
        }
        .cover-area {
            border: 2px dashed rgba(255, 255, 255, 0.7);
            padding: 1rem;
            position: relative;
        }

        .cover-area::before {
            content: 'Uploaded image result';
            color: #fff;
            font-weight: bold;
            text-transform: uppercase;
            position: absolute;
            top: 100%;
            left: 100%;
            transform: translate(-50%, -50%);
            font-size: 0.8rem;
            z-index: 1;
        }

        .cover-area img {
            z-index: auto;
            position: relative;
        }
        #img-upload{
            width: 100%;
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

    $(function () {
        $('#upload').on('change', function () {
            readURL(input);
        });
    });

    /*  ==========================================
        SHOW UPLOADED IMAGE NAME
    * ========================================== */
    var input = document.getElementById( 'upload' );
    var infoArea = document.getElementById( 'upload-label' );

    input.addEventListener( 'change', showFileName );
    function showFileName( event ) {
        var input = event.srcElement;
        var fileName = input.files[0].name;
        infoArea.textContent = 'File name: ' + fileName;
    }
</script>
<body>

    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{asset('/image/logo_head.png')}}" height="50" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    <form action ="#" method="GET" class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                        <button class="btn btn-primary btn-rounded" type="submit">Search</button>
                    </form>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                   @auth('user')
                        @if(\Illuminate\Support\Facades\Request::is('home'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/user/'.auth()->guard('user')->user()->name)}}">
                            <i class="fa fa-user-circle"></i>
                            Profil
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="fa fa-user-circle"></i>
                                    Profil
                                    <span class="sr-only"></span>
                                </a>
                            </li>

                        @endif
                       @endauth
                     @auth('hotel')
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/hotel/'.auth()->guard('hotel')->user()->profile->url_slug)}}">
                                <i class="fa fa-user-circle"></i>
                                Profil
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                    @endauth
                       <li class="nav-item">
                           <a class="nav-link" href="{{url('/home')}}">
                               <i class="fa fa-home"></i>
                               Home
                               <span class="sr-only">(current)</span>
                           </a>
                       </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fa fa-angellist"></i>
                            Job-List
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fa fa-whatsapp "></i>
                            Chat
                            <span class="badge badge-danger">11</span>
                        </a>
                    </li>
                    @auth('user')
                    <!-- Authentication Links -->
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle nav-item active" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            Akun <span class="sr-only">(current)</span>
                        </a>


                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{url('/user/'.auth()->guard('user')->user()->profile->url_slug.'/edit')}}">Edit Profile</a>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>


                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                    </li>
                        @endauth
                       @auth('hotel')
                       <!-- Authentication Links -->
                           <li class="nav-item dropdown">
                               <a id="navbarDropdown" class="nav-link dropdown-toggle nav-item active" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   Akun <span class="sr-only">(current)</span>
                               </a>


                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                   <a class="dropdown-item" href="{{url('/hotel/'.auth()->guard('hotel')->user()->profile->url_slug.'/edit')}}">Edit Profile</a>
                                   <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                       {{ __('Logout') }}
                                   </a>


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

    <main class="py-4">
        @yield('content')
    </main>
<script>
    $('#my-summernote').summernote({
        minHeight: 200,
        placeholder: 'Tulis Deskripsi Pekerjaan...',
        focus: false,
        airMode: false,
        fontNames: ['Roboto', 'Calibri', 'Times New Roman', 'Arial'],
        fontNamesIgnoreCheck: ['Roboto', 'Calibri'],
        dialogsInBody: true,
        dialogsFade: true,
        disableDragAndDrop: false,
        toolbar: [
            // [groupName, [list of button]]
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['para', ['style', 'ul', 'ol', 'paragraph']],
            ['fontsize', ['fontsize']],
            ['font', ['strikethrough', 'superscript', 'subscript']],
            ['height', ['height']],
            ['misc', ['undo', 'redo', 'print', 'help', 'fullscreen']]
        ],
        popover: {
            air: [
                ['color', ['color']],
                ['font', ['bold', 'underline', 'clear']]
            ]
        },
        print: {
            'stylesheetUrl': 'url_of_stylesheet_for_printing'
        }
    });
    $('#my-summernote').cleanHtml()

    var rupiah = document.getElementById("rupiah");
    rupiah.addEventListener("keyup", function(e) {
        // tambahkan 'Rp.' pada saat form di ketik
        // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
        rupiah.value = formatRupiah(this.value, "Rp. ");
    });

    /* Fungsi formatRupiah */
    function formatRupiah(angka, prefix) {
        var number_string = angka.replace(/[^,\d]/g, "").toString(),
            split = number_string.split(","),
            sisa = split[0].length % 3,
            rupiah = split[0].substr(0, sisa),
            ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        // tambahkan titik jika yang di input sudah menjadi angka ribuan
        if (ribuan) {
            separator = sisa ? "." : "";
            rupiah += separator + ribuan.join(".");
        }

        rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
        return prefix == undefined ? rupiah : rupiah ? "Rp. " + rupiah : "";
    }
</script>

</body>

</html>
