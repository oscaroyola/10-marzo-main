<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Combo;
use PhpParser\Node\Stmt\TryCatch;
use PHPUnit\Framework\MockObject\ClassIsFinalException;

class CombosController extends Controller
{
    public function index(){
        
        $Combos = Combo::all();
        return view('combos.index',compact('Combos'));
    }
    
    public function create(){
        return view('Combos.create');
    }

    public function store( Request $request){
        Combo::create($request->all());
        return redirect()->route('combos');
    }

    public function destroy($id){
        Combo::find($id)->delete();
        return redirect()->route('combos');
    }

    public function show($id){
        $Combo = Combo::find($id);
        return view('Combos.show',compact('Combo'));
    }

    public function edit($id){
        $Combo = Combo::find($id);
        return view('Combos.edit', compact('Combo'));
    }

    public function update(request $request, $id){
        $Combo = Combo::find($id)->update($request->all());
        return redirect()->route('combos');
    }
}

