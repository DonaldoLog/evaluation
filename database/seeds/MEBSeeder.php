<?php

use Illuminate\Database\Seeder;
use App\Models\Career;
use App\Models\Group;
use App\Models\Teacher;
use App\User;

class MEBSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Career::insert([
            ['id' => 7, 'name' => 'MAESTRÍA EN EDUCACIÓN BÁSICA', 'type' => 1]
        ]);

        Group::insert([
            ['id' => 48, 'name' => '4MM1', 'careerId' => 7],
            ['id' => 49, 'name' => '4MM2', 'careerId' => 7],
            ['id' => 50, 'name' => '4MM3', 'careerId' => 7],
        ]);

          /* 4MM1 */
          $users =[
            ['studentId' => '20182120005', 'name' => 'Carmela ', 'last_name' => 'Castro Santos', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162120009', 'name' => 'Erika', 'last_name' => 'Durán Mateos', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20152120044', 'name' => 'Antonio', 'last_name' => 'Espíritu Flores', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162120012', 'name' => 'Ángeles', 'last_name' => 'González Juárez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162120040', 'name' => 'Erika ', 'last_name' => 'González Lara', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182120012', 'name' => 'Rosenda ', 'last_name' => 'Hilario Vega', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182120016', 'name' => 'Anabel ', 'last_name' => 'Lara Moreno', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162120048', 'name' => 'Alejandra', 'last_name' => 'Morales López', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182120023', 'name' => 'José Ángel', 'last_name' => 'Ortega Trujillo', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 48)->first()->students()->attach($insertedIds);

        /* 4MM2 */
        $users =[
            ['studentId' => '20182120003', 'name' => 'Areli', 'last_name' => 'Bravo Ramos', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182120004', 'name' => 'Mayra Evelin', 'last_name' => 'Cano Aguilar', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172120014', 'name' => 'Laura', 'last_name' => 'Guarneros Ortiz', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182120010', 'name' => 'Citlali', 'last_name' => 'Gutiérrez Rojas', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182120013', 'name' => 'Juan Carlos ', 'last_name' => 'Jiménez Valera', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182120015', 'name' => 'Álvaro', 'last_name' => 'Lara Moreno', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182120021', 'name' => 'Cruz Reynaldo', 'last_name' => 'Morato Hernández', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182120026', 'name' => 'Karina ', 'last_name' => 'Pérez Gasca', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182120027', 'name' => 'María del Pilar', 'last_name' => 'Ramiro Cárcamo', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182120029', 'name' => 'Adriana', 'last_name' => 'Ruiz Acosta', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 49)->first()->students()->attach($insertedIds);


        /* 4MM2 */
        $users =[
            ['studentId' => '20162120013', 'name' => 'Orlando ', 'last_name' => 'González Juárez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 50)->first()->students()->attach($insertedIds);
    }
}
