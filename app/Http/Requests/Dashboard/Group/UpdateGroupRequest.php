<?php

namespace App\Http\Requests\Dashboard\Group;

use Illuminate\Foundation\Http\FormRequest;

class UpdateGroupRequest extends FormRequest
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
            'price' => 'nullable|integer',
        ];
    }

    public function messages()
    {
        return [
            'name.max' => 'اسم المجموعة يجب ألا يتجاوز 255 حرفاً.',
            'name.string' => 'اسم المجموعة يجب أن يكون نصاً.',
            'active.boolean' => 'الحالة يجب أن تكون صحيحة.',
            'price.integer' => 'السعر يجب أن يكون عدداً صحيحاً.',
        ];
    }
}
