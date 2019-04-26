<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $table = 'estado';
    protected $fillable = [

        'id','nome', 'uf', 'id_pais'

    ];
}
