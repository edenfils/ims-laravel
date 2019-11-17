@extends('layouts/auth')

@section('title')
    Register - IMS Laravel
@endsection

@section('content')
<form method="POST" action="{{ route('register')}}">
    @csrf
    <div class="login-form-head">
        <h4>Sign up</h4>
        <p>Hello there, Sign up and Join with Us</p>
    </div>
    <div class="login-form-body">
        <div class="form-gp">
            <label for="name">Full Name</label>
            <input name="name" id="name" type="text" class="@error('name') is-invalid @enderror" value="{{ old('name') }}" required>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <i class="ti-user"></i>
            <div class="text-danger"></div>
        </div>
        <div class="form-gp">
            <label for="email">Email address</label>
            <input type="email" id="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <i class="ti-email"></i>
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
        <div class="form-gp">
            <label for="password-confirm">Confirm Password</label>
            <input type="password" id="password-confirm" name="password_confirmation" required autocomplete="new-password">
            <i class="ti-lock"></i>
            <div class="text-danger"></div>
        </div>
        <div class="submit-btn-area">
            <button id="form_submit" type="submit">Submit <i class="ti-arrow-right"></i></button>
        </div>
        <div class="form-footer text-center mt-5">
            <p class="text-muted">Already a user? <a href="{{route('login')}}">log in</a></p>
        </div>
    </div>
</form>
@endsection

