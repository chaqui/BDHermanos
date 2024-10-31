<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ministerio extends Model
{
    protected $table = 'ministerios';
    protected $fillable = [
        'nombre',
        'descripcion',
        'lider'
    ];


}
