<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function GetLogin(){
        return view("backend.login.login");
    }
    // đăng ký
    public  function GetRegister(){

        return view("backend.login.register");
    }
}
