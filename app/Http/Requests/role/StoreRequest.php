<?php

namespace App\Http\Requests\role;

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
            'name'             => 'required|min:2|unique:roles',
            'display_name'     => 'required' ,
            'status'           => 'required|in:'.implode(',',config('common.roles.status')) ,
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Hãy nhập tên chức vụ !',
            'name.min' => 'Tên chức vụ phải tối thiểu 2 kí tự !',
            'name.unique' => 'tên chức vụ này đã tồn tại !',

            'display_name.required' => 'Hãy nhập mô tả cho chức vụ !',

            'status.required' => 'Hãy nhập trạng thái hoạt động !',
            'status.in'                 => 'Trạng thái hoạt động không hợp lệ !' ,

        ];
    }
}
