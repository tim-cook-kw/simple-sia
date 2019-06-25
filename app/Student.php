<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'id',
        'fullname',
        'gender',
        'place_of_birth',
        'birth',
        'phone',
        'email',
        'religion',
        'nasionality',
        'address',
        'country',
        'state',
        'zip'
    ];

    protected $table = 'student' ;
}
