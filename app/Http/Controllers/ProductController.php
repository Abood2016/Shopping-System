<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductController extends Controller
{
    public function index()
    {

    } 

    public function create()
    {
        return view('admin.products.create');
    }
	public function edit()
    {
        
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
        return redirect()->back()->with('success', 'Product has been saved successfully');
    }

}
