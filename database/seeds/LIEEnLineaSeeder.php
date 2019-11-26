<?php

use Illuminate\Database\Seeder;
use App\Models\Career;
use App\Models\Group;
use App\Models\Teacher;
use App\User;

class LIEEnLineaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Career::insert([
            ['id' => 6, 'name' => 'INTERVENCIÓN EDUCATIVA', 'type' => 3]
        ]);

        Group::insert([
            ['id' => 38, 'name' => '1A', 'careerId' => 6],
            ['id' => 39, 'name' => '1B', 'careerId' => 6],
            ['id' => 40, 'name' => '1C', 'careerId' => 6],
            ['id' => 41, 'name' => '1D', 'careerId' => 6],
            ['id' => 42, 'name' => '3A', 'careerId' => 6],
            ['id' => 43, 'name' => '3B', 'careerId' => 6],
            ['id' => 44, 'name' => '3C', 'careerId' => 6],
            ['id' => 45, 'name' => '5B', 'careerId' => 6],
            ['id' => 46, 'name' => '7', 'careerId' => 6],
            ['id' => 47, 'name' => '71M2', 'careerId' => 6],
        ]);

         /* 1A */
         $users =[
            ['studentId' => '20192121032', 'name' => 'Beatriz', 'last_name' => 'Arellano Valerio', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121039', 'name' => 'Maricruz', 'last_name' => 'Avila Hernández', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121045', 'name' => 'Carlos Alberto', 'last_name' => 'Baltazar Oliver', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121061', 'name' => 'Sarahi', 'last_name' => 'Bello Perez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121063', 'name' => 'Paulina', 'last_name' => 'Benitez Calzada', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121069', 'name' => 'Clara', 'last_name' => 'Bonilla Sanchez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121084', 'name' => 'Berenice Guadalupe', 'last_name' => 'Calixto Perdomo', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121131', 'name' => 'Ilse', 'last_name' => 'Couturier Lombard', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121155', 'name' => 'Adriana', 'last_name' => 'Diaz Máximo', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121162', 'name' => 'Lorena', 'last_name' => 'Dominguez Martínez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121184', 'name' => 'Claudia', 'last_name' => 'Fidel Sebastian', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121192', 'name' => 'María de Jesus', 'last_name' => 'Francisco Camacho', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121262', 'name' => 'Maricela', 'last_name' => 'Hernández Aquino', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121265', 'name' => 'Mari Carmen', 'last_name' => 'Hernández Chino', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121341', 'name' => 'Carol', 'last_name' => 'Juarez Aguilar', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121344', 'name' => 'Areli', 'last_name' => 'Juarez Juarez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121448', 'name' => 'Maria Cristina', 'last_name' => 'Mendez Albino', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121481', 'name' => 'Dulce María', 'last_name' => 'Mora Valdez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121492', 'name' => 'Martha ', 'last_name' => 'Muñoz Martínez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121528', 'name' => 'Lucia Elena', 'last_name' => 'Paniahua Peña', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121556', 'name' => 'Alma Vianey', 'last_name' => 'Quezada Valera', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121557', 'name' => 'Miriam Lourdes', 'last_name' => 'Quiroz Rendon', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121616', 'name' => 'Amairani Celeste', 'last_name' => 'Romero Galindo', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121619', 'name' => 'Vinnia Madahi', 'last_name' => 'Romero Ramírez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121710', 'name' => 'Dolores Margarita', 'last_name' => 'Vega Boverth', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 38)->first()->students()->attach($insertedIds);

         /* 1B */
         $users =[
            ['studentId' => '20192121011', 'name' => 'Diana Jazmin', 'last_name' => 'Agustín Martinez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121051', 'name' => 'Maribel', 'last_name' => 'Barrientos de Jesús', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121073', 'name' => 'Adriana', 'last_name' => 'Bruno Juárez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121098', 'name' => 'María Guadalupe', 'last_name' => 'Casados Atanacio', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121151', 'name' => 'Arely ', 'last_name' => 'Del Carmen Sandoval', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20921211164', 'name' => 'Socorro', 'last_name' => 'Dominguez Quiroz', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121182', 'name' => 'Alondra', 'last_name' => 'Fernández Agustin', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121191', 'name' => 'Wuendi', 'last_name' => 'Flores Rojas', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121225', 'name' => 'Guadalupe', 'last_name' => 'Gomez Castelan', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121267', 'name' => 'Rocío', 'last_name' => 'Hernández Cruz', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121333', 'name' => 'Blanca Estela', 'last_name' => 'Jimenez Arcos', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121373', 'name' => 'Nancy Zamantha ', 'last_name' => 'López Guerrero', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121385', 'name' => 'Jaqueline ', 'last_name' => 'Lozada Gomez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121401', 'name' => 'Katia Esmeralda', 'last_name' => 'Marcos Tejeda', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121402', 'name' => 'Rosa', 'last_name' => 'Mariano Ramos', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121403', 'name' => 'Silvia', 'last_name' => 'Marin Aguilar', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121476', 'name' => 'Jennifer', 'last_name' => 'Mora Bruno', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121502', 'name' => 'Patricia', 'last_name' => 'Nicolas García', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121520', 'name' => 'Jacqueline', 'last_name' => 'Ortiz Morales', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121623', 'name' => 'Rosalba', 'last_name' => 'Rosas Flaviano', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121689', 'name' => 'Laritze', 'last_name' => 'Vargas Baez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121690', 'name' => 'Elizabeth ', 'last_name' => 'Vargas Mendez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121692', 'name' => 'Teresita', 'last_name' => 'Vazquez Calderon', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121725', 'name' => 'Yanine Ameyali', 'last_name' => 'Zaragoza Aguilar', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 39)->first()->students()->attach($insertedIds);


         /* 1C */
         $users =[
            ['studentId' => '20192121014', 'name' => 'Sandra', 'last_name' => 'Alberto Marcelo', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121016', 'name' => 'María del Pilar', 'last_name' => 'Allende Sanchez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121094', 'name' => 'Monica Andrea', 'last_name' => 'Carlos Vicente', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121106', 'name' => 'Paola', 'last_name' => 'Castellanos Trujillos', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121126', 'name' => 'Maricruz', 'last_name' => 'Cortes Gaspar', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121143', 'name' => 'Estefania', 'last_name' => 'De la cruz Cortina', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121160', 'name' => 'Diana Melisa', 'last_name' => 'Dominguez Bello', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121166', 'name' => 'Maria de los Angeles', 'last_name' => 'Doroteo Galicia ', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121179', 'name' => 'Brenda ', 'last_name' => 'Evaristo Ortiz', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121187', 'name' => 'Ana Graciela', 'last_name' => 'Flores Arenas', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121218', 'name' => 'Katia Denisse', 'last_name' => 'García Rodriguez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121312', 'name' => 'Karla Elizabeth', 'last_name' => 'Hernández Víveros', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121366', 'name' => 'Esmeralda Irene', 'last_name' => 'Lobato García', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121410', 'name' => 'Hector Javier', 'last_name' => 'Martínez Ávila', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121461', 'name' => 'Mariana Stefany', 'last_name' => 'Mendoza Montiel', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121471', 'name' => 'Miguel Angel ', 'last_name' => 'Modesto Perez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121480', 'name' => 'Anali', 'last_name' => 'Mora Seseña', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121518', 'name' => 'Fabiola', 'last_name' => 'Ortiz Fuentes', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121595', 'name' => 'Elba', 'last_name' => 'Roano Luz', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121602', 'name' => 'Celeste', 'last_name' => 'Rodriguez Hernández', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121605', 'name' => 'Luz Gabriela', 'last_name' => 'Rodriguez León', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121611', 'name' => 'Mariana ', 'last_name' => 'Roman Doroteo', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121630', 'name' => 'Wendy Paola', 'last_name' => 'Salais Hernandez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121672', 'name' => 'Ilse Guadalupe', 'last_name' => 'Tellez Torres', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121707', 'name' => 'Gricelda', 'last_name' => 'Vazquez Ramirez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121717', 'name' => 'Brandón', 'last_name' => 'Villa Martínez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 40)->first()->students()->attach($insertedIds);



        /* 1D */
        $users =[
            ['studentId' => '20192121003', 'name' => 'María del Socorro', 'last_name' => 'Aguayo Cordoba', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121038', 'name' => 'Juan Carlos', 'last_name' => 'Avila Gomez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121048', 'name' => 'María Lucia', 'last_name' => 'Barranco Ceballos', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121062', 'name' => 'Sandivel', 'last_name' => 'Benavides Coba', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121088', 'name' => 'Patricia', 'last_name' => 'Campos Matías', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121101', 'name' => 'Nipzi Paola', 'last_name' => 'Castañeda Hernandez ', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121140', 'name' => 'Janeth', 'last_name' => 'De jesus Gomez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121207', 'name' => 'Alexandra Abigail', 'last_name' => 'García Contreras', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121209', 'name' => 'Samantha Jenette', 'last_name' => 'García Eusebio', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121211', 'name' => 'Guadalupe', 'last_name' => 'García Hernández', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121241', 'name' => 'María Nathaly', 'last_name' => 'Gonzalez Vicente', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121259', 'name' => 'Ana Cristina ', 'last_name' => 'Hernandez Aguirre', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121264', 'name' => 'Alberto', 'last_name' => 'Hernandez Cesareo', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121316', 'name' => 'Nelly Patricia', 'last_name' => 'Herrera Galicia', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121433', 'name' => 'Guadalupe Isabel', 'last_name' => 'Martinez Serrano', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121444', 'name' => 'Anely', 'last_name' => 'Medina García', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121500', 'name' => 'Monserrat', 'last_name' => 'Nepomuceno Martínez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121506', 'name' => 'Joselin ', 'last_name' => 'Olivares Bautista', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121517', 'name' => 'Julieta', 'last_name' => 'Ortíz Cardeña', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121526', 'name' => 'Lizbeth', 'last_name' => 'Ortuño Pineda', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121560', 'name' => 'Vianey', 'last_name' => 'Ramirez Hernandez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121583', 'name' => 'Rosa Itzel', 'last_name' => 'Reyes Ramos', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121614', 'name' => 'Marcos', 'last_name' => 'Romano Castro', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121667', 'name' => 'Monserrat Guadalupe', 'last_name' => 'Servin Tapia', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 41)->first()->students()->attach($insertedIds);


         /* 3A */
         $users =[
            ['studentId' => '20182121010', 'name' => 'Jessica Marlen', 'last_name' => 'Alarcon Hernandez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121014', 'name' => 'Rosa Karina', 'last_name' => 'Alberto Hernandez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121033', 'name' => 'Karla ', 'last_name' => 'Arias Hernandez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121067', 'name' => 'Amanda', 'last_name' => 'Carlos Vega', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121118', 'name' => 'Lorena ', 'last_name' => 'Diaz Juarez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121126', 'name' => 'Carina', 'last_name' => 'Dominguez García', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121128', 'name' => 'Jazmin', 'last_name' => 'Dominguez Ramirez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121277', 'name' => 'Ariana', 'last_name' => 'López Dominguez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121305', 'name' => 'Melina', 'last_name' => 'Luna Chavez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121341', 'name' => 'Maria Enae', 'last_name' => 'Matías Contreras', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121352', 'name' => 'Blanca', 'last_name' => 'Mendez Ramirez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121363', 'name' => 'Martha Luz', 'last_name' => 'Morales Díaz', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121373', 'name' => 'Ana Ines', 'last_name' => 'Moreno Rodriguez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121392', 'name' => 'Jessica  ', 'last_name' => 'Ortíz Isidro', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121436', 'name' => 'Marlen', 'last_name' => 'Ramiro Rentería', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121451', 'name' => 'Angeles', 'last_name' => 'Reyes Sanchez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121510', 'name' => 'Liz Areli', 'last_name' => 'Serrano Mendoza', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121520', 'name' => 'Blanca Estela ', 'last_name' => 'Tomas López', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121526', 'name' => 'Alma Dolores', 'last_name' => 'Urbano Diaz', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121527', 'name' => 'Diana', 'last_name' => 'Vallejo Valderrabano', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121537', 'name' => 'Jazmin', 'last_name' => 'Vázquez Fernández', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 42)->first()->students()->attach($insertedIds);

         /* 3B */
         $users =[
            ['studentId' => '20182121040', 'name' => 'Andrea', 'last_name' => 'Ávila Oropeza', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121119', 'name' => 'Yessenia', 'last_name' => 'Díaz Medina', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121135', 'name' => 'América Alejandra', 'last_name' => 'Escutia Ramírez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121157', 'name' => 'Idalia Griscell', 'last_name' => 'Flores Camacho', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121176', 'name' => 'Yareli Esmeralda', 'last_name' => 'García Juárez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121195', 'name' => 'Andrea', 'last_name' => 'Gómez Cruz', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121200', 'name' => 'Sandra Berenice', 'last_name' => 'González de Jesús', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121203', 'name' => 'Diana Laura ', 'last_name' => 'González Pancardo', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121211', 'name' => 'Edna Cristina', 'last_name' => 'Guerrero Rendón', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121214', 'name' => 'Diana Eloisa', 'last_name' => 'Guzmán Jiménez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121287', 'name' => 'Ana Carina', 'last_name' => 'López Muñoz', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121298', 'name' => 'Vanessa', 'last_name' => 'Lozano Reyes', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121321', 'name' => 'Karla Grecia', 'last_name' => 'Marín Vázquez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121357', 'name' => 'Lizett', 'last_name' => 'Mendoza Salazar', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121409', 'name' => 'Mariela ', 'last_name' => 'Pérez Ordoñez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121488', 'name' => 'Rosario', 'last_name' => 'Sánchez Montero', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121507', 'name' => 'María Esmeralda', 'last_name' => 'Sayago Mateo', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121540', 'name' => 'Reynaldo', 'last_name' => 'Vázquez Posadas', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 43)->first()->students()->attach($insertedIds);


         /* 3c */
         $users =[
            ['studentId' => '20182121037', 'name' => 'Francisco Javier', 'last_name' => 'Atanasio Pérez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121050', 'name' => 'Paloma', 'last_name' => 'Bonilla Aco', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121057', 'name' => 'Karina Itzel', 'last_name' => 'Cadena Aco', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121080', 'name' => 'Karla  ', 'last_name' => 'Castillo Licona', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121085', 'name' => 'Mayte', 'last_name' => 'Claudio Saavedra', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121111', 'name' => 'Araceli ', 'last_name' => 'de la Cruz Mora', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121123', 'name' => 'Sait Fernando', 'last_name' => 'Dolores Guerrero', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121124', 'name' => 'Paola Lizbeth', 'last_name' => 'Domínguez Bello', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121196', 'name' => 'Luz del Carmen', 'last_name' => 'Gómez Platas', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121229', 'name' => 'Cristina ', 'last_name' => 'Hernández León', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121233', 'name' => 'Leticia  ', 'last_name' => 'Hernández Méndez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121265', 'name' => 'Karina de Jesús', 'last_name' => 'Lagunes Marquez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121285', 'name' => 'Karla Grisell', 'last_name' => 'López Miranda', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121320', 'name' => 'José Ángel', 'last_name' => 'Marín Áquino', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121277', 'name' => 'Viridiana', 'last_name' => 'Morales Ibañez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121372', 'name' => 'Maricela', 'last_name' => 'Moreno Casiano', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121484', 'name' => 'Paulette', 'last_name' => 'Sánchez Barrientos', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121518', 'name' => 'Teresa', 'last_name' => 'Tellez Herrera', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121528', 'name' => 'Mavaly Leticia', 'last_name' => 'Valdés Águilar', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 44)->first()->students()->attach($insertedIds);


        /* 5B */
        $users =[
            ['studentId' => '20172121031', 'name' => 'Giovanna ', 'last_name' => 'Bruno Guzmán', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121020', 'name' => 'Karla Virginia ', 'last_name' => 'Campos Huerta', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121048', 'name' => 'Marisol', 'last_name' => 'Castañeda Ortíz', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121050', 'name' => 'Siddartha Nataly', 'last_name' => 'Castro Saavedra', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121086', 'name' => 'Mayra Jaqueline', 'last_name' => 'Delgado Rodríguez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121104', 'name' => 'Liliana Marisol', 'last_name' => 'Galindo Toledo', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121109', 'name' => 'Guadalupe ', 'last_name' => 'García Fernández', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121127', 'name' => 'María Fernanda', 'last_name' => 'González Cerón', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121134', 'name' => 'Karina ', 'last_name' => 'González Melchor', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121141', 'name' => 'Mariely Lucero', 'last_name' => 'González Sosa', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121183', 'name' => 'Janeth ', 'last_name' => 'Jiménez Bartolo', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121207', 'name' => 'Ana Patricia', 'last_name' => 'Loeza López', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121222', 'name' => 'Norma ', 'last_name' => 'Lozano Monfil', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121224', 'name' => 'Jessica', 'last_name' => 'Lucas Brígido', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121228', 'name' => 'María Guadalupe', 'last_name' => 'Luna López', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121273', 'name' => 'Agustina ', 'last_name' => 'Montes Salgado', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121282', 'name' => 'Ángel Esteban', 'last_name' => 'Moreno Roque', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121285', 'name' => 'Brenda de Jesús', 'last_name' => 'Muñoz Rodríguez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121320', 'name' => 'Anakaren', 'last_name' => 'Pérez Cosme', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121321', 'name' => 'Yeni Marlen', 'last_name' => 'Pérez Hernández', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121325', 'name' => 'Ángeles Tesyly', 'last_name' => 'Pérez Pérez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121333', 'name' => 'Miriam Natali', 'last_name' => 'Pozos González', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121343', 'name' => 'Diana', 'last_name' => 'Ramírez Hernández', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121110', 'name' => 'María Fernanda', 'last_name' => 'Ramos Hernández', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121350', 'name' => 'Tania', 'last_name' => 'Ramos Hernández', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121399', 'name' => 'Miranda', 'last_name' => 'Sandoval Casiano', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121450', 'name' => 'Marian Oyuki', 'last_name' => 'Zamora Benítez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 45)->first()->students()->attach($insertedIds);

         /* 7 */
         $users =[
            ['studentId' => '20172121039', 'name' => 'Alicia', 'last_name' => 'Carlos Cabañas', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121052', 'name' => 'María José', 'last_name' => 'Cervantes Arguelles', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121058', 'name' => 'Gerardo', 'last_name' => 'Clemente Gaspar', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121059', 'name' => 'Miriam', 'last_name' => 'Clemente Ramos', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121070', 'name' => 'Hugo', 'last_name' => 'Cristóbal Encarnación', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121137', 'name' => 'Diana', 'last_name' => 'González Pérez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121143', 'name' => 'Diego', 'last_name' => 'Gregorio Juárez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121123', 'name' => 'Cristina ', 'last_name' => 'Ibañez Hipólito', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121202', 'name' => 'Maricela', 'last_name' => 'León Vázquez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121205', 'name' => 'Ana Laura', 'last_name' => 'Lima Serrano', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121212', 'name' => 'Nataly', 'last_name' => 'López Mendoza', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121079', 'name' => 'Lizbeth', 'last_name' => 'Luján Martínez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121231', 'name' => 'Karla Eugenia', 'last_name' => 'Macotela Vázquez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121249', 'name' => 'Diana Berenice', 'last_name' => 'Martínez Jerónimo', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121267', 'name' => 'Gregoria ', 'last_name' => 'Mendoza Águilar', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121271', 'name' => 'Gustavo', 'last_name' => 'Montalvo Bonilla', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121280', 'name' => 'Beatriz', 'last_name' => 'Moreno González', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121298', 'name' => 'Macaria', 'last_name' => 'Olivares Nepomuceno', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121309', 'name' => 'Anabel', 'last_name' => 'Pazos Fuentes', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121106', 'name' => 'Fanny Lizzeth', 'last_name' => 'Pérez Gaspar', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121346', 'name' => 'Bernaldino ', 'last_name' => 'Ramírez Ramírez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121349', 'name' => 'Maricruz del Socorro', 'last_name' => 'Ramírez Sánchez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121354', 'name' => 'Alicia', 'last_name' => 'Ramos Parra', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121385', 'name' => 'María Elena', 'last_name' => 'Saavedra Vázquez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121386', 'name' => 'Andrea Jaqueline', 'last_name' => 'Salais Hernández', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 46)->first()->students()->attach($insertedIds);


         /* 71M2 */
         $users =[
            ['studentId' => '20162121007', 'name' => 'Monzelene', 'last_name' => 'Amaro Córdova', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20122212037', 'name' => 'Estefania', 'last_name' => 'Bueno Sánchez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121018', 'name' => 'Eunice', 'last_name' => 'Cabrera Reyes', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121025', 'name' => 'Erika Yadira', 'last_name' => 'Castillo Tello', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121026', 'name' => 'Elizabeth', 'last_name' => 'Castro Garduño', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121030', 'name' => 'Guillermina', 'last_name' => 'Córdova Alarcón', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121032', 'name' => 'Maribel', 'last_name' => 'Cruz Guzmán', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20132121060', 'name' => 'Tania Libertad', 'last_name' => 'Flores Rivera', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121170', 'name' => 'Leticia', 'last_name' => 'García Hernández', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121178', 'name' => 'Karina Guadalupe', 'last_name' => 'González Rosales', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121058', 'name' => 'María Marcela', 'last_name' => 'Hernández Fernández', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121074', 'name' => 'Araceli', 'last_name' => 'Lino Vázquez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121088', 'name' => 'Berenice', 'last_name' => 'Hernández Meléndez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121092', 'name' => 'Elizabeth', 'last_name' => 'Mendoza Hernández', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121094', 'name' => 'Lady Diana', 'last_name' => 'Miranda Castro', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121098', 'name' => 'Yolanda ', 'last_name' => 'Navarro San Pedro', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121117', 'name' => 'Yazmín ', 'last_name' => 'Rojas Montalvo', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121128', 'name' => 'Minerva', 'last_name' => 'Santos Cano', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121244', 'name' => 'Bladimir ', 'last_name' => 'Segura Valera', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121135', 'name' => 'Adriana Vianey', 'last_name' => 'Viveros Peña', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 47)->first()->students()->attach($insertedIds);
    }
}
