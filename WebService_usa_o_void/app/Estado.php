<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Estado extends Model
{
    protected $table = 'estado';
    use SoftDeletes;
    protected $fillable = [

        'id','nome', 'uf', 'id_pais'

    ];
}
