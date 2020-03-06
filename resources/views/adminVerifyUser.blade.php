@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>{{$user->nama}}</h1>
{{--    <div class="justify-content-end d-flex">--}}
{{--        <a href="{{url('admin/user/add')}}" class="btn btn-success justify-content-end">Tambah user</a>--}}
{{--    </div>--}}
@stop

@section('content')
        <table class="table table-responsive-md">
            <tr>
                <th><h5> KTP: </h5></th>
                <td class="text-md-center"><img src="{{asset($user->ktp)}}" class="h-50" alt="KTP"></td>
                <td><a href="{{url('admin/user/'.$user->url_slug.'/verifyKtp')}}" class="btn btn-success"> Verify</a> </td>
                <td><a href="{{url('admin/user/'.$user->url_slug.'/rejectKtp')}}" class="btn btn-danger"> Reject</a> </td>
            </tr>
            <tr>
                <th><h5> SKCK: </h5></th>
                <td class="text-md-center"><img src="{{asset($user->skck)}}" class="h-50" alt="SKCK"></td>
                <td><a href="{{url('admin/user/'.$user->url_slug.'/verifySkck')}}" class="btn btn-success"> Verify</a> </td>
                <td><a href="{{url('admin/user/'.$user->url_slug.'/rejectSkck')}}" class="btn btn-danger"> Reject</a> </td>
            </tr>
            <tr>
                <th><h5> Sertifikat: </h5></th>
                <td><img src="{{asset('image/user/skck/user1')}} ?? 'kosong'" alt="Surat"></td>
                <td><a href="#" class="btn btn-success"> Verify</a> </td>
            </tr>
            <tr>
                <th><h5> Kartu Satpam: </h5></th>
                <td><img src="{{asset('image/user/skck/user1')}}" alt="Satpam"></td>
                <td><a href="#" class="btn btn-success"> Verify</a> </td>
            </tr>
        </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
