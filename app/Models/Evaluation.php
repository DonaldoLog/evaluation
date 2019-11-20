<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Evaluation extends Model
{
    use SoftDeletes;
    protected $table = 'evaluations';

    public function form()
    {
        return $this->belongsTo('App\Models\Form', 'formId', 'id');
    }
}
