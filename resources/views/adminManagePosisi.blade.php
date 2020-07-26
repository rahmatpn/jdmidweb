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
    <div class="row">
        <h1 class="text-uppercase col-md-8">Posisi</h1>
        <div class="justify-content-end d-flex col-md-4" >
            <button  data-toggle="modal" data-target="#myModal"  class="btn btn-success justify-content-end fa fa-plus"> Tambah Posisi</button>
        </div>
    </div>

    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title float-left">Add Posisi</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form method="POST" class="form-detail" action="{{url('/admin/posisi/add')}}" >
                    @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label class="form-control-label">Nama Posisi</label>
                            <input type="text" name="nama_posisi" id="nama_posisi" class="form-control" required>
                    </div>

                        <div class="form-group">
                            <label class="form-control-label input-group-prepend">Deskripsi</label>
                            <textarea rows="5" cols="30" name="deskripsi" class="form-control input-group-append"></textarea>
                        </div>
                </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@stop


@section('content')
    <div class="card shadow-sm">
        <div class="card-body">

    <table class="table table-responsive-lg table-hover">
        <thead>
        <tr>
            <th class="align-middle">Id</th>
            <th class="align-middle">Nama</th>
            <th class="align-middle">Deskripsi</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posisi as $pos)
            <tr>
                <td>{{$pos->id}}</td>
                <td> {{$pos->nama_posisi}}</td>
                <td>{{$pos->deskripsi}}</td>
                <td class="text-md-center"><a href="{{url('/admin/posisi/'.$pos->id.'/delete')}}" class="btn btn-danger fa fa-trash-o"></a> </td>
                <td class="text-md-center"><a href="{{url('/admin/posisi/'.$pos->id.'/edit')}}" class="btn btn-warning fa fa-edit"></a> </td>
            </tr>
        @endforeach
        </tbody>
    </table>
        </div>
    </div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop
