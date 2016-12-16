<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Illuminate\Http\Request;

class control extends Controller
{
    public function insert(Request $part){
    	DB::insert('insert into participantes(ID,NOMBRE,TIEMPO,INTENTOS) values (?,?,?,?)', [NULL, $part->input('name'),$part->input('time'),$part->input('tries')]);
    	return redirect("/")
                           ->with("message","El registro se ha insertado de forma correcta"); 

    }

	public function index()
    {
    	$participantes = DB::select('select * from participantes ORDER BY TIEMPO');
        return view('form')->with('participantes',$participantes);
    }

    public function resultados()
    {
    	$participantes = DB::select('select * from participantes ORDER BY TIEMPO');
    	$mejores = DB::select('select * from participantes ORDER BY TIEMPO LIMIT 5');
        return view('ranking')->with('participantes',$participantes)
        					  ->with('mejores',$mejores);
    }

    public function tutorial()
    {
        $mejores = DB::select('select * from participantes ORDER BY TIEMPO LIMIT 5');
        return view('tutorial')->with('mejores',$mejores);
    }

     public function inicio()
    {
        $mejores = DB::select('select * from participantes ORDER BY TIEMPO LIMIT 5');
        return view('inicio')->with('mejores',$mejores);
    }
}    
