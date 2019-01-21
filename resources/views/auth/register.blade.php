@extends('layouts.app')
@section('content')
    <div class="container">
        <form method="POST" action="{{ route('register') }} " class="form-signin">
            @csrf
            <a class="brand text-center" href="/">
                <img src="https://d13800eb475acf90ffd8-368aed50cc9eaf25e683b75944dac064.ssl.cf2.rackcdn.com/site_logo/967152f71c81ce699f127cfa1c33c815.png" srcset="assets/img/logo-dark@2x.png 2x" alt="" height="40px">
            </a>
            <h2 class="form-signin-heading">Please sign up</h2>
            <div class="form-group">
                <label for="name" class="sr-only">{{ __('Full Name') }}</label>
                <input id=name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }} " placeholder="Full Name" name="name" value="{{ old('name') }}" required autofocus>
                @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="email" class="sr-only">{{ __('E-Mail Address') }}</label>
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email address" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
            </div>
            <div class="form-group">
                <label for="password" class="sr-only">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"placeholder="Password" name="password" required >
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                @endif
            </div>
            <div class="form-group">
                <label for="password-confirm" class="sr-only">{{ __('Confirm Password') }}</label>
                <input id="password-confirm" type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required>
            </div>
            <div class="checkbox mb-4 mt-4">
                <label class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">
                        I Agree the <a href="#" class="default-color">terms and conditions.</a>
                    </span>
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">{{ __('Sign up') }}</button>
            <div class="mt-4">
                <span>
                    Already have an account ?
                </span>
                <a href="/login" class="text-primary">Sign In</a>
            </div>
        </form>
    </div>
@endsection
