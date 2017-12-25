<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Category;
use DB;
use Storage;

class CategoryController extends Controller
{
    //


    public function home(Request $request){
        $employee=Employee::where('id',$request->session()->get('id'))->first();
        if(!$employee){
            return redirect("/employee/login");
        }
        return view('Category.home',compact('employee'));
    }

    public function show(Request $request){

        $employee=Employee::where('id',$request->session()->get('id'))->first();

        if(!$employee){
            return redirect("/employee/login");
        }
        $categories=Category::where('active',1)->get();
        return view("Category.show",compact(['categories','employee']));
    }
    public function deleted(Request $request){
        $employee=Employee::where('id',$request->session()->get('id'))->first();
        $categories=Category::where('active',0)->get();
        return view("Category.deleted",compact(['categories','employee']));
    }
    public function create(Request $request){
        // return the create form
        $employee=Employee::where('id',$request->session()->get('id'))->first();

        $manager_id=$request->session()->get('id');
        return view("Category.create",compact(['manager_id','employee']));
    }


    public function store(Request $request){


        $statement = DB::select("SHOW TABLE STATUS LIKE 'categories'");
        $nextId = $statement[0]->Auto_increment;
        echo $nextId;
        $category=new Category;
        $category->name=request('name');
        $category->pic='category/'.$nextId.'.'.$request->file('pic')->clientExtension();
        $category->manager_id=request('manager_id');
        $category->desc=request('desc');
        $category->active=1;
        $category->timestamps=false;


        $category->save();


        Storage::put(
            'public/category/'.$nextId.'.'.$request->file('pic')->clientExtension(),
            file_get_contents($request->file('pic')->getRealPath(),'public')
        );
        return redirect("/category/show");
    }

    public function edit(Request $request,$id){
        $employee=Category::where('id',$request->session()->get('id'))->first();
        $cat=Category::where("id",$id)->first();
        if($cat){
            return view('Category.edit',compact(['cat','employee']));
        }else{
            return redirect("/category/show");
        }
    }
    public  function update(Request $request,$id){
        $category=Category::find($id);
        $category->name=request('name');
        $category->manager_id=request('manager_id');
        $category->desc=request('desc');
        $category->active=1;
        $category->timestamps=false;


        if($request->hasFile('pic')) {
            $category->pic = 'category/'. $id.'.'.$request->file('pic')->clientExtension();
            Storage::put(
                'public/category/'.$id.'.'.$request->file('pic')->clientExtension(),
                file_get_contents($request->file('pic')->getRealPath(),'public')
            );
        }
        $category->save();


        return redirect("/category/show");

    }
    public function delete(Request $request,$id){
        $employee=Employee::where('id',$request->session()->get('id'))->first();
        $cat=Category::where("id",$id)->first();
        if($cat){
            return view('Category.delete',compact(['cat','employee']));
        }else{
            return redirect("/category/show");
        }

    }
    public function destroy(Request $request,$id){
        echo $id;
        $employee=Employee::where('id',$request->session()->get('id'))->first();
        $emp=Category::find($id);
        $emp->active=0;
        $emp->save();


        return redirect("/category/show");


    }
    public function recoverEdit(Request $request,$id){
        $employee=Category::where('id',$request->session()->get('id'))->first();
        $cat=Category::where("id",$id)->first();
        if($cat){
            return view('Category.recover',compact(['cat','employee']));
        }else{
            return redirect("/category/show");
        }
    }
    public function recover(Request $request,$id){
        echo $id;
        $employee=Employee::where('id',$request->session()->get('id'))->first();
        $emp=Category::find($id);
        $emp->active=1;
        $emp->save();


        return redirect("/category/show");


    }
}
