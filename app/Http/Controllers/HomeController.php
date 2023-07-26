<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function GetHome(){
        return view("frontend.index");
    }

    public function GetAbout(){
        return view("frontend.about");
    }

    public function GetContact(){
        return view("frontend.contact");
    }

    public function GetShop(){
        return view("frontend.product.shop");
    }

    public function GetDetail(){
        return view("frontend.product.detail");
    }
    public function GetCheckout(){
        return view("frontend.checkout.checkout");
    }

    public function GetComplete(){
        return view("frontend.checkout.complete");
    }

    public function GetCart(){
        return view("frontend.cart.cart");
    }
}
