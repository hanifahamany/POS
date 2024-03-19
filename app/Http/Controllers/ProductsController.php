<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        return view('Products.index');
    }
    public function food(){
        return view('Products.foodBeverage');
    }
    public function beauty(){
        return view('Products.beautyHealth');
    }
    public function homeCare(){
        return view('Products.homeCare');
    }
    public function baby(){
        return view('Products.babyKid');
    }
}
