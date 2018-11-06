<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    public function lecture()
    {
       return $this->belongsTo('App\Lecture');
    }

    public function student()
    {
        return $this->belongsTo('App\Student');
    }
}
