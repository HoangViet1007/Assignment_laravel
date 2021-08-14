<?php

namespace App\Http\Requests\category_post;

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

    public function rules()
    {
        return [
            'name'             => 'required|min:3|max:100|unique:category_posts,name,' .request()->id,
            'slug'             => 'required|min:3|max:100' ,
            'status'           => 'required|in:'.implode(',',config('common.category_posts.status')) ,
        ];
    }

    public function messages(){
        return [
            'name.required'             => 'Hãy nhập tên cho danh mục !' ,
            'name.min'                  => 'Danh mục bài viết phải có độ dài từ 3-100 kí tự' ,
            'name.max'                  => 'Danh mục bài viết phải có độ dài từ 3-100 kí tự' ,
            'name.unique'               => 'Danh mục bài viết này đã tồn tại' ,

            'slug.required'             => 'Hãy nhập slug !' ,
            'slug.min'                  => 'Slug phải có độ dài từ 3-100 kí tự' ,
            'slug.max'                  => 'Slug phải có độ dài từ 3-100 kí tự' ,

            'status.required'           => 'Hãy nhập trạng thái hoạt động !' ,
            'status.in'                 => 'Trạng thái hoạt động không hợp lệ !'

        ] ;
    }
}
