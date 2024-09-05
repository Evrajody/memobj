<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'intitule' => ['required'],
            'contenu' => ['required'],
            'slug' => ['nullable'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
