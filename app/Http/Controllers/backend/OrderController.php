<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function GetOrder(){
        return view("backend.order.order");
    }

    public function GetDetailOrder(){
        return view("backend.order.detailorder");
    }

    public function GetProcessed(){
        return view("backend.order.processed");
    }
}
