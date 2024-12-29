<?php

namespace App\Http\Requests\Dashboard\Group;

use Illuminate\Foundation\Http\FormRequest;

class StoreGroupRequest extends FormRequest
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
            'price' => 'required|integer',
            'section_id' => 'required|exists:sections,id',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'اسم المجموعة مطلوب.',
            'name.max' => 'اسم المجموعة يجب ألا يتجاوز 255 حرفاً.',
            'name.string' => 'اسم المجموعة يجب أن يكون نصاً.',
            'active.boolean' => 'الحالة يجب أن تكون صحيحة.',
            'price.required' => 'السعر مطلوب.',
            'price.integer' => 'السعر يجب أن يكون عدداً صحيحاً.',
            'section_id.required' => 'الصف الدراسي مطلوب.',
            'section_id.exists' => 'الصف الدراسي غير صحيح.',
        ];
    }
}
