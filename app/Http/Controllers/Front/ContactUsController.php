<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contact;

class ContactUsController extends Controller
{
   public function index()
   {
   	  return view('front.contactUs.index');
   }


    public function store(Request $request)
   {
   		$request->validate($this->rules(),$this->messges());
 		 $id = auth()->user()->id;
   		
   		$contact = Contact::create([
   			'name'=> $request->name,
   			'email'=> $request->email,
   			'phone'=> $request->phone,
   			'message'=> $request->message,
   			'user_id' => $id,
   		]);

   		return redirect()->back()->with('success','Your Message has been sent :)');		
   }


  


   public function rules()
   {
   	return 
   	[
   		'name' => 'required',
   		'email' => 'required|email',
   		'phone' => 'required|min:6',
   		'message' => 'required',
   	];
   }

public function messges()
   {
   	return 
   	[
   		'name.required' => 'Your Name is required',
   		'email.required' => 'Your Email is required',
   		'phone.required' => 'Your Phone is required',
   		'message.required' => 'Your Message is required',
   	];
   }
}
