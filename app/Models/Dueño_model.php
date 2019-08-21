<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dueño_model extends Model
{

    protected $table = 'dueño';
    protected $fillable = [
        'nombre',
        'cedula',

    ];
    //
}
