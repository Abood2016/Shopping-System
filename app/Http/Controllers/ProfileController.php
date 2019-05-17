<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ProfileController extends Controller
{
    
    public function profile()
    {
        $admins = AdminUser::all();
        return view('admin.profile.index',compact('admins'));            
    }


    public function edit($id)
    {
        try {
            $admin = AdminUser::findOrFail($id);
            return view('admin.profile.edit',compact('admin'));
        } catch (ModelNotFoundException $exception) {
            return redirect()->back()->with('error', 'Admin is not found');
        }
        
    }

    public function update(Request $request,$id)
    {
        $admin = AdminUser::find($id);
            $request->validate ([
                'name' => 'required',
                'email' => 'required',
            ]);

            if ($request->has('password'))
            {
                $admin ->password = bcrypt($request->password);
            }

            $admin->update([
                'name' =>$request->name,
                'email' =>$request->email,
            ]);

        Session::flash('success','Profile Updated Successfully');

            return redirect()->route('profile.index');
            
    }
}
