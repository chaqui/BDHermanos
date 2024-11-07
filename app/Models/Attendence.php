<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendence extends Model
{
    protected  $table = 'attendence';
    protected  $fillable = ['activity_id', 'kids','men','ladies','youths','total'];

    public function activity()
    {
        return $this->belongsTo(Activities::class);
    }
}
