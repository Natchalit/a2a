<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Product;

class UserAuthController extends Controller
{
    function login(){
        return view('auth.login');
    }

    function register(){
        return view('auth.register');
    }

    function create(Request $request){
        $request->validate([
            'fname'=>'required',
            'lname'=>'required',
            'username'=>'required|unique:users',
            'password'=>'required',
            'address'=>'required',
            'tel'=>'',
            'line'=>'',
        ]);

        $users = new User;
        $users->fname = $request->fname;
        $users->lname = $request->lname;
        $users->username = $request->username;
        $users->password = Hash::make($request->password);
        $users->address = $request->address;
        $users->tel = $request->tel;
        $users->line = $request->line;
        $query = $users->save();

        if($query){
            return back()->with('Success','You have been succesfuly registered');
        }else{
            return back()->with('fail','Something went wrong');
        }
    }

    function check(Request $request){
        // return $request->input();
        $request->validate([
            'username'=>'required',
            'password'=>'required',
        ]);

        $user = User::where('username','=',$request->username)->first();
        if($user){
            if(Hash::check($request->password,$user->password)){
                $request->session()->put('LoggedUser',$user->id);
                return redirect('home');
            }else{
                return back()->with('fail','Invalid password');
            }
        }else{
            return back()->with('fail','No account found for this username');
        }
    }

    function home(){
        $products = Product::all();
        return view('welcome',compact('products'));
    }
}
