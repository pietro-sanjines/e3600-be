<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manuscript_reader extends Model{
    protected $fillable= [
        'id',
        'comments',
        'date_start',
        'date_end',
        'id_manuscript',
        'id_reader'
    ];
}
