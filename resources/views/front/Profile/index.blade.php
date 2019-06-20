@extends('front.layouts.master')

@section('content')
<br>
<h2>User Profile</h2>
<hr>
<h3>User Details</h3>
@include('admin.layouts.messages')
<div class="bs-example">
    <table class="table">
        
        <thead class="thead-light">
           
          
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Registration At</th>
                <th>Edit User</th>
            </tr>
            </thead>
        <tbody>
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->address }}</td>
                <td>{{ $user->created_at ->diffForHumans() }}</td>
                <td>
                    <a href="{{ route('user.edit',['id' => $user->id])}}"><i class="fa fa-cogs"></i> Edit User</a>
            </td>
            </tr>
        </tbody>
    </table>
</div>

                                <hr>
                                <h4 class="title">Orders</h4>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-bordered table-striped">
                                    <tr>
                                        <th>ID</th>
                                        <th>User</th>
                                        <th>Product</th>
                                        <th>Quantity</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    <tbody>
                                   
                                    <tr>

                                    @foreach($user->order as $order)

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
                                    <a href="{{ route('user.Profileshow',['id' => $order->id]) }}" class="btn btn-outline-dark btn-sm"
                                                    title="details">Details</a> 
                                    <!-- <a href="{{ route('user.Profileshow',['id' => $order->id]) }}">Details<i class="btn btn-outline-dark btn-sm"></i> </a> -->

                                    </td>
                                    </tr>
                                    <tr>
                                    @endforeach
                              

                                    </tbody>
                                </table>

                            </div>
                        </div>
<br>
<br>
<br>
@endsection