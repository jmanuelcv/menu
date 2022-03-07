<?php

namespace Database\Seeders;
use App\Models\restaurante;
use Illuminate\Database\Seeder;

class restaurante1 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Se define el factory y el numero de registros que se van a crear */
        restaurante::factory()->count(7)->create();
    }
}
