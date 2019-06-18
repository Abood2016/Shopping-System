<?php
namespace App\Http\Controllers;

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;

class UserLoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index()
    {
        return view('front.UserLogin.index');
    }

    public function store(Request $request)
    {
       // Validate the user
       $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);

    // Log the user In
    $credentials = $request->only('email','password');

    if (! Auth()->attempt($credentials)) {
        return back()->withErrors([
            'message' => 'Wrong Email or Password, Please try again'
        ]);
    }
    return redirect('/user/profile');
}


public function logout()
    {
        auth()->logout();
        return redirect('user/login')->with('success','You have been logged out');
      }
}
