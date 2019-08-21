<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehiculo_model extends Model
{
    //


    protected $table = 'vehiculo';
    protected $fillable = [
        'marca',
        'placa',

    ];
}
