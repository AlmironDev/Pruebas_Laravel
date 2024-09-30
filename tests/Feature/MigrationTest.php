<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class MigrationTest extends TestCase
{
    use RefreshDatabase; // Reinicia la base de datos para cada prueba

    /** @test */
    public function it_has_empresa_table()
    {
        // Verifica que la tabla 'empresa' exista
        $this->assertTrue(Schema::hasTable('empresa'));

        // Verifica que la tabla 'empresa' tenga las columnas esperadas
        $this->assertTrue(Schema::hasColumns('empresa', [
            'id', // ID de la empresa
            'nombre', // Nombre de la empresa (ajusta según tu esquema)
            'created_at',
            'updated_at',
        ]));
    }

    /** @test */
    public function it_has_sector_table()
    {
        // Verifica que la tabla 'sectores' exista
        $this->assertTrue(Schema::hasTable('sectores'));

        // Verifica que la tabla 'sectores' tenga las columnas esperadas
        $this->assertTrue(Schema::hasColumns('sectores', [
            'id', // ID del sector
            'id_empresa', // ID de la empresa a la que pertenece
            'nombre', // Nombre del sector (ajusta según tu esquema)
            'created_at',
            'updated_at',
        ]));
    }

    /** @test */
    public function it_has_empleado_table()
    {
        // Verifica que la tabla 'empleados' exista
        $this->assertTrue(Schema::hasTable('empleados'));

        // Verifica que la tabla 'empleados' tenga las columnas esperadas
        $this->assertTrue(Schema::hasColumns('empleados', [
            'id', // ID del empleado
            'id_sector', // ID del sector al que pertenece
            'nombre', // Nombre del empleado (ajusta según tu esquema)
            'created_at',
            'updated_at',
        ]));
    }
}
