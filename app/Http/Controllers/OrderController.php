<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
class OrderController extends Controller
{
    public function index()
    {   
        $orders = Order::all();
        return view('admin.orders.index',compact('orders'));
    }

    public function confirm($id)
    {
        $order = Order::find($id);

        $order->update(['status' =>1]);

        return redirect()->back()->with('success','Order Confirmed successfully');    

    }

    public function pending($id)
    {
            $order = Order::find($id);
            
            $order->update(['status' => 0]);

        return redirect()->back()->with('success','Order has been again into Pending');    

    }


    public function show($id)
    {
        $orders = Order::find($id);
        return view('admin.orders.details',compact('orders'));
    }

}
