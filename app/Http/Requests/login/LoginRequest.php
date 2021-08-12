<?php

namespace App\Http\Requests\login;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
        // exists la check xem có tồn tại ko  ngược lại với unique
        return [
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:6',
        ];
    }
    public function messages()
    {
        return [
            'email.required' => "Email không được để trống !",
            'email.email' => "Email không hợp lệ !" ,
            'email.exists' => "Email không tồn tại !" ,

            'password.required' => "Mật khẩu không được để trống !" ,
            'password.min'=> "Mật khấu tối thiểu phải có 6 kí tự" ,
        ];
    }
}
