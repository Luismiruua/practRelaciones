<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class AsientoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('asiento')->insert([
            'id_alumno'=> 1,
            'sitio'=> true,

        ]);
        DB::table('asiento')->insert([
            'id_alumno'=> 2,
            'sitio'=> false,

        ]);
        DB::table('asiento')->insert([
            'id_alumno'=> 3,
            'sitio'=> false,

        ]);
    }
}
