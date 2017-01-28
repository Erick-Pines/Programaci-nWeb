<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Controlador1 extends Controller
{
    public function nombre(){
    	return view("paginaOficial");
    }
}
