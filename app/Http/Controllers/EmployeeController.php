<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Employee;
use DB;
class EmployeeController extends Controller
{

    public function home(Request $request){
        $employee=Employee::where('id',$request->session()->get('id'))->first();
        if(!$employee){
            return redirect("/employee/login");
        }
        return view('Employee.home',compact('employee'));
    }

    public function show(Request $request){

        $employee=Employee::where('id',$request->session()->get('id'))->first();
        if(!$employee){
            return redirect("/employee/login");
        }
        $employees=Employee::where('active',1)->where('id','!=',$request->session()->get('id'))->get();
        return view("Employee.show",compact(['employees','employee']));
    }
    public function deleted(Request $request){

        $employee=Employee::where('id',$request->session()->get('id'))->first();
        if(!$employee){
            $employee=new Employee;
            $employee->name=$request->session()->get('id');
        }
        $employees=Employee::where('active',0)->get();
        return view("Employee.deleted",compact(['employees','employee']));
    }
    public function create(Request $request){
        // return the create form
        $manager_id=$request->session()->get('id');
        return view("Employee.create",compact('manager_id'));
    }
    public function login(Request $request){
        // return the create form
        $error='';
        echo "account ";

        return view("Employee.login",compact('error'));
    }

    public function verifyLogin(Request $request){

        $employee=Employee::where(['email'=> $request->get('email'),'password'=> md5($request->get('password'))])->first();

        echo $employee;

        if($employee){

            if($employee->active==1) {
                $request->session()->flush();
                $request->session()->put('name', $employee->name);
                $request->session()->put('email', $employee->email);
                $request->session()->put('mobile', $employee->mobile);
                $request->session()->put('id', $employee->id);

                return redirect("/employee/home");
            }else{
                $error='Account not active. Please Contact manager.';
                return view("Employee.login",compact(['error']));
            }
        }else{

            $error='invalid details. Please try again';
            return view("Employee.login",compact(['error']));
        }
    }


    public function store(){
        $employee=new Employee;
        $employee->name=request('name');
        $employee->password=md5(request('password'));
        $employee->email=request('email');
        $employee->gov_id=request('gov_id');
        $employee->gov_id_type=request('gov_id_type');
        $employee->manager_id=request('manager_id');
        $employee->mobile=request('mobile');
        $employee->last_login=now();
        $employee->desc=request('desc');
        $employee->is_super=request('is_super');

        $employee->timestamps=false;

        $employee->save();

        echo  $employee;
        return redirect("/employee/show");
    }

    public function edit(Request $request,$id){
            $employee=Employee::where('id',$request->session()->get('id'))->first();
            $emp=Employee::where("id",$id)->first();
            if($emp){
                return view('Employee.edit',compact(['emp','employee']));
            }else{
                return redirect("/employee/show");
            }
    }
    public function recoverEdit(Request $request,$id){
        $employee=Employee::where('id',$request->session()->get('id'))->first();
        $emp=Employee::where("id",$id)->first();
        if($emp){
            return view('Employee.recover',compact(['emp','employee']));
        }else{
            return redirect("/employee/show");
        }
    }

    public  function update(Request $request,$id){
        $employee=Employee::find($id);
        $employee->name=$request->name;
        $employee->email=$request->email;
        $employee->gov_id=$request->gov_id;
        $employee->gov_id_type=$request->gov_id_type;
        $employee->manager_id=$request->manager_id;
        $employee->mobile=$request->mobile;

        $employee->desc=$request->desc;
        $employee->is_super=$request->is_super;
        $employee->active=1;
        $employee->timestamps=false;

        echo $id;
        echo $employee;

        $employee->save();

        return redirect("/employee/show");

    }
    public function delete(Request $request,$id){
        $employee=Employee::where('id',$request->session()->get('id'))->first();
        $emp=Employee::where("id",$id)->first();
        if($emp){
            return view('Employee.delete',compact(['emp','employee']));
        }else{
            return redirect("/employee/show");
        }

    }
    public function destroy(Request $request,$id){
     echo $id;
        $employee=Employee::where('id',$request->session()->get('id'))->first();
        $emp=Employee::find($id);
        $emp->active=0;
        $emp->save();


            return redirect("/employee/show");


    }

    public function recover(Request $request,$id){
        echo $id;
        $employee=Employee::where('id',$request->session()->get('id'))->first();
        $emp=Employee::find($id);
        $emp->active=1;
        $emp->save();


        return redirect("/employee/show");


    }

    public function logout(Request $request){
        // return the create form
        $error='Logout Successfully';
        return view("Employee.login",compact('error'));
    }
}
