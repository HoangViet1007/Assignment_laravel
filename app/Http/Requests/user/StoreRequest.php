<?php

namespace App\Http\Requests\user;

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
                'name' => 'required|min:3|max:100',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6|max:100',
                'image' => 'required',
                'phone' => 'required|min:10|numeric',
                'address' => 'required',
                'gender' => 'required|in:'.implode(',',config('common.user.gender')) ,
                'status' => 'required|in:'.implode(',',config('common.user.status')) ,
                'roles'=> 'required'
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

            'password.required' => "Hãy nhập mật khẩu !",
            'password.min' => "Mật khẩu tối thiểu phải có 6 kí tự",
            'password.max'=> "Mật khẩu phải ít hơn 100 kí tự",

            'image.required' => "Hãy nhập hình ảnh !",

            'phone.required' => "Hãy nhập số điện thoại !",
            'phone.min' => "Số điện thoại tối thiểu phải có 10 số !",
            'phone.numeric'=>"Số điện thoại không hợp lệ !",

            'address.required' => "Hãy nhập địa chỉ !",

            'gender.required' => 'Hãy chọn giới tính !' ,
            'gender.in' => 'Giới tính không hợp lê' ,

            'status.required' => 'Hãy chọn Trạng thái hoạt động !',
            'status.in' => 'Trạng thái hoạt động không hợp lệ !' ,
            'roles.required' =>"Hãy chọn chức vụ cho người dùng !"

        ];
    }
}
