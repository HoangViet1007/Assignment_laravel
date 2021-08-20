<?php

namespace App\Http\Requests\user;

use Illuminate\Foundation\Http\FormRequest;

class UpdateClienRequest extends FormRequest
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
            'name' => 'required|min:3|max:100',
            'email' => 'required|email|unique:users,email,'.request()->id ,
            // 'image' => 'required',
            'phone' => 'required|min:10|numeric',
            'address' => 'required',
            'gender' => 'required|in:'.implode(',',config('common.user.gender')) ,
        ];
    }

    public function messages()
    {
        return [
            'name.required'=> "Hãy nhập họ và tên !",
            'name.min' => "Họ và tên tối thiểu phải có 3 kí tự",
            'name.max'=> "Họ và tên phải ít hơn 100 kí tự",

            'email.required' => "Hãy nhập email !",
            'email.email' => "Email không hợp lệ !",
            'email.unique'=> "Email đã tồn tại !",

            // 'image.required' => "Hãy nhập hình ảnh !",

            'phone.required' => "Hãy nhập số điện thoại !",
            'phone.min' => "Số điện thoại tối thiểu phải có 10 số !",
            'phone.numeric'=>"Số điện thoại không hợp lệ !",

            'address.required' => "Hãy nhập địa chỉ !",

            'gender.required' => 'Hãy chọn giới tính !' ,
            'gender.in' => 'Giới tính không hợp lê' ,

        ];
    }
}
