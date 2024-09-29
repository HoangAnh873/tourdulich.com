<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTourRequest extends FormRequest
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
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'price' => 'required|numeric',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Bạn chưa nhập tên tour',
            'name.string' => 'Tên tour phải là dạng ký tự',
            'start_date.required' => 'Bạn chưa nhập ngày bắt đầu',
            'end_date.required' => 'Bạn chưa nhập ngày kết thúc',
            'price.required' => 'Bạn chưa nhập giá tour',
            'price.numeric' => 'Giá tour chưa chính xác',
        ];
    }
}
