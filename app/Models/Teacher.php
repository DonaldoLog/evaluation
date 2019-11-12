<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use SoftDeletes;
    protected $table = 'teachers';

    public function groups()
    {
        return $this->belongsToMany('App\Models\Group', 'groups_teachers', 'teacherId', 'groupId');
    }
}
