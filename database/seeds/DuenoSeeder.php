<?php

use Illuminate\Database\Seeder;

class DuenoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \App\Models\Dueño_model::create(['nombre'=>'chevrolet','cedula'=>1]);

        //
    }
}
