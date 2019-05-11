@extends('admin.layouts.master')

@section('Product Details')

@endsection

@section('content')

<div class="row">

<div class="col-md-12">
    <div class="card">
        <div class="header">
            <h4 class="title">Product Details</h4>
            <p class="category">List of all stock</p>
        </div>
        <div class="content table-responsive table-full-width">
            <table class="table table-striped">
                <tbody>

                    <tr>
                        <th>ID</th>
                        <td>{{$product->id}}</td>
                    </tr>

                    <tr>
                        <th>Name</th>
                        <td>{{$product->name}}</td>
                    </tr>

                    <tr>
                        <th>Description</th>
                        <td>{{$product->description}}</td>
                    </tr>

                    <tr>
                        <th>Price</th>
                        <td>{{$product->price}}</td>
                    </tr>

                    <tr>
                        <th>Created At</th>
                        <td>{{$product->created_at ->diffForHumans()}}</td>
                    </tr>

                    <tr>
                        <th>Updated At</th>
                        <td>{{$product->updated_at ->diffForHumans()}}</td>
                    </tr>

                    <tr>
                        <th>Image</th>
                        <td><a href="{{asset('uploads/') .'/' .$product->image}}" target="_blank"><img src="{{asset('uploads/') .'/' .$product->image}}" alt="" class="img-thumbnail" style="width: 150px;"> </a></td>
                    </tr>

                    </tbody>
                </table>
                </div>
                </div>
            </div>
        </div>
        <a href="{{ route('product.index')}}" class="btn btn-dark" >Back To Products</a>


@endsection