<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaludoController extends Controller
{
    // 4.2
    function saludar($nombre = null, $color = null){
    	if(!$nombre && !$color) return view('saludo');
		else if(!$nombre) return view('saludo',['nombre'=>$nombre]);
		else return view('saludo',['nombre'=>$nombre,'color'=>$color]);
    }

    // 4.3
    function getFormulario(){
    	return view('formulario');
    }
    function saludarEspecif(){
    	return $this->saludar(request('nombre'));
    }
}
