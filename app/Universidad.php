<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Universidad extends Model
{
    use SoftDeletes;
    
    protected $table = "universidad";
    
    protected $fillable = ['nombre', 'datos', 'rector', 'status'];
    protected $hidden = [];
}
