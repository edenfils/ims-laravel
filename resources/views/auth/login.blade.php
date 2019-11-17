

@extends('layouts/auth')

@section('title')
    Login - IMS Laravel
@endsection

@section('content')
<form method="POST" action="{{ route('login')}}">
    @csrf
    <div class="login-form-head">
        <h4>Sign In</h4>
        <p>Hello there, Sign in and start managing your Admin Template</p>
    </div>
    <div class="login-form-body">
        <div class="form-gp">
            <label for="email">Email address</label>
            <input type="email" id="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <div class="text-danger"></div>
        </div>
        <div class="form-gp">
            <label for="password">Password</label>
            <input name="password" type="password" id="password" class=" @error('password') is-invalid @enderror" required autocomplete="new-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <i class="ti-lock"></i>
            <div class="text-danger"></div>
        </div>
        <div class="row mb-4 rmber-area">
            <div class="col-6">
                <div class="custom-control custom-checkbox mr-sm-2">
                    <input type="checkbox" name="remember" class="custom-control-input" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="custom-control-label" for="remember">Remember Me</label>
                </div>
            </div>
            <div class="col-6 text-right">
                @if (Route::has('password.request'))
                <a href="{{route('password.request')}}">Forgot Password?</a>
                @endif
                
            </div>
        </div>
        <div class="submit-btn-area">
            <button id="form_submit" type="submit">Submit <i class="ti-arrow-right"></i></button>
        </div>
        <div class="form-footer text-center mt-5">
            <p class="text-muted">Don't have an account? <a href="{{route('register')}}">Sign up</a></p>
        </div>
    </div>
</form>
@endsection


