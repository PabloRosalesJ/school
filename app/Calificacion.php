<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Calificacion extends Model
{
    use SoftDeletes;
    
    protected $fillable = ['id_estudiante', 'id_materia', 'id_grupo', 'calificacion', 'status'];
    protected $hidden = [];
}
