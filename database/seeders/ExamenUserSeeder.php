<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ExamenUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('examens_users')->insert([
                [
                    'fecha_realizacion' => null,
                    'num_respuestas_correctas' => null,
                    'examen_id' => 1,
                    'user_id' => 2,
                ],
            ]);

    }
}
