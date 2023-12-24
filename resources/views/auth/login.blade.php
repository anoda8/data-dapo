@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6 order-md-2">
        <img src="images/undraw_file_sync_ot38.svg" alt="Image" class="img-fluid">
    </div>
    <div class="col-md-6 contents">

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="mb-4">
                    <h3>Unofficial Dapodik Downloader</h3>
                    {{-- <p class="mb-4 text-dark">Download Data Dapodik Anda Sesuai Kebutuhan</p> --}}
                </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group first mb-3">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control" autofocus id="email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group last mb-4">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3 align-items-left">
                        <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                            <input type="checkbox" checked="checked"/>
                            <div class="control__indicator"></div>
                        </label>
                    </div>
                    <input type="submit" value="Masuk" class="btn text-white btn-block btn-primary">
                    <hr>
                    <a href="#" class="forgot-pass">Forgot Password</a>

                    <span class="d-block text-left my-4 text-muted"> atau login dengan </span>

                    <div class="social-login">
                        <a href="#" class="facebook">
                        <span class="icon-facebook mr-3"></span>
                    </a>
                    <a href="#" class="twitter">
                        <span class="icon-twitter mr-3"></span>
                    </a>
                    <a href="#" class="google">
                        <span class="icon-google mr-3"></span>
                    </a>
                </div>
            </form>
        </div>
    </div>
    </div>
</div>
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
