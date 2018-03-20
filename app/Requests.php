<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requests extends Model
{
    protected $fillable = [
        'make',
        'model',
        'colors',
        'year',
        'mileage',
        'budget'
    ];
}
