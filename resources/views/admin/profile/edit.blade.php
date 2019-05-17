@extends('admin.layouts.master')

@section('page')
   Edit Admin
@endsection

@section('content')
<div class="col-lg-10 col-md-10">
    @include('admin.layouts.messages')
                        <div class="card">
                            <div class="header">
                                <h5 class="title">Edit Admin : <strong style="color:red">{{$admin->name}}</strong></h5>
                               
                            </div>
                            <div class="content">
                                <form action = "{{route('admin.update',['id' => $admin->id])}}" method ="POST" enctype="multipart/form-data">
                                @csrf
                              {{method_field('PUT')}}
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group {{$errors->has('name') ? 'has-error' : ''}} ">
                                                <label>Admin Name:</label>
                                                <input type="text" name = "name" class="form-control border-input"  value="{{$admin->name}}">
                                                <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : ''}}</span>
                                            </div>

                                            <div class="form-group {{$errors->has('email') ? 'has-error' : ''}} ">
                                                <label>Email :</label>
                                                <input type="text" name = "email" class="form-control border-input"  value="{{$admin->email}}">
                                                <span class="text-danger">{{ $errors->has('email') ? $errors->first('email') : ''}}</span>
                                            </div>

                                            <div class="form-group {{$errors->has('password') ? 'has-error' : ''}} ">
                                                <label>Password :</label>
                                                <input type="password" name = "password" class="form-control border-input"  value="{{$admin->password}}">
                                                <span class="text-danger">{{ $errors->has('password') ? $errors->first('password') : ''}}</span>
                                            </div>
                                       </div>
                                </div>
                                    <div class="">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Update Admin</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
