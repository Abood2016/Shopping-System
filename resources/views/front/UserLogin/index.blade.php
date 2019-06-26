@extends('front.layouts.master')
<style type="text/css">
    .login-form {
        width: 340px;
        margin: 50px auto;
    }

    .login-form form {
        margin-bottom: 15px;
        background: #0000009e;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }

    .login-form h2 , .account{
        margin: 0 0 15px;
        color: #ffc107;
    }
    .button{
        background-color:  #e0a800 !important;
    }

    .form-control,
    .btn {
        min-height: 38px;
        border-radius: 2px;
    }

    .btn {
        font-size: 15px;
        font-weight: bold;
    }

    body {
        background-image: url('{{asset("544750.jpg")}}') !important;
        background-size: cover !important;
        background-repeat: no-repeat !important;
        height: 100% !important;
        font-family: 'Numans', sans-serif !important;
        background-attachment: fixed !important;
    }
    
</style>

@section('content')
<div class="row">
    <div class="login-form">
        <form action="{{ route('user.login') }}" method="post">
            @csrf @if($errors->any())
            <div class="alert alert-dark" style="color:red">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif @if ( session()->has('success') )
            <div class="alert alert-success">{{ session()->get('success') }}</div>
            @endif
            <h2 class="text-center">Log in</h2>
            <div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
                <input type="email" class="form-control" placeholder="Email" name="email">
                <span class="text-danger">{{ $errors->has('email') ? $errors->first('email') : ''}}</span>
            </div>
            <div class="form-group {{$errors->has('password') ? 'has-error' : ''}}">
                <input type="password" class="form-control" placeholder="Password" name="password">
                <span class="text-danger">{{ $errors->has('password') ? $errors->first('password') : ''}}</span>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block button">Log in</button>
            </div>
            <!-- <p class="text-center"><a href="{{ route('userRegiater') }}">Create New Account?</a></p> -->
            <div class="text-center account">Create New Account?<a href="{{ route('userRegiater') }}"> Sign up</a></div>

        </form>
    </div>
</div>
@endsection
