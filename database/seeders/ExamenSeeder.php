<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ExamenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('examens')->insert([
            [
                'tema_id' => 1,
                'nivel' => 'basico',
                'numPreguntas' => 15,
                'fecha_inicio' => '2022-03-08',
                'fecha_fin' => '2022-03-10',
            ],
        ]);
    }
}
