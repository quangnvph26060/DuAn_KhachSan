<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function GetProduct(){
        return view("backend.product.listproduct");
    }

    public function GetAddProduct(){ 
        return view("backend.product.addproduct");
    }

    public function GetEditProduct(){ 
        return view("backend.product.editproduct");
    }
}
