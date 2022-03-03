<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ArmamentoSeeder::class);
        $this->call(EstadoSeeder::class);
        $this->call(ComandoDeZonaSeeder::class);
        $this->call(DestacamentoSeeder::class);
        $this->call(CompaniaSeeder::class);

        $this->call(PersonalSeeder::class);
    }
}
