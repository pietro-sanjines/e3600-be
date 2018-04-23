<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Editor extends Model{
    protected $fillable= [
        'id',
        'name',
        'phone',
        'direction'
    ];
}
