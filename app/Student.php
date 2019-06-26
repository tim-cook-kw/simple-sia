<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'id',
        'full_name',
        'gender',
        'place_of_birth',
        'birth',
        'phone',
        'email',
        'religion',
        'nasionality',
        'address',
        'country',
        'zip'
    ];

    protected $table = 'student' ;
}
