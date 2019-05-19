
<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <!--Made with love by Mutiullah Samim -->

  <!--Bootsrap 4 CDN-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <!--Fontawesome CDN-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

  <!--Custom styles-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  <style>
    body{
      background-image: url('http://getwallpapers.com/wallpaper/full/a/5/d/544750.jpg');
      background-size: cover;
      background-repeat: no-repeat;
      height: 100%;
      font-family: 'Numans', sans-serif;
    }
  </style>
</head>
<body>
<div class="container">
  <div class="d-flex justify-content-center h-100">
    <div class="card">
      <div class="card-header">
        <h3>Sign In</h3>
        <div class="d-flex justify-content-end social_icon">
          <span><i class="fab fa-facebook-square"></i></span>
          <span><i class="fab fa-google-plus-square"></i></span>
          <span><i class="fab fa-twitter-square"></i></span>
        </div>
      </div>
      <div class="card-body">
        <form  action="{{route('admin.store')}}" method="POST">
          @csrf
          @if($errors->any())
            <div class="alert alert-danger" style="color:red;">
              <ul>
                @foreach($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

          @if ( session()->has('success') )
            <div class="alert alert-success">{{ session()->get('success') }}</div>
          @endif
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="email" name="email">
          </div>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="password" name="password" class="form-control" placeholder="password">
          </div>
          <div class="row align-items-center remember">
            <input type="checkbox">Remember Me
          </div>
          <div class="form-group">

            <input type="submit" value="Login" class="btn float-right login_btn">
          </div>
        </form>
      </div>

    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>




































{{--<!DOCTYPE html>--}}
{{--<html lang="en" dir="ltr">--}}
  {{--<head>--}}
    {{--<meta charset="utf-8">--}}
    {{--<title>Login </title>--}}
  {{--</head>--}}
  {{--<body>--}}
  {{--<div class="panel-body">--}}

{{--<form class="box" action="{{route('admin.store')}}" method="POST">--}}
{{--@csrf--}}
  {{--<h1>Login</h1>--}}
  {{--@if($errors->any())--}}
    {{--<div class="alert alert-danger" style="color:red">--}}
        {{--<ul>--}}
            {{--@foreach($errors->all() as $error)--}}
            {{--<li>{{ $error }}</li>--}}
            {{--@endforeach--}}
        {{--</ul>--}}
    {{--</div>--}}
{{--@endif--}}

{{--@if ( session()->has('success') )--}}
    {{--<div class="alert alert-success">{{ session()->get('success') }}</div>--}}
{{--@endif--}}
  {{--<input type="text" name="email" placeholder="Email">--}}
  {{--<input type="password" name="password" placeholder="Password">--}}
  {{--<input type="submit"  value="Login">--}}
{{--</form>--}}
  {{--</body>--}}
{{--</html>--}}

{{--</div>--}}