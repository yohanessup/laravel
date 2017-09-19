<?php
/**
 * Created by PhpStorm.
 * User: YohanesSuprapto
 * Date: 9/18/2017
 * Time: 3:11 PM
 */

namespace App\Http\Controllers;

use App\Employee;

class EmployeesController extends Controller
{

    public function index()
    {
        $employee = new Employee();
        $data = $employee::all();

        return view('employee', ['data' => $data]);
    }

}