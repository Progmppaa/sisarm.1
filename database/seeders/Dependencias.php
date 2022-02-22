<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Dependencias extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dependencias::create(['nombre' => 'Cuartel General']);
     }
}
