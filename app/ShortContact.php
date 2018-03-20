<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShortContact extends Model
{
     protected $fillable = [ 
     		'name',
     		'cellphone',
            'email',
            'message'
    ];
}
