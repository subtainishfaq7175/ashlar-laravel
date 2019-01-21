@extends('layouts.app')
@section('content')
    <div class="container">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <form method="POST" action="{{ route('password.email') }}" class="form-signin">
            @csrf
            <a class="brand text-center" href="/">
                <img src="https://d13800eb475acf90ffd8-368aed50cc9eaf25e683b75944dac064.ssl.cf2.rackcdn.com/site_logo/967152f71c81ce699f127cfa1c33c815.png" srcset="assets/img/logo-dark@2x.png 2x" alt="" height="40px">
            </a>
            <div class="form-group">
                <label for="email" class="sr-only">{{ __('E-Mail Address') }}</label>
                <input id="email" type="email" placeholder="Email address" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <button type="submit" class="btn btn-lg btn-primary btn-block">
                {{ __('Send Password Reset Link') }}
            </button>
        </form>
    </div>
@endsection
