<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UniversityRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            "university_name" => ['required'],
            "institution_type" => ['required'], 
            "campus" => ['required'],
            "moi" => ['required'],
            "last_percentage" => ['required'],
            "fees" => ['required'],
            "ielts" => ['required'],
            "deadline" => ['required'],
            "admission_document" => ['required'],
            "accreditation" => ['required'],
            "ranking" => ['required']
        ];
    }
}
