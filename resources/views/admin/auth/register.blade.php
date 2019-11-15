@extends('layout/auth')

@section('title')
    Register - IMS Laravel
@endsection

@section('form-head')
<h4>Sign up</h4>
<p>Hello there, Sign up and Join with Us</p>
@endsection

@section('form-body')
    <div class="form-gp">
        <label for="exampleInputName1">Full Name</label>
        <input type="text" id="exampleInputName1">
        <i class="ti-user"></i>
        <div class="text-danger"></div>
    </div>
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
    <div class="form-gp">
        <label for="exampleInputPassword2">Confirm Password</label>
        <input type="password" id="exampleInputPassword2">
        <i class="ti-lock"></i>
        <div class="text-danger"></div>
    </div>
@endsection

@section('form-footer')
    <p class="text-muted">Already a user? <a href="register.html">log in</a></p>
@endsection