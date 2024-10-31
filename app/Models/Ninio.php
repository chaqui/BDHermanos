<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ninio extends Model
{
    protected $table = 'ninos';
    protected $fillable = [
        'nombre',
        'apellido',
        'fecha_nacimiento',
        'sexo',
        'direccion',
        'telefono',
        'telefono_emergencia',
        'padre_id',
        'madre_id',
    ];

    public function padre()
    {
        return $this->belongsTo(Padre::class);
    }

    public function madre()
    {
        return $this->belongsTo(Madre::class);
    }
}
