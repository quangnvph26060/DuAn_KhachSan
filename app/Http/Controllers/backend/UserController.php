<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function GetUser(){
        return view("backend.user.listuser");
    }

    public function GetAddUser(){
        return view("backend.user.adduser");
    }

    public function GetEditUser(){
        return view("backend.user.edituser");
    }
}
