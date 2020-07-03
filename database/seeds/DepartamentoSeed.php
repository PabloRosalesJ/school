<?php

use Illuminate\Database\Seeder;

class DepartamentoSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Departamento::create([
            "nombre" => "Ingenieria",
            "detalles" => "una descripcion"
        ]);  

        App\Departamento::create([
            "nombre" => "Matematicas",
            "detalles" => "una descripcion"
        ]); 

        App\Departamento::create([
            "nombre" => "Ciencias Biológicas y Ambientales",
            "detalles" => "una descripcion"
        ]); 

        App\Departamento::create([
            "nombre" => "Medicina",
            "detalles" => "una descripcion"
        ]); 

        App\Departamento::create([
            "nombre" => "Coencias Sociales",
            "detalles" => "una descripcion"
        ]);
            
        
    }
}
