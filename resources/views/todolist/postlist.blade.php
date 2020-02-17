@extends('layouts.auth')

@section('content')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <div class="container">
                <form action="/job/{{$pekerjaan->url_slug}}/todolist" enctype="multipart/form-data"  data-toggle="validator" method="post">
                    <a href="{{url('/hotel/'.auth()->user()->profile->url_slug)}}" class="btn btn-info" role="button"> Kembali</a>
                    <br/>
                    <br/>
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="area">Nama Todo List</label>
                                    <input type="text"
                                           class="form-control"
                                           name="nama_pekerjaan"
                                           placeholder=""
                                           data-error="Silahkan Masukkan Daftar Kerja."
                                           required/>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Simpan Data">
                </form>

            </div>
        </div>
    </div>

@endsection
