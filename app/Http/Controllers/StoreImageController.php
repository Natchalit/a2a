<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Models\Product;
use Image;

class StoreImageController extends Controller
{
    public function index(){
        $data = Product::latest()->paginate(5);
        return view('store_image',compact('data'))
            ->with('i',(request()->input('page',1)-1)*5);
    }

    public function storeImg(Request $request){
        $p_code = $request->p_code;
        $p_name = $request->p_name;
        $value = $request->value;
        $type = $request->type;
        $p_image = $request->file('p_image');
        $imageName = time().'.'.$p_image->extension();
        $p_image->move(public_path('images'),$imageName);

        $product = new Product();
        $product->p_name = $p_name;
        $product->p_code = $p_code;
        $product->type = $type;
        $product->value = $value;
        $product->p_image = $imageName;

        $product->save();
        return redirect()->back()->with('success','Image store in database successfully');
    }
}
