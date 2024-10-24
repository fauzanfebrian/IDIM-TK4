<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class StorePelangganRequest extends FormRequest
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
            "NamaPelanggan" => "required|string",
            "NoHp" => "required|string",
            "Alamat" => "required|string",
            "Email" => "required|string",
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        toast("Data gagal divalidasi, silahkan periksa kembali", "error");
        parent::failedValidation($validator);
    }
}
