<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ministerio_miembro extends Model
{
    protected $table = 'ministerios_miembros';
    protected $fillable = [
        'ministerio_id',
        'madre_id',
        'joven_id',
        'pre_juvenil_id',
        'padre_id',

    ];

    public function ministerio()
    {
        return $this->belongsTo(Ministerio::class, 'ministerio_id');
    }

    public function madre()
    {
        return $this->belongsTo(Madre::class, 'madre_id');
    }

    public function joven()
    {
        return $this->belongsTo(Joven::class, 'joven_id');
    }

    public function preJuvenil()
    {
        return $this->belongsTo(PreJuvenil::class, 'pre_juvenil_id');
    }

    public function padre()
    {
        return $this->belongsTo(Padre::class, 'padre_id');
    }


}
