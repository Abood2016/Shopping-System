@extends('front.layouts.master')


@section('content')
<br>
<h2>User Order Details Page</h2>
<hr>
<div class="row">
                <div class="col-md-12">
                @include('admin.layouts.messages')
                    
                            <h4 class="title">Order Details</h4>
                        <div class="content table-responsive table-full-width">
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <th>ID</th>
                                    <th>Date</th>
                                    <th>Address</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Status</th>
                                </tr>
                                <tbody>
                                    <tr>
                                        <td> {{$orders->id}} </td>
                                        <td> {{$orders->date}} </td>
                                        <td> {{$orders->address}} </td>
                                        <td> {{$orders->OrderItem[0]->price}} </td>
                                        <td> {{$orders->OrderItem[0]->quantity }} </td>
                                        <td>
                                        @if($orders->status)   
                                                    <span class="badge badge-success">Confirmed</span>

                                                    @else
                                                    <span class="badge badge-warning">Pending</span>       
                                                    @endif     
                                        </td>
                                        
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            
                    <div class="col-md-12">
                            <h4 class="title">User Details</h4>
                        <div class="content table-responsive table-full-width">
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Registered At</th>
                                </tr>
                                <tbody>
                                <tr>
                                <td>{{ $orders->user->id }}</td>
                                <td>{{ $orders->user->name }}</td>
                                <td>{{ $orders->user->email }}</td>
                                <td>{{ $orders->user->created_at->diffForhumans() }}</td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                <div class="col-md-12">
                    
                            <h4 class="title">Product Details</h4>
                        <div class="content table-responsive table-full-width">
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <th>Order ID</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Image</th>
                                </tr>
                                <tr>
                                    <td> {{ $orders->products[0]->id }} </td>
                                    <td> {{ $orders->products[0]->name }} </td>
                                    <td> {{ $orders->products[0]->price }} </td>
                                    <td> {{ $orders->OrderItem[0]->quantity }} </td>
                                    <td><a href="{{url('/uploads').'/'.$orders->products[0]->image}}" target="_blanck"> <img src="{{url('/uploads').'/'.$orders->products[0]->image}}" alt="" class="img-thumbnail"
                                                      style="width: 80px">  </a></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                  </div>
                  <hr>
                <a href="{{ route('user.profile')}}" class="btn btn-dark" >Back To User Profile</a>

                </div>
@endsection