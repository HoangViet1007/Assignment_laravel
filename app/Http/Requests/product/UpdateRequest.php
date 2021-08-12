<?php

namespace App\Http\Requests\product;

use Illuminate\Foundation\Http\FormRequest;

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
            'name'                          => 'required|min:3|max:100|unique:products,name,' .request()->id,
            'slug'                          => 'required|min:3|max:100' ,
            'title'                         => 'required',
            'short_description'             => 'required|min:3',
            'description'                   => 'required|min:3',
            'status'                        => 'required',
            'highlight'                     => 'required',
            'category_id'                   => 'required',
            'tags'                          => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required'             => 'Hãy nhập tên cho sản phẩm !' ,
            'name.min'                  => 'Tên sản phẩm phải có độ dài từ 3-100 kí tự !' ,
            'name.max'                  => 'Tên sản phẩm phải có độ dài từ 3-100 kí tự !' ,
            'name.unique'               => 'Tên sản phẩm này đã tồn tại !' ,

            'slug.required'             => 'Hãy nhập slug !' ,
            'slug.min'                  => 'Slug phải có độ dài từ 3-100 kí tự !' ,
            'slug.max'                  => 'Slug phải có độ dài từ 3-100 kí tự !' ,

            'title.required'            => 'Hãy nhập tiêu đề cho sản phẩm !',

            'short_description.required' => 'Hãy nhập mô tả cho sản phẩm !',
            'short_description.min'      => 'Mô tả sản phẩm phải có độ dài trên 3 kí tự !',

            'description.required'       => 'Hãy nhập nội dung cho sản phẩm !',
            'description.min'            => 'Nội dung sản phẩm phải có độ dài trên 3 kí tự !',

            'status.required'            => 'Hãy chọn trạng thái hoạt động !',

            'highlight.required'         => 'Hãy chọn trạng thái đặc biệt !',

            'category_id.required'       => 'Hãy chọn danh mục sản phẩm !' ,

            'tags.required'              => 'Hãy nhập tag cho sản phẩm !' ,
        ];
    }
}
