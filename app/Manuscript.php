<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manuscript extends Model{
    protected $fillable = [
        'id',
        'title',
        'id_author',
        'id_gender',
        'id_stage',
        'id_state'
    ];
}
