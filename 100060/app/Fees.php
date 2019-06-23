<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fees extends Model
{
    protected $fillable = [
        'student_no', 'full_name', 'payment_date', 'amount'
    ];

    public function relation2()
    {
        return $this->belongsTo('App\Student');
    }
}
