<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Group extends Model
{
    use SoftDeletes;
    protected $table = 'groups';

    public function career ()
    {
        return $this->belongsTo('App\Models\Career', 'careerId', 'id');
    }

    public function students()
    {
        return $this->belongsToMany('App\Models\Student', 'groups_students', 'groupId', 'studentId');
    }

    public function teachers()
    {
        return $this->belongsToMany('App\Models\Teacher', 'groups_teachers', 'groupId', 'teacherId');
    }
}
