<?php

namespace App\Http\Requests\attribute;

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
            'name'              => 'required' ,
            'slug'              => 'required' ,
            'value'             => 'required' ,
            'id_type'           => 'required' ,
            'status'            => 'required'
        ];
    }

    public function messages(){
        return [
            'name.required'             => 'Hãy nhập tên thuộc tính !' ,

            'slug.required'             => 'Hãy nhập slug !' ,

            'id_type.required'             => 'Hãy nhập kiểu thuộc tính !' ,

            'value.required'             => 'Hãy nhập value !' ,

            'status.required'           => 'Hãy nhập trạng thái hoạt động !' ,

        ] ;
    }
}
