<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\File;
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


	public function edit($id)
    {   
        try {
            $product = Product::findOrFail($id);
            return view('admin.products.edit',compact('product'));
        } catch (ModelNotFoundException $exception) {
            return redirect()->back()->with('error', 'Product is not found');
        }
        $product = Product::find($id);
        return view('admin.products.edit',compact('product'));
    }


    public function update(Request  $request , $id)
    {
            $product = Product::find($id);
            $request->validate([
                'name' => 'required',
                'price' => 'required',
                'description' => 'required',
            ]);
            if($request->hasFile('image')){

                    if(File::exists(public_path('uploads/') . $product->image))  {
                        File::delete(public_path('uploads/') .  $product->image);
                    }
                    $image = $request->image;
                    $image->move('uploads',$image->getClientOriginalName());

                    $product->image = $request->image->getClientOriginalName();
            }
            $product->update([
                'name' =>$request->name,
                'price' =>$request->price,
                'description' =>$request->description,
                'image' =>$product->image,
            ]);

            return redirect()->route('product.index')->with('success','Product updated successfully');
            

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
        return redirect()->route('product.index');
    }

    public function destroy($id)
    {
        try {
            $porduct = Product::find($id);
            $porduct->delete();
            return redirect()->back()->with('success','Product has been deleted successfully');

        } catch (ModelNotFoundException $exception) {
            return redirect()->back()->with('error','Product is not found');
        }
        
    }


    public function show($id)
    {
        $product = Product::find($id);

        return view('admin.products.details',compact('product'));
    }
}
