@extends('admin.layouts.master')


@section('page')
     Products
@endsection


@section('content')
<div class="row">

<div class="col-md-12">
@include('admin.layouts.messages')
    <div class="card">
        <div class="header">
            <h4 class="title">All Products</h4>
            <p class="category">List of all stock</p>
        </div>
        <div class="content table-responsive table-full-width">
            <table class="table table-striped">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
                <tbody>
                    @if($products->count() > 0)

                    @foreach($products as $product)
                <tr>
                    <td> {{$product->id}} </td>
                    <td> {{$product->name}} </td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->description}}</td>
                    <td><img src="{{url('/uploads').'/'.$product->image}}" alt="" class="img-thumbnail"
                             style="width: 100px"></td>
                    <td>
                    <form id="delete-form-{{$product->id }}" method="post" action="{{route('product.destroy',$product->id)}}" style="display: none">
                                            {{csrf_field()}}
                                            <!-- {{method_field('DELETE')}} -->
                                         </form>
                                            <a href="" onclick="if(confirm('Are You Sure, you want to delete ?')){
                                                    event.preventDefault();
                                            document.getElementById('delete-form-{{$product->id }}').submit();
                                                    }
                                            else{
                                                event.preventDefault();
                                            }"><span class="btn btn-sm btn-danger ti-trash" title="Delete"></span></a>
                                     
                                     <a href = "{{route('product.edit',['id' => $product->id])}}" class="btn btn-sm btn-info ti-pencil-alt" title="Edit"></a>  
                                     <a href = "{{route('product.show',['id' => $product->id])}}" class="btn btn-sm btn-primary ti-view-list-alt" title="Edit"></a>                   
                    </td>
                </tr>
               @endforeach
               @else
               <tr>
                            <th colspan="8" class="text-center">No Products yet</th>
                </tr>

                    @endif
                </tbody>
            </table>

        </div>
    </div>
</div>
</div>
@endsection