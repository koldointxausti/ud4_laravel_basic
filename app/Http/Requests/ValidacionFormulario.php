<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacionFormulario extends FormRequest
{
    /**
     * Hay que definir true si quieres que funcione
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * definimos las reglas que tienen que cumplir los datos
     * 
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre'=>'required|min:2|max:15',
            'apellido'=>'required|min:2|max:20',
            'email'=>'required|email',
            'telefono'=>'nullable|regex:/^[679][0-9]{8}$/'
        ];
    }

    /** 
     * definimos los mensajes que queremos mostrar al dar error
     * @return errores personalizados
     */
    public function messages()
    {
        return [
            'required' => 'El campo :attribute es obligatorio.',
            'min' => 'Debe introducir al menos :min caracteres en el campo :attribute',
            'max' => 'Debe introducir menos de :max caracteres en el campo :attribute',
            'email' => 'El campo :attribute debe ser un correo electrónico',
            'telefono.regex' => 'Debe introducir 9 dígitos en el campo :attribute'
        ];
    }

    /** 
     * definimos los atributos que queremos mostrar al dar error
     * @return errores personalizados
     */
    public function attributes()
    {
        return [
            'email' => 'correo electrónico'
        ];
    }
}
