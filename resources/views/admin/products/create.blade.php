@extends('admin.layouts.master')

@section('page')
   Add Product
@endsection

@section('content')
<div class="col-lg-10 col-md-10">
    @include('admin.layouts.messages')
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Add Product</h4>
                                @if(count($errors) > 0)
                     <ul class="list-group">
                            @foreach($errors->all() as $error )
                                <li class="list-group-item text-danger" >
                                    {{$error}}
                                </li>
                            @endforeach
                        </ul>
                    @endif
                            </div>
                            <div class="content">
                                <form action = "{{route('product.store')}}" method ="post" enctype="multipart/form-data">
                                @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Product Name:</label>
                                                <input type="text" name = "name" class="form-control border-input" placeholder="Macbook pro">
                                            </div>

                                            <div class="form-group">
                                                <label>Product Price:</label>
                                                <input type="text" name = "price" class="form-control border-input" placeholder="$2500">
                                            </div>

                                            <div class="form-group">
                                                <label>Product Description:</label>
                                                <textarea name="description" id="" cols="30" rows="10"
                                                class="form-control border-input" placeholder="Product Description">
                                                </textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Product Image:</label>
                                                <input type="file" name="image" class="form-control border-input">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Add Product</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
@endsection