<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Employee;
use DB;
class EmployeeController extends Controller
{
    public function show(Request $request){

        $employee=Employee::where('id',$request->session()->get('id'))->first();
        if(!$employee){
            $employee=new Employee;
            $employee->name=$request->session()->get('id');
        }
        $employees=Employee::all();
        return view("Employee.show",compact(['employees','employee']));
    }
    public function create(Request $request){
        // return the create form
        $manager_id=$request->session()->get('id');
        return view("Employee.create",compact('manager_id'));
    }
    public function login(Request $request){
        // return the create form
        $request->session()->reflash();
        $error='';
        return view("Employee.login",compact('error'));
    }

    public function verifyLogin(Request $request){

        $employee=Employee::where(['email'=> $request->get('emailorm
        obile'),'password'=> md5($request->get('password'))])->orWhere(['mobile'=> $request->get('emailormobile'),'password'=> md5($request->get('password'))])->first();

        echo $employee;
        if($employee){
            $request->session()->put('name',$employee->name);
            $request->session()->put('email',$employee->email);
            $request->session()->put('mobile',$employee->mobile);
            $request->session()->put('id',$employee->id);

            return redirect()->action('EmployeeController@show')->sendHeaders();

        }else{
            $error='invalid details. Please try again';
            $employee=new Employee;
            $employee->name='Invalid Login';
            return view("Employee.login",compact(['error','employee']));

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
}
