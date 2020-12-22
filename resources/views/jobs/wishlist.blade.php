
@section('css')
<style>
body{
    margin: 0 auto;
    background-color: white;
}

.with-arrow .nav-link.active {
    position: relative;
}

.with-arrow .nav-link.active::after {
    content: '';
    border-left: 6px solid transparent;
    border-right: 6px solid transparent;
    border-top: 6px solid #2b90d9;
    position: absolute;
    bottom: -6px;
    left: 50%;
    transform: translateX(-50%);
    display: block;
}

/* lined tabs */

.lined .nav-link {
    border: none;
    border-bottom: 3px solid transparent;
}

.lined .nav-link:hover {
    border: none;
    border-bottom: 3px solid transparent;
}

.lined .nav-link.active {
    background: none;
    color: #555;
    border-color: #2b90d9;
}
.img-gradient {
    position:relative;
    display:inline-block;
}
.img-gradient:after {
    content:'';
    position:absolute;
    left:0; top:0;
    width:100%; height:100%;
    display:inline-block;
    background: -moz-linear-gradient(top, rgba(0,47,75,0.5) 0%, rgba(220, 66, 37, 0.5) 100%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(220, 66, 37, 0.5)), color-stop(100%,rgba(0,47,75,0.5))); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(top, rgba(0,47,75,0.5) 0%,rgba(220, 66, 37, 0.5) 100%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(top, rgba(0,47,75,0.5) 0%,rgba(220, 66, 37, 0.5) 100%); /* Opera 11.10+ */
    background: -ms-linear-gradient(top, rgba(0,47,75,0.5) 0%,rgba(220, 66, 37, 0.5) 100%); /* IE10+ */
    background: linear-gradient(to bottom, rgba(0,47,75,0.5) 0%,rgba(220, 66, 37, 0.5) 100%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#002f4b', endColorstr='#00000000',GradientType=0 ); /* IE6-9 */
}
.img-gradient img{
    display:block;
}

.img-gradient-overlay { /* FF3.6+ */ /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(rgba(0,47,75,0.5) 0%, rgba(220, 66, 37, 0.5) 100%);
    background: -o-linear-gradient(rgba(0,47,75,0.5) 0%, rgba(220, 66, 37, 0.5) 100%);
    background: linear-gradient(rgba(0,47,75,0.5) 0%, rgba(220, 66, 37, 0.5) 100%); /* Chrome10+,Safari5.1+ */ /* Opera 11.10+ */ /* IE10+ */ /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#002f4b', endColorstr='#00000000',GradientType=0 ); /* IE6-9 */
    border-radius: .3rem;
}
.text {
    display: block;/* or inline-block */
    text-overflow: ellipsis;
    word-wrap: break-word;
    overflow: hidden;
    max-height: 3.6em;
    line-height: 1.8em;
    width: 100px;
}

    </style>

@endsection
@extends('layouts.jobnav')
@section('content')

<body>
<div class="container-md">
    <div class="card shadow-none">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-10 offset-sm-1">
                    <div class="container">
                    <div id="profile2" role="tabpanel" aria-labelledby="profile-tab" class="tab-pane px-4 py-5">
                                <div class="container-fluid table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th scope="col" style="width: 10%">No</th>
                                            <th scope="col" style="width: 50%">Nama</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($user as $pelamar)
                                        <tr>
                                            <th scope="row">{{$loop->index + 1}}</th>
                                            <th>{{$pelamar->area}}</th>
                                            @if($pelamar->pivot->status < '1' )
                                            <td>Menunggu Konfirmasi</td>

                                         @else
                                            <td>Diterima</td>
                                          @endif
                                        </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                            </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
<footer class="page-footer text-center text-md-left stylish-color-dark pt-0">

        <div style="background-color: #4285f4;">
            <div class="container">
                <!--Grid row-->
                <div class="row py-4 d-flex align-items-center">

                    <!--Grid column-->
                    <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                        <h6 class="mb-0 white-text">Get connected with us on social networks!</h6>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6 col-lg-7 text-center text-md-right">
                        <!--Facebook-->
                        <a class="fb-ic ml-0 px-2">
                            <i class="fab fa-facebook-f white-text"> </i>
                        </a>
                        <!--Twitter-->
                        <a class="tw-ic px-2">
                            <i class="fab fa-twitter white-text"> </i>
                        </a>
                        <!--Google +-->
                        <a class="gplus-ic px-2">
                            <i class="fab fa-google-plus-g white-text"> </i>
                        </a>
                        <!--Linkedin-->
                        <a class="li-ic px-2">
                            <i class="fab fa-linkedin-in white-text"> </i>
                        </a>
                        <!--Instagram-->
                        <a class="ins-ic px-2">
                            <i class="fab fa-instagram white-text"> </i>
                        </a>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </div>
        </div>

        <!--Footer Links-->
        <div class="container mt-5 mb-4 text-center text-md-left">
            <div class="row mt-3">

                <!--First column-->
                <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
                    <h6 class="text-uppercase font-weight-bold">
                        <strong>Company name</strong>
                    </h6>
                    <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>Here you can use rows and columns here to organize your footer content. Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit.</p>
                </div>
                <!--/.First column-->

                <!--Second column-->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">
                        <strong>Products</strong>
                    </h6>
                    <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a href="#!">MDBootstrap</a>
                    </p>
                    <p>
                        <a href="#!">MDWordPress</a>
                    </p>
                    <p>
                        <a href="#!">BrandFlow</a>
                    </p>
                    <p>
                        <a href="#!">Bootstrap Angular</a>
                    </p>
                </div>
                <!--/.Second column-->

                <!--Third column-->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">
                        <strong>Useful links</strong>
                    </h6>
                    <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a href="#!">Your Account</a>
                    </p>
                    <p>
                        <a href="#!">Become an Affiliate</a>
                    </p>
                    <p>
                        <a href="#!">Shipping Rates</a>
                    </p>
                    <p>
                        <a href="#!">Help</a>
                    </p>
                </div>
                <!--/.Third column-->

                <!--Fourth column-->
                <div class="col-md-4 col-lg-3 col-xl-3">
                    <h6 class="text-uppercase font-weight-bold">
                        <strong>Contact</strong>
                    </h6>
                    <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
                    <p>
                        <i class="fas fa-envelope mr-3"></i> info@example.com</p>
                    <p>
                        <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                    <p>
                        <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
                </div>
                <!--/.Fourth column-->

            </div>
        </div>
        <!--/.Footer Links-->

        <!-- Copyright-->
        <div class="footer-copyright py-3 text-center">
            <div class="container-fluid">
                © 2020 Copyright: JDMid
            </div>
        </div>
        <!--/.Copyright -->

    </footer>
@endsection
