<?php

use Illuminate\Database\Seeder;
use App\Models\Career;
use App\Models\Group;
use App\Models\Teacher;
use App\User;


class LEIPEnLineaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Career::insert([
            ['id' => 4, 'name' => 'LEIP', 'type' => 3]
        ]);

        Group::insert([
            ['id' => 23, 'name' => '1NM1', 'careerId' => 4],
            ['id' => 24, 'name' => '1MN2', 'careerId' => 4],
            ['id' => 25, 'name' => '5MN1', 'careerId' => 4],
            ['id' => 26, 'name' => '9NM1', 'careerId' => 4],
            ['id' => 27, 'name' => 'DNM1', 'careerId' => 4],
        ]);

        /* 1NM1 */
        $users =[
            ['studentId' => '20192121733', 'name' => 'Areli Vianey', 'last_name' => 'Callejas Lobato', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121734', 'name' => 'Benjamín', 'last_name' => 'Capetillo Rodríguez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121735', 'name' => 'Aarón ', 'last_name' => 'Cárcamo Alvarado', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121737', 'name' => 'Gloria ', 'last_name' => 'Carrillo Martínez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121739', 'name' => 'Omar Uriel', 'last_name' => 'Córdova Reyes', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121741', 'name' => 'Nery', 'last_name' => 'Crespo Valdéz', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121743', 'name' => 'Berenice', 'last_name' => 'Domínguez Mercedes', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121745', 'name' => 'Citlalli Itzel', 'last_name' => 'Espinoza Lobato', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121746', 'name' => 'Rosa María', 'last_name' => 'Esinoza Moreno', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121747', 'name' => 'Emma ', 'last_name' => 'Estebán Salgado', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121750', 'name' => 'Leslye', 'last_name' => 'González Romero', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121752', 'name' => 'Ana Karen', 'last_name' => 'Hernández Moreno', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121755', 'name' => 'Heidy Maday', 'last_name' => 'Herrera Colina', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121756', 'name' => 'Abigail', 'last_name' => 'Jiménez Mateos', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121757', 'name' => 'Cecilia', 'last_name' => 'Lara Méndez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121760', 'name' => 'Sinaí', 'last_name' => 'Licona López', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121762', 'name' => 'Lizbeth', 'last_name' => 'Loeza Matias ', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121764', 'name' => 'Genaro Iván', 'last_name' => 'Marín Zamora', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121765', 'name' => 'Rigoberto', 'last_name' => 'Martínez de la Merced', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121767', 'name' => 'Edith', 'last_name' => 'Marínez Landero', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121769', 'name' => 'Jesús Abraham', 'last_name' => 'Mendoza Picazo', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121770', 'name' => 'Jhovaneli', 'last_name' => 'Mendoza Quijano', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121771', 'name' => 'Francisco Alexis', 'last_name' => 'Mondragón de Jesús', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121774', 'name' => 'Jesús Abraham', 'last_name' => 'Moreno Reyes', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121775', 'name' => 'María Itzel', 'last_name' => 'Murrieta Murrieta', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121778', 'name' => 'Jenifer', 'last_name' => 'Pedro Belen', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121782', 'name' => 'Gabriela ', 'last_name' => 'Ríos Abad', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121784', 'name' => 'Jesús Christian', 'last_name' => 'Rivera Martínez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121785', 'name' => 'Emmanuel', 'last_name' => 'Rivera Montiel', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121786', 'name' => 'Uriel Alonzo', 'last_name' => 'Rivera Morales', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121787', 'name' => 'Ada Marleth', 'last_name' => 'Rodríguez Hernández', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121790', 'name' => 'Merari', 'last_name' => 'Vazquez Contreras', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121792', 'name' => 'Ana Laura', 'last_name' => 'Vega Alfaro', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 23)->first()->students()->attach($insertedIds);

        /* 1NM2 */
        $users =[
            ['studentId' => '20192121731', 'name' => 'Virginia', 'last_name' => 'Alonso Ramírez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121732', 'name' => 'Amelia Nabil', 'last_name' => 'Callejas Lobato', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121736', 'name' => 'Luz María', 'last_name' => 'Cárcamo Enríquez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121738', 'name' => 'Moises Ami', 'last_name' => 'Castro Árcos', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121585', 'name' => 'Noé ', 'last_name' => 'Cervantes Jiménez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121740', 'name' => 'María Isabel ', 'last_name' => 'Cortés Marquez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121742', 'name' => 'Dania ', 'last_name' => 'Cruz García', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121744', 'name' => 'Yoneri', 'last_name' => 'Domínguez Sánchez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121748', 'name' => 'Leonardo', 'last_name' => 'Flores Perdomo', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121749', 'name' => 'María del Consuelo', 'last_name' => 'Gómez Ríos', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121751', 'name' => 'Estefania', 'last_name' => 'Guzmán Orea', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121753', 'name' => 'Cecilia', 'last_name' => 'Hernández Rodríguez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121754', 'name' => 'Fernando ', 'last_name' => 'Hernández Sánchez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121758', 'name' => 'María Aracely', 'last_name' => 'Lara Salazar', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121759', 'name' => 'Orlando', 'last_name' => 'León Contreras', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121761', 'name' => 'Diana Consuelo', 'last_name' => 'Loeza Armas', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121763', 'name' => 'Karla Celeste', 'last_name' => 'Luna López', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121766', 'name' => 'Angélica', 'last_name' => 'Martínez Domínguez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121768', 'name' => 'Lizbeth', 'last_name' => 'Martínez Vazquez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121772', 'name' => 'Diego Valentín', 'last_name' => 'Montero Picazo', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121773', 'name' => 'Karla Guadalupe', 'last_name' => 'Moreno Mendoza', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121776', 'name' => 'Xochitl', 'last_name' => 'Olmos Hernández', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121777', 'name' => 'Abigail', 'last_name' => 'Osorio Ruiz', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121779', 'name' => 'Karina', 'last_name' => 'Pérez García', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121780', 'name' => 'María Lizeth', 'last_name' => 'Ramiro León', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121781', 'name' => 'Georgina ', 'last_name' => 'Reyes Pablo', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121783', 'name' => 'Joel', 'last_name' => 'Rivera Ibarra', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121788', 'name' => 'Amelia Yameni', 'last_name' => 'Romero Romero', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121789', 'name' => 'Adriana', 'last_name' => 'Sánchez Guerrero', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121791', 'name' => 'Alondra', 'last_name' => 'Vega Alfaro', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121793', 'name' => 'Yusuani', 'last_name' => 'Zaragoza León', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 24)->first()->students()->attach($insertedIds);

        /* 5MN1 */
        $users =[
            ['studentId' => '20182121586', 'name' => 'Jorge', 'last_name' => 'Cortés Castañeda', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121587', 'name' => 'Alejandra', 'last_name' => 'Encinas Domínguez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121572', 'name' => 'Celida', 'last_name' => 'Galicia Pérez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121573', 'name' => 'Gabriela Yacxiry', 'last_name' => 'González Loma', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121575', 'name' => 'Ana Daniela ', 'last_name' => 'Montiel Hernández', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121577', 'name' => 'Efraín ', 'last_name' => 'Olaya Juárez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121578', 'name' => 'Alan Yair', 'last_name' => 'Peralta Niembre', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121581', 'name' => 'Blanca Graciela', 'last_name' => 'Rubio Hernández', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 25)->first()->students()->attach($insertedIds);


          /* 9NM1 */
        $users =[
            ['studentId' => '20172121462', 'name' => 'Jovanny', 'last_name' => 'Cortéz Ortega', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121465', 'name' => 'Malení', 'last_name' => 'Durán Hidalgo', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121341', 'name' => 'Concepción', 'last_name' => 'Guerrero Velázquez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121466', 'name' => 'Aurora', 'last_name' => 'Hernández López', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121467', 'name' => 'Tania ', 'last_name' => 'Hernández Rojas', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121470', 'name' => 'Ana Karen', 'last_name' => 'Mateo Díaz', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121471', 'name' => 'Ivonne Concepción', 'last_name' => 'Muñoz González', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121472', 'name' => 'María del Carmen', 'last_name' => 'Peralta Bello', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121198', 'name' => 'Fausta', 'last_name' => 'Pérez Morales', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121473', 'name' => 'Ivette', 'last_name' => 'Rojas Pacheco', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121474', 'name' => 'Juan Pablo', 'last_name' => 'Romero Álvarez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 26)->first()->students()->attach($insertedIds);

         /* DNM1 */
        $users =[
            ['studentId' => '20162121306', 'name' => 'Julián ', 'last_name' => 'Fernández Torres', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121308', 'name' => 'María Janet', 'last_name' => 'García Sánchez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121312', 'name' => 'Marisol', 'last_name' => 'Mateo Espíritu', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121313', 'name' => 'Noemí ', 'last_name' => 'Pérez Hernández', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20152121202', 'name' => 'Guadalupe ', 'last_name' => 'Sánchez Gaona', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 26)->first()->students()->attach($insertedIds);
    }
}
