<?php

use App\Departamento;
use App\Generacion;
use App\Grupo;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CreateRolTable::class);
        $this->call(CreateUserTable::class);
        $this->call(DepartamentoSeed::class);
        $this->call(UniversidadSeed::class);
        $this->call(CampusSeed::class);
        $this->call(CarrerasSeed::class);
        $this->call(MateriaSeed::class);
        $this->call(GeneracioSeed::class);
        $this->call(GrupoSeed::class);
        $this->call(EstudianteSeed::class);
        $this->call(DocenteSeed::class);
    }
}
