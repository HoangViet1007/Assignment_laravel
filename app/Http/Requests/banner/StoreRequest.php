<?php

namespace App\Http\Requests\banner;

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
            'title'             => 'required|min:3|max:100|unique:banners,title',
            'slug'              => 'required|min:3|max:100' ,
            'image'             => 'required',
            'content'           => 'required|min:3',
            'link'              => 'required',
            'status'           => 'required|in:'.implode(',',config('common.banners.status')) ,
        ];
    }

    public function messages(){
        return [
            'title.required'             => 'Hãy nhập tiêu đề !' ,
            'title.min'                  => 'Tên tiêu đề phải có độ dài từ 3-100 kí tự' ,
            'title.max'                  => 'Tên tiêu đề phải có độ dài từ 3-100 kí tự' ,
            'title.unique'               => 'Tên tiêu đề này đã tồn tại' ,

            'slug.required'              => 'Hãy nhập slug !' ,
            'slug.min'                   => 'Slug phải có độ dài từ 3-100 kí tự' ,
            'slug.max'                   => 'Slug phải có độ dài từ 3-100 kí tự' ,

            'image.required'             => 'Hãy nhập hình ảnh !',

            'content.required'           => 'Hãy nhập nội dung !' ,
            'content.min'                => 'Nội dung phải có độ dài trên 3 kí tự',

            'link.required'              => 'Hãy nhập đường dẫn cho banner !',

            'status.required'            => 'Hãy nhập trạng thái hoạt động !' ,
            'status.in'                 => 'Trạng thái hoạt động không hợp lệ !',
        ] ;
    }
}
