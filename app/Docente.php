<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Docente extends Model
{
    use SoftDeletes;
    
    protected $fillable = ['id_user', 'especialidad', 'universidad', 'cedula_profesional', 'status'];
    protected $hidden = [];
}
