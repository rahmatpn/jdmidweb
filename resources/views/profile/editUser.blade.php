@extends('layouts.editbar')

@section('content')
    <!-- Jumbotron -->
    <div class="card card-image" style="background-image: url('https://images.pexels.com/photos/2058128/pexels-photo-2058128.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260'); background-position: center; background-size: cover">
        <div class="text-white text-center rgba-stylish-strong py-5 px-4">
            <div class="py-5">

                <!-- Content -->
                <br/>
                <h2 class="card-title h2 my-4 py-2">Edit Profile</h2>
                <br/>

            </div>
        </div>
    </div>

    <form action="{{url('/user/'.$user->profile->url_slug)}}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PATCH')
    <!-- Jumbotron -->
    <div class="container my-5">
        @if(session()->get('gagalProfile'))
            <div class="alert-danger">{{session()->get('gagalProfile')}}</div>
        @endif

        <!--Section: Content-->
        <section>
            <!-- Section heading -->
            <h3 class="font-weight-bold black-text mb-4 pb-2 text-center">Biodata</h3>
            <hr class="w-header">
            <div class="row">
                <div class="md-form input-group mb-3 col-xl">
                    <div class="input-group-prepend">
                        <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-default">Nama</span>
                    </div>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') ?? $user->profile->nama}}" aria-label="Sizing example input" aria-describedby="inputGroupMaterial-sizing-default">
                    @if($errors->has('nama'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('nama') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="md-form input-group mb-3 col-xl">
                    <div class="input-group-prepend">
                        <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-default">Nama Lengkap</span>
                    </div>
                    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="{{ old('nama_lengkap') ?? $user->profile->nama_lengkap}}"aria-label="Sizing example input" aria-describedby="inputGroupMaterial-sizing-default">
                </div>


            </div>
            <div class="row ">
                <div class="md-form input-group mb-3 col-xl">
                    <div class="input-group-prepend">
                        <span class="input-group-text md-addon col-xl">Jenis Kelamin</span>
                    </div>
                </div>
                </div>

            <div class="custom-radio mb-3 col-xl">
                <label class="form-check-label" for="jenis_kelamin">
                    <input type="radio"  id="P" name="jenis_kelamin" value="P" {{($user->jenis_kelamin==1)?  "checked" : "" }}>Perempuan
                </label>
            </div>
            <div class="custom-radio mb-3 col-xl">
                <label class="form-check-label" for="jenis_kelamin">
                    <input type="radio"  id="L" name="jenis_kelamin" value="L" {{($user->jenis_kelamin==0)?  "checked" : "" }}>Laki-laki
                </label>
            </div>

            <div class="row">
                <div class="md-form input-group mb-3 col-xl">
                    <div class="input-group-prepend">
                        <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-default">Berat Badan</span>
                    </div>
                    <input type="text" class="form-control" id="berat_badan" name="berat_badan" value="{{ old('berat_badan') ?? $user->profile->berat_badan}}" aria-label="Sizing example input" aria-describedby="inputGroupMaterial-sizing-default">
                    @if($errors->has('berat_badan'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('berat_badan') }}</strong>
                        </span>
                    @endif
                    <div class="input-group-append">
                        <span class="input-group-text md-addon">Kg</span>
                    </div>
                </div>
                <div class="md-form input-group mb-3 col-xl">
                    <div class="input-group-prepend">
                        <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-default">Tinggi Badan</span>
                    </div>
                    <input type="text" class="form-control" id="tinggi_badan" name="tinggi_badan" value="{{ old('tinggi_badan') ?? $user->profile->tinggi_badan}}"aria-label="Sizing example input" aria-describedby="inputGroupMaterial-sizing-default">
                    <div class="input-group-append">
                        <span class="input-group-text md-addon">Cm</span>
                    </div>
                </div>



            </div>


            <div class="md-form input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-default">Tanggal Lahir</span>
                </div>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir') ?? $user->profile->tanggal_lahir}}" aria-label="Sizing example input" aria-describedby="inputGroupMaterial-sizing-default">
                @if($errors->has('tanggal_lahir'))
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('tanggal_lahir') }}</strong>
                        </span>
                @endif
            </div>

                <div class="md-form input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-default">Pendidikan Terakhir</span>
                    </div>
                    <select class="custom-select" id="pendidikan_terakhir" name="pendidikan_terakhir">
                        <option selected>{{old('pendidikan_terakhir')?? $user->profile->pendidikan_terakhir}}</option>
                        <option value="SD" {{($user->pendidikan_terakhir=="SD")}}>SD</option>
                        <option value="SMP"{{($user->pendidikan_terakhir=="SMP")}}>SMP</option>
                        <option value="SMA"{{($user->pendidikan_terakhir=="SMA")}}>SMA</option>
                        <option value="Diploma"{{($user->pendidikan_terakhir=="Diploma")}}>Diploma</option>
                        <option value="S1"{{($user->pendidikan_terakhir=="S1")}}>S1</option>
                        <option value="S2"{{($user->pendidikan_terakhir=="S2")}}>S2</option>
                        <option value="S3"{{($user->pendidikan_terakhir=="S3")}}>S3</option>
                    </select>
                </div>
            <div class="md-form input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-default">Nomor Telepon</span>
                </div>
                <input type="number" class="form-control" id="nomor_telepon" name="nomor_telepon" value="{{ old('nomor_telepon') ?? $user->profile->nomor_telepon}}" aria-label="Sizing example input" aria-describedby="inputGroupMaterial-sizing-default">
                @if($errors->has('nomor_telepon'))
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('nomor_telepon') }}</strong>
                        </span>
                @endif
            </div>
            <div class="md-form input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-default">Social Media</span>
                </div>
                <input type="text" class="form-control" id="social_media" name="social_media" value="{{ old('social_media') ?? $user->profile->social_media}}" aria-label="Sizing example input" aria-describedby="inputGroupMaterial-sizing-default">
                @if($errors->has('social_media'))
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('social_media') }}</strong>
                        </span>
                @endif
            </div>
            <div class="md-form input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-default" for="alamat">Alamat</span>
                </div>
                <textarea id="alamat" class="md-textarea form-control" rows="3">
                    {{ old('alamat') ?? $user->profile->alamat}}
                </textarea>
            </div>


            <!-- Section description -->
        </section>
        <section>

            <h3 class="font-weight-bold black-text mb-4 pb-2 text-center">Posisi</h3>
            <hr class="w-header">
            <!-- Section description -->

{{--                <div class="custom-control custom-checkbox custom-control-inline">--}}
{{--                    <input type="checkbox" class="custom-control-input" id="posisi_user" name="posisi_user[]"  value="{{$posisi->id}}" {{($posisi->posisi==1)?  "checked" : "" }}>--}}
{{--                </div>--}}

{{--                <select class="selectpicker form-control" data-style="btn rounded btn-outline-info waves-effect" style="text-decoration-color: black" data-container="body" multiple>--}}
{{--                    @foreach($posisi as $posisi)--}}
{{--                    <option id="posisi_user" type="checkbox" name="posisi_user[]"  value="{{$posisi->id}}" {{($posisi->posisi==1)?  "checked" : "" }}>{{$posisi->nama_posisi}}</option>--}}
{{--                    @endforeach--}}
{{--                </select>--}}

{{--            @foreach($posisi as $posisi)--}}
{{--                <div class="custom-control custom-checkbox custom-control-inline">--}}

{{--                    <input type="checkbox" class="custom-control-input custom" id="posisi_user" name="posisi_user[]"  value="{{$posisi->id}}" {{($posisi->posisi==1)?  "checked" : "" }}>--}}
{{--                    <label class="custom-control-label">{{$posisi->nama_posisi}}--}}
{{--                    </label>--}}
{{--                </div>--}}
{{--                @endforeach--}}
            @foreach($posisi as $posisi)
            <div class="custom-control custom-control-inline">
                <input type="checkbox" class="form-check-input" id="posisi_user" name="posisi_user[]"  value="{{$posisi->id}}" {{($posisi->posisi==1)?  "checked" : "" }}>
                <label for="defaultInline1">{{$posisi->nama_posisi}}</label>
            </div>
            @endforeach
        </section>
        <section>
        <script>
            $(document).ready( function() {
                $(document).on('change', '.btn-file :file', function() {
                    var input = $(this),
                        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
                    input.trigger('fileselect', [label]);
                });

                $('.btn-file :file').on('fileselect', function(event, label) {

                    var input = $(this).parents('.input-group').find(':text'),
                        log = label;

                    if( input.length ) {
                        input.val(log);
                    } else {
                        if( log ) alert(log);
                    }

                });
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
            });
        </script>
            <!-- Section heading -->
            <h3 class="font-weight-bold black-text mb-4 pb-2 text-center">Foto</h3>
            <hr class="w-header">
            <!-- Section description -->
            <div class="row py-4">
                <div class="col-lg-6 mx-auto">

                    <!-- Upload image input-->
                    <div class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm">
                        <input id="upload" type="file" onchange="readURL(this);" class="form-control border-0" id="foto" name="foto" >
                        <label id="upload-label" for="upload" class="font-weight-light text-muted">Pilih File</label>
                    </div>

                    <!-- Uploaded image area-->
                    <p class="font-italic text-muted text-center">The image uploaded will be rendered inside the box below.</p>
                    <div class="image-area mt-4"><img id="imageResult" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block"></div>

                </div>
            </div>
        </section>


        <section>
            <!-- Section heading -->
            <h3 class="font-weight-bold black-text mb-4 pb-2 text-center">Cover</h3>
            <hr class="w-header">
            <!-- Section description -->
            <div class="row py-4">
                <div class="col-lg-6 mx-auto">

                        <div class="input-group">
            <span class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm">
                <label id="upload-label" for="upload" class="font-weight-light text-muted">Pilih File</label>
                    <input type="file" id="imgInp" class="upload form-control border-0"  name="cover">
            </span>
                        </div>
                    <p class="font-italic text-muted text-center">The image uploaded will be rendered inside the box below.</p>
                        <img id='img-upload' class="img-fluid rounded shadow-sm mx-auto d-block"/>

                </div>
            </div>
        </section>
        <button class="btn rounded btn-primary" type="submit">Save Changes</button>
    </div>
    </form>


{{--    <div class="container">--}}
{{--        <form action="/user/{{$user->profile->url_slug}}" enctype="multipart/form-data" method="post">--}}
{{--            @csrf--}}
{{--            @method('PATCH')--}}
{{--            <div class="container">--}}
{{--                <div class="row  flex-lg-nowrap float-left">--}}
{{--                    <div class="col-md-12 col-lg-auto mb-auto" style="width: 250px;">--}}
{{--                        <div class="card rounded-right shadow p-4">--}}
{{--                            <div class="text-center">--}}
{{--                                <img src="{{asset($user->profile->profileFoto())}}" class="avatar img-circle img-thumbnail" alt="avatar">--}}
{{--                                <h6>Upload Foto</h6>--}}
{{--                                <input type="file" class="form-control-file" id="foto" name="foto">--}}
{{--                                @if($errors->has('foto'))--}}
{{--                                    <strong>{{ $errors->first('foto') }}</strong>--}}
{{--                                @endif--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="row  flex-lg-nowrap float-left">--}}
{{--                    <div class="col-md-12 col-lg-auto mb-auto" style="width: 250px;">--}}
{{--                        <div class="card rounded-right shadow p-4">--}}
{{--                            <div class="text-center">--}}
{{--                                <img src="{{asset($user->profile->profileCover())}}" class="avatar img-circle img-thumbnail" alt="avatar">--}}
{{--                                <h6>Upload Cover</h6>--}}
{{--                                <input type="file" class="form-control-file" id="cover" name="cover">--}}
{{--                                @if($errors->has('cover'))--}}
{{--                                    <strong>{{ $errors->first('cover') }}</strong>--}}
{{--                                @endif--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}


{{--            <div class="row">--}}
{{--                <div class="col mb-3">--}}
{{--                    <div class="card shadow">--}}
{{--                        <div class="card-body">--}}
{{--                            <div class="e-profile">--}}
{{--                                <div class="tab-content pt-3">--}}
{{--                                    <div class="tab-pane active">--}}

{{--                                        <h2>Edit Profil</h2>--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col">--}}
{{--                                                <div class="row">--}}
{{--                                                    <div class="col">--}}
{{--                                                        <div class="form-group">--}}
{{--                                                            <label for="nama">Nama</label>--}}
{{--                                                            <input id="nama"--}}
{{--                                                                   type="text"--}}
{{--                                                                   class="form-control @error('nama') is-invalid @enderror"--}}
{{--                                                                   name="nama"--}}
{{--                                                                   value="{{ old('nama') ?? $user->profile->nama}}"--}}
{{--                                                                   autocomplete="nama" autofocus>--}}

{{--                                                            @if($errors->has('nama'))--}}
{{--                                                                <span class="invalid-feedback" role="alert">--}}
{{--                                                            <strong>{{ $errors->first('nama') }}</strong>--}}
{{--                                                                </span>--}}
{{--                                                            @endif--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col">--}}
{{--                                                        <div class="form-group">--}}
{{--                                                            <label for="nama_lengkap">Nama Lengkap</label>--}}
{{--                                                            <input id="nama_lengkap"--}}
{{--                                                                   type="text"--}}
{{--                                                                   class="form-control @error('nama_lengkap') is-invalid @enderror"--}}
{{--                                                                   name="nama_lengkap"--}}
{{--                                                                   value="{{ old('nama_lengkap') ?? $user->profile->nama_lengkap }}"--}}
{{--                                                                   autocomplete="nama_lengkap" autofocus>--}}

{{--                                                            @if($errors->has('nama_lengkap'))--}}
{{--                                                                <span class="invalid-feedback" role="alert">--}}
{{--                                                                <strong>{{ $errors->first('nama_lengkap') }}</strong>--}}
{{--                                                            </span>--}}
{{--                                                            @endif--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="row">--}}
{{--                                                    <div class="col">--}}
{{--                                                        <div class="form-group">--}}
{{--                                                            <label for="jenis_kelamin">Jenis Kelamin</label>--}}
{{--                                                            <div class="form-check">--}}
{{--                                                                <label class="form-check-label" for="jenis_kelamin">--}}
{{--                                                                    <input type="radio"  id="P" name="jenis_kelamin" value="P" {{($user->jenis_kelamin==1)?  "checked" : "" }} >Perempuan--}}
{{--                                                                </label>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="form-check">--}}
{{--                                                                <label class="form-check-label" for="jenis_kelamin">--}}
{{--                                                                    <input type="radio"  id="L" name="jenis_kelamin" value="L" {{($user->jenis_kelamin==0)?  "checked" : "" }}>Laki-laki--}}
{{--                                                                </label>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="row">--}}
{{--                                                    <div class="col">--}}
{{--                                                        <div class="form-group">--}}
{{--                                                            <label for="pendidikan_terakhir">Pendidikan terakhir</label>--}}
{{--                                                            <div class="input-group mb-3">--}}
{{--                                                                <select class="custom-select" id="pendidikan_terakhir" name="pendidikan_terakhir">--}}
{{--                                                                    <option selected>{{old('pendidikan_terakhir')?? $user->profile->pendidikan_terakhir}}</option>--}}
{{--                                                                    <option value="SD" {{($user->pendidikan_terakhir=="SD")}}>SD</option>--}}
{{--                                                                    <option value="SMP"{{($user->pendidikan_terakhir=="SMP")}}>SMP</option>--}}
{{--                                                                    <option value="SMA"{{($user->pendidikan_terakhir=="SMA")}}>SMA</option>--}}
{{--                                                                    <option value="Diploma"{{($user->pendidikan_terakhir=="Diploma")}}>Diploma</option>--}}
{{--                                                                    <option value="S1"{{($user->pendidikan_terakhir=="S1")}}>S1</option>--}}
{{--                                                                    <option value="S2"{{($user->pendidikan_terakhir=="S2")}}>S2</option>--}}
{{--                                                                    <option value="S3"{{($user->pendidikan_terakhir=="S3")}}>S3</option>--}}
{{--                                                                </select>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="row">--}}
{{--                                                    <div class="col">--}}
{{--                                                        <div class="form-group">--}}
{{--                                                            <label for="nomor_telepon">Nomor Telepon</label>--}}
{{--                                                            <input id="nomor_telepon"--}}
{{--                                                                   type="text"--}}
{{--                                                                   class="form-control @error('nomor_telepon') is-invalid @enderror"--}}
{{--                                                                   name="nomor_telepon"--}}
{{--                                                                   value="{{ old('nomor_telepon') ?? $user->profile->nomor_telepon}}"--}}
{{--                                                                   autocomplete="nomor_telepon"--}}
{{--                                                                   placeholder="08XXXXXXXXXX"--}}
{{--                                                                   autofocus>--}}

{{--                                                            @if($errors->has('nomor_telepon'))--}}
{{--                                                                <span class="invalid-feedback" role="alert">--}}
{{--                                                            <strong>{{ $errors->first('nomor_telepon') }}</strong>--}}
{{--                                                            </span>--}}
{{--                                                            @endif--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}

{{--                                                <div class="row">--}}
{{--                                                    <div class="col">--}}
{{--                                                        <div class="form-group">--}}
{{--                                                            <label>Social Media</label>--}}
{{--                                                            <input id="social_media"--}}
{{--                                                                   type="text"--}}
{{--                                                                   class="form-control @error('social_media') is-invalid @enderror"--}}
{{--                                                                   name="social_media"--}}
{{--                                                                   value="{{ old('social_media') ?? $user->profile->social_media}}"--}}
{{--                                                                   autocomplete="social_media" placeholder="Instagram" autofocus>--}}

{{--                                                            @if($errors->has('social_media'))--}}
{{--                                                                <span class="invalid-feedback" role="alert">--}}
{{--                                                                    <strong>{{ $errors->first('social_media') }}</strong>--}}
{{--                                                                </span>--}}
{{--                                                            @endif--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="row">--}}
{{--                                                    <div class="col">--}}
{{--                                                        <div class="form-group">--}}
{{--                                                            <label>Tanggal Lahir</label>--}}
{{--                                                            <input type="date"--}}
{{--                                                                   id="tanggal_lahir"--}}
{{--                                                                   class="form-control"--}}
{{--                                                                   name="tanggal_lahir"--}}
{{--                                                                   value="{{ old('tanggal_lahir') ?? $user->profile->tanggal_lahir}}"--}}
{{--                                                                   required="required">--}}
{{--                                                            <div class="help-block with-errors"></div>--}}

{{--                                                            @if($errors->has('tanggal_lahir'))--}}
{{--                                                                <span class="invalid-feedback" role="alert">--}}
{{--                                                                    <strong>{{ $errors->first('tanggal_lahir') }}</strong>--}}
{{--                                                                </span>--}}
{{--                                                            @endif--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="row">--}}
{{--                                                    <div class="col">--}}
{{--                                                        <div class="form-group">--}}
{{--                                                            <label>Tinggi Badan</label>--}}
{{--                                                            <input id="tinggi_badan"--}}
{{--                                                                   type="number"--}}
{{--                                                                   class="form-control @error('tinggi_badan') is-invalid @enderror"--}}
{{--                                                                   name="tinggi_badan"--}}
{{--                                                                   value="{{ old('tinggi_badan') ?? $user->profile->tinggi_badan}}"--}}
{{--                                                                   autocomplete="tinggi_badan" placeholder="ex 170" autofocus>--}}

{{--                                                            @if($errors->has('tinggi_badan'))--}}
{{--                                                                <span class="invalid-feedback" role="alert">--}}
{{--                                                                    <strong>{{ $errors->first('tinggi_badan') }}</strong>--}}
{{--                                                                </span>--}}
{{--                                                            @endif--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}

{{--                                                <div class="row">--}}
{{--                                                    <div class="col">--}}
{{--                                                        <div class="form-group">--}}
{{--                                                            <label>Berat Badan</label>--}}
{{--                                                            <input id="berat_badan"--}}
{{--                                                                   type="number"--}}
{{--                                                                   class="form-control @error('berat_badan') is-invalid @enderror"--}}
{{--                                                                   name="berat_badan"--}}
{{--                                                                   value="{{ old('berat_badan') ?? $user->profile->berat_badan}}"--}}
{{--                                                                   autocomplete="berat_badan" placeholder="ex 40" autofocus>--}}

{{--                                                            @if($errors->has('berat_badan'))--}}
{{--                                                                <span class="invalid-feedback" role="alert">--}}
{{--                                                                    <strong>{{ $errors->first('berat_badan') }}</strong>--}}
{{--                                                                </span>--}}
{{--                                                            @endif--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}

{{--                                                <div class="row">--}}
{{--                                                    <div class="col">--}}
{{--                                                        <div class="form-group">--}}
{{--                                                            <label>Posisi</label>--}}
{{--                                                            @foreach($posisi as $posisi)--}}
{{--                                                                <div class="form-check">--}}
{{--                                                                    <label class="form-check-label">--}}
{{--                                                                        <input type="checkbox" id="posisi_user" name="posisi_user[]"  value="{{$posisi->id}}" {{($posisi->posisi==1)?  "checked" : "" }}>{{$posisi->nama_posisi}}--}}
{{--                                                                    </label>--}}
{{--                                                                </div>--}}
{{--                                                            @endforeach--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}

{{--                                                <div class="row">--}}
{{--                                                    <div class="col mb-3">--}}
{{--                                                        <div class="form-group">--}}
{{--                                                            <label>Alamat</label>--}}
{{--                                                            --}}{{--       <textarea class="form-control" rows="5" placeholder="Alamat"></textarea>--}}
{{--                                                            <input id="alamat"--}}
{{--                                                                   type="text"--}}
{{--                                                                   class="form-control @error('alamat') is-invalid @enderror"--}}
{{--                                                                   rows="5"--}}
{{--                                                                   name="alamat"--}}
{{--                                                                   autocomplete="alamat" autofocus--}}
{{--                                                                   value="  {{ old('alamat') ?? $user->profile->alamat}} ">--}}

{{--                                                            @if($errors->has('alamat'))--}}
{{--                                                                <span class="invalid-feedback" role="alert">--}}
{{--                                                                     <strong>{{ $errors->first('alamat') }}</strong>--}}
{{--                                                            </span>--}}
{{--                                                            @endif--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col d-flex justify-content-end">--}}
{{--                                                <button class="btn btn-primary" type="submit">Save Changes</button>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}


{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </div>--}}
@endsection
