<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Received extends Model{
    protected $fillable= [
        'id',
        'id_manuscript',
        'date_recived'
    ];
}
