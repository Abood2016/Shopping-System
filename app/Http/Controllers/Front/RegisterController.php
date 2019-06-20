<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;


class RegisterController extends Controller
{
    public function index()
    {
        return view('front.UserRegistraion.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',  
            'email' => 'required|email',  
            'password' => 'required|confirmed',  
            'address' => 'required',  
        ]);
 
            $user = User::create([
            'name' => $request->name,    
            'email' => $request->email,    
            'address' => $request->address,    
            'password' => bcrypt($request->password),    
            ]);

            auth()->login($user);

         return redirect('/user/profile');           
        }

        public function edit($id)
        {
         try {
             $user = User::findOrFail($id);
             return view('front.UserRegistraion.edit',compact('user'));
         } catch (ModelNotFoundException $exception) {
             return redirect()->back()->with('error', 'User is not found');
         }
         $user = User::find($id);
         return view('front.UserRegistraion.edit',compact('user'));
        }

  public function update(Request $request,$id)
    {
        $user = User::find($id);
            $request->validate ([
                'name' => 'required',
                'email' => 'required',
                'address' => 'required',
            ]);
            $user->update([
                'name' =>$request->name,
                'email' =>$request->email,
                'address' =>$request->address,
            ]);
        Session::flash('success','User Updated Successfully');

            return redirect()->route('user.profile');
            
    }

}
    // $newPassword = $request->only('password');

            

            // if(empty($newPassword)){

            //     $user->update($request->except('password'));

            // }elseif ($request->has('password')){
            //     // if ($request->has('password'))
            //     // {
            //         $user ->password = bcrypt($request->password);
            //     // }
