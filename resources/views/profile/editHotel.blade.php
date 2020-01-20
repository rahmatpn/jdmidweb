@extends('layouts.auth')

@section('content')
    <div class="container">
        <form action="/hotel/{{$hotel->id}}" enctype="multipart/form-data" method="post">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="col-8 offset-2">

                    <div class="row">
                        <h1>Edit Profile</h1>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-md-4 col-form-label">Nama</label>

                        <input id="nama"
                               type="text"
                               class="form-control @error('nama') is-invalid @enderror"
                               name="nama"
                               value="{{ old('nama') ?? $hotel->profile->nama}}"
                               autocomplete="nama" autofocus>

                        @if($errors->has('nama'))
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('nama') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-md-4 col-form-label">Alamat</label>

                        <input id="alamat"
                               type="text"
                               class="form-control @error('alamat') is-invalid @enderror"
                               name="alamat"
                               value="{{ old('alamat') ?? $hotel->profile->alamat }}"
                               autocomplete="alamat" autofocus>

                        @if($errors->has('alamat'))
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('alamat') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group row">
                        <label for="nomor_telepon" class="col-md-4 col-form-label">Nomor Telepon</label>

                        <input id="nomor_telepon"
                               type="text"
                               class="form-control @error('nomor_telepon') is-invalid @enderror"
                               name="nomor_telepon"
                               value="{{ old('nomor_telepon') ?? $hotel->profile->nomor_telepon}}"
                               autocomplete="nomor_telepon" autofocus>

                        @if($errors->has('nomor_telepon'))
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('nomor_telepon') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group row">
                        <label for="website" class="col-md-4 col-form-label">website</label>

                        <input id="website"
                               type="text"
                               class="form-control @error('website') is-invalid @enderror"
                               name="website"
                               value="{{ old('website') ?? $hotel->profile->website}}"
                               autocomplete="website" autofocus>

                        @if($errors->has('website'))
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('website') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group row">
                        <label for="social_media" class="col-md-4 col-form-label">Social Media</label>

                        <input id="social_media"
                               type="text"
                               class="form-control @error('social_media') is-invalid @enderror"
                               name="social_media"
                               value="{{ old('social_media') ?? $hotel->profile->social_media}}"
                               autocomplete="social_media" autofocus>

                        @if($errors->has('social_media'))
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('social_media') }}</strong>
                        </span>
                        @endif
                    </div>


                    <div class="row">
                        <label for="foto" class="col-md-4 col-form-label">Foto</label>

                        <input type="file" class="form-control-file" id="foto" name="foto">
                        @if($errors->has('foto'))

                            <strong>{{ $errors->first('foto') }}</strong>

                        @endif
                    </div>

                    <div class="row pt-4">
                        <button class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </form>
    </div>


@endsection