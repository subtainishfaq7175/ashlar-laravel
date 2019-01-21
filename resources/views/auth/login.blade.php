@extends('layouts.app')
@section('content')
    <div class="container">
        <form method="POST" action="{{ route('login') }}" class="form-signin">
            @csrf
            <a class="brand text-center" href="/">
                <img src="https://d13800eb475acf90ffd8-368aed50cc9eaf25e683b75944dac064.ssl.cf2.rackcdn.com/site_logo/967152f71c81ce699f127cfa1c33c815.png" srcset="assets/img/logo-dark@2x.png 2x" alt="" height="40px">
            </a>
            <div class="form-group ">
                <label for="email" class="sr-only">{{ __('E-Mail Address') }}</label>
                <input id="email" type="email" placeholder="Email address" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="password" class="sr-only">{{ __('Password') }}</label>
                <input id="password" type="password" placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group  mb-4 mt-4">
                <label class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">
                        Remember me
                    </span>
                </label>
                <a href="/password/reset"  class="float-right text-muted">Forgot Password ?</a>
            </div>
            <button type="submit" class="btn btn-lg btn-primary btn-block">
                {{ __('Sign in') }}
            </button>
            <div class="mt-4">
                <span>
                    Don't have an account yet ?
                </span>
                <a href="/register" class="text-primary">Sign Up</a>
            </div>
        </form>
    </div>
@endsection
