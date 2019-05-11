@extends('admin.layouts.master')

@section('page')
    Orders
@endsection



@section('content')

<div class="row">
                    <div class="col-md-12">
                @include('admin.layouts.messages')
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Orders</h4>
                                <p class="category">List of all orders</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <tr>
                                        <th>ID</th>
                                        <th>User</th>
                                        <th>Product</th>
                                        <th>Quantity</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    <tbody>
                                    <tr>

                                    @foreach($orders as $order)

                                    <td>{{ $order->id }}</td>
                                    <td>{{ $order->user->name }}</td>
                                    <td>
                                        @foreach($order->products as $item)

                                            {{ $item->name }}

                                        @endforeach
                                    </td>

                                    <td>
                                    @foreach($order->orderitem as $item)

                                            {{ $item->quantity }}

                                        @endforeach
                                    </td>

                                    <td> 
                                    @if($order->status)   
                                    <span class="label label-success">Confirmed</span>

                                     @else
                                     <span class="label label-warning">Pending</span>       
                                    @endif    

                                     </td>

                                        <td>
                                           @if($order->status)
                                           <a href="{{ route('order.pending',['id' => $order->id]) }}" class="btn btn-warning btn-sm"
                                                    title="Pending">Pending</a>

                                            @else
                                            <a href="{{ route('order.confirm',['id' => $order->id]) }}" class="btn btn-success btn-sm"
                                                    title="Confirm">Confirm</a>
                                           @endif 

                                           <a href="{{ route('order.show',['id' => $order->id]) }}" class="btn btn-success btn-sm"
                                                    title="details">Details</a> 
                                            
                                        </td>
                                    </tr>

                                    <tr>
                                    @endforeach
                                    

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>


                </div>
@endsection