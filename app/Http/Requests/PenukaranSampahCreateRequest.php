<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PenukaranSampahCreateRequest extends FormRequest
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
            'tanggal_pengambilan' => 'required|date',
            'berat_sampah' => 'required',
            'catatan' => 'required|string|min:5',
        ];
    }
}