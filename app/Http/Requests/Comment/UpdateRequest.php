<?php

namespace App\Http\Requests\Comment;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "user" => 'required|string',
            "content" => 'nullable|string',
            "post" => 'nullable|string',
            "likes" => 'nullable|string',
            "parent" => 'nullable|string'
        ];
    }
}
