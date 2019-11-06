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
    function saludarGet(){
    	return $this->saludar(request('nombre'),request('apellido'));
    }
    function saludarPost(Request $request){
        return $this->saludar($request->nombre,$request->apellido);
    }
    function saludarSamePage(Request $request){
        return view('formulario',['nombre'=>$request->nombre,'apellido'=>$request->apellido]);
    }
}
