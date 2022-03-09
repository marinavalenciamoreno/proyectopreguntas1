<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Admin",
            'email' => "admin@gmail.com",
            'nivel_id' => null,
            'password' => bcrypt("admin"),
            'tipo' => "admin"
        ]);

        DB::table('users')->insert([
            'name' => "Alumno1",
            'email' => "alumno1@gmail.com",
            'nivel_id' => 1,
            'password' => bcrypt("alumno1"),
            'tipo' => "alumno"
        ]);
        DB::table('users')->insert([
            'name' => "Profesor1",
            'email' => "profesormatemat1eso@gmail.com",
            'nivel_id' => 1,
            'password' => bcrypt("profmat1eso"),
            'tipo' => "profesor"
        ]);
    }
}
