<?php

namespace Tests\Feature;

use App\Models\Empresa;
use App\Models\Sector;
use App\Models\Empleado;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EmpresaTest extends TestCase
{
    use RefreshDatabase; // Esto reinicia la base de datos para cada prueba

    /** @test */
    public function it_can_create_an_empresa_with_sectors_and_employees()
    {
        // Crear una empresa
        $empresa = Empresa::factory()
            ->has(Sector::factory()->count(3)->has(Empleado::factory()->count(5)), 'sectores') // Crear 3 sectores y 5 empleados por sector
            ->create();

        // Verificar que la empresa fue creada
        $this->assertDatabaseHas('empresa', [
            'id' => $empresa->id, // Aquí ahora funciona correctamente
        ]);

        // Verificar que se hayan creado los sectores
        $this->assertCount(3, $empresa->sectores);

        // Verificar que se hayan creado empleados para cada sector
        foreach ($empresa->sectores as $sector) {
            $this->assertCount(5, $sector->empleados);
        }
    }

}
