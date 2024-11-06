<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable = ['name',
    'last_name',
    'email',
    'phone',
    'address',
    'city',
    'gender',
    'birthday',
    'assistant',
    'member',
    'baptism_date',
    'conversion_date',
    'membership_date',];

    public function ministries()
    {
        return $this->belongsToMany(Ministry::class, 'charges');
    }

    public function annotations()
    {
        return $this->hasMany(Annotation::class);
    }

    public function mother()
    {
        return $this->belongsTo(Person::class, 'mother_id');
    }

    public function father()
    {
        return $this->belongsTo(Person::class, 'father_id');
    }

    public function spouse()
    {
        return $this->belongsTo(Person::class, 'spouse_id');
    }

    public function charges()
    {
        return $this->hasMany(Charge::class);
    }
}
