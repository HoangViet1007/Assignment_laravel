<?php

namespace App\Http\Requests\cart;

use Illuminate\Foundation\Http\FormRequest;

class Order extends FormRequest
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
            'name' => 'required',
            'address1' => 'required',
            'address2' => 'required',
            'email' => 'required|email',
            'phone' => 'required|min:10|numeric',
            // 'content' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Hãy nhập họ và tên !',
            'address1.required' => 'Hãy chọn thành phố !',
            'address2.required' => 'Hãy nhập địa chỉ',
            'email.required' => 'Hãy nhập email !',
            'email.email' => 'Email không hợp lệ !',
            'phone.required' => 'Hãy nhập số điện thoại',
            'phone.min' => 'Số điện thoại không hợp lệ',
            'phone.numeric'=>"Số điện thoại không hợp lệ !",
            // 'content.required' => 'Hãy nhập ghi chú cho đơn hàng'
        ];
    }
}
