<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login </title>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  </head>
  <body>
  <div class="panel-body">

<form class="box" action="{{route('admin.store')}}" method="POST">
@csrf
  <h1>Login</h1>
  @if($errors->any())
    <div class="alert alert-danger" style="color:red">
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
  <input type="text" name="email" placeholder="Email">
  <input type="password" name="password" placeholder="Password">
  <input type="submit"  value="Login">
</form>
  </body>
</html>

</div>