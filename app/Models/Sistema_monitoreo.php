<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sistema_monitoreo extends Model
{
    use HasFactory;
    protected  $table = 'sistemas_monitoreo';
    protected $primaryKey = 'id';
    protected $fillable=[
        'nombre',
        'descripcion',
    ];

}
