@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"> {{ isset($url) ? ucwords($url) : ""}} {{ __('Register') }}</div>

                    <div class="card-body">
                        @isset($url)
                            <form method="POST" action='{{ url("register/admin") }}' aria-label="{{ __('Register') }}">
                                @else
                                    <form method="POST" class="form-detail" action="{{ route('register') }}" >
                                        @endisset
                                        @csrf
                                        <div>
                                         <div class="form-row">
                                                <label class="form-row-inner">
                                                    <input type="text" name="name" id="name" class="input-text" required>
                                                    <span class="label">Nama Anda</span>
                                                    <span class="border"></span>
                                                </label>
                                            </div>
                                            <div class="form-row">
                                                <label class="form-row-inner">
                                                    <input type="text" name="email" id="email" class="input-text" required>
                                                    <span class="label">E-Mail</span>
                                                    <span class="border"></span>
                                                </label>
                                            </div>
                                            <div class="form-row">
                                                <label class="form-row-inner">
                                                    <input type="password" name="password" id="password" class="input-text" required>
                                                    <span class="label">Password</span>
                                                    <span class="border"></span>
                                                </label>
                                            </div>
                                            <div class="form-row">
                                                <label class="form-row-inner">
                                                    <input type="password" name="password_confirmation" id="password-confirm" class="input-text" required autocomplete="new-password">
                                                    <span class="label">Confirm Password</span>
                                                    <span class="border"></span>
                                                </label>
                                            </div>
                                            <div class="form-row-last">
                                                <input type="submit" name="register" class="register" value="Register">
                                            </div>

                                        </div>
                                    </form>
                            </form>





                    </div>
                    </div>
            </div>
        </div>
    </div>
@endsection
@section('footer_scripts')
    @if(config('settings.reCaptchStatus'))
        <script src='https://www.google.com/recaptcha/api.js'></script>
    @endif
@endsection
