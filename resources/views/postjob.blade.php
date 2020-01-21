@extends('layouts.auth')


@section('content')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <div class="container">
            <a href="/hotel/{hotel}" class="btn btn-info" role="button"> Kembali</a>
            <br/>
            <br/>

            <form action="/hotel/store" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="first_name">Nama:</label>
                    <input type="text" class="form-control" name="nama" required="required"/>
                </div>
                <div class="form-group">
                    <label for="nama_jabatan">Jabatan:</label>
                    <input type="text" class="form-control" name="jabatan" required="required">
                </div>
                <div class="form-group">
                    <label for="umur">Umur:</label>
                    <input type="number" class="form-control" name="umur" required="required">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat: </label>
                    <textarea name="alamat" class="form-control" required="required"></textarea>
                </div>
                <input type="submit" class="btn btn-primary" value="Simpan Data">
            </form>
        </div>
    </div>
</div>
@endsection
