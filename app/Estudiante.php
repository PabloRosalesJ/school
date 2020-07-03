<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Estudiante extends Model
{
    use SoftDeletes;
    
    protected $fillable = ['id_user', 'id_carrera', 'id_generacion', 'matricula', 'status'];
    protected $hidden = [];
}
