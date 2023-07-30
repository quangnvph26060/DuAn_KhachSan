<?php

namespace App\Http\Controllers\backend;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
// use App\Models\User;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    public function GetLogin()
    {
        return view("backend.login.login");
    }
    public function PostLogin(LoginRequest $r)
    {
        $email = $r->email;
        $password = $r->password;
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            return redirect('admin')->with('thongbao', 'Đăng nhập thành công');
        } else {
            return redirect()->back()->with('thongbao', 'Tài khoản hoặc mật khẩu không chính xác');
        }
    }

  
    // đăng ký
    public  function GetRegister()
    {

        return view("backend.login.register");
    }
}
