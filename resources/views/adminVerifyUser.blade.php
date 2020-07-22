@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>{{$user->nama}}</h1>

@stop

@section('content')
        <form action="{{url('/admin/user/'.$user->url_slug.'/verify')}}" enctype="multipart/form-data"  data-toggle="validator" method="post">
        @csrf
        <table class="table table-responsive-md">
            <tr>
                <th><h5> KTP: </h5></th>
                <td class="text-md-center"><img src="{{asset($user->userKTP())}}" class="w-100" alt="SKCK"></td>
                <td>
                    <label>
                        <input type="checkbox"  id="status_ktp" name="status_ktp"  {{ ($user->s_ktp == 1) ? 'checked' : '' }}><span class="label-text"></span>
                    </label>
                </td>
            </tr>
            <tr>
                <th><h5> SKCK: </h5></th>
                <td class="text-md-center"><img src="{{asset($user->userSKCK())}}" class="w-100" alt="SKCK"></td>
                <td>
                <label>
                    <input type="checkbox"  id="status_skck" name="status_skck"  {{ ($user->s_skck == 1) ? 'checked' : '' }}><span class="label-text"></span>
                </label>
                </td>
            </tr>
            <tr>
                <th><h5> Sertifikat: </h5></th>
                <td class="text-md-center"><img src="{{asset($user->userSertifikat())}}" class="w-100" alt="Sertifikat"></td>
                <td>
                    <label>
                        <input type="checkbox"  id="status_sertifikat" name="status_sertifikat" {{ ($user->s_sertifikat == 1) ? 'checked' : '' }}><span class="label-text"></span>
                    </label>
                </td>
            </tr>
            <tr>
                <th><h5> Kartu Gada Pratama: </h5></th>
                <td class="text-md-center"><img src="{{asset($user->userKartuSatpam())}}" class="w-100" alt="Kartu Satpam"></td>
                <td>
                    <label>
                        <input type="checkbox"  id="status_kartu_satpam" name="status_kartu_satpam"  {{ ($user->s_kartu_satpam == 1) ? 'checked' : '' }}><span class="label-text"></span>
                    </label>
                </td>
            </tr>
        </table>
            <button type="submit" class="btn btn-primary container-fluid shadow-sm">Simpan</button>
        </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
