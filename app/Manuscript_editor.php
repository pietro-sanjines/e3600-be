<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manuscript_editor extends Model{
    protected $fillable= [
        'id',
        'comments',
        'date_start',
        'date_end',
        'id_manuscript',
        'id_editor'
    ];
}
