<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Form extends Model
{
    use SoftDeletes;
    protected $table = 'forms';

    public function questions()
    {
        return $this->hasMany('App\Models\Question', 'formId', 'id');
    }
}
