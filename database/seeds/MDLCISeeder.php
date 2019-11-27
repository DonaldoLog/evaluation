<?php

use Illuminate\Database\Seeder;

class MDLCISeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Career::insert([
            ['id' => 15, 'name' => 'Maestría en Didáctica de Lenguas y Culturas Indoamericanas', 'type' => 1]
        ]);

        Group::insert([
            ['id' => 90, 'name' => '1', 'careerId' => 15],
        ]);

        /* 1 */
        $users =[
            ['studentId' => '20192120111', 'name' => 'Teresa Angélica', 'last_name' => 'Benítez Díaz','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120112', 'name' => 'Karla Miriam', 'last_name' => 'Estrada Cruz','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120113', 'name' => 'Adalid', 'last_name' => 'Figueroa Mora','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120114', 'name' => 'Jesús ', 'last_name' => 'Gálvez Rodríguez','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120115', 'name' => 'Melissa', 'last_name' => 'Hernández Hernández','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120116', 'name' => 'Karen', 'last_name' => 'Juárez Valera','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120117', 'name' => 'Mariana', 'last_name' => 'Luna Salvador','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120118', 'name' => 'Miguel', 'last_name' => 'Nicolás Arrieta','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120119', 'name' => 'Amalia', 'last_name' => 'Portilla Gómez','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120120', 'name' => 'Angélica', 'last_name' => 'Reyes de la Cruz','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120121', 'name' => 'Julio', 'last_name' => 'Reyes Soto','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120122', 'name' => 'Ibeth', 'last_name' => 'Romero Oxpahuaxtla','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120123', 'name' => 'Florencia', 'last_name' => 'Vázquez Pérez','password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 90)->first()->students()->attach($insertedIds);
    }
}
