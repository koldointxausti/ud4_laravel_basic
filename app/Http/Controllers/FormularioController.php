<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidacionFormulario;

class FormularioController extends Controller
{
    // 4.4
    function getFormularioContacto(){
    	// devuelve la vista del formulario de contacto
    	return view('formulario_contacto');
    }

    function formContacto(Request $request){
    	// hace una comprobación de los datos, y si son correctos, devuelve una vista con esos datos

		if(!isset($request->telefono)) $request->telefono = null;

    	// comprueba que los campos obligatorios están rellenos
		if($request->nombre && $request->apellido && $request->email){

				// comprueba que la longitud del nombre y del apellido sea correcta
				if(strlen($request->nombre) >= 2 && strlen($request->nombre) <= 15
				&& strlen($request->apellido) >= 2 && strlen($request->apellido) <= 20){

					// comprueba que el formato del email es correcto
					if(filter_var($request->email, FILTER_VALIDATE_EMAIL)){

						// comprueba que el número de digitos del teléfono sea 9
						if(!$request->telefono || strlen($request->telefono) == 9){

							// devuelve a la vista contacto con los datos introducidos
							return view('contacto',[
								'nombre'=>$request->nombre,
								'apellido'=>$request->apellido,
								'email'=>$request->email,
								'telefono'=>$request->telefono
							]);

						}else $error = 'El teléfono debe tener 9 dígitos';

					}else $error = 'Formato de correo electrónico inadecuado.';

				}else $error = 'Logitud del nombre o del apellido inadecuada.';

		}else $error = 'Rellene los campos obligatorios.';
		return view('formulario_contacto',['error'=>$error]);   	
    }

    // VALIDACIÓN USANDO "VALIDATE" LARAVEL
    function formContactoValidar(ValidacionFormulario $request){
    	
	    // valida que las reglas se cumplan y si no lo hacen devuelve a la vista anterior con un array $errors con los mensajes que hemos customizado arriba
    	// $validatedData = $request->validate($rules, $customMessages);

    	// devuelve a la vista contacto con los datos introducidos
		return view('contacto')->with(
			'nombre',$request->input('nombre'))->with(
			'apellido',$request->input('apellido'))->with(
			'email',$request->input('email'))->with(
			'telefono',$request->input('telefono')
		);
    }
}
