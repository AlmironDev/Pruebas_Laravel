<?php

namespace Database\Factories;

use App\Models\Empresa;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmpresaFactory extends Factory
{
    protected $model = Empresa::class;

    public function definition(): array
    {
        return [
            'nombre' => $this->faker->company(),
            'ruc' => $this->faker->unique()->randomNumber(9, true), // RUC falso
        ];
    }
}
