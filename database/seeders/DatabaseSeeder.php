<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mascota;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Mascota::factory(100)->create();

        // $mascota = new Mascota();
        // $mascota->nombre = 'Jacobo';
        // $mascota->raza = 'Perro';
        // $mascota->edad = 5;
        // $mascota->sexo = 'Masculino';
        // $mascota->color= 'Blanco';
        // $mascota->peso = '10k';
        // $mascota->save();


    }
}
