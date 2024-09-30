<?php

namespace Database\Factories;

use App\Models\Sector;
use App\Models\Empresa;
use Illuminate\Database\Eloquent\Factories\Factory;

class SectorFactory extends Factory
{
    protected $model = Sector::class;

    public function definition(): array
    {
        return [
            'id_empresa' => Empresa::factory(), // Relacionar con una empresa
            'nombre' => $this->faker->word(), // Nombre del sector
        ];
    }
}
