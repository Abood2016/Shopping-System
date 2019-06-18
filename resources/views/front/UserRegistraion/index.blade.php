@extends('front.layouts.master')

@section('content')
<div class="signup-form">
    <form action="{{ route('user.register') }}" method="post">
        @csrf
		<h2>Register</h2>
		<p class="hint-text">Create your account. It's free and only takes a minute.</p>
        <div class="form-group {{$errors->has('name') ? 'has-error' : ''}}">
            <input type="text" class="form-control" name="name" placeholder="Name" >
            <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : ''}}</span>
        </div>
        <div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
            <input type="email" class="form-control" name="email" placeholder="Email" >
            <span class="text-danger">{{ $errors->has('email') ? $errors->first('email') : ''}}</span>
        </div>
        <div class="form-group {{$errors->has('address') ? 'has-error' : ''}}">
            <input type="text" class="form-control" name="address" placeholder="Address" >
            <span class="text-danger">{{ $errors->has('address') ? $errors->first('address') : ''}}</span>
        </div>
		<div class="form-group {{$errors->has('password') ? 'has-error' : ''}}">
            <input type="password" class="form-control" name="password" placeholder="Password" >
            <span class="text-danger">{{ $errors->has('password') ? $errors->first('password') : ''}}</span>
        </div>
        <div class="form-group {{$errors->has('password') ? 'has-error' : ''}}">
            <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">
            <span class="text-danger">{{ $errors->has('password') ? $errors->first('password') : ''}}</span>
        </div>
		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block" style="background-color:#4A5678 !important">Register Now</button>
        </div>
        <div class="text-center">Already have an account? <a href="#">Sign in</a></div>

    </form>
</div>

@endsection