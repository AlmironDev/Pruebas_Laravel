<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    protected $table = 'empleados'; // Especifica la tabla

    public function sector()
    {
        return $this->belongsTo(Sector::class, 'id_sector');
    }
}
