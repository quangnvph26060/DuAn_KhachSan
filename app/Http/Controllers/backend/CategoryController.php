<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function GetCategory(){
        return view("backend.category.category");
    }
    public function GetEditCategory(){
        return view("backend.category.editcategory");
    }
}