<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'author_name' => 'bail|required|max:255',
            'author_description' => 'required',
            // 'author_debutDate' => 'required',
            'author_img' => 'image',
        ];
    }

    public function messages()
    {
        return [
            'author_name.required' => "Tên tác giả không được để trống",
            'author_description.required' => "Mô tả về tác giả không được để trống",
            // 'author_debutDate.required' => "Ngày ra mắt không được để trống",
            'author_name.max' => "Tên tác giả không quá 255 kí tự",
        ];
    }
}