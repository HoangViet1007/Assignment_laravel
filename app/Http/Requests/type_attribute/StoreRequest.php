<?php

namespace App\Http\Requests\type_attribute;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'             => 'required|min:3|max:100|unique:type_attributes',
            'slug'             => 'required|min:3|max:100' ,
            'status'           => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required'             => 'Hãy nhập tên cho loại thuộc tính !' ,
            'name.min'                  => 'Loại thuộc tính phải có độ dài từ 3-100 kí tự' ,
            'name.max'                  => 'Loại thuộc tính phải có độ dài từ 3-100 kí tự' ,
            'name.unique'               => 'Loại thuộc tính này đã tồn tại' ,

            'slug.required'             => 'Hãy nhập slug !' ,
            'slug.min'                  => 'Slug phải có độ dài từ 3-100 kí tự' ,
            'slug.max'                  => 'Slug phải có độ dài từ 3-100 kí tự' ,

            'status.required'           => 'Hãy nhập trạng thái hoạt động !' ,

        ] ;
    }
}
