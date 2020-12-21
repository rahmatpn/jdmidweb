@extends('layouts.auth')



@section('content')
        <!-- Main navigation -->
        <style>
            @media (min-width: 800px) and (max-width: 850px) {
                html,
                body,
                header,
                .view {
                    height: 500px;
                }
            }

            @media (min-width: 800px) and (max-width: 850px) {
                html,
                body,
                header,
                .view{
                    height: 500px;
                }

            }

            .hm-gradient {
                background: linear-gradient(40deg, rgba(72, 198, 239, 0.3), rgba(111, 134, 214, 0.3));
            }
            .heading {
                margin: 0 6rem;
                font-size: 3.8rem;
                font-weight: 700;
                color: #48c6ef;
            }
            .subheading {
                margin: 2.5rem 6rem;
                color: #bcb2c0;
            }
            .btn.btn-margin {
                margin-left: 6rem;
                margin-top: 3rem;
            }
            .btn.btn-lily {
                background: linear-gradient(40deg, rgba(72, 198, 239, 0.7), rgba(111, 134, 214, 0.7));
                color: #fff;
            }
            .title {
                margin-top: 6rem;
                margin-bottom: 2rem;
                color: #6f86d6;
            }
            .subtitle {
                color: #bcb2c0;
                margin-left: 20%;
                margin-right: 20%;
                margin-bottom: 6rem;
            }
            .card-text-short{
                overflow: hidden;
                white-space: normal;
                height: 1.2em; /* exactly 2 lines */
                text-overflow: -o-ellipsis-lastline;
            }
            .md-pills .nav-link.active {
                        color: #fff;
                        background-color: #616161;
                    }
                    button.close {
                        position: absolute;
                        right: 0;
                        z-index: 2;
                        padding-right: 1rem;
                        padding-top: .6rem;
                    }

                    .parent {
                        position: relative;
                    }
                    .child {
                        position: absolute;
                        font-family: Arial;
                        display:flex;
                        justify-content:center;
                        align-items:center;
                        position: absolute;
                        right: 10px;
                        top:10px;
                        color: white;
                    }
        </style>

        @if(Session::has('success'))
            <script>
                $(function() {
                    $('#modalCookie1').modal('show');
                });
            </script>
        @endif

        @if(Session::has('gagalVerifikasi'))
            <script>
                $(function() {
                    $('#modalGagalVerifikasi').modal('show');
                });
            </script>
        @endif
        @if (session()->get('gagalVerifikasi'))
            <!-- Central Modal Medium Warning -->
            <div class="modal fade" id="modalGagalVerifikasi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-notify modal-warning" role="document">
                    <!--Content-->
                    <div class="modal-content">
                        <!--Header-->
                        <div class="modal-header">
                            <p class="heading lead">Gagal</p>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true" class="white-text">&times;</span>
                            </button>
                        </div>

                        <!--Body-->
                        <div class="modal-body">
                            <div class="text-center">
                                <i class="fas fa-times fa-4x mb-3 animated rotateIn"></i>
                                <p>{{session()->get('gagalVerifikasi')}}</p>
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

                                <a type="button" class="btn blue-gradient rounded waves-effect rounded-pill" data-dismiss="modal">Ok, thanks</a>
                            </div>
                        </div>
                    </div>
                    <!--/.Content-->
                </div>
            </div>
        @endif
        <!-- Main navigation -->
        <main>

        <!--Intro-->
        <section>

            <!--Carousel Wrapper-->
            <div id="carousel-example-1z" class="carousel slide carousel-fade carousel-half" data-ride="carousel">
                <!--Indicators-->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-1z" data-slide-to="0" class=""></li>
                    <li data-target="#carousel-example-1z" data-slide-to="1" class=""></li>
                    <li data-target="#carousel-example-1z" data-slide-to="2" class="active"></li>
                </ol>
                <!--/.Indicators-->
                <!--Slides-->
                <div class="carousel-inner" role="listbox">
                    <!--First slide-->
                    <div class="carousel-item">
                        <div class="view h-100">
                            <img class="d-block h-100 w-lg-100" src="{{asset('/image/post_car1.jpg')}}" alt="First slide">
                            <div class="mask rgba-indigo-light">
                                <!-- Caption -->
                                <div class="full-bg-img flex-center white-text">
                                    <ul class="animated fadeIn col-10 list-unstyled">
                                        <li>
                                            <h1 class="h1-responsive font-weight-bold">JDM.id</h1>
                                        </li>
                                        <li>
                                            <p>Anda di page profile penjual</p>
                                        </li>

                                    </ul>
                                </div>
                                <!-- /.Caption -->
                            </div>
                        </div>
                    </div>
                    <!--/First slide-->
                    <!--Second slide-->
                    <div class="carousel-item h-100">
                        <div class="view h-100">
                            <img class="d-block h-100 w-lg-100" src="{{asset('/image/post_car2.jpg')}}" alt="Second slide">
                            <div class="mask rgba-stylish-light">
                                <!-- Caption -->
                                <div class="full-bg-img flex-center white-text">
                                    <ul class="animated fadeIn col-10 list-unstyled">
                                        <li>
                                            <h1 class="h1-responsive font-weight-bold">Nemo enim ipsam voluptatem quia voluptas sit </h1>
                                        </li>
                                        <li>
                                            <p>Nemo enim ipsamvoluptatem quia veritatis et quasi architecto beatae</p>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /.Caption -->
                            </div>
                        </div>
                    </div>
                    <!--/Second slide-->
                    <!--Third slide-->
                    <div class="carousel-item active">
                        <div class="view h-100">
                            <img class="d-block h-100 w-lg-100" src="{{asset('/image/post_car3.jpg')}}" alt="Third slide">
                            <div class="mask rgba-black-light">
                                <!-- Caption -->
                                <div class="full-bg-img flex-center white-text">
                                    <ul class="animated fadeIn col-10 list-unstyled">
                                        <li>
                                            <h1 class="h1-responsive font-weight-bold">Sed ut perspiciatis unde omnis iste natus sit voluptatem</h1>
                                        </li>
                                        <li>
                                            <p>Unde omnis iste natus sit voluptatem veritatis et quasi architecto beatae</p>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /.Caption -->
                            </div>
                        </div>
                    </div>
                    <!--/Third slide-->
                </div>
                <!--/.Slides-->
                <!--Controls-->
                <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                <!--/.Controls-->
            </div>
            <!--/.Carousel Wrapper-->

        </section>
        <!--/Intro-->

        <!--Blog section-->
        <section>
            <div class="container">

                <!--Section heading-->
                <h2 class="text-center h2 my-5 pt-4">Postingan</h2>
                <!--Section description-->
                <p class="text-center dark-grey-text w-responsive mx-auto mb-5">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                    sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                <!--Grid row-->
                <div class="row text-center mb-2">

                    <!--Grid column-->
                    @foreach($hotel->pekerjaan as $pekerjaan)
                    <div class="col-lg-4 col-md-12 mb-4">
                        <!--Featured image-->
                        <div class="card parent wow fadeInUp">
                                    <!--Card image-->
                                    <div class="view overlay zoom">

                                        <img class="card-img-top" src="{{asset(!empty($pekerjaan->foto) ? $pekerjaan->foto : $hotel->profile->hotelPhoto())}}"
                                             alt="Card image cap">
                                            <div class="mask rgba-white-slight"></div>
                                    </div>

                                    <!--Card content-->
                                    <div class="card-body">
                                        <!--Title-->
                                        <h4 class="card-title">{{$pekerjaan->getPosisi()}}</h4>
                                        <!--Text-->
                                            <div class="card-text card-text-short">{!!html_entity_decode($pekerjaan->deskripsi)!!}</div>
                                        <a type="button" href="{{url("/job/$pekerjaan->url_slug")}}" class="btn btn-blue btn-md rounded-pill">Read more</a>

                                    </div>
                                    @auth('hotel')
                                    <div class="child dropdown dropleft">
                                        <a class="material-icons" data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false">more_vert</a>
                                        <div class="dropdown-menu dropdown-menu-left">
                                            <a class="dropdown-item" href="{{url("/job/$pekerjaan->url_slug/edit")}}">Edit</a>
                                            <a class="dropdown-item" data-target="#centralModalWarning" data-toggle="modal" href="#">Delete</a>
                                            <a class="dropdown-item" href="{{url("/job/$pekerjaan->url_slug/postlist")}}">Todo List</a>
                                        </div>
                                        <!-- Basic dropdown -->
                                    </div>
                                    @endauth

                                </div>
                                <div class="modal fade" id="centralModalWarning" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                     aria-hidden="true">
                                    <div class="modal-dialog modal-notify modal-warning" role="document">
                                        <!--Content-->
                                        <div class="modal-content">
                                            <!--Header-->
                                            <div class="modal-header">
                                                <p class="heading lead">Modal Warning</p>

                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true" class="white-text">&times;</span>
                                                </button>
                                            </div>

                                            <!--Body-->
                                            <div class="modal-body">
                                                <div class="text-center">
                                                    <i class="fas fa-times fa-4x mb-3 animated rotateIn"></i>
                                                    <p>Apakah anda berniat untuk menghapus job ini?</p>
                                                </div>
                                            </div>

                                            <!--Footer-->
                                            <div class="modal-footer justify-content-center">
                                                <a type="button" class="btn btn-warning rounded-pill" href="{{url("/job/$pekerjaan->url_slug/delete")}}">Yakin</a>
                                            </div>
                                        </div>
                                        <!--/.Content-->
                                    </div>
                                </div>
                            <br/>

                    </div>
                    @endforeach
                </div>
                <!--Grid row-->


            </div>

        </section>
        <!--Blog section-->

        <!--Latest posts-->
        <section>
            <div class="container-fluid grey lighten-3 mb-0 pb-0">
                <div class="container">
                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-lg-4 col-md-12">
                            <h6 class="font-weight-bold mt-5 mb-3">ABOUT</h6>
                            <hr class="mb-5">
                            <img src="{{asset($hotel->profile->hotelPhoto())}}" alt="sample image" class="img-fluid z-depth-1">
                            <p class="mt-4 mb-5">Sed ut in perspiciatis unde omnis iste natus error sit on i tatem accusantium doloremque laudantium,
                                totam rem aperiam, eaque ipsa quae.</p>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-4 col-md-6">
                            <h6 class="font-weight-bold mt-5 mb-3">Biodata</h6>
                            <hr class="mb-5">
                            <!--Grid row-->
                            <div class="row mt-4">

                                <!--Grid column-->
                                <div class="col-4">

              

                                </div>
                                <!--Grid column-->

                                <!--Second column-->
                                <div class="col-8 mb-1">

                                    <!--Post data-->
                                    <div class="">
                                        <p class="mb-1">
                                            <a href="#!" class="text-hover font-weight-bold">Nama</a>
                                        </p>
                                        <p class="font-small grey-text">
                                            <em>{{$hotel->profile->nama}}</em>
                                        </p>
                                    </div>

                                </div>
                                <!--Second column-->

                            </div>
                            <!--Grid row-->

                            <!--Grid row-->
                            <div class="row">

                                <!--Grid column-->
                                <div class="col-4">

                                    <!--Image-->
                                   

                                </div>
                                <!--Grid column-->

                                <!--Second column-->
                                <div class="col-7 mb-1">

                                    <!--Post data-->
                                    <div class="">
                                        <p class="mb-1">
                                            <a href="#!" class="text-hover font-weight-bold">Nomor Telepon </a>
                                        </p>
                                        <p class="font-small grey-text">
                                            <em>{{$hotel->profile->nomort_telepon}}</em>
                                        </p>
                                    </div>

                                </div>
                                <!--Second column-->

                            </div>
                            <!--Grid row-->

                            <!--Grid row-->
                            <div class="row">

                                <!--Grid column-->
                                <div class="col-4">

                                   
                                </div>
                                <!--Grid column-->

                                <!--Second column-->
                                <div class="col-7 mb-1">

                                    <!--Post data-->
                                    <div class="">
                                        <p class="mb-1">
                                            <a href="#!" class="text-hover font-weight-bold">Alamat</a>
                                        </p>
                                        <p class="font-small grey-text">
                                            <em>{{$hotel->profile->alamat}}</em>
                                        </p>
                                    </div>

                                </div>
                                <!--Second column-->

                            </div>
                            <!--Grid row-->

                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-4 col-md-6">
                            <h6 class="font-weight-bold mt-5 mb-3">Biodata</h6>
                            <hr class="mb-5">
                            <!--Grid row-->
                            <div class="row mt-4">

                                <!--Grid column-->
                                <div class="col-4">

                                    <!--Image-->


                                </div>
                                <!--Grid column-->

                                <!--Second column-->
                                <div class="col-8 mb-1">

                                    <!--Post data-->
                                    <div class="">
                                        <p class="mb-1">
                                            <a href="#!" class="text-hover font-weight-bold">Social Media </a>
                                        </p>
                                        <p class="font-small grey-text">
                                            <em>{{$hotel->profile->social_media}}</em>
                                        </p>
                                    </div>

                                </div>
                                <!--Second column-->

                            </div>
                            <!--Grid row-->

                            <!--Grid row-->
                            <div class="row">
                            <a href="{{url('/job/postjob')}}" type="button" class="btn btn-lily btn-margin rounded wow fadeIn rounded-pill" style="margin-top: 10px" data-wow-delay="1s">Post A Job<i class="fas fa-caret-right ml-3"></i></a>
                                <!--Grid column-->
                                <div class="col-4">

                      
                                </div>
                                <!--Grid column-->

                                <!--Second column-->
                                <div class="col-7 mb-1">

                          

                                </div>
                                <!--Second column-->

                            </div>
                            <!--Grid row-->

                            <!--Grid row-->
                            <div class="row">

                                <!--Grid column-->
                                <div class="col-4">

                               
                                </div>
                                <!--Grid column-->

                                <!--Second column-->
                                <div class="col-7 mb-1">

                                    <!--Post data-->
                                

                                </div>
                                <!--Second column-->

                            </div>
                            <!--Grid row-->

                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

                </div>
            </div>

        </section>
        <!--/Latest posts-->

    </main>
   

        <!-- Footer -->
        <footer class="page-footer font-small indigo darken-4 py-4">

            <!-- Footer Elements -->
            <div class="container">

                <div class="row">
                    <div class="col-md-6 d-flex justify-content-start">
                        <!-- Copyright -->
                        <div class="footer-copyright text-center bg-transparent">© 2020 Copyright:
                            <a href="#"> kolegahotel.com</a>
                        </div>
                        <!-- Copyright -->
                    </div>
                    <div class="col-md-6 d-flex justify-content-end">
                        <ul class="list-unstyled d-flex mb-0">
                            <li>
                                <a class="mr-3" role="button"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a class="mr-3" role="button"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a class="mr-3" role="button"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li>
                                <a class="" role="button"><i class="fab fa-youtube"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
            <!-- Footer Elements -->

        </footer>
        <!-- Footer -->
@endsection
