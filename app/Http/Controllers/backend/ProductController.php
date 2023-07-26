<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\ProductModel;
use App\Models\CategoryModel;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //list danh sách phòng
    public function GetProduct()
    {
        $data["phongs"] = ProductModel::paginate(4);
        return view("backend.product.listproduct", $data);
    }


    //thêm phòng

    //view ra form thêm phòng
    public function GetAddProduct()
    {
        $loais = CategoryModel::all();
        return view("backend.product.addproduct", compact('loais'));
    }


    // thực hiện thêm phòng
    public function PostAddProduct(ProductRequest $r)
    {

        $params = $r->except('_token');
        $loais = new CategoryModel();
        $phongs = new ProductModel();
        $phongs->id_loaiphong  = $r->id_loaiphong;
        // $phongs->$loais->id = $r->id_loaiphong;
        $phongs->ten_phong = $r->ten_phong;
        $phongs->gia_phong = $r->gia_phong;
        $phongs->giam_gia = $r->giam_gia;
        $phongs->trang_thai = $r->trang_thai;
        $phongs->noi_bat = $r->noi_bat;
        $phongs->mo_ta = $r->mo_ta;
        if ($r->isMethod('POST')) {
            if ($r->hasFile('hinh_anh') && $r->file('hinh_anh')->isValid()) {
                $phongs->hinh_anh= $r->hinh_anh = uploadFile('hinh', $r->file('hinh_anh'));
            }
            $params['hinh_anh'] = $r->hinh_anh;

        }
        $phongs->save();

        return redirect('admin/product')->with('thongbao', 'Bạn đã thêm phòng thành công');
    }
    //view ra form edit phòng
    public function GetEditProduct($id)
    {
        $phong = ProductModel:: find($id);
        $loais = CategoryModel::all();
        return view("backend.product.editproduct",compact('phong','loais'));
    }


    // thực hiện sửa phòng
    public function PostEditProduct(ProductRequest $r,$id){
        $params = $r->except('_token');
        $phongs = ProductModel:: find($id);
        print_r($params);
        if($r->isMethod('POST')){ //check xem có post hay không
            if($r->hasFile('hinh_anh') && $r->file('hinh_anh')->isValid()){
                //xóa ảnh khi có thực hiện post ảnh mới
                $resultDL= Storage::delete('/public/'.$phongs->hinh_anh);
                if($resultDL){
                    $phongs->hinh_anh = $r->hinh_anh = uploadFile('hinh',$r->file('hinh_anh'));
                    $params['hinh_anh']= $phongs->hinh_anh= $r->hinh_anh;
                }
            }else{
                //nếu không thay hình thì sẽ là ảnh cũ
                $params['hinh_anh'] = $phongs->hinh_anh;
            }
            $result = $phongs :: where('id',$id)->update($params);
        }
        return redirect('admin/product')->with('thongbao', 'Bạn đã sửa phòng thành công');
    }
    public function GetDeleteProduct($id){
        ProductModel::destroy($id);
        return redirect('admin/product')->with('thongbao', 'Bạn đã xóa phòng thành công');
    }
    //
}
