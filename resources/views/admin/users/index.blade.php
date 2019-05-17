@extends('admin.layouts.master')

@section('page')
    Users
@endsection

@section('content')

<div class="row">
                    <div class="col-md-12">
                @include('admin.layouts.messages')
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Users</h4>
                                <p class="category">List of all registered users</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Registered At</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    <tbody>
                                        @if($users->count() > 0)
                                 @foreach($users as $user)       
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->created_at->diffForhumans() }}</td>

                                        <td>
                                         @if($user->status)
                                        <span class="label label-success">Active</label>

                                         @else
                                        <span class="label label-warning">Blocked</label>

                                            @endif
                                      </td>
                                        <td>
                                        @if($user->status)
                                           <a href="{{ route('user.block',['id' => $user->id]) }}" class="btn btn-warning btn-sm"
                                                    title="block">block</a>
                                            @else
                                            <a href="{{ route('user.active',['id' => $user->id]) }}" class="btn btn-success btn-sm"
                                                    title="active">Active</a>
                                           @endif 
                                           <a href="{{ route('user.show',['id' => $user->id])}}" class="btn btn-success btn-sm"
                                                    title="details">Details</a> 
                                            
                                        </td>
                                        </tr>

                                    @endforeach
                                    @else
                                    <tr>
                            <th colspan="8" class="text-center">No Users yet</th>
                                </tr>
                            @endif
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>

@endsection