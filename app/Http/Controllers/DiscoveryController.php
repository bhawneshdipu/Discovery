<?php

namespace App\Http\Controllers;

use App\Category;
use App\Item;
use Illuminate\Http\Request;

class DiscoveryController extends Controller
{
    public function menu(){
        $categories=Category::where('active',1)->get();
        return view('Welcome.menu',compact('categories'));

    }
    public function showitems(Request $request){
        $items=Item::where(['active'=>1,'category_id'=>$request->get('id')])->get();
        return response()->json(json_encode($items));

    }
}
