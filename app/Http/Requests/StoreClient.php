<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClient extends FormRequest
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
            'CrearNombreCompleto' => 'required|string|max:255',
            'CrearTelefono' => 'required|numeric|max_digits:9',
            'CrearDireccion' => 'required|string|max:255',
            'CrearMonto'=> 'required|numeric|max_digits:8',
            'CrearFechaInicio'=> 'required',
            'CrearFechaPago'=> 'required',
        ];
    }

    public function messages()
    {
        return[
            'CrearNombreCompleto.required'=> 'El campo nombre completo es obligatorio.',
            'CrearTelefono.numeric'=> 'El campo número de celular debe ser numérico.',
            'CrearTelefono.max_digits'=> 'El campo número de celular no debe ser mayor a 9 digitos.',
            'CrearTelefono.required'=> 'El campo número de celular completo es obligatorio.',
            'CrearDireccion.required'=> 'El campo direccion es obligatorio.',
            'CrearMonto.required' => 'El campo monto es obligatorio.',
            'CrearMonto.max_digits'=> 'El campo monto no debe ser mayor a 8 digitos.',
            'CrearFechaInicio.required'=> 'El campo fecha inicio es obligatorio.',
            'CrearFechaPago.required'=> 'El campo fecha pago es obligatorio.',

        ];
    }

}
