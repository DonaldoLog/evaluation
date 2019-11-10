<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use SoftDeletes;
    protected $table = 'students';

    public function group ()
    {
        return $this->belongsTo('App\Models\Group', 'groupId', 'id');
    }
}
