<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AttendenceKids extends Model
{
    protected $table = 'attedence_kids';

    protected $primaryKey = 'id';
    protected $fillable = [ 'kids', 'small_child', 'pre_young', 'young'];
    public $timestamps = true;
}
