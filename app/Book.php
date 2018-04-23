<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model{
    protected $fillable= [
        'id',
        'id_manuscript',
        'tittle',
        'stock',
        'price',
        'isbn',
        'id_author',
        'id_gender'
    ];
}