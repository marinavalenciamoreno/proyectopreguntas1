<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
            DB::table('temas')->insert([
                'materia_id' => 1,
                'numero' => 5,
                'nombre' => "Ecuaciones",
            ]);
    }
    
}
