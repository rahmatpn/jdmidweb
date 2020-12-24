@extends('layouts.guest')

@section('content')
<!--Carousel Wrapper-->
<style>
.view,body,html{height:100%}.carousel{height:50%}.carousel .carousel-inner,.carousel .carousel-inner .active,.carousel .carousel-inner .carousel-item{height:100%}@media (max-width:776px){.carousel{height:100%}}.page-footer{background-color:#929FBA}
</style>
<body>
<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
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
                    <img class="d-block h-100 w-lg-100" src="{{asset('/image/home_car1.jpg')}}" alt="First slide">
                    <div class="mask">
                        <!-- Caption -->
                        <div class="full-bg-img flex-center white-text">
                            <ul class="animated fadeIn col-10 list-unstyled">
                                <li>
                                    <p class="h1 red-text mb-4 mt-5">
                                        <strong>JDM.id!</strong>
                                    </p>
                                </li>
                                <li>
                                    <h5 class="h5-responsive white-text font-weight-bold mb-5">Kami adalah pintu utama bagi anda yang ingin membeli mobil pabrikan Jepang</h5>
                                </li>
                                <li>

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
                    <img class="d-block h-100 w-lg-100" src="{{asset('/image/home_car2.jpg')}}" alt="Second slide">
                    <div class="mask">
                        <!-- Caption -->
                        <div class="full-bg-img flex-center white-text">
                            <ul class="animated fadeIn col-10 list-unstyled">
                                <li>
                                    <p class="h1 white-text mb-4">
                                        <strong>JDM.id</strong>
                                    </p>
                                </li>
                                <li>
                                    <h5 class="h5-responsive white-text font-weight-bold mb-5">Kami adalah pintu utama bagi anda yang ingin membeli mobil pabrikan Jepang</h5>
                                </li>
                                <li>

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
                    <img class="d-block h-100 w-lg-100" src="{{asset('/image/home_car3.jpg')}}" alt="Third slide">
                    <div class="mask">
                        <!-- Caption -->
                        <div class="full-bg-img flex-center white-text">
                            <ul class="animated fadeIn col-md-10 text-center text-md-right list-unstyled">
                                <li>
                                    <p class="h1 blue-text mb-4 mt-5 pr-lg-5">
                                        <strong>JDM.id</strong>
                                    </p>
                                </li>
                                <li>
                                    <h5 class="h5-responsive white-text font-weight-bold mb-5 pr-lg-5">Kami adalah pintu utama bagi anda yang ingin membeli mobil pabrikan Jepang</h5>
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
    <div class="container">
        <!-- Grid row -->
        <div class="row pt-4">

            <!-- Content -->
            <div class="col-lg-12">

                <!-- Categories & Adv -->
                <section class="section pt-2">

                    <!-- Grid row -->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-lg-4 col-md-12 mb-4">

                            <!-- Section: Categories -->
                            <section class="section">

                                <ul class="list-group z-depth-1">

                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a class="dark-grey-text font-small" href="?filter_category=1">
                                            <i class="fas fa fa-car dark-grey-text mr-3" aria-hidden="true"></i>Honda</a>
                                        <span class="badge badge-danger badge-pill">{{ $array_values[0] }}</span>

                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a class="dark-grey-text font-small" href="?filter_category=2">
                                            <i class="fas fa fa-car dark-grey-text mr-3" aria-hidden="true"></i>Nissan</a>
                                        <span class="badge badge-danger badge-pill">{{ $array_values[1] }}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a class="dark-grey-text font-small" href="?filter_category=3">
                                            <i class="fas fa fa-car dark-grey-text mr-3" aria-hidden="true"></i>Yamaha</a>
                                        <span class="badge badge-danger badge-pill">{{ $array_values[2] }}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a class="dark-grey-text font-small" href="?filter_category=4">
                                            <i class="fas fa fa-car dark-grey-text mr-3" aria-hidden="true"></i>Suzuki</a>
                                        <span class="badge badge-danger badge-pill">{{ $array_values[3] }}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a class="dark-grey-text font-small" href="?filter_category=5">
                                            <i class="fas fa fa-car dark-grey-text mr-3" aria-hidden="true"></i>Mitsubishi</a>
                                        <span class="badge badge-danger badge-pill">{{ $array_values[4] }}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a class="dark-grey-text font-small" href="?filter_category=6">
                                            <i class="fas fa fa-car dark-grey-text mr-3" aria-hidden="true"></i>Mazda</a>
                                        <span class="badge badge-danger badge-pill">{{ $array_values[5] }}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a class="dark-grey-text font-small" href="?filter_category=7">
                                            <i class="fas fa fa-car dark-grey-text mr-3" aria-hidden="true"></i>Hino</a>
                                        <span class="badge badge-danger badge-pill">{{ $array_values[6] }}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a class="dark-grey-text font-small" href="?filter_category=8">
                                            <i class="fas fa fa-car dark-grey-text mr-3" aria-hidden="true"></i>Acura</a>
                                        <span class="badge badge-danger badge-pill">{{ $array_values[7] }}</span>
                                    </li>
                                </ul>
                            </section>
                            <!-- Section: Categories -->

                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-8 col-md-12 pb-lg-5 mb-4">
                            <!--Image -->
                            <div class="view zoom z-depth-1">

                                <img src="{{asset('/image/adv_car2.jpg')}}" class="img-fluid" alt="sample image">
                                <div class="mask rgba-white-light">
                                    <div class="dark-grey-text  pt-4 ml-3 pl-3">
                                        <div>
                                            <a>
                                                <span class="badge badge-danger">bestseller</span>
                                            </a>
                                            <h2 class="card-title text-white font-weight-bold pt-2">
                                                <strong>Honda Civic Type R</strong>
                                            </h2>
                                            <p class="white-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                                            <a class="btn btn-danger btn-sm btn-rounded clearfix d-none d-md-inline-block waves-effect waves-light">Read more</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!--Image -->
                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

                </section>
                <!-- Categories & Adv -->

                <!--Section: Bestsellers & offers-->

                <!--Section: Advertising-->
                <section>

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-12">
                            <!--Image -->
                            <div class="view  z-depth-1">

                                <img src="{{asset('/image/adv_car.jpg')}}" class="img-fluid" alt="sample image">
                                <div class="mask rgba-stylish-slight">
                                    <div class="dark-grey-text text-right pt-lg-5 pt-md-1 mr-5 pr-md-4 pr-0">
                                        <div>
                                            <a>
                                                <span class="badge badge-primary">SALE</span>
                                            </a>
                                            <h2 class="card-title text-white font-weight-bold pt-md-3 pt-1">
                                                <strong>Jual nissan skyline
                                                </strong>
                                            </h2>
                                            <p class="pb-lg-3 pb-md-1 clearfix d-none d-md-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                                            <a class="btn mr-0 btn-primary btn-rounded clearfix d-none d-md-inline-block waves-effect waves-light">Read more</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!--Image -->
                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

                </section>
                <!--/Section: Advertising-->

                <!--Section: Last items-->
                <section>

                    <h4 class="font-weight-bold mt-4 dark-grey-text">
                        <strong>Cars</strong>
                    </h4>
                    <hr class="mb-5">

                    <!-- Grid row -->
                    <div class="row">
                    @foreach($kerja as $pekerjaan)
                        <!--Grid column-->
                        <div class="col-lg-3 col-md-6 mb-4">

                            <!--Card-->
                            <div class="card card-ecommerce">

                                <!--Card image-->
                                <div class="view overlay">
                                    <img src="{{asset($pekerjaan->foto ?? $pekerjaan->hotel->profile->hotelPhoto())}}" class="img-fluid" alt="sample image">
                                    <a>
                                        <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                    </a>
                                </div>
                                <!--Card image-->

                                <!--Card content-->
                                <div class="card-body">
                                    <!--Category & Title-->

                                    <h5 class="card-title mb-1">
                                        <strong>
                                            <a href="" class="dark-grey-text">{{$pekerjaan->getPosisi()}}</a>
                                        </strong>
                                    </h5>
                                    <span class="badge badge-danger mb-2">{{$pekerjaan->kondisi}}</span>
                                    <span class="badge badge-secondary mb-2">{{$pekerjaan->bayaran}}</span>
                                    <!-- Rating -->


                                    <!--Card footer-->
                                    <div class="card-footer pb-0">
                                        <div class="row mb-0">
                                            <span class="float-left">
                                            <a href="{{url("/viewJob/$pekerjaan->url_slug")}}" class="btn btn-md blue">Selengkapnya</a>
                                            </span>
                                            <span class="float-right">


                                            </span>
                                        </div>
                                    </div>

                                </div>
                                <!--Card content-->

                            </div>
                            <!--Card-->

                        </div>
                        <!--Grid column-->
                    @endforeach

                    </div>
                    <!--Grid row-->

                    {{ $kerja->appends(request()->except('page'))->links() }}
                </section>
                <!-- /.Section: Last items -->

            </div>
            <!-- /.Content -->

        </div>
        <!-- /Grid row -->
    </div>

</body>

    <!-- Footer -->
    <footer class="page-footer font-small black-text white pt-4 shadow">

        <!-- Footer Links -->
        <div class="container text-center text-md-left mt-3">

            <!-- Grid row -->
            <div class="row mt-3">

                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mb-4">

                    <!-- Content -->
                    <h6 class="text-uppercase font-weight-bold">We are</h6>
                    <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">

                    <div class="row">
                        <img src="{{asset('/image/jdmid_logo.png')}}" alt="" width="180">
                    </div>


                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold">Trivia</h6>
                    <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>Lorem ipsum</p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold">Contact us</h6>
                    <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <i class="fas fa-home mr-3"></i>Lorem Ipsum</p>
                    <p>
                        <i class="fas fa-envelope mr-3"></i>info@jdmid.com</p>
                    <p>
                        <i class="fas fa-phone mr-3"></i>123125346</p>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center text-black-50 py-3">© 2020 JDMid, Inc.
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->
@endsection
