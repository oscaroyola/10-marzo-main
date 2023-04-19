<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('welcome', function () {
    return view('welcome2');
});


//listar productos
Route::get('productos/',[ProductosController::class, 'index'])->name('productos');
//crear productos
Route::get('productos/crear',[ProductosController::class, 'create'])->name('productos.create');
//guardar productos
Route::post('productos',[ProductosController::class, 'store'])->name('productos.guardar');
//eliminar preductos
Route::delete('productos/{id}',[ProductosController::class, 'destroy'])->name('productos.eliminar');
//detalles productos
Route::get('productos/{id}',[ProductosController::class, 'show'])->name('productos.show');
//editar productos
Route::get('productos/{id}/editar',[ProductosController::class, 'edit'])->name('productos.edit');
//actualizae productos
Route::put('productos/{id}',[ProductosController::class, 'update'])->name('productos.update');

//listar documento identificacion
Route::get('tipos_documentos',[Tipos_documentosController::class, 'index'])->name('tipos_documentos.index');

//listar generos
Route::get('generos',[GenerosController::class, 'index'])->name('generos.index');

//listar roles
Route::get('roles',[RolesController::class, 'index'])->name('roles.index');

//listar sistemas de monitoreo
Route::get('sistemas_monitoreo',[Sistemas_monitoreoController::class, 'index'])->name('sistemas_monitoreo.index');

//listar usuarios
Route::get('usuarios/',[UsuariosController::class, 'index'])->name('usuarios');
//crear usuarios
Route::get('usuarios/crear',[UsuariosController::class, 'create'])->name('usuarios.create');
//guardar usuarios
Route::post('usuarios',[UsuariosController::class, 'store'])->name('usuarios.guardar');
//eliminar usuarios
Route::delete('usuarios/{id}',[UsuariosController::class, 'destroy'])->name('usuarios.eliminar');
//detalles usuarios
Route::get('usuarios/{id}',[UsuariosController::class, 'show'])->name('usuarios.show');
//editar usuarios
Route::get('usuarios/{id}/editar',[UsuariosController::class, 'edit'])->name('usuarios.edit');
//actualizar usuarios
Route::put('usuarios/{id}',[UsuariosController::class, 'update'])->name('usuarios.update');

//listar combos
Route::get('combos/',[CombosController::class, 'index'])->name('combos');
//crear combos
Route::get('combos/crear',[CombosController::class, 'create'])->name('combos.create');
//guardar combos
Route::post('combos',[CombosController::class, 'store'])->name('combos.guardar');
//eliminar combos
Route::delete('combos/{id}',[CombosController::class, 'destroy'])->name('combos.eliminar');
//detalles combos
Route::get('combos/{id}',[CombosController::class, 'show'])->name('combos.show');
//editar combos
Route::get('combos/{id}/editar',[CombosController::class, 'edit'])->name('combos.edit');
//actualizae combos
Route::put('combos/{id}',[CombosController::class, 'update'])->name('combos.update');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
