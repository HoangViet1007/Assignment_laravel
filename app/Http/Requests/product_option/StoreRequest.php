<?php

namespace App\Http\Requests\product_option;

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
            'option_name'                   => 'required',
            'option_value'                  => 'required',
            'price'                         => 'required|integer|min:0',
            // 'sale'                          => 'required|integer|min:0',
            'amount'                        => 'required|integer|min:0',
            'is_main'                       => 'required',
            'image'                         => 'required'
        ];
    }

    public function messages(){
        return [
            'option_name.required'       => 'Hãy tên cho các option của sản phẩm !',

            'option_value.required'       => 'Hãy tên cho các option của sản phẩm !',

            'price.required'              => 'Hãy nhập giá cho các option của sản phẩm !',
            'price.integer'               => 'Hãy nhập giá hợp lệ !',
            'price.min'                   => 'Hãy nhập giá hợp lệ !' ,

            // 'sale.required'              => 'Hãy nhập % giảm giá cho các option của sản phẩm !',
            // 'sale.integer'               => 'Hãy nhập % giảm giá hợp lệ !',
            // 'sale.min'                   => 'Hãy nhập % giảm giá hợp lệ !' ,

            'is_main.required'           => 'Hãy chọn trạng thái cho các option của sản phẩm !' ,

            'image.required'             => 'Hãy nhập hình ảnh cho các option của sản phẩm !'

        ] ;
    }
}
