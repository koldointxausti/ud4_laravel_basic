<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaludoController extends Controller
{
    // 4.2
    function saludar($nombre = null,$apellido=null, $color = null){
        // devuelve la vista saludo con todos los parámetros disponibles (si no están definidos los devuelve en null)
        return view('saludo',['nombre'=>$nombre,'color'=>$color, 'apellido'=>$apellido]);
    }

    // 4.3
    function getFormulario(){
        // devuelve la vista "formulario"
    	return view('formulario');
    }
    function saludarGet(){
        // llama a la función "saludar", cogiendo los parámetros pasados por un formulario "GET"
    	return $this->saludar(request('nombre'),request('apellido'));
    }
    function saludarPost(Request $request){
        // llama a la función "saludar", cogiendo los parámetros pasados por un formulario "POST"
        return $this->saludar($request->nombre,$request->apellido);
    }
    function saludarSamePage(Request $request){
        // devuelve la vista "formulario" con los parámetros pasados por un formulario "GET"
        return view('formulario',['nombre'=>$request->nombre,'apellido'=>$request->apellido]);
    }
}
