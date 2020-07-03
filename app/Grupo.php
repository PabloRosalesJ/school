<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Grupo extends Model
{
    use SoftDeletes;
    
    protected $fillable = ['nombre', 'detalle', 'id_carrera', 'id_generacion', 'status'];
    protected $hidden = [];
}
