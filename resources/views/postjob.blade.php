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
                    <label for="posisi">Posisi:</label>
                    <select name="posisi" class="form-control" id="posisi" multiple="multiple">
                        <option value="1">A</option>
                        <option value="2">B</option>
                        <option value="3">C</option>
                        <option value="4">D</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="waktu_mulai">Waktu Mulai:</label>
                    <input type="text" class="form-control" name="mulai" required="required">
                </div>
                <div class="form-group">
                    <label for="selesai">Waktu Selesai:</label>
                    <input type="number" class="form-control" name="selesai" required="required">
                </div>
                <div class="form-group">
                    <label for="kuota">Kuota: </label>
                    <input type="number" class="form-control" name="kuota" required="required">
                </div>
                <div class="form-group">
                    <label for="fee">Bayaran:</label>
                    <input type="text" class="form-control" name="bayaran" required="required"/>
                </div>
                <div class="form-group">
                    <label for="desktripsi">Deskripsi:</label>
                    <textarea type="text" class="form-control" name="deskripsi" required="required"></textarea>
                </div>
                <input type="submit" class="btn btn-primary" value="Simpan Data">
            </form>
        </div>
    </div>
</div>
@endsection
