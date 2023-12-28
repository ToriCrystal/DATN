<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'event_name' => 'required|max:255',
            'start_date' => 'required|date|before_or_equal:end_date',
            'end_date'   => 'required|date|after_or_equal:start_date',
            'priority'   => 'required',
            'files'      => 'array',
            'files.*'    => 'image|mimes:jpeg,png,jpg,gif'
        ];
    }

    public function messages()
    {
        return [
            'event_name.required'        => 'Vui lòng nhập tên sự kiện.',
            'event_name.string'          => 'Tên sự kiện phải là một chuỗi.',
            'event_name.max'             => 'Tên sự kiện không được vượt quá 255 ký tự.',
            'start_date.required'        => 'Vui lòng nhập ngày bắt đầu.',
            'start_date.date'            => 'Ngày bắt đầu không hợp lệ.',
            'start_date.before_or_equal' => 'Ngày bắt đầu phải trước hoặc bằng ngày kết thúc.',
            'end_date.required'          => 'Vui lòng nhập ngày kết thúc.',
            'end_date.date'              => 'Ngày kết thúc không hợp lệ.',
            'end_date.after_or_equal'    => 'Ngày kết thúc phải sau hoặc bằng ngày bắt đầu.',
            'files.array'                => 'Trường files phải là một mảng.',
            'files.*.image'              => 'Tệp tin phải là hình ảnh.',
            'files.*.mimes'              => 'Tệp tin phải có định dạng jpeg, png, jpg hoặc gif.'
        ];
        
    }
}
