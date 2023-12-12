<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nota;

 
class NotaController extends Controller

{
    public function index(){
        $notas = Nota::all(); //aqui se llama al metodo all del ORM Eloquent

        return view('nota.index' , compact('notas')); //enviamos los datos a la vista
    }
    //
}
