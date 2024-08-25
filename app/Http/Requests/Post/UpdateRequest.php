<?php

namespace App\Http\Requests\Post;

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
            'title' => 'required|string',
            'description' => 'nullable|string',
            'content' => 'nullable|string',
            'published_at' => 'nullable|date_format:Y-m-d',
            'views' => 'nullable|integer',
            'status' => 'nullable|integer',
            'user' => 'nullable|string',
            'category' => 'nullable|string',
            'image_path' => 'nullable|string',
        ];
    }
}
