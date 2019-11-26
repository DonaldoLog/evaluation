<?php

use Illuminate\Database\Seeder;
use App\Models\Career;
use App\Models\Group;
use App\Models\Teacher;
use App\User;

class PsicologiaEduSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Career::insert([
            ['id' => 2, 'name' => 'Psicologia Educativa', 'type' => 1]
        ]);

        Group::insert([
            ['id' => 12, 'name' => '1º', 'careerId' => 2],
            ['id' => 13, 'name' => '3º', 'careerId' => 2],
            ['id' => 14, 'name' => '5º', 'careerId' => 2],
            ['id' => 15, 'name' => '7º', 'careerId' => 2],
        ]);
        /* 1 */
        $users =[
            ['studentId' => '20192121002', 'name' => 'Carolina Anderleyn', 'last_name' => 'Acocal Reyna', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121043', 'name' => 'Eloy', 'last_name' => 'Baez Luna', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121075', 'name' => 'Marisol', 'last_name' => 'Cabañas Vazquez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121130', 'name' => 'Anadeli', 'last_name' => 'Cortés Martínez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121150', 'name' => 'María Fernanda ', 'last_name' => 'Degante Cantellano', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121159', 'name' => 'Mary Carmen', 'last_name' => 'Domingo Bautista', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121178', 'name' => 'Blanca Estela', 'last_name' => 'Eulogio Fernández', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121206', 'name' => 'Sebastián Ailtón', 'last_name' => 'García Chávez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121239', 'name' => 'Sarai Paola', 'last_name' => 'González Mateo', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121248', 'name' => 'María Arlett ', 'last_name' => 'Guevara Perdomo', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121253', 'name' => 'Karla Yessenia', 'last_name' => 'Gutiérrez Ventura', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121323', 'name' => 'Johanna Guadalupe', 'last_name' => 'Huidobro Díaz', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121379', 'name' => 'Dulce Jazmin', 'last_name' => 'López Pablo', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121442', 'name' => 'Miriam', 'last_name' => 'Máximo Carcamo', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121495', 'name' => 'Laura Nayeli', 'last_name' => 'Murrieta Ferra', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121507', 'name' => 'Fátima Guadalupe', 'last_name' => 'Olivarez Sauza', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121509', 'name' => 'Verónica', 'last_name' => 'Ordoñez Arango', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121545', 'name' => 'Hannia Ivette', 'last_name' => 'Pérez Martínez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121564', 'name' => 'Karla Michel', 'last_name' => 'Ramiro Tacuapan', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121565', 'name' => 'María Isabel', 'last_name' => 'Ramón Castro', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121571', 'name' => 'Marissa ', 'last_name' => 'Rendón Guevara', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121575', 'name' => 'Marcelina', 'last_name' => 'Reyes Domingo', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121582', 'name' => 'Cecilia ', 'last_name' => 'Reyes Ortega', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121624', 'name' => 'Jazmin ', 'last_name' => 'Rosas Torres', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121638', 'name' => 'Brayan Estebán', 'last_name' => 'Sánchez Hernández', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121664', 'name' => 'Dennis Samantha', 'last_name' => 'Serrano Cabañas', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121700', 'name' => 'Guadalupe Lizeth', 'last_name' => 'Vazquez Marín', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121706', 'name' => 'Yaquelin Anahi', 'last_name' => 'Vazquez Pérez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121711', 'name' => 'Ana Laura ', 'last_name' => 'Vega Claudio', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121712', 'name' => 'Diana Laura', 'last_name' => 'Vega Hernández', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 12)->first()->students()->attach($insertedIds);


         /* 3 */
         $users =[
            ['studentId' => '20182121002', 'name' => 'Mitzi Yleana', 'last_name' => 'Aburto Morales', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121008', 'name' => 'Marisa ', 'last_name' => 'Aguilar Segundo', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121012', 'name' => 'María del Rosario', 'last_name' => 'Alarcón Mendoza', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121023', 'name' => 'Ana Karen', 'last_name' => 'Andrade Hernández', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121026', 'name' => 'Diana Elisa', 'last_name' => 'Aparicio Rafael', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121035', 'name' => 'Melissa ', 'last_name' => 'Armenta Aguilar', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121072', 'name' => 'María Cristina', 'last_name' => 'Carpio Sandoval', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '2018212108', 'name' => 'Laura Ivette ', 'last_name' => 'Castro Macias', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121098', 'name' => 'Carolina  ', 'last_name' => 'Crisanto Solís', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121115', 'name' => 'Enrique', 'last_name' => 'de Luna Grande', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121121', 'name' => 'Sabine Yvette', 'last_name' => 'Dionicio Calzada', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121129', 'name' => 'Flor Nictel', 'last_name' => 'Domínguez Santos', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121163', 'name' => 'Andrés', 'last_name' => 'Franciso Romero', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121202', 'name' => 'Elizabeth', 'last_name' => 'González Mateo', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121231', 'name' => 'Anayeli', 'last_name' => 'Hernández Luna', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121234', 'name' => 'Zuriel', 'last_name' => 'Hernández Méndez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121236', 'name' => 'Ana Karen', 'last_name' => 'Hernández Preza', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121249', 'name' => 'Alfonso Alan', 'last_name' => 'Herrera Rojas', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121565', 'name' => 'Felipe', 'last_name' => 'Juárez Murrieta', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121266', 'name' => 'Miriam Sarai', 'last_name' => 'Landa Guzman', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121268', 'name' => 'Abigail', 'last_name' => 'Laureano García', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121295', 'name' => 'María Guadalupe', 'last_name' => 'Lorenzo Castañeda', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121304', 'name' => 'Maricarmen', 'last_name' => 'Luna Camacho', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121333', 'name' => 'Mónica', 'last_name' => 'Martínez Leonardo', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121345', 'name' => 'Jennifer Jared', 'last_name' => 'Melgarejo Rodríguez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121347', 'name' => 'Anahi', 'last_name' => 'Méndez Alejandro', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121355', 'name' => 'Daysi Kelly', 'last_name' => 'Mendoza López', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121381', 'name' => 'Juan Manuel ', 'last_name' => 'Nativida Seseña', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121399', 'name' => 'Diana Laura ', 'last_name' => 'Parra Orutño', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121405', 'name' => 'Monserrat', 'last_name' => 'Peralta Juárez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121427', 'name' => 'Levi Mizraim', 'last_name' => 'Ramírez Meza', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121447', 'name' => 'María de los Angeles', 'last_name' => 'Reyes Ortíz', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121462', 'name' => 'Diana', 'last_name' => 'Romano Vazquez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121472', 'name' => 'Carla Lizeth', 'last_name' => 'Rosario Rodríguez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '´20182121487', 'name' => 'Laura ', 'last_name' => 'Sánchez Hernández', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121503', 'name' => 'César', 'last_name' => 'Santos Luna', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121519', 'name' => 'Noelia', 'last_name' => 'Teodoro González', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121543', 'name' => 'Daniel', 'last_name' => 'Vazquez Victorio', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121552', 'name' => 'Itzel del Rocío', 'last_name' => 'Velazquez Santiesteban', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 13)->first()->students()->attach($insertedIds);

        /* 5 */
        $users =[
            ['studentId' => '20172121013', 'name' => 'María Isabel', 'last_name' => 'Ávila Hernández',  'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121037', 'name' => 'Zuleydi Anahi', 'last_name' => 'Caracas Alemán',  'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121064', 'name' => 'Angélica Vianey', 'last_name' => 'Córdoba Gregorio',  'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121091', 'name' => 'Alberto ', 'last_name' => 'Domínguez González',  'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121102', 'name' => 'Rogelio Adan', 'last_name' => 'Galaviz Saavedra',  'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121103', 'name' => 'Susan Cristina', 'last_name' => 'Galindo Ménder',  'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121108', 'name' => 'María Guadalupe', 'last_name' => 'García Carreón',  'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121122', 'name' => 'Karla Colett', 'last_name' => 'García Zaragoza',  'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121139', 'name' => 'Guadalupe Danahe', 'last_name' => 'González Sánchez',  'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121146', 'name' => 'María Teresa ', 'last_name' => 'Guerrero Herrera',  'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121149', 'name' => 'Adela Sarai', 'last_name' => 'Guzmán Jiménez',  'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121169', 'name' => 'Daniel ', 'last_name' => 'Hernández Perfecto',  'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121178', 'name' => 'Lizbeth Aurelia', 'last_name' => 'Hurtado Paulino',  'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121214', 'name' => 'Yenifer', 'last_name' => 'López Nava',  'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121229', 'name' => 'Denise', 'last_name' => 'Luna Luna',  'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121241', 'name' => 'Yareth ', 'last_name' => 'Martínez Basilio',  'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121255', 'name' => 'Jhoana Valeria', 'last_name' => 'Martínez Pachecho',  'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121259', 'name' => 'Hilda', 'last_name' => 'Maya Cruz',  'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121260', 'name' => 'Jovita Lizeth', 'last_name' => 'Medina Antonio',  'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121290', 'name' => 'María Aracely', 'last_name' => 'Murrieta Martagón',  'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121299', 'name' => 'Ricardo ', 'last_name' => 'Ordoñez Lucas',  'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121363', 'name' => 'Norma ', 'last_name' => 'Rivera Hernández',  'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121372', 'name' => 'Xochitl Esmeralda', 'last_name' => 'Rojas Luna',  'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '17680341', 'name' => 'María Fernanda', 'last_name' => 'Santos Salazar ',  'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121421', 'name' => 'Monserrat', 'last_name' => 'Valencia Cruz',  'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121436', 'name' => 'Sarahi Esmeralda', 'last_name' => 'Vazquez Morales',  'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121443', 'name' => 'María Teresa ', 'last_name' => 'Ventura Valenciano',  'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121451', 'name' => 'Sonia Ivette', 'last_name' => 'Zaragoza Sánchez',  'password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 14)->first()->students()->attach($insertedIds);


        /* 7 */
        $users =[
            ['studentId' => '166844201', 'name' => 'Georgina', 'last_name' => 'Aquino Alcantara',  'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '16684211', 'name' => 'Dayan ', 'last_name' => 'Balderrabano Ortega',  'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '16684221', 'name' => 'María Isabel', 'last_name' => 'Carballo Martínez',  'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '16684231', 'name' => 'María Cristina', 'last_name' => 'Castañón Rosas',  'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '16684241', 'name' => 'Loised', 'last_name' => 'Crisanto Solís',  'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '16684251', 'name' => 'María del Rosario', 'last_name' => 'Díaz Calixto',  'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '16684271', 'name' => 'Vianey', 'last_name' => 'González Chino',  'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '16684281', 'name' => 'Marlen', 'last_name' => 'González Joaquín',  'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '16684291', 'name' => 'Luis Ángel ', 'last_name' => 'Hernández López',  'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '16684341', 'name' => 'Mayra Iveth', 'last_name' => 'Mora García',  'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '16684351', 'name' => 'Mayra Lizeth', 'last_name' => 'Mota Pérez',  'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '16684361', 'name' => 'María de Lourdes', 'last_name' => 'Murrieta Pedro',  'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '16684371', 'name' => 'Nancy', 'last_name' => 'Santos Palestina',  'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '16684381', 'name' => 'Martha', 'last_name' => 'Paulino Simón',  'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '16684391', 'name' => 'Gilda', 'last_name' => 'Pérez González',  'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '16684841', 'name' => 'Iván ', 'last_name' => 'Rivera Castillo',  'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '16684401', 'name' => 'Diana Miriam', 'last_name' => 'Rojas Santos',  'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '16684411', 'name' => 'Estephani Joseline', 'last_name' => 'Romero Cruz',  'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '16684421', 'name' => 'Erandi', 'last_name' => 'Seseña Narcizo',  'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '16684431', 'name' => 'Karen Estefani', 'last_name' => 'Vazquez Carmona',  'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '16684451', 'name' => 'Fátima ', 'last_name' => 'Vazquez Reyes',  'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '16684441', 'name' => 'Saúl', 'last_name' => 'Villafañet Morales',  'password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 15)->first()->students()->attach($insertedIds);
    }
}
