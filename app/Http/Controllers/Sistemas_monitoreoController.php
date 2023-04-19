<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sistema_monitoreo;

class Sistemas_monitoreoController extends Controller
{
    public function index(){
        
        $Sistemas_monitoreo = Sistema_monitoreo::all();
        return view('sistemas_monitoreo.index',compact('Sistemas_monitoreo'));
    }
}
