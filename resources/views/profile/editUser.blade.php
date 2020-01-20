@extends('layouts.auth')

@section('content')
    <div class="container">
            <form action="/p" enctype="multipart/form-data" method="post">
                @csrf
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
                                   value="{{ old('nama') }}"
                                   autocomplete="nama" autofocus>

                            @if($errors->has('nama'))
                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                            @endif
                        </div>
                        <div class="form-group row">
                            <label for="nama lengkap" class="col-md-4 col-form-label">Nama lengkap</label>

                            <input id="nama lengkap"
                                   type="text"
                                   class="form-control @error('nama lengkap') is-invalid @enderror"
                                   name="nama lengkap"
                                   value="{{ old('nama lengkap') }}"
                                   autocomplete="nama lengkap" autofocus>

                            @if($errors->has('nama lengkap'))
                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                            @endif
                        </div>
                        <div class="form-group row">
                            <label for="noTelp" class="col-md-4 col-form-label">Nomor Telepon</label>

                            <input id="noTelp"
                                   type="text"
                                   class="form-control @error('noTelp') is-invalid @enderror"
                                   name="noTelp"
                                   value="{{ old('noTelp') }}"
                                   autocomplete="noTelp" autofocus>

                            @if($errors->has('noTelp'))
                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                            @endif
                        </div>
                        <div class="form-group row">
                            <label for="jenis kelamin" class="col-md-4 col-form-label">Jenis Kelamin</label>

                            <input id="jenis kelamin"
                                   type="text"
                                   class="form-control @error('jenis kelamin') is-invalid @enderror"
                                   name="jenis kelamin"
                                   value="{{ old('jenis kelamin') }}"
                                   autocomplete="jenis kelamin" autofocus>

                            @if($errors->has('jenis kelamin'))
                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                            @endif
                        </div>
                        <div class="form-group row">
                            <label for="alamat" class="col-md-4 col-form-label">Alamat</label>

                            <input id="alamat"
                                   type="text"
                                   class="form-control @error('alamat') is-invalid @enderror"
                                   name="alamat"
                                   value="{{ old('alamat') }}"
                                   autocomplete="alamat" autofocus>

                            @if($errors->has('alamat'))
                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                            @endif
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label">E-mail</label>

                            <input id="email"
                                   type="text"
                                   class="form-control @error('email') is-invalid @enderror"
                                   name="email"
                                   value="{{ old('email') }}"
                                   autocomplete="email" autofocus>

                            @if($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                            @endif
                        </div>
                        <div class="form-group row">
                            <label for="socialMedia" class="col-md-4 col-form-label">Social Media</label>

                            <input id="socialMedia"
                                   type="text"
                                   class="form-control @error('socialMedia') is-invalid @enderror"
                                   name="socialMedia"
                                   value="{{ old('socialMedia') }}"
                                   autocomplete="socialMedia" autofocus>

                            @if($errors->has('socialMedia'))
                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                            @endif
                        </div>
                        <div class="form-group row">
                            <label for="pendidikanTerakhir" class="col-md-4 col-form-label">Pendidikan terakhir</label>

                            <input id="pendidikanTerakhir"
                                   type="text"
                                   class="form-control @error('pendidikanTerakhir') is-invalid @enderror"
                                   name="pendidikanTerakhir"
                                   value="{{ old('pendidikanTerakhir') }}"
                                   autocomplete="pendidikanTerakhir" autofocus>

                            @if($errors->has('pendidikanTerakhir'))
                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                            @endif
                        </div>


                        <div class="row">
                            <label for="image" class="col-md-4 col-form-label">Foto</label>

                            <input type="file" class="form-control-file" id="image" name="image">
                            @if($errors->has('image'))

                                <strong>{{ $errors->first('image') }}</strong>

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
