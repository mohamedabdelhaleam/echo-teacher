<?php

namespace App\Http\Requests\Dashboard\Section;

use Illuminate\Foundation\Http\FormRequest;

class StoreSectionRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'active' => 'nullable|boolean',
            'year_id' => 'required|exists:years,id',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'اسم الصف الدراسي مطلوب.',
            'name.max' => 'اسم الصف الدراسي يجب ألا يتجاوز 255 حرفاً.',
            'name.string' => 'اسم الصف الدراسي يجب أن يكون نصاً.',
            'year_id.required' => 'السنة الدراسية مطلوبة.',
            'year_id.exists' => 'السنة الدراسية غير موجودة.',
        ];
    }
}
