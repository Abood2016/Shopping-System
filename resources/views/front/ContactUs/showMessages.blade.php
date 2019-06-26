@extends('admin.layouts.master')

@section('page')
   Users Messages
@endsection

@section('content')
	
	<div class="row">

<div class="col-md-12">
@include('admin.layouts.messages')
    <div class="card">
        <div class="header">
            <h4 class="title">All Messages</h4>
            <p class="category">List of all Messages</p>
        </div>
        <div class="content table-responsive table-full-width">
            <table class="table table-striped">
                <tr>
                    <th>Name</th>
                    <th>Register User name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Message</th>
                    <th>Actions</th>
                </tr>
                <tbody>
                    @if($contacts->count() > 0)

                    @foreach($contacts as $contact)
                <tr>
                    <td>{{$contact->name}} </td>
                    <td>{{$contact->user->name }}</td>
                    <td> {{$contact->email}} </td>
                    <td>{{$contact->phone}}</td>
                    <td>{{$contact->message}}</td>
                    
                    <td>
                    <form id="delete-form-{{$contact->id }}" method="post" action="{{route('contact.destroy',$contact->id)}}" style="display: none">
                                            {{csrf_field()}}
                                            <!-- {{method_field('DELETE')}} -->
                                         </form>
                                            <a href="" onclick="if(confirm('Are You Sure, you want to delete ?')){
                                                    event.preventDefault();
                                            document.getElementById('delete-form-{{$contact->id }}').submit();
                                                    }
                                            else{
                                                event.preventDefault();
                                            }"><span class="btn btn-sm btn-danger ti-trash" title="Delete"></span></a>
                    </td>
                </tr>
               @endforeach
               @else
               <tr>
                  <th colspan="8" class="text-center">No Messages yet</th>
                </tr>

                    @endif
                </tbody>
            </table>

        </div>
    </div>
</div>
</div>
	
@endsection