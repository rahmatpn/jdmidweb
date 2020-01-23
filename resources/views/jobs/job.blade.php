@extends('layouts.auth')


@section('content')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <div class="container">
            <div>{{$hotel->pekerjaan->posisi->nama_posisi}}</div>
        </div>
    </div>
</div>
@endsection
