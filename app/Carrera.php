<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Carrera extends Model
{
    use SoftDeletes;
    
    protected $fillable = ['id_departamento', 'rep', 'nombre', 'descripcion', 'plan_educativo', 'duracion', 'creditos', 'status'];
    protected $hidden = [];
}
