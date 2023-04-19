<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rol;

class RolesController extends Controller
{
    public function index(){
        
        $Roles = Rol::all();
        return view('roles.index',compact('Roles'));
    }
}
