<?php

namespace App\Http\Requests\Dashboard\Product;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            "name" => "nullable|string",
            "description" => "nullable|string",
            "price" => "nullable|integer",
            "quantity" => "nullable|integer",
            "rate" => "nullable|integer",
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:10240'],
        ];
    }
}
