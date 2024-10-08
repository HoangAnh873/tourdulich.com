<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTourRequest extends FormRequest
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
            'name' => 'required|string',
            'start_date' => 'required|date|after:today',
            'end_date' => 'required|date|after_or_equal:start_date',
            'price' => 'required|numeric',
            'img' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Bạn chưa nhập tên tour',
            'name.string' => 'Tên tour phải là dạng ký tự',
            'start_date.required' => 'Bạn chưa nhập ngày bắt đầu',
            'start_date.after' => 'Ngày bắt đầu phải sau ngày hiện tại',
            'end_date.required' => 'Bạn chưa nhập ngày kết thúc',
            'end_date.after_or_equal' => 'Thời gian kết thúc phải sau thời gian bắt đầu',
            'price.required' => 'Bạn chưa nhập giá tour',
            'price.numeric' => 'Giá tour chưa chính xác',
            'img.required' => 'Bạn chưa chọn ảnh tour',
        ];
    }
}
