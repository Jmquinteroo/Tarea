<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dueño_model extends Model
{

    protected $table = 'dueno';
    protected $fillable = [
        'nombre',
        'cedula',

    ];
    //
}
