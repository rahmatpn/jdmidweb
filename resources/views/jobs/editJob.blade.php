@extends('layouts.editbar')

@section('content')
    <form action="/job/update" enctype="multipart/form-data" method="post">
        @foreach($pekerjaan as $p)
        <div class="container my-5 py-5">
                                {{ csrf_field() }}
                        <section>
                            <!-- Section heading -->
                            <h3 class="font-weight-bold black-text mb-4 pb-2 text-center">Edit Job</h3>
                            <hr class="w-header">
                            <div class="row">
                                <div class="md-form input-group mb-3 col-xl">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-default">Area</span>
                                    </div>
                                    <input type="text" class="form-control" id="area" name="area" value="{{$p->area}}" aria-label="Sizing example input" aria-describedby="inputGroupMaterial-sizing-default">
                                </div>
                                <div class="md-form input-group mb-3 col-xl">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-default">Tanggal Mulai</span>
                                    </div>
                                    <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai" value="{{$p->tanggal_mulai}}"aria-label="Sizing example input" aria-describedby="inputGroupMaterial-sizing-default">
                                </div>

                            </div>

                            <div class="md-form input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-default">Posisi</span>
                                </div>
                                <select class="browser-default custom-select rounded" id="posisi_id" name="posisi_id">
                                                                        <option selected>{{$p->posisi_id}}</option>
                                                                        <option value="1">Laundry</option>
                                                                        <option value="2">Pool Maintenance</option>
                                                                        <option value="3">Equipment Maintenance</option>
                                                                        <option value="4">Receptionist</option>
                                                                        <option value="5">Porter</option>
                                                                        <option value="6">Security</option>
                                                                        <option value="7">Valet</option>
                                                                        <option value="8">Concierge</option>
                                                                        <option value="9">House Keeping</option>
                                                                        <option value="10">Room Service</option>
                                                                        <option value="11">Waiter/Waitress</option>
                                                                        <option value="12">Crew Restaurant</option>
                                                                        <option value="13">Barista</option>
                                                                        <option value="14">Photographer</option>
                                                                        <option value="15">Cleaning Service</option>
                                </select>
                            </div>

                            <div class="row">
                            <div class="md-form input-group mb-3 col-xl">
                                <div class="input-group-prepend">
                                    <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-default">Waktu Mulai</span>
                                </div>
                                <input type="time" class="form-control" id="waktu_mulai" name="waktu_mulai" value="{{$p->waktu_mulai}}" aria-label="Sizing example input" aria-describedby="inputGroupMaterial-sizing-default">
                            </div>
                            <div class="md-form input-group mb-3 col-xl">
                                <div class="input-group-prepend">
                                    <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-default">Waktu Selesai</span>
                                </div>
                                <input type="time" class="form-control" id="waktu_selesai" name="waktu_selesai" value="{{$p->waktu_selesai}}" aria-label="Sizing example input" aria-describedby="inputGroupMaterial-sizing-default">
                            </div>
                            </div>
                        </section>
            <section>

                <hr class="w-header my-3">

                            <div class="row">
                                <div class="md-form input-group mb-3 col-xl">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-default">Tinggi Minimal</span>
                                    </div>
                                    <input type="number" class="form-control" id="tinggi_minimal" name="tinggi_minimal" value="{{$p->tinggi_minimal}}" aria-label="Sizing example input" aria-describedby="inputGroupMaterial-sizing-default">
                                    <div class="input-group-append">
                                        <span class="input-group-text md-addon" id="material-addon2">Cm</span>
                                    </div>
                                </div>
                                <div class="md-form input-group mb-3 col-xl">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-default">Tinggi Maksimal</span>
                                    </div>
                                    <input type="number" class="form-control" id="tinggi_maksimal" name="tinggi_maksimal" value="{{$p->tinggi_maksimal}}" aria-label="Sizing example input" aria-describedby="inputGroupMaterial-sizing-default">
                                    <div class="input-group-append">
                                        <span class="input-group-text md-addon" id="material-addon2">Cm</span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="md-form input-group mb-3 col-xl">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-default">Berat Minimal</span>
                                    </div>
                                    <input type="number" class="form-control" id="berat_minimal" name="berat_minimal" value="{{$p->berat_minimal}}" aria-label="Sizing example input" aria-describedby="inputGroupMaterial-sizing-default">
                                    <div class="input-group-append">
                                        <span class="input-group-text md-addon" id="material-addon2">Kg</span>
                                    </div>
                                </div>
                                <div class="md-form input-group mb-3 col-xl">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-default">Tinggi Maksimal</span>
                                    </div>
                                    <input type="number" class="form-control" id="berat_maksimal" name="berat_maksimal" value="{{$p->berat_maksimal}}" aria-label="Sizing example input" aria-describedby="inputGroupMaterial-sizing-default">
                                    <div class="input-group-append">
                                        <span class="input-group-text md-addon" id="material-addon2">Kg</span>
                                    </div>
                                </div>
                            </div>
            </section>
            <section>
                <hr class="w-header my-3">
                <div class="md-form input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-default">Kuota</span>
                    </div>
                    <input type="number" class="form-control" id="kuota" name="kuota" value="{{$p->kuota}}" aria-label="Sizing example input" aria-describedby="inputGroupMaterial-sizing-default">
                </div>

                <div class="md-form input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-default">Bayaran</span>
                        <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-default">Rp:</span>
                    </div>
                    <input type="number" class="form-control" id="kuota" name="kuota" value="{{$p->bayaran}}" aria-label="Sizing example input" aria-describedby="inputGroupMaterial-sizing-default">
                </div>


                <div class="md-form input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-default">Deskripsi</span>
                    </div>
                    <textarea id="my-summernote" name="deskripsi" type="text">{{$p->deskripsi}}</textarea>
                </div>
                <div class="row">
                    <input type="submit" class="btn btn-primary shadow-sm" value="Simpan Data">
                </div>

            </section>

        </div>
        @endforeach
    </form>

{{--    <div class="row">--}}
{{--        <div class="col-sm-8 offset-sm-2">--}}
{{--            <div class="container my-3">--}}
{{--                @foreach($pekerjaan as $p)--}}

{{--                <form action="/job/update" enctype="multipart/form-data" method="post">--}}
{{--                    {{ csrf_field() }}--}}


{{--                    <section>--}}
{{--                        <!-- Section heading -->--}}
{{--                        <h3 class="font-weight-bold black-text mb-4 pb-2 text-center">Biodata</h3>--}}
{{--                        <hr class="w-header">--}}

{{--                    </section>--}}
{{--                        <input type="hidden" name="id" value="{{ $p->id}}">--}}
{{--                        <div class="row">--}}
{{--                        <div class="col">--}}
{{--                            <div class="form-group">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="area">Area:</label>--}}
{{--                                    <input type="text"--}}
{{--                                           class="form-control"--}}
{{--                                           name="area"--}}
{{--                                           value="{{$p->area}}">--}}
{{--                                </div>--}}
{{--                                <label for="posisi">Posisi</label>--}}
{{--                                <div class="input-group mb-3">--}}
{{--                                    <select class="browser-default custom-select" id="posisi_id" name="posisi_id">--}}
{{--                                        <option selected>{{$p->posisi_id}}</option>--}}
{{--                                        <option value="1">Laundry</option>--}}
{{--                                        <option value="2">Pool Maintenance</option>--}}
{{--                                        <option value="3">Equipment Maintenance</option>--}}
{{--                                        <option value="4">Receptionist</option>--}}
{{--                                        <option value="5">Porter</option>--}}
{{--                                        <option value="6">Security</option>--}}
{{--                                        <option value="7">Valet</option>--}}
{{--                                        <option value="8">Concierge</option>--}}
{{--                                        <option value="9">House Keeping</option>--}}
{{--                                        <option value="10">Room Service</option>--}}
{{--                                        <option value="11">Waiter/Waitress</option>--}}
{{--                                        <option value="12">Crew Restaurant</option>--}}
{{--                                        <option value="13">Barista</option>--}}
{{--                                        <option value="14">Photographer</option>--}}
{{--                                        <option value="15">Cleaning Service</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="tanggal_mulai">Tanggal Mulai:</label>--}}
{{--                        <input type="date"--}}
{{--                               class="form-control"--}}
{{--                               name="tanggal_mulai"--}}

{{--                                value="{{$p->tanggal_mulai}}"   >--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="waktu_mulai">Waktu Mulai:</label>--}}
{{--                        <input type="time"--}}
{{--                               class="form-control"--}}
{{--                               name="waktu_mulai" value="{{$p->waktu_mulai}}">--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="waktu_selesai">Waktu Selesai:</label>--}}
{{--                        <input type="time"--}}
{{--                               class="form-control"--}}
{{--                               name="waktu_selesai"--}}
{{--                               value="{{$p->waktu_selesai}}">--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="tinggi_minimal">Tinggi Minimal:</label>--}}
{{--                        <div class="input-group">--}}
{{--                            <input type="number"--}}
{{--                                   class="form-control"--}}
{{--                                   name="tinggi_minimal" value="{{$p->tinggi_minimal}}">--}}
{{--                            <div class="input-group-append">--}}
{{--                            <span class="input-group-text">--}}
{{--                                Cm--}}
{{--                            </span>--}}
{{--                            </div>--}}
{{--                        </div>--}}


{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="tinggi_maksimal">Tinggi Maksimal:</label>--}}
{{--                        <div class="input-group">--}}
{{--                            <input type="number"--}}
{{--                                   class="form-control"--}}
{{--                                   name="tinggi_maksimal" value="{{$p->tinggi_maksimal}}">--}}
{{--                                <div class="input-group-append">--}}
{{--                                    <span class="input-group-text">--}}
{{--                                        Cm--}}
{{--                                    </span>--}}
{{--                                </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="berat_minimal">Berat Minimal:</label>--}}
{{--                        <div class="input-group">--}}
{{--                            <input type="number"--}}
{{--                                   class="form-control"--}}
{{--                                   name="berat_minimal" value="{{$p->berat_minimal}}">--}}
{{--                            <div class="input-group-append">--}}
{{--                                <span class="input-group-text">--}}
{{--                                    Kg--}}
{{--                                </span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="berat_maksimal">Berat Maksimal:</label>--}}
{{--                        <div class="input-group">--}}
{{--                            <input type="number"--}}
{{--                                   class="form-control"--}}
{{--                                   name="berat_maksimal"--}}
{{--                                   value="{{$p->berat_maksimal}}">--}}
{{--                            <div class="input-group-append">--}}
{{--                                <span class="input-group-text">--}}
{{--                                    Kg--}}
{{--                                </span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="kuota">Kuota: </label>--}}
{{--                        <input type="number"--}}
{{--                               class="form-control"--}}
{{--                               name="kuota"--}}
{{--                               value="{{$p->kuota}}">--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="bayaran">Bayaran:</label>--}}
{{--                        <div class="input-group">--}}
{{--                            <div class="input-group-prepend">--}}
{{--                                <span class="input-group-text">--}}
{{--                                    Rp--}}
{{--                                </span>--}}
{{--                            </div>--}}
{{--                            <input type="text"--}}
{{--                                   id="currencyField"--}}
{{--                                   class="form-control currency"--}}
{{--                                   name="bayaran"--}}
{{--                                   value="{{$p->bayaran}}">--}}

{{--                        </div>--}}

{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="deskripsi">Deskripsi:</label>--}}
{{--                        <textarea id="my-summernote" name="deskripsi" type="text">{{$p->deskripsi}}</textarea>--}}

{{--                    </div>--}}
{{--                    <input type="submit" class="btn btn-primary" value="Simpan Data">--}}
{{--                </form>--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

@endsection
