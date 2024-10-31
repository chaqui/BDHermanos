<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Joven extends Model
{
    protected $table = 'jovenes';
    protected $fillable = [
        'nombre',
        'apellido',
        'fecha_nacimiento',
        'sexo',
        'direccion',
        'telefono',
        'bautizado',
        'fecha_bautizo',
        'asiste_sociedad_jovenes',
        'asiste_iglesia',
        'nombre_iglesia_asiste',
        'padre_id',
        'madre_id',
        'razon_deja_ser_miembro'
    ];

    public function padre()
    {
        return $this->belongsTo(Padre::class);
    }

    public function madre()
    {
        return $this->belongsTo(Madre::class);
    }

    public function ministerios()
    {
        return $this->belongsToMany(Ministerio::class, 'ministerios_miembros', 'joven_id', 'ministerio_id');
    }
}
