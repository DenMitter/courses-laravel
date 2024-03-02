<?php

namespace App\Http\Requests\Admin\Course\Lesson;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'title' => 'required|string',
            'preview_image' => 'file',
            'lesson_file' => 'file',
            'link_video' => 'required|string',
            'lesson_content' => 'string',
        ];
    }
}
