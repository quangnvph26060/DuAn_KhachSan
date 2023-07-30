<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ErrorRequest;
use App\Models\BannerModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class BannerController extends Controller
{
    //  thêm banner
    public function Banner(ErrorRequest $request)
    {
        if($request->isMethod('POST')){ // kiểm tra phương thức
            if($request->hasFile('hinh_anh') && $request->file('hinh_anh')->isValid()){
                $request->hinh_anh = uploadFile('hinh', $request->file('hinh_anh'));
            }
            $params = $request->except('_token','hinh_anh');
            $params['banner'] = $request->hinh_anh; //   $params['image'] image là tên trong database
            $result = BannerModel::create($params);
            if($result){
                Session::flash('success', 'Thêm Banner thành công');
            }
        }
        // hiển thị tất cả
        $banner = BannerModel::all();
        return view('backend.banner.add', compact('banner'));
    }

    //edit banner
    public function getBanner(ErrorRequest $request,$id)
    {
        $banneredit = DB::table('banner')->where('id',$id)->first();
        $params = $request->except('_token','hinh_anh');
        if($request->isMethod('POST')){
            if($request->hasFile('hinh_anh') && $request->file('hinh_anh')->isValid()){
                $ruseltDL = Storage::delete('/public/'.$banneredit->banner);
                if($ruseltDL){
                    $request->hinh_anh = uploadFile('hinh', $request->file('hinh_anh'));
                    $params['banner'] = $request->hinh_anh;
                }
            }else{
                $params['banner'] = $banneredit->banner;
            }
            $result = BannerModel::where('id',$id)->update($params);
            if($result){
                Session::flash('success', 'Cập nhật Banner thành công');
                return redirect(route('banner'));
            }
        }
        // hiển thị tất cả
        $banner = BannerModel::all();
        return view('backend.banner.edit', compact('banner','banneredit'));
    }
    // xóa banner
    public function DeleteBanner($id){
        $banner = BannerModel::find($id);
        $result = $banner->delete();
        if($result){
            Session::flash('success', 'Xóa Banner thành công');
            return redirect(route('banner'));
        }
    }
}
