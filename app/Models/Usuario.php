<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected  $table = 'usuarios';
    protected $primaryKey = 'id';
    protected $fillable=[
        'nombres',
        'apellidos',
        'correo',
        'contraseña',
        'edad',
        'numero de documento',
        'tipos_de_documentos_id',
        'genero_id',
        'rol_id',
    ];
}
