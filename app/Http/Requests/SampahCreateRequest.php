<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SampahCreateRequest extends FormRequest
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
            'jenis_sampah' => 'required|string|min:5|max:255',
            'poin' => 'required',
            'image' => 'required|image|file|mimes:jpeg,png,jpg|max:2048',
        ];
    }
}