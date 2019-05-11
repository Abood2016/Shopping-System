<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Order;
use App\Product;
class DashboardController extends Controller
{

    public function index()
    {
        $user = new User();
        $order = new Order();
        $product = new Product();
        return view('admin.dashboard',compact('user','order','product'));
    }

    
}
