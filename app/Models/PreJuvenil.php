<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PreJuvenil extends Model
{
    protected $table = 'pre_juveniles';
    protected $fillable = [
        'nombre',
        'apellido',
        'fecha_nacimiento',
        'sexo',
        'direccion',
        'telefono',
        'bautizado',
        'fecha_bautizo',
        'asiste_sociedad_juvenil',
        'asiste_iglesia',
        'nombre_iglesia_asiste',
        'madre_id',
        'padre_id',
        'razon_deja_ser_miembro'
    ];

    public function madre()
    {
        return $this->belongsTo(Madre::class);
    }

    public function padre()
    {
        return $this->belongsTo(Padre::class);
    }
}
