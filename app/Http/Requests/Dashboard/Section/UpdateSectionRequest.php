<?php

namespace App\Http\Requests\Dashboard\Section;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSectionRequest extends FormRequest
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
            'name' => 'nullable|string|max:255',
            'active' => 'nullable|boolean',
        ];
    }

    public function messages()
    {
        return [
            'name.max' => 'اسم الصف الدراسي يجب ألا يتجاوز 255 حرفاً.',
            'name.string' => 'اسم الصف الدراسي يجب أن يكون نصاً.',
        ];
    }
}
