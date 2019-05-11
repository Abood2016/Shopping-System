@extends('admin.layouts.master')

@section('page')
    Orders Details
@endsection



@section('content')
                <div class="row">
                <div class="col-md-12">
                @include('admin.layouts.messages')
                    <div class="card">
                        <div class="header">
                            <h4 class="title"><strong style="color:Orange">{{$orders[0]->user->name}}</strong> Order Details</h4>
                            <p class="category">Order details</p>
                        </div>
                        <div class="content table-responsive table-full-width">
                            <table class="table table-striped">
                                <tr>
                                    <th>Order ID</th>
                                    <th>Product Name</th>
                                    <th>Address</th>
                                    <th>Total Price</th>
                                    <th>Quantity</th>
                                    <th>Order Date</th>
                                    <th>Status</th>
                                </tr>
                                <tbody>
                                    <tr>
                                       @foreach($orders as $order)
                                            <td>{{ $order->id }}</td>  
                                            <td>{{ $order->products[0]->name }}</td>
                                            <td>{{ $order->address }}</td>
                                            <td>{{ $order->products[0]->price }}</td>
                                            <td>{{ $order->OrderItem[0]->quantity }}</td>
                                             <td>{{ $order->date }}</td>                                             
                                            <td>
                                                @if($order->status)    
                                                <span class="label label-success">Confirmed</span>
                                                @else
                                                <span class="label label-warning">Pending</span>       
                                                @endif  
                                            </td>   
                                                                                           
                                       @endforeach
                                    </tr>
                                     </tbody>
                                     </table>
                                    </div>
                                </div>
                             </div>
                            </div>
                <a href="{{ route('order.index')}}" class="btn btn-dark" >Back To Orders</a>
@endsection