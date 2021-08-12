<?php

namespace App\Http\Requests\category;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class UpdateRequest extends FormRequest
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
            'name'             => 'required|min:3|max:100|unique:categories,name,'. request()->id ,
            'slug'             => 'required|min:3|max:100' ,
            'status'           => 'required',
            'parent_id'        => 'not_in:'. request()->id ,
        ];
    }

    public function messages(){
        return [
            'name.required'             => 'Hãy nhập tên cho danh mục !' ,
            'name.min'                  => 'Tên danh mục phải có độ dài từ 3-100 kí tự !' ,
            'name.max'                  => 'Tên danh mục phải có độ dài từ 3-100 kí tự !' ,
            'name.unique'               => 'Tên danh mục này đã tồn tại' ,

            'slug.required'             => 'Hãy nhập slug !' ,
            'slug.min'                  => 'Slug phải có độ dài từ 3-100 kí tự !' ,
            'slug.max'                  => 'Slug phải có độ dài từ 3-100 kí tự !' ,

            'status.required'           => 'Hãy nhập trạng thái hoạt động !' ,

            'parent_id.not_in'          => 'Không được chọn danh mục cha là chính mình !'

        ] ;
    }
}
