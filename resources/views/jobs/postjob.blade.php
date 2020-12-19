@extends('layouts.editbar')

@section('content')
            <div class="container my-5 py-5">

                <form action="{{url('/job')}}" enctype="multipart/form-data"  data-toggle="validator" method="post">
                    {{ csrf_field() }}
                <section>
                    <!-- Section heading -->
                    <h3 class="font-weight-bold black-text mb-4 pb-2 text-center">Post a Car</h3>
                    <hr class="w-header">
                    <div class="row">
                        <div class="md-form input-group mb-3 col-xl">
                            <div class="input-group-prepend">
                                <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-default">Nama Mobil <span class="text-danger">*</span></span>
                            </div>
                            <input type="text" class="form-control" id="area" name="area" placeholder="Ex. Main Hall" aria-label="Sizing example input" aria-describedby="inputGroupMaterial-sizing-default" data-error="Silahkan Masukkan nama mobil">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="md-form input-group mb-3 col-xl">
                            <div class="input-group-prepend">
                                <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-default">Transmisi <span class="text-danger">*</span></span>
                            </div>
                            <input type ="text" class="form-control" id="transmisi" name="transmisi" aria-label="Sizing example input" aria-describedby="inputGroupMaterial-sizing-default" required>
                        </div>

                    </div>

                    <div class="md-form input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-default">Merk  <span class="text-danger">*</span></span>
                        </div>
                        <select class="browser-default custom-select rounded" required id="posisi_id" name="posisi_id">
                            <option selected>Pilih Merk</option>
                            <option value="1">Honda</option>
                            <option value="2">Nissan</option>
                            <option value="3">Yamaha</option>
                            <option value="4">Suzuki</option>
                            <option value="5">Mitsubishi</option>
                            <option value="6">Mazda</option>
                            <option value="7">Hino</option>
                            <option value="8">Acura</option>
                        </select>
                    </div>

                    <div class="row">
                        <div class="md-form input-group mb-3 col-xl">
                            <div class="input-group-prepend">
                                <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-default">Mesin  <span class="text-danger">*</span></span>
                            </div>
                            <input type="text" class="form-control validate" id="mesin" name="mesin"  aria-label="Sizing example input" aria-describedby="inputGroupMaterial-sizing-default">
                        </div>
                        <div class="md-form input-group mb-3 col-xl">
                            <div class="input-group-prepend">
                                <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-default">Dimensi  <span class="text-danger">*</span></span>
                            </div>
                            <input type="text" class="form-control validate" id="dimensi" name="dimensi" aria-label="Sizing example input" aria-describedby="inputGroupMaterial-sizing-default">
                        </div>
                    </div>
                </section>
                <section>
                <div class="custom-radio mb-3 col-xl">
                        <label class="form-check-label" for="kondisi">
                            <input type="radio"  id="Baru" name="kondisi" value="Baru"> Baru
                        </label>
                    </div>
                    <div class="custom-radio mb-3 col-xl">
                        <label class="form-check-label" for="kondisi">
                            <input type="radio"  id="Lama" name="kondisi" value="Lama" > Lama
                        </label>
                    </div>
                    <hr class="w-header my-3">
                    <div class="md-form input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-default">Warna <span class="text-danger">*</span></span>
                        </div>
                        <input type="text" class="form-control validate" id="warna" name="warna"  aria-label="Sizing example input" aria-describedby="inputGroupMaterial-sizing-default" required>
                    </div>

                    <div class="md-form input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-default">Tahun  <span class="text-danger">*</span></span>
                        </div>
                        <input type="number" class="form-control validate" id="kuota" name="kuota"  aria-label="Sizing example input" aria-describedby="inputGroupMaterial-sizing-default" required>
                    </div>

                    <div class="md-form input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-default">Harga <span class="text-danger">*</span></span>
                            <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-default">Rp:</span>
                        </div>
                        <input type="number" class="form-control validate" id="bayaran" name="bayaran"  aria-label="Sizing example input" aria-describedby="inputGroupMaterial-sizing-default" required>
                    </div>


                    <div class="md-form input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-default">Deskripsi</span>
                        </div>
                        <textarea id="my-summernote" name="deskripsi" type="text"></textarea>
                    </div>




                </section>
                    <section>
                        <!-- Section heading -->
                        <h3 class="font-weight-bold black-text mb-4 pb-2 text-center">Foto</h3>
                        <hr class="w-header">
                        <!-- Section description -->
                        <div class="row py-4">
                            <div class="col-lg-6 mx-auto">

                                <div class="input-group">
            <span class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm">
                <label id="upload-label" for="upload" class="font-weight-light text-muted">Pilih File</label>
                    <input type="file" id="imgInp" class="upload form-control border-0"  name="foto">
            </span>
                                </div>
                                <p class="font-italic text-muted text-center">The image uploaded will be rendered inside the box below.</p>
                                <img id='img-upload' class="img-fluid rounded shadow-sm mx-auto d-block"/>

                            </div>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Simpan Data">
                    </section>
                </form>
            </div>

            <script>
                $(document).ready( function() {
                    function readURL(input) {
                        if (input.files && input.files[0]) {
                            var reader = new FileReader();

                            reader.onload = function (e) {
                                $('#img-upload').attr('src', e.target.result);

                            }

                            reader.readAsDataURL(input.files[0]);
                        }
                    }

                    $("#imgInp").change(function(){
                        readURL(this);
                    });

                    (function() {
                        'use strict';
                        window.addEventListener('load', function() {
// Fetch all the forms we want to apply custom Bootstrap validation styles to
                            var forms = document.getElementsByClassName('needs-validation');
// Loop over them and prevent submission
                            var validation = Array.prototype.filter.call(forms, function(form) {
                                form.addEventListener('submit', function(event) {
                                    if (form.checkValidity() === false) {
                                        event.preventDefault();
                                        event.stopPropagation();
                                    }
                                    form.classList.add('was-validated');
                                }, false);
                            });
                        }, false);
                    })();
                });
            </script>

{{--<div class="row">--}}
{{--    <div class="col-sm-8 offset-sm-2">--}}
{{--        <div class="container">--}}
{{--            <form action="{{url('/job')}}" enctype="multipart/form-data"  data-toggle="validator" method="post">--}}
{{--            <br/>--}}
{{--            <br/>--}}
{{--                {{ csrf_field() }}--}}
{{--                <div class="row">--}}
{{--                    <div class="col">--}}
{{--                        <div class="form-group">--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="area">Area:</label>--}}
{{--                                <input type="text"--}}
{{--                                       class="form-control"--}}
{{--                                       name="area"--}}
{{--                                       placeholder="Ex.Main Hall"--}}
{{--                                       data-error="Silahkan Masukkan Area Kerja."--}}
{{--                                       required/>--}}
{{--                                <div class="help-block with-errors"></div>--}}
{{--                            </div>--}}
{{--                            <label for="posisi_id">Posisi</label>--}}
{{--                            <div class="input-group mb-3">--}}
{{--                                <select class="custom-select" id="posisi_id" name="posisi_id" data-error="Silahkan pilih Posisi Pekerjan" required>--}}
{{--                                    <option selected>Posisi</option>--}}
{{--                                    <option value="1">Laundry</option>--}}
{{--                                    <option value="2">Pool Maintenance</option>--}}
{{--                                    <option value="3">Equipment Maintenance</option>--}}
{{--                                    <option value="4">Receptionist</option>--}}
{{--                                    <option value="5">Porter</option>--}}
{{--                                    <option value="6">Security</option>--}}
{{--                                    <option value="7">Valet</option>--}}
{{--                                    <option value="8">Concierge</option>--}}
{{--                                    <option value="9">House Keeping</option>--}}
{{--                                    <option value="10">Room Service</option>--}}
{{--                                    <option value="11">Waiter/Waitress</option>--}}
{{--                                    <option value="12">Crew Restaurant</option>--}}
{{--                                    <option value="13">Barista</option>--}}
{{--                                    <option value="14">Photographer</option>--}}
{{--                                    <option value="15">Cleaning Service</option>--}}
{{--                                </select>--}}
{{--                            <div class="help-block with-errors"></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="tanggal_mulai">Tanggal Mulai:</label>--}}
{{--                    <input type="date"--}}
{{--                           class="form-control"--}}
{{--                           name="tanggal_mulai"--}}
{{--                           data-error="Silahkan masukkan tanggal mulai"--}}
{{--                           required="required">--}}
{{--                    <div class="help-block with-errors"></div>--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="waktu_mulai">Waktu Mulai:</label>--}}
{{--                    <input type="time"--}}
{{--                           class="form-control"--}}
{{--                           data-error="Silahkan masukkan waktu mulai"--}}
{{--                           name="waktu_mulai"--}}
{{--                           required="required">--}}
{{--                    <div class="help-block with-errors"></div>--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="waktu_selesai">Waktu Selesai:</label>--}}
{{--                    <input type="time"--}}
{{--                           class="form-control"--}}
{{--                           data-error="Silahkan masukkan waktu selesai"--}}
{{--                           name="waktu_selesai"--}}
{{--                           required="required">--}}
{{--                    <div class="help-block with-errors"></div>--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="tinggi_minimal">Tinggi Minimal:</label>--}}
{{--                    <div class="input-group">--}}
{{--                        <input type="number"--}}
{{--                               class="form-control"--}}
{{--                               placeholder="100"--}}
{{--                               name="tinggi_minimal">--}}
{{--                        <div class="input-group-append">--}}
{{--                            <span class="input-group-text">Cm</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="tinggi_maksimal">Tinggi Maksimal:</label>--}}
{{--                    <div class="input-group">--}}
{{--                        <input type="number"--}}
{{--                               class="form-control"--}}
{{--                               placeholder="100"--}}
{{--                               name="tinggi_maksimal">--}}
{{--                        <div class="input-group-append">--}}
{{--                            <span class="input-group-text">Cm</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                <label for="berat_minimal">Berat Minimal:</label>--}}
{{--                <div class="input-group">--}}

{{--                    <input type="number"--}}
{{--                           class="form-control"--}}
{{--                           placeholder="40"--}}
{{--                           name="berat_minimal">--}}
{{--                    <div class="input-group-append">--}}
{{--                        <span class="input-group-text">.00</span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                <label for="berat_maksimal">Berat Maksimal:</label>--}}
{{--                <div class="input-group">--}}

{{--                    <input type="number"--}}
{{--                           class="form-control"--}}
{{--                           placeholder="100"--}}
{{--                           name="berat_maksimal">--}}
{{--                    <div class="input-group-append">--}}
{{--                        <span class="input-group-text">Kg</span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="kuota">Kuota: </label>--}}
{{--                    <input type="number"--}}
{{--                           class="form-control"--}}
{{--                           name="kuota"--}}
{{--                           placeholder="0"--}}
{{--                           data-error="Silahkan masukkan kuota"--}}
{{--                           required="required">--}}
{{--                    <div class="help-block with-errors"></div>--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                <label for="bayaran">Bayaran:</label>--}}
{{--                <div class="input-group">--}}
{{--                    <div class="input-group-prepend">--}}
{{--                        <span class="input-group-text">Rp</span>--}}
{{--                    </div>--}}
{{--                    <input type="text"--}}
{{--                           class="form-control"--}}
{{--                           name="bayaran"--}}
{{--                           data-error="Silahkan masukkan Bayaran"--}}
{{--                           value=""--}}
{{--                           placeholder="Ex 100000"--}}
{{--                           required="required"/>--}}
{{--                    <div class="help-block with-errors"></div>--}}
{{--                    <div class="input-group-append">--}}
{{--                        <span class="input-group-text">.00</span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="deskripsi">Deskripsi:</label>--}}
{{--                    <textarea id="my-summernote" name="deskripsi" type="text"></textarea>--}}

{{--                </div>--}}
{{--                <input type="submit" class="btn btn-primary" value="Simpan Data">--}}
{{--            </form>--}}

{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

@endsection
