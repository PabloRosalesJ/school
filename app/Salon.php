<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Salon extends Model
{
    use SoftDeletes;
    
    protected $fillable = ['nombre', 'detalles', 'status'];
    protected $hidden = [];
}
