<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Order;

class ClientDashboardController extends Controller
{
    function dashboard(){

        $orders=Order::with('services','payments')->where('user_id',Auth::user()->id)->orderBy('id','desc')->take(10)->get()->toArray();
        // dd($orders);
        return view('client.index')->with('orders',$orders);
    }
    function orders(){

        $orders=Order::with('services','payments')->where('user_id',Auth::user()->id)->orderBy('id','desc')->get()->toArray();
        // dd($orders);
        return view('client.pages.orders.index')->with('orders',$orders);
    }

    function show($order_id){
        $orders=Order::with('services','payments')->where('order_number',$order_id)->orderBy('id','desc')->get()->toArray();
        // dd($orders[0]);
        return view('client.pages.orders.show')->with('orders',$orders[0]);
    }
}
