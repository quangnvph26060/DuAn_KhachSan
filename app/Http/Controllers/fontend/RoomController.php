<?php

namespace App\Http\Controllers\fontend;

use App\Http\Controllers\Controller;
use App\Models\ProductModel;
use Illuminate\Http\Request;
use App\Models\CategoryModel;
use Illuminate\Support\Facades\Storage;
class RoomController extends Controller
{
    public function GetShop(){
        $category = CategoryModel::all();
        $room = ProductModel::paginate(2);
        return view("frontend.product.shop",compact('category','room'));
    }
    public function GetShopDetail($id){
        $room = ProductModel::find($id);
        return view("frontend.product.detail",compact('room'));
    }
}
