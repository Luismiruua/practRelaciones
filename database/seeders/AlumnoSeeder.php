<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alumnos')->insert([
            'nombre'=> 'fsgewgewg',
            'telefono'=>'31241',
            'edad'=>21,
            'password'=>'reherher',
            'email'=>'ewrwew@gmail.com',
            'sexo'=>'F',

        ]);

        DB::table('alumnos')->insert([
            'nombre'=> 'ttrehe',
            'telefono'=>'325',
            'edad'=>213,
            'password'=>'rgreher',
            'email'=>'ghrher@gmail.com',
            'sexo'=>'M',

        ]);
    }
}
