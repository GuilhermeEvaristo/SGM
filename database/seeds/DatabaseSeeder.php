<?php

use App\User;
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
        $this->call(CursosSeeder::class);
        $this->call(CadeiraSeeder::class);
        factory('App\User', 1000)->create();
        for ($i=0; $i < 33; $i++) { 
            factory('App\Professores_Cadeiras', 1)->create();
        }
    }
}
