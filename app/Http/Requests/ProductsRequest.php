<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules()
    {
        return [
            'product_name' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'product_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'remaining' => 'required|integer|min:0',
            'isHot' => 'required|boolean|min:0',
            'isVisible' => 'required|in:1,0',
            'product_description' => 'nullable|string',
        ];
    }


    public function messages()
    {
        return [
            'product_name.required' => "Tên sản phẩm không được bỏ trống",
            'slug.required' => "Slug không được bỏ trống",
            'author.required' => "Tên tác giả không được bỏ trống",
            'price.required' => "Giá không được bỏ trống",
            'product_image.required' => "Ảnh sản phẩm không được bỏ trống",
            'remaining.required' => "Vui lòng nhập số lượng sản phẩm",
            'product_description.required' => "Hãy mô tả sản phẩm",
        ];
    }

}
