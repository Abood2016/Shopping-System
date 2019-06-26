<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
class ContactController extends Controller
{
    public function show()
   {
   	  $contacts = Contact::all();		
   	  return view('front.contactUs.showMessages',compact('contacts'));
   }

    public function destroy($id)
   {
   		$contact = Contact::find($id);
   		$contact->delete();
   	return redirect()->back()->with('success','Message has been deleted :)');
   }
}
