<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'title',
        'description',
        'price',
        'discount',
        'id_type',
        'size',
        'color',
        'model',
        'calification',
        'quantity',
        ];
}
