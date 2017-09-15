<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\ResponseFactory;
use Illuminate\Support\Facades\Input;

class EmployeeController extends Controller
{
    public function index()
    {
        $inputemp = Input::get('id');
        if(is_null($inputemp)) {
            $employee = Employee::all();
        } else {
            $employee = new Employee();
            $employee = $employee->find($inputemp);
        }
        return response()->json(['status'=>'OK', 'data'=>$employee]);
    }

    public function store()
    {
        $employee = new Employee;
        $employee->first_name = Input::get('first_name');
        $employee->last_name = Input::get('last_name');
        $employee->email = Input::get('email');
        $employee->gender = Input::get('gender');
        $employee->phone_number = Input::get('phone_number');

        $success = $employee->save();

        if(!$success)
        {
            return response()->json(['status'=>'FAIL', 'message'=>'Fail to store data']);
        }

        return response()->json(['status'=>'OK', 'message'=>'Success saving data']);
    }

    public function show($id)
    {
        $employee = new Employee();
        $emp=$employee->find($id);
        if(is_null($emp))
        {
            return response()->json(['status'=>'FAIL', 'message'=>'Data Not Found']);
        }

        return response()->json(['status'=>'OK', 'data'=>$emp]);
    }

    public function update($id)
    {
        $employee = new Employee();
        $emp=$employee->find($id);

        if(!is_null(Input::get('first_name')))
        {
            $emp->first_name=Input::get('first_name');
        }

        if(!is_null(Input::get('last_name')))
        {
            $emp->last_name=Input::get('last_name');
        }

        if(!is_null(Input::get('email')))
        {
            $emp->email=Input::get('email');
        }

        if(!is_null(Input::get('gender')))
        {
            $emp->gender=Input::get('gender');
        }

        if(!is_null(Input::get('phone_number')))
        {
            $emp->phone_number=Input::get('phone_number');
        }

        $success=$emp->save();

        if(!$success)
        {
            return response()->json(['status'=>'FAIL', 'message'=>'Fail to Update Data']);
        }

        return response()->json(['status'=>'OK', 'message'=>'Success updating data']);
    }

    public function destroy($id)
    {
        $employee = new Employee();
        $emp=$employee->find($id);
        if(is_null($emp))
        {
            return response()->json(['status'=>'FAIL', 'message'=>'Data Not Found']);
        }

        $success=$emp->delete();

        if(!$success)
        {
            return response()->json(['status'=>'FAIL', 'message'=>'Fail to Delete Data']);
        }

        return response()->json(['status'=>'OK', 'message'=>'Success Deleting Data']);
    }
}
