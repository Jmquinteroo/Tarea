<?php

use Illuminate\Database\Seeder;

class VehiculosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Vehiculo_model::create(['marca'=>'mazda','placa'=>'asd123','id_dueno'=>1]);
        \App\Models\Vehiculo_model::create(['marca'=>'toyota','placa'=>'asd456','id_dueno'=>1]);
        \App\Models\Vehiculo_model::create(['marca'=>'chevrolet','placa'=>'qwe432','id_dueno'=>1]);



        //
    }
}
