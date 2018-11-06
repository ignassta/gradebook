<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function grade()
    {
        return $this->hasMany('App\Grade');
    }
}
