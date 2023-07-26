<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CategoryModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\ErrorRequest;
class CategoryController extends Controller
{

    // thêm
    public function GetCategory(ErrorRequest $request){

        // xử lý thêm

        if($request->isMethod('POST')){
           $loaiphong = $request->loaiphong;

            $category = CategoryModel::create([
                'loaiphong'=>$loaiphong,
            ]);

            if($category){
                Session::flash('success', 'Thêm phòng thành công');
            }
        }
        // hiển thị
        $category = CategoryModel::all();
        return view("backend.category.category",compact('category'));
    }
    // edit
    public function GetEditCategory(ErrorRequest $request  ,$id){
            $categoryEdit = CategoryModel::find($id);
        if($request->isMethod('POST')){
            $loaiphong = $request->loaiphong;
            $result = CategoryModel::where('id',$id)->update([
                'loaiphong'=>$loaiphong,
            ]);
            if($result){
                Session::flash('success', 'Cập nhật phòng thành công');
                return redirect()->route('category.add');
            }
        }
        // hiển thị
        $category = CategoryModel::all();
        return view("backend.category.editcategory",compact('category','categoryEdit'));
    }
    // delete
    public function DeleteCategory($id){
        $categoryDL = CategoryModel::where('id',$id)->delete();
        if($categoryDL){
            Session::flash('success', 'Xóa phòng thành công');
            return redirect()->route('category.add');
        }


    }
    public function Abc(){
        $category = CategoryModel::withTrashed()->find(4);
        $category->restore();

    }
}
