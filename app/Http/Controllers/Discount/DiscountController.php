<?php

namespace App\Http\Controllers\Discount;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    public function Add(){
        return view('Discount.Add');
    }
    public function Category($id){
        return view('Discount.Category');
    }
    public function All(){
        return view('Discount.All');
    }
    public function Show(){
        return view('Discount.show');
    }
    public function Edit(){
        return view('Discount.Edit');
    }
}
