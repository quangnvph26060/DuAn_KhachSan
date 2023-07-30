<?php

namespace App\Http\Controllers\backend;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function GetIndex(){
        return view("backend.index");
    }

    public function GetLogout()
    {
        Auth::logout();
        return redirect('');
    }
}
