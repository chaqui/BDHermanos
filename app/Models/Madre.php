<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Madre extends Model
{
    protected $table = 'madres';
    protected $fillable = [
        'nombre',
        'apellido',
        'fecha_nacimiento',
        'sexo',
        'direccion',
        'telefono',
        'bautizada',
        'fecha_bautizo',
        'asiste_iglesia',
        'nombre_iglesia_asiste',
        'madre_id',
        'padre_id',
        'esposo_id',
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

    public function esposo()
    {
        return $this->belongsTo(Padre::class);
    }

    public function preJovenes()
    {
        return $this->hasMany(PreJuvenil::class);
    }

    public function ministerios()
    {
        return $this->belongsToMany(Ministerio::class, 'ministerios_miembros', 'madre_id', 'ministerio_id');
    }
}
