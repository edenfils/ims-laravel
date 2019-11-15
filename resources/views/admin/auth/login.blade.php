

@extends('layout/auth')

@section('title')
    Login - IMS Laravel
@endsection

@section('form-head')
<h4>Sign In</h4>
<p>Hello there, Sign in and start managing your Admin Template</p>
@endsection

@section('form-body')
    <div class="form-gp">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" id="exampleInputEmail1">
        <i class="ti-email"></i>
        <div class="text-danger"></div>
    </div>
    <div class="form-gp">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" id="exampleInputPassword1">
        <i class="ti-lock"></i>
        <div class="text-danger"></div>
    </div>
    <div class="row mb-4 rmber-area">
        <div class="col-6">
            <div class="custom-control custom-checkbox mr-sm-2">
                <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                <label class="custom-control-label" for="customControlAutosizing">Remember Me</label>
            </div>
        </div>
        <div class="col-6 text-right">
            <a href="#">Forgot Password?</a>
        </div>
    </div>
    <div class="submit-btn-area">
        <button id="form_submit" type="submit">Submit <i class="ti-arrow-right"></i></button>
    </div>
@endsection

@section('form-footer')
    <p class="text-muted">Don't have an account? <a href="register.html">Sign up</a></p>
@endsection