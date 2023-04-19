<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Combo extends Model
{
    use HasFactory;
    protected $table = 'combos';
    protected $primaryKey = 'id';
    protected $fillable=[
        'nombre',
        'descripcion',
        'producto_id',
        'sistema_monitoreo_id'
    ];
}
