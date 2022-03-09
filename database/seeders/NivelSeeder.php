<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class NivelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('nivels')->insert([
            [
                'nombre' => '1ESO'
            ],
            [
                'nombre' => '2ESO'
            ],
            [
                'nombre' => '3ESO'
            ],
            [
                'nombre' => '4ESO'
            ]
        ]);
        
    }
    
}
