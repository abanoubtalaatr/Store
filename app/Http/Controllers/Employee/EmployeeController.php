<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function Add(){
        return view('Employee.Add');
    }

    public function Show(){
        return view('Employee.show');
    }
    public function Edit(){
        return view('Employee.Edit');
    }
    public function Fire(){
        return view('Employee.fire');
    }
    public function Prompt(){
        return view('Employee.prompt');
    }
}
