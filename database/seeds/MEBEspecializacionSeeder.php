<?php

use Illuminate\Database\Seeder;
use App\Models\Career;
use App\Models\Group;
use App\Models\Teacher;
use App\User;

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
            ['id' => 16, 'name' => 'ESPECIALIZACIÓN EN COMPETENCIAS PROFESIONALES PARA LA PRÁCTICA PEDAGÓGICA EN LA EDUCACIÓN BÁSICA', 'type' => 1]
        ]);

        Group::insert([
            ['id' => 28, 'name' => '1A', 'careerId' => 16],
            ['id' => 29, 'name' => '1B', 'careerId' => 16],
            ['id' => 30, 'name' => '1EM3', 'careerId' => 16],
            ['id' => 31, 'name' => '2', 'careerId' => 16],
        ]);

         /* 1a */
         $users =[
            ['studentId' => '20192120035', 'name' => 'Esteban Alejandro', 'last_name' => 'Arturo Méndoza','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120036', 'name' => 'Oscar', 'last_name' => 'Alonso Domingo','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120037', 'name' => 'Lidia', 'last_name' => 'Alonso Murrieta','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120038', 'name' => 'Alicia', 'last_name' => 'Andrés Ortíz','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120041', 'name' => 'Clauda Ivette', 'last_name' => 'Barona García','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120043', 'name' => 'Damaris de Jesús ', 'last_name' => 'Cabañas Alfonnso','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120046', 'name' => 'Itzel Anay', 'last_name' => 'Córdova Domínguez','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120048', 'name' => 'Diana Itzel', 'last_name' => 'García Avendaño','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120049', 'name' => 'Oscar', 'last_name' => 'García Avendaño','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120051', 'name' => 'Miguel Yuvani', 'last_name' => 'García Sánchez','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120052', 'name' => 'Catherín', 'last_name' => 'Gómez Baltazar','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120053', 'name' => 'Guadalupe Isel', 'last_name' => 'González Jaimez','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120057', 'name' => 'Tania Citlalli', 'last_name' => 'Guerrero Fernández','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120065', 'name' => 'María del Socorro', 'last_name' => 'López Benavides','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120069', 'name' => 'Ana María', 'last_name' => 'Martínez Hernández','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120075', 'name' => 'Guadalupe', 'last_name' => 'Martínez Tadeo','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120078', 'name' => 'Ana Laura', 'last_name' => 'Morales Nicanor','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120083', 'name' => 'Wendollyne', 'last_name' => 'Ramón Martínez','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120085', 'name' => 'Verónica', 'last_name' => 'Romano Gómez','password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 28)->first()->students()->attach($insertedIds);


        /* 1b */
        $users =[
            ['studentId' => '20192120039', 'name' => 'Claudia', 'last_name' => 'Ascención Martínez','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120040', 'name' => 'Nayeli', 'last_name' => 'Baltazar Díaz','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120042', 'name' => 'Carol ', 'last_name' => 'Blas Juárez','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120044', 'name' => 'Sandra de Jesús', 'last_name' => 'Carballo Cruz','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120045', 'name' => 'Ingrid ', 'last_name' => 'Ceceña López','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120050', 'name' => 'Rosa', 'last_name' => 'García Isabel','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120054', 'name' => 'Rosalba Nabil', 'last_name' => 'González Martínez','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120055', 'name' => 'Ana Yacsiri', 'last_name' => 'Grijalva Reyes','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120056', 'name' => 'Giselle', 'last_name' => 'Guerra Galindo','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120066', 'name' => 'Guadalupe Anett', 'last_name' => 'López Brígido','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120067', 'name' => 'Guadalupe ', 'last_name' => 'Lucas Castro','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120071', 'name' => 'Gloria Ivonne', 'last_name' => 'Martínez Ordaz','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120072', 'name' => 'Iridian', 'last_name' => 'Martínez Peña','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120076', 'name' => 'Norma', 'last_name' => 'Mendoza García','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120077', 'name' => 'Adriana', 'last_name' => 'Norma Guerrero','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120080', 'name' => 'Marisol', 'last_name' => 'Murillo Lozada','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120082', 'name' => 'Martha Idalia', 'last_name' => 'Perdomo Murrieta','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120084', 'name' => 'Efren', 'last_name' => 'Ramos Flores','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120088', 'name' => 'Martha Zulema', 'last_name' => 'Vazquez Hernández','password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 29)->first()->students()->attach($insertedIds);

        /* iem3 */
        $users =[
            ['studentId' => '20192120047', 'name' => 'Alejandra', 'last_name' => 'Fernández Martínez','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120058', 'name' => 'Heraclio ', 'last_name' => 'Gutiérrez Lara','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120059', 'name' => 'David ', 'last_name' => 'Hernández Galán','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120060', 'name' => 'Florencia ', 'last_name' => 'Hernández Martínez','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120061', 'name' => 'Guadalupe', 'last_name' => 'Hernández Ortega','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120062', 'name' => 'Gabriel ', 'last_name' => 'Jerónimo Monterde','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120063', 'name' => 'José Alfredo ', 'last_name' => 'Jiménez Trinidad','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120068', 'name' => 'Juana ', 'last_name' => 'Luna Acuña','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120070', 'name' => 'Leticia Isabel', 'last_name' => 'Martínez Olivarez','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120073', 'name' => 'José Manuel', 'last_name' => 'Martínez Ramos','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120074', 'name' => 'Manuel', 'last_name' => 'Martínez Santos','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120079', 'name' => 'Marina', 'last_name' => 'Morelos Lozada','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120081', 'name' => 'Edgar', 'last_name' => 'Parra Hernández','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120086', 'name' => 'Gerardo', 'last_name' => 'Toledano Islas','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120087', 'name' => 'Nestor Arturo', 'last_name' => 'Uriarte Herrera','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120089', 'name' => 'Matilde ', 'last_name' => 'Vázquez Valerio','password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 30)->first()->students()->attach($insertedIds);


         /* 2 */
         $users =[
            ['studentId' => '20192120002', 'name' => 'María Elena', 'last_name' => 'Castillo Irene','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120003', 'name' => 'Crystel Delia', 'last_name' => 'Contreras Durán','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120004', 'name' => 'Maricela', 'last_name' => 'Flandez Landero','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120005', 'name' => 'Ana Laura', 'last_name' => 'López Luna','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120007', 'name' => 'Karla Monserrat', 'last_name' => 'Sánchez Serrano','password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 31)->first()->students()->attach($insertedIds);

    }
}
