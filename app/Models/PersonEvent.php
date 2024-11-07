<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PersonEvent extends Model
{
    protected $fillable = ['date', 'person_id', 'event_id'];

    public function person()
    {
        return $this->belongsTo(Person::class);
    }

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
