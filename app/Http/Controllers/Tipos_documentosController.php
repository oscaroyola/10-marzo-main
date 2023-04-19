<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tipo_documento;

class Tipos_documentosController extends Controller
{
    public function index(){
        
        $Tipos_documentos = Tipo_documento::all();
        return view('tipos_documentos.index',compact('Tipos_documentos'));
    }
}
