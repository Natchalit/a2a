<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;

class OrderController extends Controller
{
    public function bill(Request $request){

        // dd($request);
        
        $order = new Order;
        $order->p_id = $request->p_id;
        $order->fname = $request->fname;
        $order->lname = $request->lname;
        $order->address = $request->address;
        $order->tel = $request->tel;
        $order->amount = $request->amount;
        $order->total = $request->total;
        
        $query = $order->save();
        
        if($query){
            return redirect('/home')->with('Success','Thank you for using the service');
        }else{
            return redirect()->with('fail','Something went wrong');
        }
    }
}
