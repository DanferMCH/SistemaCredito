<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUser extends FormRequest
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
             //update
             'ActualizarUsuarioNombreCompleto'=>'required|string|max:200',
             'ActualizarUsuarioEmail'=>'required|string|max:200',
             'ActualizarUsuarioPassword'=>'required|string|max:10',
        ];
    }
}
