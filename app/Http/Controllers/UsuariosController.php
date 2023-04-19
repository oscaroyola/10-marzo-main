<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;


class UsuariosController extends Controller
{
    public function index(){
        $Usuarios = Usuario::all();
        return view('usuarios.index',compact('Usuarios'));
    }
    public function create(){
        return view('usuarios.index');
    }

    public function store( Request $request){
        Usuario::create($request->all());
        return redirect()->route('usuarios');
    }

    public function destroy($id){
        Usuario::find($id)->delete();
        return redirect()->route('usuarios');
    }

    public function show($id){
        $Usuario = Usuario::find($id);
        return view('usuarios.show',compact('Usuario'));
    }

    public function edit($id){
        $Usuario = Usuario::find($id);
        return view('usuarios.edit', compact('Usuario'));
    }

    public function update(request $request, $id){
        $Usuario = Usuario::find($id)->update($request->all());
        return redirect()->route('usuarios');
    }
}