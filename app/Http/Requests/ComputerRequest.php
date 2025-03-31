<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComputerRequest extends FormRequest
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
            "computer_brand" => ["required", "string", "max:256"],
            "computer_model" => ["required", "string","max:256"],
            "computer_price" => ["required", "decimal:3"],
            "computer_ram_size" => ["integer"],
            "computer_is_laptop" => ["boolean"],
        ];
    }
}
