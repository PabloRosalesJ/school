<?php

namespace App\Http\Controllers;

use App\Carrera;
use Illuminate\Http\Request;

class CarreraController extends Controller
{
    public function index(){
        $materias = Carrera::where('status', 1)->paginate(10);
        return view('Carreras.index', compact('materias'));
    }
}
