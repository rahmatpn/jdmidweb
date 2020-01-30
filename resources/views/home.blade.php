@extends('layouts.auth')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>
            @foreach($pekerjaan as $pekerjaan)
                    <div class="card-body">
                        <div>{{$pekerjaan}}</div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
