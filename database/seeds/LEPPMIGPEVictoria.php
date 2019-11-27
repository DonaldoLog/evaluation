<?php

use Illuminate\Database\Seeder;
use App\Models\Career;
use App\Models\Group;
use App\Models\Teacher;
use App\User;

class LEPPMIGPEVictoria extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Career::insert([
            ['id' => 10, 'name' => 'LEPPMI G. VICTORIA', 'type' => 1]
        ]);

        Group::insert([
            ['id' => 62, 'name' => 'PREESCOLAR', 'careerId' => 10],
            ['id' => 63, 'name' => 'PRIMARIA', 'careerId' => 10],
            ['id' => 64, 'name' => '3', 'careerId' => 10],
            ['id' => 65, 'name' => '5', 'careerId' => 10],
            ['id' => 66, 'name' => '7', 'careerId' => 10],
        ]);

        /* PREESCOLAR */
        $users =[
            ['studentId' => '20192121175', 'name' => 'ESPIRITU REYES FATIMA GUADALUPE','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121304', 'name' => 'HERNANDEZ ROSARIO MARIA JOSEFA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121466', 'name' => 'MINERO ZAPEDA MARIA YERALDIN','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121474', 'name' => 'MONTIEL BURGOS KARLA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121519', 'name' => 'ORTIZ LÓPEZ ROSA GUADALUPE','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121552', 'name' => 'PINEDA LÓPEZ SONIA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121618', 'name' => 'ROMERO HERNANDEZ MERIA GUADALUPE','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121662', 'name' => 'SEDAS ROSAS LUCIA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121704', 'name' => 'VAZQUEZ MIRON MARÍA YULIANA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121724', 'name' => 'ZAPATA HERNANDEZ BRENDA ADELINA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121727', 'name' => 'ZAPEDA CABALLERO FATIMA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 62)->first()->students()->attach($insertedIds);

           /* PRIMARIA */
           $users =[
            ['studentId' => '20192121009', 'name' => 'AGUILAR VAZQUEZ ISRAEL','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121019', 'name' => 'ALVAREZ CORTES SUSANA REMEDIOS','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121033', 'name' => 'ARGUELLO HERNANDEZ URIEL','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121071', 'name' => 'BRIONES GONZALEZ YENIFER','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121074', 'name' => 'BURGOS MONTIEL FRANCISCO EMANUEL','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121107', 'name' => 'CASTILLO COLORADO BERENICE','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121114', 'name' => 'CHIMAL OLMOS MARLEN','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121125', 'name' => 'CORONA TORRES JUANA MARGARITA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121134', 'name' => 'CUELLAR PEREZ  JUANA MARGARITA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121135', 'name' => 'CUELLAR REYES GERARDO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121154', 'name' => 'DIAZ GARCIA CRISTOPHER','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121168', 'name' => 'DZUL MOLGADO JESUS MANUEL','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121170', 'name' => 'ENRIQUEZ LUNA GABRIEL','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121226', 'name' => 'GOMEZ FLORES BRENDA GUADALUPE','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121263', 'name' => 'HERNANDEZ CARMONA ALEJANDRA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121280', 'name' => 'HERNANDEZ HERNANDEZ MARIA GUADALUPE','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121326', 'name' => 'ISLAS ESPINOZA ALEJANDRA IVET','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121327', 'name' => 'ISLAS RIVERA JULIÁN','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121378', 'name' => 'LÓPEZ NAVA EFRAÍN','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121398', 'name' => 'MADERO OCHOA DULCE MARÍA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121475', 'name' => 'MONTIEL GARCÍA ARLET VERÓNICA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121522', 'name' => 'ORTÍZ ORTÍZ AMAIRANY','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121523', 'name' => 'ORTÍZ REYES JOSE ALEJANDRO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121524', 'name' => 'ORTÍZ REYES JOSE HERIBERTO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121534', 'name' => 'PEÑA HERNANDEZ YENIFER','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121538', 'name' => 'PEREZ CAMACHO MARITZA ERIKA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121576', 'name' => 'REYES ELOTL GUADALUPE','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121591', 'name' => 'RIVERA LÓPEZ MARÍA FERNANDA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121593', 'name' => 'RIVERA ORTIZ JONATHAN','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121627', 'name' => 'SABAEZ MEDEL LESLIE RACHELL','password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 63)->first()->students()->attach($insertedIds);


         /* 3 */
         $users =[
            ['studentId' => '20182121018', 'name' => 'ALVAREZ JUAREZ LIDIA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121032', 'name' => 'ARGUELLO ARGUELLO CRISTIAN ','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121049', 'name' => 'BERNAL ACOSTA BRITANIA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121075', 'name' => 'CASAS ZEPEDA MARIA ANTONIA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121120', 'name' => 'DIAZ ZEPEDA MARIA ANTONIA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121151', 'name' => 'FERNANDEZ HUIYEXTAHUAC FERNANDO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121172', 'name' => 'GARCIA CUELLAR CRISTHIAN JESUS','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121188', 'name' => 'GARCIA SEDAS MARICARMEN','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121205', 'name' => 'GONZALEZ ROMAN LOURDES CARMEN','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121219', 'name' => 'HERNANDEZ CASAS ABIGAHIL','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121221', 'name' => 'HERNANDEZ FLORES ALEJANDRA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121282', 'name' => 'LÓPEZ MARTINEZ JONATHAN ELIHU','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121293', 'name' => 'LÓPEZ UBALDO NAZARIO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121376', 'name' => 'MURRIETA PEREZ NAZARIO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121377', 'name' => 'NAHUACATL HERNANDEZ MARCO ANTONIO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121473', 'name' => 'ROSAS RODRIGUEZ VANESSA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121562', 'name' => 'ZAPATA REYES LAURA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 64)->first()->students()->attach($insertedIds);


         /* 5 */
         $users =[
            ['studentId' => '20172121055', 'name' => 'CHIMAL GALVAN REYNA CONSUELO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121062', 'name' => 'CONTRERAS MENDOZA DANIA MONSERRAT','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121063', 'name' => 'CONTRERAS MENDOZA MARIA DE LOS ANGELES','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121067', 'name' => 'CORTES GOMEZ MARIA DEL ROSARIO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121088', 'name' => 'DIAZ HERNANDEZ MARIA DEL CARMEN','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20152121161', 'name' => 'GARCIA SANTOS ARACELI','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121128', 'name' => 'GONZALEZ DIAZ EDITH','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121131', 'name' => 'GONZALEZ LIMA IRMA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121150', 'name' => 'HERNANDEZ CASTILLO MANUEL','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121187', 'name' => 'HERNANDEZ LÓPEZ GUADALUPE','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121217', 'name' => 'LOPEZ SANCHEZ SANDRA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121232', 'name' => 'MADERO GARRIDO JOSE ANTONIO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121261', 'name' => 'MEDINA BAUTISTA FLOR YARELI','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121291', 'name' => 'NAVA DE GABRIEL AYLIN','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121292', 'name' => 'NERI FLORES WENDY SELENA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121311', 'name' => 'PEDRAZA CABALLERO ANDREA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121328', 'name' => 'PLATAS ESTEBAN MARISOL','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121368', 'name' => 'RODRIGUEZ ORTEGA TANIA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121379', 'name' => 'ROSAS DE FLORENCIO LEONOR','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121393', 'name' => 'SANCHEZ HERNANDEZ MARIA VICTORIA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121396', 'name' => 'SANCHEZ SEDAS JESUS','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121408', 'name' => 'SESEÑA VAZQUEZ SULEIDVI ANADAI','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121433', 'name' => 'VAZQUEZ ROMERO TELMA GUADALUPE','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121455', 'name' => 'ZEPEDA ROMERO TELMA GUADALUPE','password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 65)->first()->students()->attach($insertedIds);


         /* 7 */
         $users =[
            ['studentId' => '20162121154', 'name' => 'COSCATL NAHUACATL MARIA HERMINIA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121173', 'name' => 'GARCIA SANTOS SANDRA LUZ','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121056', 'name' => 'GUTIERREZ GARCIA MARIA GUADALUPE','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121068', 'name' => 'HUERTA ZAVALA CARMEN','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20152121166', 'name' => 'LORENZO MIRON MARIA GUADALUPE','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121213', 'name' => 'NAVA MONTIEL NORMA GUADALUPE','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121224', 'name' => 'QUINTO GUTIERREZ MARIA DEL CARMEN','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121230', 'name' => 'RODRIGUEZ CUELLAR ALIN CRISTINA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121232', 'name' => 'RODRIGUEZ RAMIREZ JOSE MANUEL','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121234', 'name' => 'RODRIGUEZ SANCHEZ SILVIA KARINA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121126', 'name' => 'ROSAS LÓPEZ MARICRUZ','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121245', 'name' => 'SOLIS GOMEZ ANA LAURA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 66)->first()->students()->attach($insertedIds);
    }
}
