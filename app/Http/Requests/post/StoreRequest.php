<?php

namespace App\Http\Requests\post;

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
            'title'                         => 'required|min:3|max:200|unique:posts' ,
            'slug'                          => 'required|min:3|max:200' ,
            'short_description'             => 'required|min:3',
            'content'                       => 'required|min:3',
            'image'                         => 'required',
            'status'                        => 'required|in:'.implode(',',config('common.posts.status')) ,
            'highlight'                     => 'required|in:'.implode(',',config('common.posts.highlight')) ,
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

            'image.required'                  => 'Hãy nhập hình ảnh đại diện cho bài viết !',

            'status.required'                 => 'Hãy nhập trạng thái hoạt động !' ,
            'status.in'                 => 'Trạng thái hoạt động không hợp lệ !' ,


            'highlight.required'              => 'Hãy nhập trang thái đặc biệt !' ,
            'highlight.in'                    => 'Trạng thái đặc biệt không hợp lệ !' ,

            'category_posts_id.required'      => 'Hãy nhập danh mục bài viết !' ,
        ];
    }
}
