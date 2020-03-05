<?php

namespace App\Http\Controllers\Bouns;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BounsController extends Controller
{
    public function Add(){
        return view('Bouns.Add');
    }
    public function Category($id){
        return view('Bouns.Category');
    }
    public function All(){
        return view('Bouns.All');
    }
    public function Show(){
        return view('Bouns.show');
    }
    public function Edit(){
        return view('Bouns.Edit');
    }
}
