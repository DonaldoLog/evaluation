<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use SoftDeletes;
    protected $table = 'students';

    public function groups()
    {
        return $this->belongsToMany('App\Models\Group', 'groups_students', 'studentId', 'groupId');
    }
}
