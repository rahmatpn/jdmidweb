@extends('layouts.auth')

@section('content')
    <div class="container">
            <form action="/user/{{$user->id}}" enctype="multipart/form-data" method="post">
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
                                   value="{{ old('nama') ?? $user->profile->nama}}"
                                   autocomplete="nama" autofocus>

                            @if($errors->has('nama'))
                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('nama') }}</strong>
                        </span>
                            @endif
                        </div>
                        <div class="form-group row">
                            <label for="nama_lengkap" class="col-md-4 col-form-label">Nama lengkap</label>

                            <input id="nama_lengkap"
                                   type="text"
                                   class="form-control @error('nama_lengkap') is-invalid @enderror"
                                   name="nama_lengkap"
                                   value="{{ old('nama_lengkap') }}"
                                   autocomplete="nama_lengkap" autofocus>

                            @if($errors->has('nama_lengkap'))
                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('nama_lengkap') ?? $user->profile->nama_lengkap}}</strong>
                        </span>
                            @endif
                        </div>
                        <div class="form-group row">
                            <label for="nomor_telepon" class="col-md-4 col-form-label">Nomor Telepon</label>

                            <input id="nomor_telepon"
                                   type="text"
                                   class="form-control @error('nomor_telepon') is-invalid @enderror"
                                   name="nomor_telepon"
                                   value="{{ old('nomor_telepon') ?? $user->profile->nomor_telepon}}"
                                   autocomplete="nomor_telepon" autofocus>

                            @if($errors->has('nomor_telepon'))
                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('nomor_telepon') }}</strong>
                        </span>
                            @endif
                        </div>

                        <div class="form-group row">
                            <label for="alamat" class="col-md-4 col-form-label">Alamat</label>

                            <input id="alamat"
                                   type="text"
                                   class="form-control @error('alamat') is-invalid @enderror"
                                   name="alamat"
                                   value="{{ old('alamat') ?? $user->profile->alamat}}"
                                   autocomplete="alamat" autofocus>

                            @if($errors->has('alamat'))
                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('alamat') }}</strong>
                        </span>
                            @endif
                        </div>
                        <div class="form-group row">
                            <label for="social_media" class="col-md-4 col-form-label">Social Media</label>

                            <input id="social_media"
                                   type="text"
                                   class="form-control @error('social_media') is-invalid @enderror"
                                   name="social_media"
                                   value="{{ old('social_media')?? $user->profile->social_media }}"
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
                            <button class="btn btn-primary">Add New Post</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>


@endsection
