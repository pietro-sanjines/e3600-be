<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model{
    protected $fillable= [
        'id',
        'name',
        'last_name'
    ];
}
