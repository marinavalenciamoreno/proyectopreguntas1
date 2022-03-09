<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MateriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('materias')->insert([
            'nombre'=>"Biología y Geología (1º ESO)",
            'nivel_id'=>1
        ]);

        DB::table('materias')->insert([
            'nombre'=>"Matemáticas (1º ESO)",
            'nivel_id'=>1
        ]);

        DB::table('materias')->insert([
            'nombre'=>"Música (2º ESO)",
            'nivel_id'=>2
        ]);

        DB::table('materias')->insert([
            'nombre'=>"Geología (2º ESO)",
            'nivel_id'=>2
        ]);

        DB::table('materias')->insert([
            'nombre'=>"Biología y Geología (3º ESO)",
            'nivel_id'=>3
        ]);

        DB::table('materias')->insert([
            'nombre'=>"Física y Química (3º ESO)",
            'nivel_id'=>3
        ]);
    }
}
