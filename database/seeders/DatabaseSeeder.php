<?php

namespace Database\Seeders;

use App\Models\Empleado;
use App\Models\Empresa;
use App\Models\Sector;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Crear algunas empresas con sectores y empleados relacionados
        Empresa::factory()
            ->count(3)
            ->has(Sector::factory()->count(3)->has(Empleado::factory()->count(5)), 'sectores') // Crear 3 sectores y 5 empleados por sector
            ->create();
    }
}
