@extends('layouts.auth')


@section('content')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <div class="container">
            <form action="/hotel/" enctype="multipart/form-data" method="post">
            <a href="/hotel/{hotel}" class="btn btn-info" role="button"> Kembali</a>
            <br/>
            <br/>

                {{ csrf_field() }}
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="pendidikan_terakhir">Posisi</label>
                            <div class="input-group mb-3">
                                <select class="custom-select" id="pendidikan_terakhir" name="pendidikan_terakhir">
                                    <option selected>Test</option>
                                    <option value="SD" >Laundry</option>
                                    <option value="SMP">Pool Maintenance</option>
                                    <option value="SMA">Equipment Maintenance</option>
                                    <option value="Diploma">Receptionist</option>
                                    <option value="S1">Porter</option>
                                    <option value="S2">Sequrity</option>
                                    <option value="S3">Valet</option>
                                    <option value="S1">Concierge</option>
                                    <option value="S2">House Keeping</option>
                                    <option value="S3">Room Service</option>
                                    <option value="S1">Waiter/Waitress</option>
                                    <option value="S2">Crew Restaurant</option>
                                    <option value="S3">Barista</option>
                                    <option value="S1">Photographer</option>
                                </select>
                            </div>
                        </div>
                    </div>
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
