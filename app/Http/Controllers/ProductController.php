<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        // dd($products);
        return view('product',compact('products'));
    }

    public function order($p_id){
        $product = Product::findOrfail($p_id);
        // dd($product);
        return view('contact',compact('product'));
    }

    public function sentorder(Request $request){
        $product = Product::findOrfail($request->id);
        // dd($product->id);
        $total = ($request->value) * ($request->amount);

        $order = new Order;
        $order->p_id = $product->id;
        $order->fname = $request->fname;
        $order->lname = $request->lname;
        $order->address = $request->address;
        $order->tel = $request->tel;
        $order->amount = $request->amount;
        $order->total = $total;

        // return view('checkorder',compact('request','total','product'));
        return view('checkorder',compact('order','product'));
    }
    


}
