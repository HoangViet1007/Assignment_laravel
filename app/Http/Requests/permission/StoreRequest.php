<?php

namespace App\Http\Requests\permission;

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
            'name'             => 'required|min:2|unique:permissions',
            'display_name'     => 'required' ,
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Hãy nhập tên cho quyền !',
            'name.min'      => 'Tên quyền phải tối thiểu 2 kí tự',
            'name.unique'   => 'Quyền này đã tồn tại !',

            'display_name.required' => 'Hãy nhập mô tả cho quyền !',
        ];
    }
}
