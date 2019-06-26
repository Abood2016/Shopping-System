@extends('front.layouts.master')
@section('style')
<style type="text/css">
	body{
		
    background-color: #000000d9 !important;
		}
</style>
@endsection
@section('content')
	
	@if(!auth()->check())

	<div class="text-center">
		 <br>
		 <br>
		 <br>
		<h3 style="color:white;font-family:serif; ;">You Can't Send Message Please,</h3> <br>
		<a class="btn btn-outline-dark" style="color:#ffc107; !important;font-family:sans-serif; " href="{{ route('user.register') }}">Sign Up</a><br>
		<h3 style="color:white;font-family: serif;">Or</h3>
		<a class="btn btn-outline-dark" style="color:#ffc107; !important;font-family:sans-serif; " href="{{ route('user.login') }}">Sign in</a>
		  <br>
            <br>
            <br>
            <br>
            <br>
	</div>

	@else
	<div class="container contact-form">
            <div class="contact-image">
                <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
            </div>
			@include('admin.layouts.messages')
            <form method="post" action="{{ route('contact.store') }}">
            	@csrf
                <h3 style="font-family: serif;">Hello, <span style="color:black;">{{auth()->check() ? auth()->user()->name : ''}}</span> Drop Your Message</h3>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Your Full Name *" value="" />
                            <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : ''}}</span>
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" class="form-control" placeholder="Your  Email *" value="" />
 						<span class="text-danger">{{ $errors->has('email') ? $errors->first('email') : ''}}</span>
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" class="form-control" placeholder="Your Phone Number *" value="" />
                            	<span class="text-danger">{{ $errors->has('phone') ? $errors->first('phone') : ''}}</span>
                        </div><br>

                        <div class="form-group">
                            <input type="submit" name="btnSubmit" class="btnContact" value="Send Message" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="message" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
                               <span class="text-danger">{{ $errors->has('message') ? $errors->first('message') : ''}}</span>
                        </div>
                        </div>
                    </div>
                </div>
            </form>	

</div>
@endif	
@endsection