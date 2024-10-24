<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class UpdatePenggunaRequest extends FormRequest
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
            "NamaPengguna" => "required|string",
            "NamaDepan" => "required|string",
            "Password" => "required|string",
            "NoHp" => "required|string",
            "Alamat" => "required|string",
            "IdAkses" => "required|integer",
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        toast("Data gagal divalidasi, silahkan periksa kembali", "error");
        parent::failedValidation($validator);
    }
}
