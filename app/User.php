<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    public function groups()
    {
        return $this->belongsToMany('App\Models\Group', 'groups_students', 'studentId', 'groupId');
    }
}
