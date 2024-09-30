<?php

namespace Database\Factories;

use App\Models\Empleado;
use App\Models\Sector;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmpleadoFactory extends Factory
{
    protected $model = Empleado::class;

    public function definition(): array
    {
        return [
            'id_sector' => Sector::factory(), // Relacionar con un sector
            'nombre' => $this->faker->name(), // Nombre del empleado
            'edad' => $this->faker->numberBetween(18, 65), // Edad entre 18 y 65
            'ciudad' => $this->faker->city(), // Ciudad falsa
            'salario' => $this->faker->randomFloat(2, 1000, 5000), // Salario falso
        ];
    }
}
