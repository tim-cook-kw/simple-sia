<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'id_subject',
        'subject'
    ];

    protected $table = 'subject'; 
}
