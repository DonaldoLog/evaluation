<?php

use Illuminate\Database\Seeder;

class MEBEspecializacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Career::insert([
            ['id' => 6, 'name' => 'ESPECIALIZACIÓN EN COMPETENCIAS PROFESIONALES PARA LA PRÁCTICA PEDAGÓGICA EN LA EDUCACIÓN BÁSICA', 'type' => 1]
        ]);

        Group::insert([
            ['id' => 28, 'name' => '1A', 'careerId' => 6],
            ['id' => 29, 'name' => '1B', 'careerId' => 6],
            ['id' => 30, 'name' => '1C', 'careerId' => 6],
            ['id' => 31, 'name' => '1D', 'careerId' => 6],
            ['id' => 32, 'name' => '3A', 'careerId' => 6],
            ['id' => 33, 'name' => '3B', 'careerId' => 6],
            ['id' => 34, 'name' => '3C', 'careerId' => 6],
            ['id' => 35, 'name' => '5B', 'careerId' => 6],
            ['id' => 36, 'name' => '7', 'careerId' => 6],
            ['id' => 37, 'name' => '71M2', 'careerId' => 6]
        ]);
    }
}
