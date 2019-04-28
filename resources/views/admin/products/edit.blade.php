@extends('admin.layouts.master')

@section('page')
   Edit Product
@endsection

@section('content')
<div class="col-lg-10 col-md-10">
    @include('admin.layouts.messages')
                        <div class="card">
                            <div class="header">
                                <h5 class="title">Edit Product : <strong style="color:red">{{$product->name}}</strong></h5>
                               
                            </div>
                            <div class="content">
                                <form action = "{{route('product.update',['id' => $product->id])}}" method ="POST" enctype="multipart/form-data">
                                @csrf
                              {{method_field('PUT')}}
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group {{$errors->has('name') ? 'has-error' : ''}} ">
                                                <label>Product Name:</label>
                                                <input type="text" name = "name" class="form-control border-input" placeholder="Macbook pro" value="{{$product->name}}">
                                                <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : ''}}</span>
                                            </div>

                                            <div class="form-group {{$errors->has('price') ? 'has-error' : ''}} ">
                                                <label>Product Price:</label>
                                                <input type="text" name = "price" class="form-control border-input" placeholder="$2500" value="{{$product->price}}">
                                                <span class="text-danger">{{ $errors->has('price') ? $errors->first('price') : ''}}</span>
                                            </div>

                                            <div class="form-group {{$errors->has('description') ? 'has-error' : ''}} ">
                                                <label>Product Description:</label>
                                                <textarea name="description"  cols="30" rows="10"
                                                class="form-control border-input" placeholder="Product Description" >{{$product->description}}
                                                </textarea>
                                                <span class="text-danger">{{ $errors->has('description') ? $errors->first('description') : ''}}</span>
                                            </div>
                                            <div class="form-group {{$errors->has('image') ? 'has-error' : ''}} ">
                                                <label>Product Image:</label>
                                                <input type="file" name="image" class="form-control border-input" id = "file-image" value="{{$product->image}}">
                                                <div id="thumb-output"></div>
                                                <span class="text-danger">{{ $errors->has('image') ? $errors->first('image') : ''}}</span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Update Product</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
@endsection
