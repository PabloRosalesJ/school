<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Generacion extends Model
{
    use SoftDeletes;
    protected $table = "generaciones";

    protected $fillable = ['anio', 'detalle', 'ciclo_escolar', 'status'];
    protected $hidden = [];
}
