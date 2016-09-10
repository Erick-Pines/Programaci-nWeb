<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ControladorEjemplo extends Controller
{
    public function ruta2(){
    	return "accediste desde un controlador";
    }
    public function sumar($n1,$n2){
    	$suma=$n1+$n2;
    	return "la suma es $suma";
    }

}
