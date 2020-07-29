@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="card rounded shadow-sm">
            <!-- Default form login -->
                                @isset($url)
                                <form method="POST" class="text-center border border-light p-5" action='{{ url("login/$url")}}' aria-label="{{ __('Login') }}">
                                @else
                                <form method="POST" class="text-center border border-light p-5" action="{{route('login')}}"aria-label="{{ __('Login') }}">
                                @endisset
                                @csrf


                <p class="h4 mb-4">Login admin</p>

                <!-- Email -->
                <input type="email" id="email" class="form-control mb-4" placeholder="E-mail" name="email">

                <!-- Password -->
                <input type="password" id="password" class="form-control mb-4" placeholder="Password" name="password">

                <div class="d-flex justify-content-around">
                    <div>

                    </div>
                    <div>
                        <!-- Forgot password -->

                    </div>
                </div>

                <!-- Sign in button -->
                <button class="btn btn-info btn-block my-4 rounded-pill" type="submit">Sign in</button>

                                </form>
            </form>
            <!-- Default form login -->
        </div>

    </div>
{{--    --}}
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{isset($url)? ucwords($url) : ""}}{{__('Login')}}</div>--}}

{{--                <div class="card-body">--}}
{{--                    @isset($url)--}}
{{--                    <form method="POST" action='{{ url("login/$url")}}' aria-label="{{ __('Login') }}">--}}
{{--                    @else--}}
{{--                    <form method="POST" action="{{route('login')}}"aria-label="{{ __('Login') }}">--}}
{{--                    @endisset--}}
{{--                    @csrf--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row mb-0">--}}
{{--                            <div class="col-md-8 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary rounded-pill">--}}
{{--                                    {{ __('Login') }}--}}
{{--                                </button>--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
@endsection
