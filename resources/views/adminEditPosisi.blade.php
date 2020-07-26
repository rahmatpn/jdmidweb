@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scroll/16.1.0/smooth-scroll.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>
    </head>

@stop


@section('content')
    <div class="card shadow-sm">
        <div class="card-body">

    <table class="table table-responsive-lg table-hover">
        <form action="{{url('/admin/posisi/'.$posisi->id.'/save')}}" enctype="multipart/form-data"  data-toggle="validator" method="post">
            @csrf
            @method('PATCH')
        <thead>
        <tr>
            <th class="align-middle">Id</th>
            <th class="align-middle">Nama</th>
            <th class="align-middle">Deskripsi</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$posisi->id}}</td>
                <td>
                    <input type="text" name="nama_posisi" id="nama_posisi" class="form-control"  value="{{$posisi->nama_posisi}}" required/>
                </td>
                <td>
                    <textarea rows="5" cols="130" name="deskripsi" class="form-control">{{$posisi->deskripsi}}</textarea>
                </td>
                <td>
                    <button class="btn btn-primary" type="submit">Save Changes</button>
                </td>
            </tr>
        </tbody>
        </form>
    </table>
        </div>
    </div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop
