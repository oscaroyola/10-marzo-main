<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Producto;
use PhpParser\Node\Stmt\TryCatch;
use PHPUnit\Framework\MockObject\ClassIsFinalException;

class ProductosController extends Controller
{
    public function index(){
        
        $Productos = Producto::all();
        return view('productos.index',compact('Productos'));
    }
    
    public function create(){
        return view('productos.create');
    }

    public function store( Request $request){
        Producto::create($request->all());
        return redirect()->route('productos');
    }

    public function destroy($id){
        Producto::find($id)->delete();
        return redirect()->route('productos');
    }

    public function show($id){
        $Producto = Producto::find($id);
        return view('productos.show',compact('Producto'));
    }

    public function edit($id){
        $Producto = Producto::find($id);
        return view('productos.edit', compact('Producto'));
    }

    public function update(request $request, $id){
        $Producto = Producto::find($id)->update($request->all());
        return redirect()->route('productos');
    }
}

