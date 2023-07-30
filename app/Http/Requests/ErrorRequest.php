<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ErrorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        // tạo mảng
        $rules = [];
        // phương thức  trong route trên url
        $method = $this->route()->getActionMethod();
        switch ($this->method()) { // phương thức mà route đó đang thực hien
            case 'POST':
                    switch ($method){
                        case 'GetCategory':
                            $rules = [
                                'loaiphong' => 'required|min:6|unique:loaiphong,loaiphong',

                            ];
                            break;
                        case 'GetEditCategory':
                            $rules = [
                                'loaiphong' => 'required|min:6|unique:loaiphong,loaiphong,'.$this->id.'id',
                            ];
                            break;
                        case 'Banner':
                            $rules = [
                                'hinh_anh' => 'required',
                            ];
                            break;
                        case 'getBanner':
                            $rules = [
                                 'hinh_anh' => 'unique:banner,banner',
                            ];
                        default:
                            break;
                    }
                break;
            default:
                break;
        }

        return $rules;
    }
    public function messages()
    {
        return [
            'hinh_anh.required'=>'Vui lòng chọn file',
            'loaiphong.unique'=>'Loại phòng này đã có trong danh sách',
            'loaiphong.requied'=>'Vui Lòng Nhập Loại Phòng',
            'loaiphong.min'=>'Tên Phòng Phải Hơn :min Ký Tự'
        ];
    }
}
