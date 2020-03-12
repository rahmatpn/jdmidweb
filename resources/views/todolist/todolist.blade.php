@extends('layouts.auth')

@section('content')
    <style>
        .checkbox-lg .custom-control-label::before,
        .checkbox-lg .custom-control-label::after {
            top: .8rem;
            width: 1.55rem;
            height: 1.55rem;
        }

        .checkbox-lg .custom-control-label {
            padding-top: 13px;
            padding-left: 6px;
        }
    </style>
    <div class="card card-image shadow-none rounded-0" style="background-image: url('https://images.pexels.com/photos/262978/pexels-photo-262978.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260'); background-position: center; background-size: cover">
        <div class="text-white text-center rgba-stylish-strong py-5 px-4">
            <div class="py-5">

                <!-- Content -->
                <br/>
                <h5 class="h5 orange-text"><i class="fas fa-file-contract"></i></h5>
                <h2 class="card-title h2 my-4 py-2"> {{$pekerjaan->getPosisi()}}</h2>
                <p class="mb-4 pb-2 px-md-5 mx-md-5">{{$pekerjaan->hotel->profile->nama}}</p>
                <br/>

            </div>
        </div>
    </div>
        <div class="card shadow-none rounded-0">
            <div class="container">
            <div class="card-body">
                <h3 class="font-weight-bold black-text mb-4 pb-2 text-center">To-Do List</h3>
                <hr class="w-header">
                <div class="list-group-flush ">
                    <!-- for each -->
                        <div class="list-group-item">
                            <div class="d-flex align-items-center">
                                <i class="fab fa-2x mr-4 blue p-3 white-text rounded " aria-hidden="true">1</i><!--- Doko ID ne -->
                               <!-- Joblist -->
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a dui sit amet sapien accumsan blandit eget porttitor sapien. Mauris faucibus arcu eu facilisis aliquet. Etiam nec iaculis arcu. Nullam euismod quam a ligula egestas,
                                a dapibus ante consequat. Curabitur id consectetur leo. Curabitur sodales eget urna ut dignissim. Pellentesque sodales neque a consectetur maximus

                                <div class="custom-control custom-checkbox checkbox-lg">
                                    <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                                    <label class="custom-control-label" for="defaultUnchecked"></label>
                                </div>
                            </div>
                            <hr>
                        </div>
                    <!-- end for each -->
                </div>


            </div>
                <button type="submit" class="btn btn-primary container-fluid shadow-sm">Selesai</button>

            </div>
        </div>
@endsection
