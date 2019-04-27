<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Session;
class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index',compact('products'));
    } 


    public function create()
    {
        return view('admin.products.create');
    }


	public function edit()
    {
        return 'edit';
    }

    public function store(Request $request)
    {
        //validate data
       $request->validate([
           'name' => 'required',
           'price' => 'required',
           'description' => 'required',
           'image' => 'image|required'
       ]);

        //upload image 
        if($request->hasFile('image'))
        {
            $image = $request->image;
            $image->move('uploads' , $image->getClientOriginalName());    
        }
        $porduct = Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'image' => $request->image->getClientOriginalName(),
        ]);
        Session::flash('success','Product has been saved successfully');
        return redirect()->back();
    }


    public function destroy($id)
    {
        $porduct = Product::find($id);
        $porduct->delete();
        return redirect()->back()->with('success','Product has been deleted successfully');
    }

}
