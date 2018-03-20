<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
     protected $fillable = [ 
            'code',
     		'name',
     		'type',
            'model',
            'trim',
            'body',
            'exterior',
            'interior',
            'doors',
            'vin',
            'mileage',
            'engine',
            'fuel',
            'drive',
            'mpg',
            'year',
            'price',
            'comments',
            'mainImg',
            'secondaryImg'
    ];
}
