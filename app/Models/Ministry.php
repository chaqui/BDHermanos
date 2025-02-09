<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ministry extends Model
{
    protected $fillable = ['name', 'society'];

    public function peoples()
    {
        return $this->belongsToMany(Person::class, 'charges');
    }
}
