@extends('layouts.app')
@section('content')
    <div class="container">
        <form method="POST" action="{{ route('password.update') }}" class="form-signin">
            @csrf
            <a class="brand text-center" href="/">
                <img src="https://d13800eb475acf90ffd8-368aed50cc9eaf25e683b75944dac064.ssl.cf2.rackcdn.com/site_logo/967152f71c81ce699f127cfa1c33c815.png" srcset="assets/img/logo-dark@2x.png 2x" alt="" height="40px">
            </a>
            <input type="hidden" name="token" value="{{ $token }}">
            <div class="form-group">
                <label for="email" class="sr-only">{{ __('E-Mail Address') }}</label>
                <input id="email" placeholder="Email address" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus>
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="password" class="sr-only">{{ __('Password') }}</label>
                    <input id="password" placeholder="Password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
            </div>
            <div class="form-group">
                <label for="password-confirm" class="sr-only">{{ __('Confirm Password') }}</label>
                <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" required>
            </div>
            <button type="submit" class="btn btn-lg btn-primary btn-block">
                {{ __('Reset Password') }}
            </button>
        </form>
    </div>
@endsection
