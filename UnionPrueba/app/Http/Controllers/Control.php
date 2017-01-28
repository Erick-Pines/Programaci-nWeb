<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

class Control extends Controller
{
    public function postFormulario(Request $user){
    	DB::insert('insert into usuarios (Lista, Nombre, Apellido) values (?, ?, ?)', [$user->input('lista'),$user->input('name'), $user->input('email')]);
 		 return redirect("/")
                       ->with("message","Se ha guardado en la base de datos.");


    }

    public function index()
    {
    	$usuarios = DB::select('select * from usuarios');
        return view('formulario')->with('usuarios',$usuarios);
    }
}
