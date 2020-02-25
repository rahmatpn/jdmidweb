@extends('layouts.editbar')

@section('content')
    <!-- Jumbotron -->
    <div class="card card-image" style="background-image: url('https://images.pexels.com/photos/635041/pexels-photo-635041.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260'); background-position: center; background-size: cover">
        <div class="text-white text-center rgba-stylish-strong py-5 px-4">
            <div class="py-5">

                <!-- Content -->
                <br/>
                <h2 class="card-title h2 my-4 py-2">Edit Profile</h2>
                <br/>

            </div>
        </div>
    </div>

    @auth('hotel')
        <form action="{{url('/hotel/'.$hotel->profile->url_slug)}}" enctype="multipart/form-data"  data-toggle="validator" method="post">
            @endauth
            @auth('admin')
                <form action="{{url('admin/hotel/'.$hotel->profile->url_slug)}}" enctype="multipart/form-data"  data-toggle="validator" method="post">
                @endauth
    @csrf
    @method('PATCH')
    <!-- Jumbotron -->
        <div class="container my-5">
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
                        <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') ?? $hotel->profile->nama}}" aria-label="Sizing example input" aria-describedby="inputGroupMaterial-sizing-default">
                        @if($errors->has('nama'))
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('nama') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="md-form input-group mb-3 col-xl">
                        <div class="input-group-prepend">
                            <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-default">Http://</span>
                        </div>
                        <input type="text" class="form-control" id="website" name="website" value="{{ old('website') ?? $hotel->profile->website}}"aria-label="Sizing example input" aria-describedby="inputGroupMaterial-sizing-default">
                    </div>


                </div>


                <div class="md-form input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-default">Nomor Telepon</span>
                    </div>
                    <input type="number" class="form-control" id="nomor_telepon" name="nomor_telepon" value="{{ old('nomor_telepon') ?? $hotel->profile->nomor_telepon}}" aria-label="Sizing example input" aria-describedby="inputGroupMaterial-sizing-default">
                    @if($errors->has('nomor_telepon'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('nomor_telepon') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="md-form input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-default">Deskripsi</span>
                    </div>
                    <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="{{ old('social_media') ?? $hotel->profile->deskripsi}}" aria-label="Sizing example input" aria-describedby="inputGroupMaterial-sizing-default">
                    @if($errors->has('deskripsi'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('deskripsi') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="md-form input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-default">Social Media</span>
                    </div>
                    <input type="text" class="form-control" id="social_media" name="social_media" value="{{ old('social_media') ?? $hotel->profile->social_media}}" aria-label="Sizing example input" aria-describedby="inputGroupMaterial-sizing-default">
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
                    <textarea id="alamat" class="md-textarea form-control" rows="3" name="alamat">
                    {{ old('alamat') ?? $hotel->profile->alamat}}
                </textarea>
                </div>


                <!-- Section description -->
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
                            <input id="upload" type="file" onchange="readURL(this);" class="form-control border-0" name="foto" >
                            <label id="upload-label" for="upload" class="font-weight-light text-muted">Pilih File</label>
                        </div>

                        <!-- Uploaded image area-->
                        <p class="font-italic text-muted text-center">The image uploaded will be rendered inside the box below.</p>
                        <div class="image-area mt-4"><img id="imageResult" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block"></div>


                    </div>
                </div>
            </section>


            <button class="btn rounded btn-primary" type="submit">Save Changes</button>
        </div>
    </form>
</form>
        {{--        <div class="container">--}}
{{--        <form action="/hotel/{{$hotel->profile->url_slug}}" enctype="multipart/form-data" method="post">--}}
{{--            @csrf--}}
{{--            @method('PATCH')--}}
{{--            <div class="container">--}}
{{--                <div class="row  flex-lg-nowrap float-left">--}}
{{--                    <div class="col-md-12 col-lg-auto mb-auto" style="width: 250px;">--}}
{{--                        <div class="card rounded-right shadow p-4">--}}
{{--                            <div class="text-center">--}}
{{--                                <img src="{{$hotel->profile->hotelPhoto()}}" class="card-img-top img-fluid" alt="avatar">--}}
{{--                                <h6>Upload Foto</h6>--}}
{{--                                <input type="file" class="form-control-file" id="foto" name="foto">--}}
{{--                                @if($errors->has('foto'))--}}
{{--                                    <strong>{{ $errors->first('foto') }}</strong>--}}
{{--                                @endif--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--    <div class="row">--}}
{{--        <div class="col mb-3">--}}
{{--            <div class="card shadow">--}}
{{--                <div class="card-body">--}}
{{--                    <div class="e-profile">--}}
{{--                        <div class="tab-content pt-3">--}}
{{--                            <div class="tab-pane active">--}}
{{--                                    <h2>Edit Profil</h2>--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col">--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col">--}}
{{--                                                    <div class="form-group">--}}
{{--                                                        <label for="nama">Nama</label>--}}

{{--                                                        <input id="nama"--}}
{{--                                                               type="text"--}}
{{--                                                               class="form-control @error('nama') is-invalid @enderror"--}}
{{--                                                               name="nama"--}}
{{--                                                               value="{{ old('nama')?? $hotel->profile->nama}}"--}}
{{--                                                               autocomplete="nama" autofocus>--}}

{{--                                                        @if($errors->has('nama'))--}}
{{--                                                            <span class="invalid-feedback" role="alert">--}}
{{--                            <strong>{{ $errors->first('nama') }}</strong>--}}
{{--                        </span>--}}
{{--                                                        @endif--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="col">--}}
{{--                                                    <div class="form-group">--}}
{{--                                                        <label for="website">Website</label>--}}
{{--                                                        <div class="input-group">--}}
{{--                                                            <div class="input-group-prepend">--}}
{{--                                                                <span class="input-group-text">https://</span>--}}
{{--                                                            </div>--}}
{{--                                                        <input id="website"--}}
{{--                                                               type="text"--}}
{{--                                                               class="form-control @error('website') is-invalid @enderror"--}}
{{--                                                               name="website"--}}
{{--                                                               value="{{ old('website' ) ?? $hotel->profile->website}}"--}}
{{--                                                               autocomplete="website" autofocus>--}}

{{--                                                        @if($errors->has('website'))--}}
{{--                                                            <span class="invalid-feedback" role="alert">--}}
{{--                            <strong>{{ $errors->first('website') }}</strong>--}}
{{--                        </span>--}}
{{--                                                        @endif--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col">--}}
{{--                                                    <div class="form-group">--}}
{{--                                                        <label for="nomor_telepon">Nomor Telepon</label>--}}

{{--                                                        <input id="nomor_telepon"--}}
{{--                                                               type="text"--}}
{{--                                                               class="form-control @error('nomor_telepon') is-invalid @enderror"--}}
{{--                                                               name="nomor_telepon"--}}
{{--                                                               value="{{ old('nomor_telepon')?? $hotel->profile->nomor_telepon }}"--}}
{{--                                                               autocomplete="nomor_telepon" autofocus>--}}

{{--                                                        @if($errors->has('nomor_telepon'))--}}
{{--                                                            <span class="invalid-feedback" role="alert">--}}
{{--                            <strong>{{ $errors->first('nomor_telepon') }}</strong>--}}
{{--                        </span>php--}}
{{--                                                        @endif--}}

{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col">--}}
{{--                                                    <div class="form-group">--}}
{{--                                                        <label>Social Media</label>--}}
{{--                                                        <div class="input-group">--}}
{{--                                                            <div class="input-group-prepend">--}}
{{--                                                                <span class="input-group-text">Instagram</span>--}}
{{--                                                            </div>--}}
{{--                                                            <input id="social_media"--}}
{{--                                                                   type="text"--}}
{{--                                                                   class="form-control @error('social_media') is-invalid @enderror"--}}
{{--                                                                   name="social_media"--}}
{{--                                                                   value="{{ old('social_media') ?? $hotel->profile->social_media}}"--}}
{{--                                                                   autocomplete="social_media" placeholder="Instagram" autofocus>--}}

{{--                                                            @if($errors->has('social_media'))--}}
{{--                                                                <span class="invalid-feedback" role="alert">--}}
{{--                                                                    <strong>{{ $errors->first('social_media') }}</strong>--}}
{{--                                                                </span>--}}
{{--                                                            @endif--}}
{{--                                                        </div>--}}

{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col mb-3">--}}
{{--                                                    <div class="form-group">--}}
{{--                                                        <label>Alamat</label>--}}
{{--                                                        --}}{{--                                                            <textarea class="form-control" rows="5" placeholder="Alamat"></textarea>--}}
{{--                                                        <input id="alamat"--}}
{{--                                                               type="text"--}}
{{--                                                               class="form-control @error('alamat') is-invalid @enderror"--}}
{{--                                                               name="alamat"--}}
{{--                                                               value="{{ old('alamat') ?? $hotel->profile->alamat}}"--}}
{{--                                                               autocomplete="alamat" placeholder="Alamat" autofocus>--}}

{{--                                                        @if($errors->has('alamat'))--}}
{{--                                                            <span class="invalid-feedback" role="alert">--}}
{{--                            <strong>{{ $errors->first('alamat') }}</strong>--}}
{{--                        </span>--}}
{{--                                                        @endif--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col d-flex justify-content-end">--}}
{{--                                            <button class="btn btn-primary" type="submit">Save Changes</button>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--        </form>--}}
{{--    </div>--}}


@endsection
