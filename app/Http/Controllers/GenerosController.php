<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genero;

class GenerosController extends Controller
{
    public function index(){
        
        $Generos = Genero::all();
        return view('generos.index',compact('Generos'));
    }
}
