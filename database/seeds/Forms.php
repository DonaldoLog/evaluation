<?php

use Illuminate\Database\Seeder;
use App\Models\Form;

class Forms extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Form::insert([
            [
                'id' => 1,
                'name' => 'CUESTIONARIO PARA SISTEMA ESCOLARIZADO'
            ],
            [
                'id' => 2,
                'name' => 'CUESTIONARIO PARA SISTEMA EN LÍNEA'
             ],
            [
                'id' => 3,
                'name' => 'CUESTIONARIO PARA TUTORÍAS'
             ]
        ]);
    }
}
