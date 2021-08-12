<?php

namespace App\Http\Requests\post;

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
            'title'                         => 'required|min:3|max:200|unique:posts,title,' . request()->id ,
            'slug'                          => 'required|min:3|max:200' ,
            'short_description'             => 'required|min:3',
            'content'                       => 'required|min:3',
            // 'image'                         => 'required',
            'status'                        => 'required',
            'highlight'                     => 'required',
            'category_posts_id'             => 'required',
        ];
    }
    public function messages()
    {
        return [
            'title.required'                  => 'Hãy nhập tiêu đề bài viết !' ,
            'title.min'                       => 'Tiêu đề phải có độ dài từ 3-200 kí tự !' ,
            'title.max'                       => 'Tiêu đề phải có độ dài từ 3-200 kí tự !' ,
            'title.unique'                    => 'Tiêu đề này đã tồn tại !' ,

            'slug.required'                   => 'Hãy nhập slug !' ,
            'slug.min'                        => 'Slug phải có độ dài từ 3-100 kí tự' ,
            'slug.max'                        => 'Slug phải có độ dài từ 3-100 kí tự' ,

            'short_description.required'      => 'Hãy nhập mô tả cho bài viết !',
            'short_description.min'           => 'Mô tả phải có độ dài trên 3 kí tự !',

            'content.required'                => 'Hãy nhập nội dung cho bài viết !',
            'content.min'                     => 'Nội dung phải có độ dài trên 3 kí tự !',

            // 'image.required'                  => 'Hãy nhập hình ảnh cho website !',

            'status.required'                 => 'Hãy nhập trạng thái hoạt động !' ,

            'highlight.required'              => 'Hãy nhập trang thái đặc biệt !' ,

            'category_posts_id.required'      => 'Hãy nhập danh mục bài viết !' ,
        ];
    }
}
