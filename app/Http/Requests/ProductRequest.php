<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
        $rules =[];
        $method = $this->route()->getActionMethod();
        switch ($this->method()) {
            case 'POST':
                switch ($method) {
                    case 'PostAddProduct':
                        $rules=[
                            'ten_phong'=>'required|unique:phong,ten_phong',
                            'gia_phong'=>'required|numeric|min:0.01',
                            'giam_gia'=>'required|numeric|min:0.01',
                            'hinh_anh'=>'required'
                        ];
                        break;
                    case 'PostEditProduct':
                        $rules=[
                            'ten_phong'=>'required|unique:phong,ten_phong,'.$this->id.',id',
                            'gia_phong'=>'required|numeric|min:0.01',
                            'giam_gia'=>'required|numeric|min:0.01',
                        ];
                        break;
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
            'ten_phong.required'=>'Bạn cần nhập tên phòng',
            'ten_phong.unique'=>'Tên phòng đã tồn tại',
            'gia_phong.required'=>'Bạn cần nhập giá phòng',
            'gia_phong.numeric'=>'Giá phòng phải là số',
            'gia_phong.min'=>'Giá phòng phải là số dương',
            'giam_gia.required'=>'Bạn cần nhập giảm giá phòng',
            'giam_gia.numeric'=>'Giảm giá phòng phải là số',
            'giam_gia.min'=>'Giảm giá phòng phải là số dương',
            'hinh_anh.required'=>'Bạn cần nhập hình ảnh'
        ];
    }
}
