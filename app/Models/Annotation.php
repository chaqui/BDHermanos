<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Annotation extends Model
{
    protected $fillable = ['content'];

    public function person()
    {
        return $this->belongsTo(Person::class);
    }
}
