<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Capmus extends Model
{
    use SoftDeletes;
    
    protected $table = "capmus";

    protected $fillable = ['nombre', 'direccion', 'telefono', 'director', 'status'];
    protected $hidden = [];
}
