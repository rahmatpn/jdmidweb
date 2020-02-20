@extends('layouts.auth')

@section('content')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <div class="container">
                @foreach($pekerjaan as $p)
                <form action="/job/update" enctype="multipart/form-data" method="post">
                    {{ csrf_field() }}

                    <br/>
                    <br/>
                        <input type="hidden" name="id" value="{{ $p->id}}">
                        <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <a href="/hotel/{{auth()->user()->id}}" class="btn btn-info" role="button"> Kembali</a>
                                <div class="form-group">
                                    <label for="area">Area:</label>
                                    <input type="text"
                                           class="form-control"
                                           name="area"
                                           value="{{$p->area}}">
                                </div>
                                <label for="posisi">Posisi</label>
                                <div class="input-group mb-3">
                                    <select class="custom-select" id="posisi_id" name="posisi_id">
                                        <option selected>{{$p->posisi_id}}</option>
                                        <option value="1">Laundry</option>
                                        <option value="2">Pool Maintenance</option>
                                        <option value="3">Equipment Maintenance</option>
                                        <option value="4">Receptionist</option>
                                        <option value="5">Porter</option>
                                        <option value="6">Security</option>
                                        <option value="7">Valet</option>
                                        <option value="8">Concierge</option>
                                        <option value="9">House Keeping</option>
                                        <option value="10">Room Service</option>
                                        <option value="11">Waiter/Waitress</option>
                                        <option value="12">Crew Restaurant</option>
                                        <option value="13">Barista</option>
                                        <option value="14">Photographer</option>
                                        <option value="15">Cleaning Service</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_mulai">Tanggal Mulai:</label>
                        <input type="date"
                               class="form-control"
                               name="tanggal_mulai"

                                value="{{$p->tanggal_mulai}}">
                    </div>
                    <div class="form-group">
                        <label for="waktu_mulai">Waktu Mulai:</label>
                        <input type="time"
                               class="form-control"
                               name="waktu_mulai" value="{{$p->waktu_mulai}}">
                    </div>
                    <div class="form-group">
                        <label for="waktu_selesai">Waktu Selesai:</label>
                        <input type="time"
                               class="form-control"
                               name="waktu_selesai"
                               value="{{$p->waktu_selesai}}">
                    </div>
                    <div class="form-group">
                        <label for="tinggi_minimal">Tinggi Minimal:</label>
                        <div class="input-group">
                            <input type="number"
                                   class="form-control"
                                   name="tinggi_minimal" value="{{$p->tinggi_minimal}}">
                            <div class="input-group-append">
                            <span class="input-group-text">
                                Cm
                            </span>
                            </div>
                        </div>


                    </div>
                    <div class="form-group">
                        <label for="tinggi_maksimal">Tinggi Maksimal:</label>
                        <div class="input-group">
                            <input type="number"
                                   class="form-control"
                                   name="tinggi_maksimal" value="{{$p->tinggi_maksimal}}">
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        Cm
                                    </span>
                                </div>
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="berat_minimal">Berat Minimal:</label>
                        <div class="input-group">
                            <input type="number"
                                   class="form-control"
                                   name="berat_minimal" value="{{$p->berat_minimal}}">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    Kg
                                </span>
                            </div>
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="berat_maksimal">Berat Maksimal:</label>
                        <div class="input-group">
                            <input type="number"
                                   class="form-control"
                                   name="berat_maksimal"
                                   value="{{$p->berat_maksimal}}">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    Kg
                                </span>
                            </div>
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="kuota">Kuota: </label>
                        <input type="number"
                               class="form-control"
                               name="kuota"
                               value="{{$p->kuota}}">
                    </div>
                    <div class="form-group">
                        <label for="bayaran">Bayaran:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    Rp
                                </span>
                            </div>
                            <input type="text"
                                   id="currencyField"
                                   class="form-control currency"
                                   name="bayaran"
                                   value="{{$p->bayaran}}">

                        </div>

                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi:</label>
                        <textarea id="my-summernote" name="deskripsi" type="text">{{$p->deskripsi}}</textarea>

                    </div>
                    <input type="submit" class="btn btn-primary" value="Simpan Data">
                </form>
                @endforeach
            </div>
        </div>
    </div>

@endsection
