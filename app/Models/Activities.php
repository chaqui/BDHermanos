<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activities extends Model
{
    protected  $table = 'activities';
    protected  $fillable = ['name'];

    public function attendences()
    {
        return $this->hasMany(Attendence::class);
    }
}
