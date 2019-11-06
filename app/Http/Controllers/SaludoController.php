<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaludoController extends Controller
{
    // 4.2
    function saludar($nombre = null,$apellido=null, $color = null){
        return view('saludo',['nombre'=>$nombre,'color'=>$color, 'apellido'=>$apellido]);
    }

    // 4.3
    function getFormulario(){
    	return view('formulario');
    }
    function saludarEspecif(){
    	return view('saludo',['nombre'=>request('nombre'),'apellido'=>request('apellido')]);
    }
}
