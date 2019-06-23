<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'student_no', 'full_name', 'dob', 'address'
    ];

    public function relation1()
    {
        return $this->hasMany('App\Fees', 'student_no');
    }
}
