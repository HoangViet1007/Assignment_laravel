<?php

namespace App\Http\Requests\websetting;

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
            'name'             => 'required|min:3|max:100' ,
            'slug'             => 'required|min:3|max:100' ,
            // 'image'            => 'required',
            'email'            => 'required|email',
            'address'          => 'required|min:3',
            'phone'            => 'required|digits:10',
            'description'      => 'required|min:3',
            'status'           => 'required|in:'.implode(',',config('common.websettings.status')) ,
        ];
    }

    public function messages(){
        return [
            'name.required'             => 'Hãy nhập tên cho website !' ,
            'name.min'                  => 'Tên website phải có độ dài từ 3-100 kí tự' ,
            'name.max'                  => 'Tên website phải có độ dài từ 3-100 kí tự' ,

            'slug.required'             => 'Hãy nhập slug !' ,
            'slug.min'                  => 'Slug phải có độ dài từ 3-100 kí tự' ,
            'slug.max'                  => 'Slug phải có độ dài từ 3-100 kí tự' ,

            // 'image.required'            => 'Hãy nhập hình ảnh cho website !',

            'email.required'            => 'Hãy nhập địa chỉ email !',
            'email.email'               => 'Hãy nhập đúng định dạng email !',

            'address.required'          => 'Hãy nhập địa chỉ cho website !' ,
            'address.min'               => 'Địa chỉ website phải có độ dài từ 3 kí tự trở lên !' ,

            'phone.required'            => 'Hãy nhập số điện thoại cho website !' ,
            'phone.digits'              => 'Số điện thoại không hợp lệ !' ,

            'status.required'           => 'Hãy nhập trạng thái hoạt động !' ,
            'status.in'                 => 'Trạng thái hoạt động không hợp lệ !' ,

            'description.required'      => 'Hãy nhập nội dung cho website !' ,
            'description.min'           => 'Nội dung website phải có độ dài từ 3 kí tự trở lên !' ,
        ] ;
    }
}
