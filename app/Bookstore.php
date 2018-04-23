<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookstore extends Model{
    protected $fillable = [
        'id',
        'name',
        'phone',
        'direction',
        'city'
    ];
}
