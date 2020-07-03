<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Horario extends Model
{
    use SoftDeletes;
    
    protected $fillable = ['hora_i', 'hora_f', 'id_materia', 'status'];
    protected $hidden = [];
}
