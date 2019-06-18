<?php
namespace App\Http\Controllers;

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;

class UserProfileController extends Controller
{
   public function index()
   {
       $id = auth()->user()->id;

       $user = User::where('id',$id)->first();
       return view('front.Profile.index',compact('user'));
   }

   public function show($id)
   {
       
       return view('front.Profile.index',compact('user'));
   }
  

}
