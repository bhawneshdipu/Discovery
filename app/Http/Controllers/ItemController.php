<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Employee;
use App\Item;
use DB;
use Storage;

class ItemController extends Controller
{
    //


    public function home(Request $request){
        $employee=Employee::where('id',$request->session()->get('id'))->first();
        if(!$employee){
            return redirect("/employee/login");
        }
        return view('Item.home',compact('employee'));
    }

    public function show(Request $request){

        $employee=Employee::where('id',$request->session()->get('id'))->first();

        if(!$employee){
            return redirect("/employee/login");
        }
        $items=Item::where('active',1)->get();
        return view("Item.show",compact(['items','employee']));
    }
    public function deleted(Request $request){
        $employee=Employee::where('id',$request->session()->get('id'))->first();
        $items=Item::where('active',0)->get();
        return view("Item.deleted",compact(['items','employee']));
    }
    public function create(Request $request){
        // return the create form
        $employee=Employee::where('id',$request->session()->get('id'))->first();

        $manager_id=$request->session()->get('id');
        $categorylist=Category::where('active',1)->get();
        return view("Item.create",compact(['manager_id','employee','categorylist']));
    }


    public function store(Request $request){


        $statement = DB::select("SHOW TABLE STATUS LIKE 'items'");
        $nextId = $statement[0]->Auto_increment;
        echo $nextId;

        $item=new Item;
        $item->name=request('name');
        $item->half_price=request('half_price');
        $item->full_price=request('full_price');
        $item->category_id=request('category_id');
        $item->pic='item/'.$nextId.'.'.$request->file('pic')->clientExtension();
        $item->manager_id=request('manager_id');
        $item->desc=request('desc');
        $item->active=1;
        $item->timestamps=false;


        $item->save();


        Storage::put(
            'public/item/'.$nextId.'.'.$request->file('pic')->clientExtension(),
            file_get_contents($request->file('pic')->getRealPath(),'public')
        );
        return redirect("/item/show");
    }

    public function edit(Request $request,$id){
        $employee=Item::where('id',$request->session()->get('id'))->first();
        $item=Item::where("id",$id)->first();

        if($item){

            $categorylist=Category::where('active',1)->get();
            return view('Item.edit',compact(['item','employee','categorylist']));
        }else{
            return redirect("/item/show");
        }
    }
    public  function update(Request $request,$id){
        $item=Item::find($id);
        $item->name=request('name');
        $item->half_price=request('half_price');
        $item->full_price=request('full_price');
        $item->category_id=request('category_id');
        $item->manager_id=request('manager_id');
        $item->desc=request('desc');
        $item->active=1;
        $item->timestamps=false;



        if($request->hasFile('pic')) {
            $item->pic = 'item/' . $id . '.' . $request->file('pic')->clientExtension();
            Storage::put(
                'public/item/'.$id.'.'.$request->file('pic')->clientExtension(),
                file_get_contents($request->file('pic')->getRealPath(),'public')
            );
        }
        $item->save();


        return redirect("/item/show");

    }
    public function delete(Request $request,$id){
        $employee=Employee::where('id',$request->session()->get('id'))->first();
        $item=Item::where("id",$id)->first();
        if($item){
            return view('Item.delete',compact(['item','employee']));
        }else{
            return redirect("/item/show");
        }

    }
    public function destroy(Request $request,$id){
        echo $id;
        $employee=Employee::where('id',$request->session()->get('id'))->first();
        $item=Item::find($id);
        $item->active=0;
        $item->save();


        return redirect("/item/show");


    }
    public function recoverEdit(Request $request,$id){
        $employee=Item::where('id',$request->session()->get('id'))->first();
        $item=Item::where("id",$id)->first();
        if($item){

            $categorylist=Category::where('active',1)->get();
            return view('Item.recover',compact(['categorylist','employee','item']));
        }else{
            return redirect("/item/show");
        }
    }
    public function recover(Request $request,$id){
        echo $id;
        $employee=Employee::where('id',$request->session()->get('id'))->first();
        $item=Item::find($id);
        $item->active=1;
        $item->save();


        return redirect("/item/show");


    }
}
