<?php

namespace App\Http\Requests\product;

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
            'name'                          => 'required|min:3|max:100|unique:products',
            'slug'                          => 'required|min:3|max:100' ,
            'title'                         => 'required',
            'short_description'             => 'required|min:3',
            'description'                   => 'required|min:3',
            'status'                        => 'required|in:'.implode(',',config('common.products.status')) ,
            'highlight'                     => 'required|in:'.implode(',',config('common.products.highlight')) ,
            'category_id'                   => 'required',

            // 'attribute'                     => 'required',

            'tags'                          => 'required',

            'option_name'                   => 'required',
            'option_value'                  => 'required',
            'price'                         => 'required|integer|min:0',
            // 'sale'                          => 'required|integer|min:0',
            'amount'                        => 'required|integer|min:0',
            // 'is_main'                       => 'required',
            'image'                         => 'required'
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
            'status.in'                 => 'Trạng thái hoạt động không hợp lệ !' ,


            'highlight.required'         => 'Hãy chọn trạng thái đặc biệt !',
            'highlight.in'                 => 'Trạng thái đặc biệt không hợp lệ !' ,


            'category_id.required'       => 'Hãy chọn danh mục sản phẩm !' ,

            // 'attribute.required'         => 'Hãy chọn thuộc tính cho sản phẩm !',

            'tags.required'              => 'Hãy nhập tag cho sản phẩm !' ,

            'option_name.required'       => 'Hãy tên cho các option của sản phẩm !',

            'option_value.required'       => 'Hãy tên cho các option của sản phẩm !',

            'price.required'              => 'Hãy nhập giá cho các option của sản phẩm !',
            'price.integer'               => 'Hãy nhập giá hợp lệ !',
            'price.min'                   => 'Hãy nhập giá hợp lệ !' ,

            // 'sale.required'              => 'Hãy nhập % giảm giá cho các option của sản phẩm !',
            // 'sale.integer'               => 'Hãy nhập % giảm giá hợp lệ !',
            // 'sale.min'                   => 'Hãy nhập % giảm giá hợp lệ !' ,

            // 'is_main.required'           => 'Hãy chọn trạng thái cho các option của sản phẩm !' ,

            'image.required'             => 'Hãy nhập hình ảnh cho các option của sản phẩm !'

        ];
    }
}
