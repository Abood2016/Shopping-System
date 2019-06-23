@extends('front.layouts.master')
<style>
  body {
      background-image: url('{{asset("544750.jpg")}}') !important;
        background-size: cover !important;
        background-repeat: no-repeat !important;
        height: 100% !important;
        font-family: 'Numans', sans-serif !important;
        background-attachment: fixed !important;
    }  
      .signup-form form {
        margin-bottom: 15px!important;
        background: #0000009e!important;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3)!important;
        padding: 30px!important;
    }

    .signup-form form h2 , .account{
        margin: 0 0 15px;
        color: #ffc107;
    }
    .button{
        background-color:  #ffc107 !important;
    }
    .signup-form form a{
        color: #007bff !important;
    }
</style>
@section('content')
<div class="signup-form">
    <form action="{{ route('user.register') }}" method="post">
        @csrf
		<h2 class=""> Register</h2>
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
            <button type="submit" class="btn btn-success btn-lg btn-block button" >Register Now</button>
        </div>
        <div class="text-center account">Already have an account? <a href="{{ route('userLogin') }}">Sign in</a></div>

    </form>
</div>

@endsection