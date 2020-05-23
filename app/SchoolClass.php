<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SchoolClass extends Model
{
    protected $table = 'classes';

    public function students()
    {
        return $this->hasMany(Student::class, 'class_id');
        // onek aceh
    }
}
