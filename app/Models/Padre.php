<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Padre extends Model
{
    protected $table = 'padres';
    protected $fillable = [
        'nombre',
        'apellido',
        'fecha_nacimiento',
        'sexo',
        'direccion',
        'telefono',
        'bautizado',
        'fecha_bautizo',
        'asiste_iglesia',
        'nombre_iglesia_asiste',
        'madre_id',
        'padre_id',
        'esposa_id',
        'razon_deja_ser_miembro'
    ];

    public function hijos()
    {
        return $this->hasMany(Ninio::class);
    }

    public function jovenes()
    {
        return $this->hasMany(Joven::class);
    }

    public function esposa()
    {
        return $this->belongsTo(Madre::class, 'esposa_id');
    }

    public function preJovenes()
    {
        return $this->hasMany(PreJuvenil::class);
    }

    public function padres()
    {
        return $this->hasMany(Padre::class, 'padre_id');

    }

    public function madre()
    {
        return $this->belongsTo(Madre::class, 'madre_id');
    }



    public function ministerios()
    {
        return $this->belongsToMany(Ministerio::class, 'ministerios_miembros', 'padre_id', 'ministerio_id');
    }
}
