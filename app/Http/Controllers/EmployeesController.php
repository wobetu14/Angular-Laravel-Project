<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function index($id=null)
    {
        if ($id==null){
            return Employee::orderby('id','asc')->get();
        }
        else {
            return $this->show($id);
        }
    }

    public function store(Request $request){
        Employee::create($request->all());
        $emp_info=Employee::where('emp_id',$request->emp_id)->first();

        return response()->json(
            ['message'=>'Employee record successfully created with ID '.$emp_info->id]
        );
    }

    public function show($id){
        return Employee::find($id);
    }

    public function update(Request $request, $id){
        $employee=Employee::find($id);
        $employee->firstname=$request->input('firstname');
        $employee->lastname=$request->input('lastname');
        $employee->education=$request->input('education');
        $employee->position=$request->input('position');
        $employee->salary=$request->input('salary');
        $employee->contact_number=$request->input('contact_number');
        $employee->save();
        return "Success updating user ".$employee->id;
    }

    public function delete(Request $request){
        $employee=Employee::find($request->input('id'));
        $employee->delete();
        return "Employee record successfully deleted. ".$request->input('id');
    }
}
