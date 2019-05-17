@extends('admin.layouts.master')


@section('page')
    Admin Profile
@endsection


@section('content')

<div class="row">
                    <div class="col-md-12">
                @include('admin.layouts.messages')
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Admin</h4>
                                <p class="category">Admin</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Registered At</th>
                                        <th>Actions</th>
                                    </tr>
                                    <tbody>
                                 @foreach($admins as $admin)       
                                    <tr>
                                        <td>{{ $admin->id }}</td>
                                        <td>{{ $admin->name }}</td>
                                        <td>{{ $admin->email }}</td>
                                        <td>{{ $admin->created_at->diffForhumans() }}</td>

                                        <td> 
                                        <a href = "{{route('profile.edit',['id' => $admin->id])}}" class="btn btn-sm btn-info ti-pencil-alt" title="Edit"></a>  
                                        </td>
                                        
                                    </tr>

                                    @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
@endsection