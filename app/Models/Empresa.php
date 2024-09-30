<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $table = 'empresa'; // Especifica la tabla si no sigue la convención de plural

    public function sectores()
    {
        return $this->hasMany(Sector::class, 'id_empresa');
    }
}
