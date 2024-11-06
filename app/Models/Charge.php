<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Charge extends Model
{
    protected $fillable = ['person_id', 'ministry_id', 'leader'];

    public function person()
    {
        return $this->belongsTo(Person::class);
    }

    public function ministry()
    {
        return $this->belongsTo(Ministry::class);
    }
}
