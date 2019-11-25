<?php

use App\Models\Career;
use App\Models\Group;
use App\Models\Teacher;
use App\User;
use Illuminate\Database\Seeder;

class PedagogiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Career::insert([
            ['id' => 1, 'name' => 'PEDAGOGÍA', 'type' => 1]
        ]);

        Group::insert([
            ['id' => 1, 'name' => '1A', 'careerId' => 1],
            ['id' => 2, 'name' => '1B', 'careerId' => 1],
            ['id' => 3, 'name' => '1C', 'careerId' => 1],
            ['id' => 4, 'name' => '1D', 'careerId' => 1],
            ['id' => 5, 'name' => '3A', 'careerId' => 1],
            ['id' => 6, 'name' => '3B', 'careerId' => 1],
            ['id' => 7, 'name' => '3C', 'careerId' => 1],
            ['id' => 8, 'name' => '5A', 'careerId' => 1],
            ['id' => 9, 'name' => '5B', 'careerId' => 1],
            ['id' => 10, 'name' => '7A', 'careerId' => 1],
            ['id' => 11, 'name' => '7B', 'careerId' => 1],
        ]);

        $users =[
            ['studentId' => '20192121013', 'name' => 'JESSICA LIZETH ALBERTO DOMINGUEZ', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121023', 'name' => 'MARÍA DEL CARMEN ANDRÉS ORTÍZ', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121025', 'name' => 'MARISOL ANTONIO HERNANDEZ', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121046', 'name' => 'CARLOS ENRIQUE BALTAZAR ORONZOR', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121049', 'name' => 'RENÉ BARREDA GARCÍA', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121072', 'name' => 'SAULI IRAÍS BRUNO AGUILAR', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121078', 'name' => 'ANA CRISTINA CABRERA BALTAZAR', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121121', 'name' => 'YOVANA CONTRERAS BALMEZ', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121201', 'name' => 'MIGUEL ANGEL GAONA RAMOS', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121212', 'name' => 'LUIS ARMANDO GARCÍA JUAREZ', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121233', 'name' => 'ANETTE GONZALEZ COLIO', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121254', 'name' => 'ABIMELEC GUTIERREZ ZENÓN', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121260', 'name' => 'SAIDA JAQUELINE HERNÁNDEZ ALEJO', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121272', 'name' => 'FRANCISCO JAVIER HERNÁNDEZ GARCÍA', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121294', 'name' => 'MARIO HERNÁNDEZ MENDOZA', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121296', 'name' => 'YATZIRY GUADALUPE HERNÁNDEZ OLIVARES', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121299', 'name' => 'KARLA MARLEN HERNÁNDEZ PRADO', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121320', 'name' => 'VICTOR EDUARDO HILARIO HERNANDEZ', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121325', 'name' => 'JOSE MANUEL ILDEFONSO HERNÁNDEZ', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121358', 'name' => 'ANALLELY LEÓN ASCENCIÓN', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121382', 'name' => 'MARCOS SABINO LÓPEZ SANCHEZ', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121420', 'name' => 'HECTOR MARTINEZ LEMUS', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121424', 'name' => 'JOSE EDUARDO MARTÍNEZ MARURI', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121432', 'name' => 'NATALIA MARTINEZ ROQUE', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121443', 'name' => 'MARLEN MASA MARIN', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121449', 'name' => 'ISAAC MENDEZ CORTEZ', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121472', 'name' => 'YARITH EIMY MOLINA MARTÍNEZ', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121473', 'name' => 'RAFAEL MONTERO COLIO', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121496', 'name' => 'ESTEFANIA MURRIETA GUZMÁN', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121561', 'name' => 'JENNIFER RAMIREZ LANDERO', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121596', 'name' => 'MARLEN RODRIGO BAUTISTA', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121597', 'name' => 'JARED RODRIGO SANTIAGO', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121601', 'name' => 'CARMEN ITZEL RODRIGUEZ HERNANDEZ', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121622', 'name' => 'ABRIL JETZABEL ROSALES HERNANDEZ', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121648', 'name' => 'MARÍA DEL CARMEN SANMARTIN HERNÁNDEZ', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121693', 'name' => 'MARÍA GUADALUPE VAZQUEZ FLORES', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 1)->first()->students()->attach($insertedIds);

        /* 1b */
        $users =[
            ['studentId' => '20192121005', 'name' => 'MARIA DOLORES AGUILAR CARMONA', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121022', 'name' => 'MAGALI ANDRÉS MARTÍNEZ', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192122050', 'name' => 'MOISES BARRERA GARCÍA', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192123052', 'name' => 'GABRIELA BARRIOS LÓPEZ', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192124056', 'name' => 'JAVIER BAUTISTA VICENTE', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192125080', 'name' => 'RAMIRO CABREA GONZALEZ', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192126081', 'name' => 'YAZMIN ARIZBETH CALDERON OLIVARES', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192127099', 'name' => 'SANDRA CASIANO BERNARDO', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192128120', 'name' => 'EDWIN CONTRERAS ALLENDE', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192129232', 'name' => 'FRANCISCO JAVIER GONZALEZ BERNARDO', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192130236', 'name' => 'CARLOS DE JESÚS GONZALEZ HERNÁNDEZ', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192131244', 'name' => 'JOSE MANUEL GREGORIO RODRIGUEZ', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192132261', 'name' => 'LUZ ELENA ALONDRA HERNÁNDEZ AQUINO', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192133282', 'name' => 'OLIVER HERNÁNDEZ HERNÁNDEZ', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192134286', 'name' => 'SELENE HERNANDEZ HERRERA', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192135288', 'name' => 'LUIS ANGEL HERNÁNDEZ JUÁREZ', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192136292', 'name' => 'DIANA IRIS HERNÁNDEZ MARTINEZ', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192137337', 'name' => 'ALONDRA JIMENEZ FLORES', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192138370', 'name' => 'SERGIO LÓPEZ DE JESÚS', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192139380', 'name' => 'MARÍA JOSE LÓPEZ PREZA', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192140413', 'name' => 'FRANCISCO JAVIER MARTÍNEZ DEL CARMEN', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192141426', 'name' => 'VANESSA MARTÍNEZ MENDOZA', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192142429', 'name' => 'ANAHI MARTÍNEZ PEREZ', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192143455', 'name' => 'ABIGAIL MENDEZ REYES', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192144457', 'name' => 'SELENA MARIEL MENDEZ TEODORO', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192145468', 'name' => 'GIOVANNA MIRANDA GUTIERREZ', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192146469', 'name' => 'MARIA FERNANDA MIRANDA GUTIERRREZ', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192147527', 'name' => 'EFRAÍN OSORIO BANDALA', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192148533', 'name' => 'MARIDALIA PEDRO SANTOS', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192149547', 'name' => 'BRENDA BETARIZ PEREZ ORTÍZ', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192150555', 'name' => 'IRIS ESMERALDA PREZA GARCÍA', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192151577', 'name' => 'MARÍA TERESA REYES GONZALEZ', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192152610', 'name' => 'CARLOS EDUARDO ROJAS FLORES', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192153628', 'name' => 'ESMERALDA SABINO CESÁREO', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192154646', 'name' => 'MONSERRAT SANCHEZ VALENCIA', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192155673', 'name' => 'IVONNE TENORIO BERNARDO', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 2)->first()->students()->attach($insertedIds);


         /* 1c */
         $users =[
            ['studentId' => '20192121006', 'name' => 'ANGEL ENRIQUE AGUILAR HERNÁNDEZ ', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121053', 'name' => 'GUADALUPE BARTOLO VALERA', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121054', 'name' => 'DULCE MARIA BASILIO HERNANDEZ', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121076', 'name' => 'DIANA KAREN CABRERA ACEVEDO', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121091', 'name' => 'MIRIAM DEL SOCORRO CANO LEÓN', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121100', 'name' => 'EDER JAIR CASIANO ROMERO', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121136', 'name' => 'VICTOR MANUEL DE GANTE LEAL', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121137', 'name' => 'YARETH DE JESÚS BALDERRABANO ', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121139', 'name' => 'ALEJANDRA DE JESÚS FERNÁNDEZ', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121157', 'name' => 'MONSERRAT DIAZ TEJEDA', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121171', 'name' => 'DENISSE ABIGAIL ESCAMILLA ROMERO', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121180', 'name' => 'XOCHITL FERMÍN FERMÍN', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121190', 'name' => 'ALVARO FLORES NATIVIDAD', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121203', 'name' => 'ESMERALDA GARCÍA BARRIOS', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121213', 'name' => 'ELSA YAZMIN GARCÍA LARA', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121245', 'name' => 'YESICA GUADALUPE GRIJALVA GONZALEZ', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121306', 'name' => 'FATIMA HERNÁNDEZ SANCHEZ', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121310', 'name' => 'YOSELIN HERNÁNDEZ VALERA', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121346', 'name' => 'JUANA JUÁREZ LUNA', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121360', 'name' => 'ANTONIO LEÓN LUCAS', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121362', 'name' => 'YAZMIN LIMÓN LÓPEZ', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121414', 'name' => 'ALEXIS MARTPINEZ GARCÍA', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121428', 'name' => 'ANDREA MARTPINEZ PERDOMO', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121459', 'name' => 'ROBERTO ANTONIO MENDOZA ÁVILA', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121470', 'name' => 'MARLEN MOCTEZUMA PALACIOS', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121488', 'name' => 'HILIA MORENO DELGADILLO', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121491', 'name' => 'WENDY MUNGUÍA REFUGIO', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121493', 'name' => 'ALONDRA MUÑOZ SOTO', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121494', 'name' => 'VICTOR HUGO MURRIETA ANDRÉS ', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121530', 'name' => 'LORENA PARRA MENDEZ', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121543', 'name' => 'GUILLERMO PEREZ GARCÍA', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121594', 'name' => 'YOVANI RIVERA RIVERA', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121600', 'name' => 'MICHELLE RODRIGUEZ GUEVARA', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121608', 'name' => 'SHENLAY SHINEHAH ROJAS HERNÁNDEZ', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121699', 'name' => 'KAREN GEOVANNA VÁZQUEZ JUÁREZ', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121708', 'name' => 'DANIELA VÁZQUEZ RIVERA', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121715', 'name' => 'BRENDA VERONA GARCIA', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 3)->first()->students()->attach($insertedIds);

         /* 1d */
         $users =[
            ['studentId' => '20192121055', 'name' => 'Rosa Isela', 'last_name' => 'Bautista Alonso','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121057', 'name' => 'Zaira', 'last_name' => 'Becerra García','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121077', 'name' => 'Kevin Jair', 'last_name' => 'Cabrera Acevedo','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121086', 'name' => 'María Guadalupe', 'last_name' => 'Campos González','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121093', 'name' => 'Andrea', 'last_name' => 'Carlos Santos','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121102', 'name' => 'Dulce Abigail', 'last_name' => 'Castañeda Ortíz','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121103', 'name' => 'Alejandro', 'last_name' => 'Castelán García','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121110', 'name' => 'Andrea ', 'last_name' => 'Castro Espinoza','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121122', 'name' => 'Gabriela Ailen', 'last_name' => 'Contreras González','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121153', 'name' => 'Diana', 'last_name' => 'Desiderio Baltazar','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121198', 'name' => 'Arely', 'last_name' => 'Galindo Ramiro','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121221', 'name' => 'Aridai', 'last_name' => 'García Santiago','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121240', 'name' => 'Mariel Guadalupe', 'last_name' => 'González Paulino','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121246', 'name' => 'Flor Guadalupe', 'last_name' => 'Guarneros Francisco','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121247', 'name' => 'Miguel', 'last_name' => 'Guevara Carmona','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121290', 'name' => 'Itavianni', 'last_name' => 'Hernández Leal','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121302', 'name' => 'Aldo de Jesús', 'last_name' => 'Hernández Reyes','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            //['studentId' => '20192121302', 'name' => 'Osiel', 'last_name' => 'Hernández Rodríguez','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121318', 'name' => 'Juan Pablo', 'last_name' => 'Herrera Ramírez','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121357', 'name' => 'Yen Eltón ', 'last_name' => 'Leal García','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121375', 'name' => 'Alexander', 'last_name' => 'López Leal','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121383', 'name' => 'Alexsander', 'last_name' => 'Lozada Burgos','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121397', 'name' => 'Luis Armando', 'last_name' => 'Macario Alberto','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121405', 'name' => 'Ramses', 'last_name' => 'Marquez Baltazar','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121431', 'name' => 'María Flor', 'last_name' => 'Martínez Rojas','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121508', 'name' => 'Arturo', 'last_name' => 'Olvera Bonifacio','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121512', 'name' => 'Luis Emilio', 'last_name' => 'Ortega Tejeda','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121513', 'name' => 'Héctor', 'last_name' => 'Ortega Valera','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121537', 'name' => 'Jeeimi Joselin', 'last_name' => 'Pérez Apolinar','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121548', 'name' => 'Daniel ', 'last_name' => 'Pérez Ramírez','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121635', 'name' => 'Diana Itzel', 'last_name' => 'Sánchez Ascención','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121641', 'name' => 'Luis Alberto ', 'last_name' => 'Sánchez Marín','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121665', 'name' => 'Lizeth Monserrat', 'last_name' => 'Serrano Castañeda','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121721', 'name' => 'Ángel Ulises', 'last_name' => 'Zafra Ramírez','password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 4)->first()->students()->attach($insertedIds);


          /* 3a */
          $users =[
            ['studentId' => '20182121004', 'name' => 'Luis David', 'last_name' => 'Águilar Baldera','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121017', 'name' => 'Oralia', 'last_name' => 'Alonso Toledano','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121083', 'name' => 'María Fernanda', 'last_name' => 'Ceja González','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121087', 'name' => 'Celestina', 'last_name' => 'Contreras de la Cruz','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121100', 'name' => 'Rosa Isela', 'last_name' => 'Cruz García','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121122', 'name' => 'Efren', 'last_name' => 'Dionicio Domínguez','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121125', 'name' => 'Lizbeth', 'last_name' => 'Domínguez Gabriel','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121193', 'name' => 'Karen  ', 'last_name' => 'Gil Domínguez','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121204', 'name' => 'Gustavo ', 'last_name' => 'González Rendón','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121209', 'name' => 'Wilfrido', 'last_name' => 'Guadalupe Acuña','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121246', 'name' => 'Andrea ', 'last_name' => 'Herrera Herrera','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121251', 'name' => 'Blanca Estela', 'last_name' => 'Hipólito Sandoval','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121286', 'name' => 'Neri del Carmen ', 'last_name' => 'López Moctezuma','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121288', 'name' => 'Yhoani', 'last_name' => 'López Nader','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121290', 'name' => 'Guilmar', 'last_name' => 'López Patiño','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121309', 'name' => 'Vanessa Alessandra', 'last_name' => 'Macias Martínez','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121322', 'name' => 'Yamilet ', 'last_name' => 'Marquez Avalos ','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121351', 'name' => 'Guadalupe', 'last_name' => 'Méndez Perdomo','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121353', 'name' => 'Idelfonsa', 'last_name' => 'Méndez Simón','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121360', 'name' => 'Axel ', 'last_name' => 'Mora Arellanes','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121398', 'name' => 'Rafael Iván', 'last_name' => 'Parra Bonilla','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121403', 'name' => 'Brenda Guadalupe', 'last_name' => 'Paulino Pérez','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121404', 'name' => 'Julian Alejandro', 'last_name' => 'Pazos Bautista','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121431', 'name' => 'Ismael ', 'last_name' => 'Ramírez San Pedro','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121448', 'name' => 'Verónica', 'last_name' => 'Reyes Pozos','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121456', 'name' => 'Guadalupe', 'last_name' => 'Rivera Prado','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121554', 'name' => 'Yareli', 'last_name' => 'Guerrero Victoriano','password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 5)->first()->students()->attach($insertedIds);

         /* 3b */
         $users =[
            ['studentId' => '20182121020', 'name' => 'Irving Jesús ', 'last_name' => 'Amaro Sánchez','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121569', 'name' => 'Ozuemy', 'last_name' => 'Aranda Ríos','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121031', 'name' => 'Alan Ulises', 'last_name' => 'Arguelles Cantellano','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121046', 'name' => 'Juan Carlos', 'last_name' => 'Bautista Martínez','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121063', 'name' => 'Brisa', 'last_name' => 'Camacho Alberto','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            //['studentId' => '20182121063', 'name' => 'Marisol ', 'last_name' => 'Camacho López','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121069', 'name' => 'Evelia', 'last_name' => 'Carpio Ambrosio','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121089', 'name' => 'Oscar', 'last_name' => 'Contreras Martínez','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121090', 'name' => 'Uriel Benito', 'last_name' => 'Contreras Vázquez','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121133', 'name' => 'Juan Carlos', 'last_name' => 'Encarnación Falcón','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            //['studentId' => '20182121133', 'name' => 'Alexis', 'last_name' => 'Encarnación Ventura','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121153', 'name' => 'Andrea ', 'last_name' => 'Fernando Santos','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121190', 'name' => 'Daniela', 'last_name' => 'Gaspar Martínez','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121191', 'name' => 'Alejandra', 'last_name' => 'Gaspar Tomás','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121227', 'name' => 'Nallely Roselin', 'last_name' => 'Hernández Hernández','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121297', 'name' => 'Gisela Karina', 'last_name' => 'Lozano Cárcamo','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121299', 'name' => 'Kevin Aldair', 'last_name' => 'Lucas Díaz','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121349', 'name' => 'Ángel  ', 'last_name' => 'Méndez Gómez','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121385', 'name' => 'Luis Daniel ', 'last_name' => 'Obregón Alarcón','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121386', 'name' => 'Leticia Margarita', 'last_name' => 'Olaya Torres','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121418', 'name' => 'Yamileth Teresa', 'last_name' => 'Puanta Toledano','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121424', 'name' => 'Andrés', 'last_name' => 'Ramírez Hernández','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121438', 'name' => 'Fernando José', 'last_name' => 'Ramón Mote','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121468', 'name' => 'Brenda  ', 'last_name' => 'Roque Gaspar','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121471', 'name' => 'Jandy Yadira', 'last_name' => 'Rosario Lara','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121477', 'name' => 'Juan  ', 'last_name' => 'Salas Pérez','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121481', 'name' => 'Verónica', 'last_name' => 'Salazar Comunidad','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121546', 'name' => 'Luis Alberto ', 'last_name' => 'Vega Leal','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121557', 'name' => 'Arturo', 'last_name' => 'Villa Oronzor','password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 6)->first()->students()->attach($insertedIds);

        /* 3c */
        $users =[
            ['studentId' => '20182121038', 'name' => 'Erika ', 'last_name' => 'Aurelio Jacobo','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121041', 'name' => 'Verónica', 'last_name' => 'Baez Herrera','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121059', 'name' => 'Juan Jesús', 'last_name' => 'Calderón Vega','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121070', 'name' => 'Sabina ', 'last_name' => 'Carpio Ambrosio','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121076', 'name' => 'Jesús Fernando', 'last_name' => 'Casiano Hernández','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121077', 'name' => 'Álex Daniel', 'last_name' => 'Casiano Morales','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121088', 'name' => 'Elizabeth ', 'last_name' => 'Contreras Hernández','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121091', 'name' => 'Luis ', 'last_name' => 'Cornelio Rosas','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121104', 'name' => 'Marco Antonio', 'last_name' => 'Cruz López','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121106', 'name' => 'Victor Hugo ', 'last_name' => 'Cruz Ventura','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121210', 'name' => 'Jaquelin ', 'last_name' => 'Guerra Huerta','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121241', 'name' => 'Gustavo', 'last_name' => 'Hernández Toribio','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121264', 'name' => 'Santiago ', 'last_name' => 'Juárez Zamora','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121279', 'name' => 'Jessica ', 'last_name' => 'López García','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121291', 'name' => 'Yozetmar', 'last_name' => 'López Patiño','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121335', 'name' => 'Karina', 'last_name' => 'Martínez Reyes','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121336', 'name' => 'Karla', 'last_name' => 'Martínez Rodríguez','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121359', 'name' => 'Diana Lisset', 'last_name' => 'Montiel Galindo','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121452', 'name' => 'María de la Luz', 'last_name' => 'Reyes Trujillo','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121494', 'name' => 'Catarina ', 'last_name' => 'Sánchez Vega','password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 7)->first()->students()->attach($insertedIds);

        /* 5a */
        $users =[
            ['studentId' => '20172121007', 'name' => 'Araceli', 'last_name' => 'Aquino Climaco','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121017', 'name' => 'Aylin Magali', 'last_name' => 'Barona Cortés','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121038', 'name' => 'Andrea ', 'last_name' => 'Cárdenas Huerta','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121068', 'name' => 'Noé ', 'last_name' => 'Cortés Hernández','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121076', 'name' => 'Yenifer Yesenia', 'last_name' => 'De Gante Morales','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121046', 'name' => 'Julio César', 'last_name' => 'García Pérez','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121118', 'name' => 'Alexis', 'last_name' => 'García Ramírez','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121125', 'name' => 'Yazmín', 'last_name' => 'Gaspar Ramírez','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121138', 'name' => 'Brenda Lizeth', 'last_name' => 'González Ramírez','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121145', 'name' => 'Airazeny', 'last_name' => 'Guerrero Cabrera','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121163', 'name' => 'Ana Rosa', 'last_name' => 'Hernández Hernández','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121171', 'name' => 'Jorge ', 'last_name' => 'Hernández Rodríguez','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121180', 'name' => 'William', 'last_name' => 'Islas Gutiérrez','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121215', 'name' => 'Deyaneira Noemi ', 'last_name' => 'López Olivares','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121226', 'name' => 'José Rodolfo', 'last_name' => 'Luciano Ramírez','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121274', 'name' => 'Alma Isabel ', 'last_name' => 'Montiel Becerril','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121287', 'name' => 'Daniel ', 'last_name' => 'Murrieta Guzmán','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121295', 'name' => 'Diego ', 'last_name' => 'Ochoa Colorado','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121312', 'name' => 'Martha Alicia', 'last_name' => 'Peña Caballero','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121315', 'name' => 'Karina ', 'last_name' => 'Perdomo Rosas','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121397', 'name' => 'Deni Anitsirc', 'last_name' => 'Sánchez Toral','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121409', 'name' => 'Adriana', 'last_name' => 'Simón Santiago','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121412', 'name' => 'Rosaisela', 'last_name' => 'Tejeda Ramos','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121414', 'name' => 'Jessica Josseline', 'last_name' => 'Toledano Alvarado','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121431', 'name' => 'Juan Carlos', 'last_name' => 'Vázquez Hernández','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121437', 'name' => 'Arisbet', 'last_name' => 'Vázquez Tejeda','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121438', 'name' => 'Sury Verenice', 'last_name' => 'Vázquez Vázquez','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121440', 'name' => 'Sofia Joseline ', 'last_name' => 'Velasco Martínez','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121453', 'name' => 'Luz Iliana', 'last_name' => 'Zavaleta Marcos','password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 8)->first()->students()->attach($insertedIds);

        /* 5b */
        $users =[
            ['studentId' => '20172121002', 'name' => 'Alondra Janet', 'last_name' => 'Águilar Vázquez','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121005', 'name' => 'Elizabeth', 'last_name' => 'Ángel Pedro','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121018', 'name' => 'Marcela', 'last_name' => 'Barrera Águilar','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121020', 'name' => 'Daniela Evelin', 'last_name' => 'Bartolo Santiago','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121033', 'name' => 'Christian', 'last_name' => 'Camacho Bello','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121043', 'name' => 'Sandra', 'last_name' => 'Casiano Ángel','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121051', 'name' => 'Carmen', 'last_name' => 'Ceballos Valera','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121061', 'name' => 'Brandón ', 'last_name' => 'Contreras Hernández','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121082', 'name' => 'Lizeth', 'last_name' => 'de la Rosa de Jesús','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121089', 'name' => 'Graciela ', 'last_name' => 'Díaz Mendoza','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121099', 'name' => 'María de los Ángeles', 'last_name' => 'Flores Galván','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121100', 'name' => 'Guadalupe Lizeth', 'last_name' => 'Flores Martínez','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121144', 'name' => 'María del Carmen', 'last_name' => 'Gregorio Vázquez','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121160', 'name' => 'Estefany', 'last_name' => 'Hernández García','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121164', 'name' => 'Roberto Carlos ', 'last_name' => 'Hernández Hernández','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121170', 'name' => 'Tania', 'last_name' => 'Hernández Rivera','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121173', 'name' => 'Daniela  ', 'last_name' => 'Hernández Rivera','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121181', 'name' => 'César Adrián', 'last_name' => 'Iturbide Fernando','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121186', 'name' => 'Andrea ', 'last_name' => 'Jiménez Hernández','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121126', 'name' => 'Irving', 'last_name' => 'Martínez Barrientos','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121242', 'name' => 'Rocío', 'last_name' => 'Martínez Bastida','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121266', 'name' => 'Jesús Manuel', 'last_name' => 'Méndez Vázquez','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121270', 'name' => 'Jenifer ', 'last_name' => 'Meza Ramírez','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121278', 'name' => 'Juan Jesús ', 'last_name' => 'Morales Santos','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121288', 'name' => 'Mariel Fernanda', 'last_name' => 'Murrieta Juárez','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121296', 'name' => 'Bryan Jesús', 'last_name' => 'Ojeda Martínez','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121304', 'name' => 'Misael ', 'last_name' => 'Ortíz Martínez','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121340', 'name' => 'Anita', 'last_name' => 'Ramírez Díaz','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121353', 'name' => 'Jose Emmanuel', 'last_name' => 'Ramos Ortega','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121357', 'name' => 'Arely', 'last_name' => 'Reyes Benavides','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121364', 'name' => 'Mario ', 'last_name' => 'Rivera Martínez','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121405', 'name' => 'Octaviano', 'last_name' => 'Serrano Rosas','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121417', 'name' => 'Marco Antonio', 'last_name' => 'Trujillo Martínez','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121442', 'name' => 'Martha Elena ', 'last_name' => 'Ventura Pérez','password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 9)->first()->students()->attach($insertedIds);

        /* 7a */
        $users =[
            ['studentId' => '20162121003', 'name' => 'Antonia', 'last_name' => 'Águilar Hernández','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121006', 'name' => 'Alejandra', 'last_name' => 'Alaguna López','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121008', 'name' => 'Martha Cecilia', 'last_name' => 'Amaro Reyes','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121009', 'name' => 'Juan Antonio ', 'last_name' => 'Anaya Santiago','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121011', 'name' => 'Isabel', 'last_name' => 'Andrés Olivares','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121015', 'name' => 'David', 'last_name' => 'Báez Sandoval','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121017', 'name' => 'María del Consuelo ', 'last_name' => 'Benito Pérez','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121023', 'name' => 'Karla Stephanie', 'last_name' => 'Castelán García','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121029', 'name' => 'María Fernanda', 'last_name' => 'Castro Toral','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            //['studentId' => '20162121029', 'name' => 'Luis Ángel', 'last_name' => 'Clemente Betancourt','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121037', 'name' => 'Sandra ', 'last_name' => 'Dionicio García','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121042', 'name' => 'Mónica', 'last_name' => 'Galindo López','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121045', 'name' => 'Pablo Alberto', 'last_name' => 'Gaona Medina','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121050', 'name' => 'Ana Carol', 'last_name' => 'González López','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121190', 'name' => 'Sitlali', 'last_name' => 'Hernández Morales','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121057', 'name' => 'Lizbeth', 'last_name' => 'Hernández Rodríguez','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121063', 'name' => 'Jaqueline', 'last_name' => 'Hernández Sánchez','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121071', 'name' => 'Jovany ', 'last_name' => 'Juárez Romero','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121072', 'name' => 'Marco Antonio', 'last_name' => 'Landero Julián','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121082', 'name' => 'Laura Itzel', 'last_name' => 'Martínez Montiel','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121085', 'name' => 'Maribel ', 'last_name' => 'Máximo Guadalupe','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121143', 'name' => 'Zuleidy Stephany', 'last_name' => 'Ortíz Martínez','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121111', 'name' => 'Jazmin', 'last_name' => 'Reyes Hernández','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121114', 'name' => 'Joel ', 'last_name' => 'Rodrígo Santiago','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121118', 'name' => 'Karla Ivette', 'last_name' => 'Rojas Mora','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121120', 'name' => 'Marisela', 'last_name' => 'Romero de la Cruz','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121119', 'name' => 'Rocío', 'last_name' => 'Rosas Silverio','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121237', 'name' => 'Damaris Adeline', 'last_name' => 'Saltillo Muñoz','password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 10)->first()->students()->attach($insertedIds);

        /* 7b */
        $users =[
            ['studentId' => '20162121004', 'name' => 'Luis Orlando', 'last_name' => 'Águilar Zavaleta','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121149', 'name' => 'Areli', 'last_name' => 'Cárcamo Hernández','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121021', 'name' => 'Samantha Adnaee', 'last_name' => 'Carreón Mota','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121059', 'name' => 'Ericka ', 'last_name' => 'Hernández Gamino','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121060', 'name' => 'Angélica', 'last_name' => 'Hernández Hernández','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121061', 'name' => 'Victor Manuel ', 'last_name' => 'Hernández López','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121191', 'name' => 'Alicia ', 'last_name' => 'Hernández Rodríguez','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121070', 'name' => 'María del Rosario', 'last_name' => 'Jiménez Hernández','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121077', 'name' => 'Margarita', 'last_name' => 'López Ramírez','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121080', 'name' => 'David', 'last_name' => 'Luna Santos','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121293', 'name' => 'Kassandra Itzel', 'last_name' => 'Melgarejo Rodríguez','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121089', 'name' => 'María Fernanda', 'last_name' => 'Méndez Hernández','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121093', 'name' => 'Andrea ', 'last_name' => 'Mendoza Romero','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121097', 'name' => 'Consuelo Nohemi', 'last_name' => 'Navarro Hernández','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20152121067', 'name' => 'Alejandra Yazmín', 'last_name' => 'Pedraza Miranda','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121123', 'name' => 'Sofía Guadalupe', 'last_name' => 'Romero Velázquez','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121127', 'name' => 'Yatziry Julissa', 'last_name' => 'Ruiz Morales','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121129', 'name' => 'Gloria ', 'last_name' => 'Santos Julián','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121132', 'name' => 'Brenda', 'last_name' => 'Tirado Ruiz','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121138', 'name' => 'Dulce Carolina', 'last_name' => 'Zavaleta Ramírez','password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 11)->first()->students()->attach($insertedIds);

        /* 1a */
        $teacher = Teacher::firstOrCreate(['name' => 'JESÚS G. DÍAZ MELGAREJO']);
        Group::where('id', 1)->first()->teachers()->attach([$teacher->id => ['subject' => 'TUTORIAS']]);
        Group::where('id', 3)->first()->teachers()->attach([$teacher->id => ['subject' => 'INTRODUCCIÓN A LA PSICOLOGÍA']]);
        Group::where('id', 4)->first()->teachers()->attach([$teacher->id => ['subject' => 'INTRODUCCIÓN A LA PSICOLOGÍA']]);
        Group::where('id', 5)->first()->teachers()->attach([$teacher->id => ['subject' => 'PSICOLOGÍA SOCIAL: GRUPOS Y APRENDIZAJE']]);
        Group::where('id', 7)->first()->teachers()->attach([$teacher->id => ['subject' => 'PSICOLOGÍA SOCIAL: GRUPOS Y APRENDIZAJE']]);



        $teacher = Teacher::firstOrCreate(['name' => 'HECTOR SANCHEZ GUZMAN']);
        Group::where('id', 1)->first()->teachers()->attach([$teacher->id => ['subject' => 'EL ESTADO MEXICANO Y LOS PROYECTOS EDUCATIVOS (1857-1920)']]);
        Group::where('id', 3)->first()->teachers()->attach([$teacher->id => ['subject' => 'EL ESTADO MEXICANO Y LOS PROYECTOS EDUCATIVOS (1857-1920)']]);
        Group::where('id', 4)->first()->teachers()->attach([$teacher->id => ['subject' => 'EL ESTADO MEXICANO Y LOS PROYECTOS EDUCATIVOS (1857-1920)']]);


        $teacher = Teacher::firstOrCreate(['name' => 'CORNELIO BONILLA ROMERO']);
        Group::where('id', 1)->first()->teachers()->attach([$teacher->id => ['subject' => 'FILOSOFIA DE LA EDUCACIÓN 1']]);
        Group::where('id', 2)->first()->teachers()->attach([$teacher->id => ['subject' => 'FILOSOFIA DE LA EDUCACIÓN 2']]);
        Group::where('id', 4)->first()->teachers()->attach([$teacher->id => ['subject' => 'FILOSOFIA DE LA EDUCACIÓN']]);



        $teacher = Teacher::firstOrCreate(['name' => 'MA. DEL CARMEN MENDOZA OLIVARES']);
        Group::where('id', 1)->first()->teachers()->attach([$teacher->id => ['subject' => 'INTRODUCCIÓN A LA PSICOLOGÍA']]);
        Group::where('id', 2)->first()->teachers()->attach([$teacher->id => ['subject' => 'INTRODUCCIÓN A LA PSICOLOGÍA']]);
        Group::where('id', 5)->first()->teachers()->attach([$teacher->id => ['subject' => 'TUTORIAS']]);
        Group::where('id', 6)->first()->teachers()->attach([$teacher->id => ['subject' => 'PSICOLOGÍA SOCIAL: GRUPOS Y APRENDIZAJE']]);




        $teacher = Teacher::firstOrCreate(['name' => 'JESÚS RODRÍGUEZ JIMÉNEZ']);
        Group::where('id', 1)->first()->teachers()->attach([$teacher->id => ['subject' => 'INTRODUCCIÓN A LA PEDAGOGÍA']]);
        Group::where('id', 2)->first()->teachers()->attach([$teacher->id => ['subject' => 'INTRODUCCIÓN A LA PEDAGOGÍA']]);
        Group::where('id', 3)->first()->teachers()->attach([$teacher->id => ['subject' => 'INTRODUCCIÓN A LA PEDAGOGÍA']]);


        $teacher = Teacher::firstOrCreate(['name' => 'MA. DANAE HERNANDEZ LOPEZ']);
        Group::where('id', 1)->first()->teachers()->attach([$teacher->id => ['subject' => 'CIENCIA Y SOCIEDAD']]);
        Group::where('id', 2)->first()->teachers()->attach([$teacher->id => ['subject' => 'TUTORIAS']]);



        /* 1b */
        $teacher = Teacher::firstOrCreate(['name' => 'MARILÚ SESEÑA SÁNCHEZ']);
        Group::where('id', 2)->first()->teachers()->attach([$teacher->id => ['subject' => 'EL ESTADO MEXICANO Y LOS PROYECTOS EDUCATIVOS (1857-1920)']]);
        Group::where('id', 7)->first()->teachers()->attach([$teacher->id => ['subject' => 'TEORÍA PEDAGÓGICA CONTEMPORÁNEA']]);
        Group::where('id', 8)->first()->teachers()->attach([$teacher->id => ['subject' => 'TEORÍA CURRICULAR']]);
        Group::where('id', 9)->first()->teachers()->attach([$teacher->id => ['subject' => 'TEORÍA CURRICULAR']]);




        $teacher = Teacher::firstOrCreate(['name' => 'MANUELA PALAFOX CARDOSO']);
        Group::where('id', 2)->first()->teachers()->attach([$teacher->id => ['subject' => 'CIENCIA Y SOCIEDAD']]);
        Group::where('id', 3)->first()->teachers()->attach([$teacher->id => ['subject' => 'CIENCIA Y SOCIEDAD']]);
        Group::where('id', 4)->first()->teachers()->attach([$teacher->id => ['subject' => 'CIENCIA Y SOCIEDAD']]);




        /* 1c */
        $teacher = Teacher::firstOrCreate(['name' => 'JUDITH SALAZAR MURRIETA']);
        Group::where('id', 3)->first()->teachers()->attach([$teacher->id => ['subject' => 'TUTORIAS']]);
        Group::where('id', 8)->first()->teachers()->attach([$teacher->id => ['subject' => 'COMUNICACIÓN, CULTURA Y EDUCACIÓN']]);
        Group::where('id', 9)->first()->teachers()->attach([$teacher->id => ['subject' => 'COMUNICACIÓN, CULTURA Y EDUCACIÓN']]);



        $teacher = Teacher::firstOrCreate(['name' => 'PAULETTE OSORIO HERNANDEZ']);
        Group::where('id', 3)->first()->teachers()->attach([$teacher->id => ['subject' => 'FILOSOFIA DE LA EDUCACIÓN']]);
        Group::where('id', 10)->first()->teachers()->attach([$teacher->id => ['subject' => 'CURSO O SEMINARIO OPTATIVO 7-II']]);
        Group::where('id', 11)->first()->teachers()->attach([$teacher->id => ['subject' => 'CURSO O SEMINARIO OPTATIVO 7-II']]);

        /* 1d */
        $teacher = Teacher::firstOrCreate(['name' => 'MA. MAGDALENA TORRES VILLA']);
        Group::where('id', 4)->first()->teachers()->attach([$teacher->id => ['subject' => 'TUTORIAS']]);
        Group::where('id', 10)->first()->teachers()->attach([$teacher->id => ['subject' => 'CURSO O SEMINARIO OPTATIVO 7- I']]);
        Group::where('id', 11)->first()->teachers()->attach([$teacher->id => ['subject' => 'CURSO O SEMINARIO OPTATIVO 7- I']]);




        $teacher = Teacher::firstOrCreate(['name' => 'JULIO CÉSAR CONTRERAS ROMANO']);
        Group::where('id', 4)->first()->teachers()->attach([$teacher->id => ['subject' => 'INTRODUCCIÓN A LA PEDAGOGÍA']]);
        Group::where('id', 6)->first()->teachers()->attach([$teacher->id => ['subject' => 'TEORÍA PEDAGÓGICA CONTEMPORÁNEA']]);



        /* 3a */
        $teacher = Teacher::firstOrCreate(['name' => 'GONZALO MARQUEZ GONZALEZ']);
        Group::where('id', 5)->first()->teachers()->attach([$teacher->id => ['subject' => 'CRISIS Y EDUCACIÓN EN EL MÉXICO ACTUAL (1968-1990)']]);
        Group::where('id', 6)->first()->teachers()->attach([$teacher->id => ['subject' => 'CRISIS Y EDUCACIÓN EN EL MÉXICO ACTUAL (1968-1990)']]);
        Group::where('id', 7)->first()->teachers()->attach([$teacher->id => ['subject' => 'CRISIS Y EDUCACIÓN EN EL MÉXICO ACTUAL (1968-1990)']]);





        $teacher = Teacher::firstOrCreate(['name' => 'OLIVER MORA JUAREZ']);
        Group::where('id', 5)->first()->teachers()->attach([$teacher->id => ['subject' => 'ASPECTOS SOCIALES DE LA EDUCACIÓN']]);
        Group::where('id', 6)->first()->teachers()->attach([$teacher->id => ['subject' => 'ASPECTOS SOCIALES DE LA EDUCACIÓN']]);
        Group::where('id', 8)->first()->teachers()->attach([$teacher->id => ['subject' => 'T U T O R I AS']]);




        $teacher = Teacher::firstOrCreate(['name' => 'VICTOR MANUEL CASTILLO VERA']);
        Group::where('id', 5)->first()->teachers()->attach([$teacher->id => ['subject' => 'TEORÍA PEDAGÓGICA CONTEMPORÁNEA']]);
        Group::where('id', 6)->first()->teachers()->attach([$teacher->id => ['subject' => 'TUTORIAS']]);
        Group::where('id', 8)->first()->teachers()->attach([$teacher->id => ['subject' => 'INVESTIGACIÓN EDUCATIVA I']]);
        Group::where('id', 9)->first()->teachers()->attach([$teacher->id => ['subject' => 'INVESTIGACIÓN EDUCATIVA I']]);



        $teacher = Teacher::firstOrCreate(['name' => 'AGUSTIN LIMON PEREZ']);
        Group::where('id', 5)->first()->teachers()->attach([$teacher->id => ['subject' => 'ESTADÍSTICA DESCRIPTIVA EN EDUCACIÓN']]);
        Group::where('id', 6)->first()->teachers()->attach([$teacher->id => ['subject' => 'ESTADÍSTICA DESCRIPTIVA EN EDUCACIÓN']]);
        Group::where('id', 7)->first()->teachers()->attach([$teacher->id => ['subject' => 'ESTADÍSTICA DESCRIPTIVA EN EDUCACIÓN']]);
        /* 3c */
        $teacher = Teacher::firstOrCreate(['name' => 'LETICIA TORRES LÓPEZ']);
        Group::where('id', 7)->first()->teachers()->attach([$teacher->id => ['subject' => 'TUTORIAS']]);


        $teacher = Teacher::firstOrCreate(['name' => 'MA. TEODORA ALONSO MANZANO']);
        Group::where('id', 7)->first()->teachers()->attach([$teacher->id => ['subject' => 'ASPECTOS SOCIALES DE LA EDUCACIÓN']]);

        /* 5a */
        $teacher = Teacher::firstOrCreate(['name' => 'ROSA MARIA GALINDO LOPEZ']);
        Group::where('id', 8)->first()->teachers()->attach([$teacher->id => ['subject' => 'ORGANIZACIÓN Y GESTIÓN DE INSTITUCIONES EDUCATIVAS']]);
        Group::where('id', 9)->first()->teachers()->attach([$teacher->id => ['subject' => 'ORGANIZACIÓN Y GESTIÓN DE INSTITUCIONES EDUCATIVAS']]);


        $teacher = Teacher::firstOrCreate(['name' => 'MARTÍN CUAUTLE CÁRCAMO']);
        Group::where('id', 8)->first()->teachers()->attach([$teacher->id => ['subject' => 'BASES DE LA ORIENTACIÓN EDUCATIVA']]);
        Group::where('id', 9)->first()->teachers()->attach([$teacher->id => ['subject' => 'BASES DE LA ORIENTACIÓN EDUCATIVA']]);


        /* 5b */
        $teacher = Teacher::firstOrCreate(['name' => 'BLANCA NORMA IBARRA TEPEPA']);
        Group::where('id', 9)->first()->teachers()->attach([$teacher->id => ['subject' => 'T U T O R I AS']]);


        /* 7a */
        $teacher = Teacher::firstOrCreate(['name' => 'JULIO CESAR CONTRERAS ROMANO']);
        Group::where('id', 10)->first()->teachers()->attach([$teacher->id => ['subject' => 'CURSO O SEMINARIO OPTATIVO 7-III']]);
        Group::where('id', 11)->first()->teachers()->attach([$teacher->id => ['subject' => 'CURSO O SEMINARIO OPTATIVO 7-III']]);


        $teacher = Teacher::firstOrCreate(['name' => 'ISRAEL AGUILAR LANDERO']);
        Group::where('id', 10)->first()->teachers()->attach([$teacher->id => ['subject' => 'SEMINARIO DE TESIS    I']]);
        Group::where('id', 11)->first()->teachers()->attach([$teacher->id => ['subject' => 'SEMINARIO DE TESIS    I']]);

    }
}
