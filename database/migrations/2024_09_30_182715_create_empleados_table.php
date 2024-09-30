<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id(); // Llave primaria
            $table->foreignId('id_sector')->nullable()->constrained('sectores'); // Llave foránea
            $table->string('nombre', 100); // Nombre del empleado
            $table->integer('edad'); // Edad del empleado
            $table->string('ciudad', 100); // Ciudad del empleado
            $table->float('salario'); // Salario del empleado
            $table->timestamps(); // Created_at y Updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
