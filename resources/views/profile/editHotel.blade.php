@extends('layouts.auth')

@section('content')
    <div class="container">
        <form action="/hotel/{{$hotel->id}}" enctype="multipart/form-data" method="post">
            @csrf
            @method('PATCH')
            <div class="container">
                <div class="row  flex-lg-nowrap float-left">
                    <div class="col-md-12 col-lg-auto mb-auto" style="width: 250px;">
                        <div class="card rounded-right shadow p-4">
                            <div class="text-center">
                                <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
                                <h6>Upload Foto</h6>
                                <input type="file" class="form-control-file" id="foto" name="foto">
                                @if($errors->has('foto'))
                                    <strong>{{ $errors->first('foto') }}</strong>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>

    <div class="row">
        <div class="col mb-3">
            <div class="card shadow">
                <div class="card-body">
                    <div class="e-profile">
                        <div class="tab-content pt-3">
                            <div class="tab-pane active">
                                    <h2>Edit Profil</h2>
                                    <div class="row">
                                        <div class="col">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="nama">Nama</label>

                                                        <input id="nama"
                                                               type="text"
                                                               class="form-control @error('nama') is-invalid @enderror"
                                                               name="nama"
                                                               value="{{ old('nama')?? $hotel->profile->nama}}"
                                                               autocomplete="nama" autofocus>

                                                        @if($errors->has('nama'))
                                                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('nama') }}</strong>
                        </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="website">Website</label>
                                                        <input id="website"
                                                               type="text"
                                                               class="form-control @error('website') is-invalid @enderror"
                                                               name="website"
                                                               value="{{ old('website' ) ?? $hotel->profile->website}}"
                                                               autocomplete="website" autofocus>

                                                        @if($errors->has('website'))
                                                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('website') }}</strong>
                        </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="nomor_telepon">Nomor Telepon</label>

                                                        <input id="nomor_telepon"
                                                               type="text"
                                                               class="form-control @error('nomor_telepon') is-invalid @enderror"
                                                               name="nomor_telepon"
                                                               value="{{ old('nomor_telepon')?? $hotel->profile->nomor_telepon }}"
                                                               autocomplete="nomor_telepon" autofocus>

                                                        @if($errors->has('nomor_telepon'))
                                                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('nomor_telepon') }}</strong>
                        </span>php
                                                        @endif

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label>Social Media</label>
                                                        <input id="social_media"
                                                               type="text"
                                                               class="form-control @error('social_media') is-invalid @enderror"
                                                               name="social_media"
                                                               value="{{ old('social_media') ?? $hotel->profile->social_media}}"
                                                               autocomplete="social_media" placeholder="Instagram" autofocus>

                                                        @if($errors->has('social_media'))
                                                            <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $errors->first('social_media') }}</strong>
                                                                </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col mb-3">
                                                    <div class="form-group">
                                                        <label>Alamat</label>
                                                        {{--                                                            <textarea class="form-control" rows="5" placeholder="Alamat"></textarea>--}}
                                                        <textarea id="alamat"
                                                               type="text"
                                                               class="form-control @error('alamat') is-invalid @enderror"
                                                               name="alamat"
                                                               value="{{ old('alamat') ?? $hotel->profile->alamat}}"
                                                               autocomplete="alamat" autofocus>
                                                        </textarea>
                                                        @if($errors->has('alamat'))
                                                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('alamat') }}</strong>
                        </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{--                                        <div class="row">--}}
                                    {{--                                            <div class="col-12 col-sm-6 mb-3">--}}
                                    {{--                                                <div class="mb-2"><b>Change Password</b></div>--}}
                                    {{--                                                <div class="row">--}}
                                    {{--                                                    <div class="col">--}}
                                    {{--                                                        <div class="form-group">--}}
                                    {{--                                                            <label>Current Password</label>--}}
                                    {{--                                                            <input class="form-control" type="password" placeholder="••••••">--}}
                                    {{--                                                        </div>--}}
                                    {{--                                                    </div>--}}
                                    {{--                                                </div>--}}
                                    {{--                                                <div class="row">--}}
                                    {{--                                                    <div class="col">--}}
                                    {{--                                                        <div class="form-group">--}}
                                    {{--                                                            <label>New Password</label>--}}
                                    {{--                                                            <input class="form-control" type="password" placeholder="••••••">--}}
                                    {{--                                                        </div>--}}
                                    {{--                                                    </div>--}}
                                    {{--                                                </div>--}}
                                    {{--                                                <div class="row">--}}
                                    {{--                                                    <div class="col">--}}
                                    {{--                                                        <div class="form-group">--}}
                                    {{--                                                            <label>Confirm <span class="d-none d-xl-inline">Password</span></label>--}}
                                    {{--                                                            <input class="form-control" type="password" placeholder="••••••"></div>--}}
                                    {{--                                                    </div>--}}
                                    {{--                                                </div>--}}
                                    {{--                                            </div>--}}
                                    {{--                                        </div>--}}
                                    <div class="row">
                                        <div class="col d-flex justify-content-end">
                                            <button class="btn btn-primary" type="submit">Save Changes</button>
                                        </div>
                                    </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </form>
    </div>


@endsection
