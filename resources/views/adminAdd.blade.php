@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')
        @if(request()->is('admin/user/add'))
        hehehehe
        @elseif(request()->is('admin/hotel/add'))
        hahahah
        @else
            hueheuehue
        @endif
        belum ada isi
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
