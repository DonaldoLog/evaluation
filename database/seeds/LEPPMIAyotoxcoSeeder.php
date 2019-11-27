<?php

use Illuminate\Database\Seeder;
use App\Models\Career;
use App\Models\Group;
use App\Models\Teacher;
use App\User;

class LEPPMIAyotoxcoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Career::insert([
            ['id' => 9, 'name' => 'LEPPMI AYOTOXCO', 'type' => 1]
        ]);

        Group::insert([
            ['id' => 55, 'name' => 'PREESCOLAR', 'careerId' => 9],
            ['id' => 56, 'name' => 'PRIMARIA', 'careerId' => 9],
            ['id' => 57, 'name' => '3A', 'careerId' => 9],
            ['id' => 58, 'name' => '3B', 'careerId' => 9],
            ['id' => 59, 'name' => '5A', 'careerId' => 9],
            ['id' => 60, 'name' => '5B', 'careerId' => 9],
            ['id' => 61, 'name' => '7', 'careerId' => 9],
        ]);

        /* PREESCOLAR */
        $users =[
            ['studentId' => '20192121087', 'name' => 'CAMPOS MARTINEZ MARTHA MARIEL','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121338', 'name' => 'JIMENEZ GONZALEZ MARTHA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121458', 'name' => 'MENDEZ TIBURCIO BRENDA OYUKY','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121478', 'name' => 'MORA SANCHEZ ALEJANDRA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121479', 'name' => 'MORA SANCHEZ MIRIAM IVET','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121653', 'name' => 'SANTIAGO SANCHEZ GABRIELA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121695', 'name' => 'VAZQUEZ GARCÍA LUIS ANGEL','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121709', 'name' => 'VAZQUEZ SALAS GUADALUPE','password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 55)->first()->students()->attach($insertedIds);

        /* PRIMARIA */
        $users =[
            ['studentId' => '20192121029', 'name' => 'AQUINO SALAZAR JOSE MANUEL','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121173', 'name' => 'ESPINOZA SALAZAR ANGEL GUSTAVO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121208', 'name' => 'GARCIA DE LUNA GABINO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121210', 'name' => 'GARCIA GARCIA EDUARDO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121219', 'name' => 'GARCIA RODRIGUEZ SERGIO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121220', 'name' => 'GARCIA ROJAS DULCE MARÍA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121227', 'name' => 'GOMEZ MENDEZ IMELDA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121235', 'name' => 'GONZALEZ GONZALEZ ULISES','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121243', 'name' => 'GREGORIO RAMOS MARIA ANTONIA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121275', 'name' => 'HERNANDEZ HERNANDEZ BLANCA AZUCENA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121281', 'name' => 'HERNANDEZ HERNANDEZ NEREYDA SARETH','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121283', 'name' => 'HERNANDEZ HERNANDEZ REYNA ELIZABETH','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121307', 'name' => 'HERNANDEZ SANTOS FELIX','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121342', 'name' => 'JUAREZ FAJARDO JIMENA GUADALUPE','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121376', 'name' => 'LOPEZ LEAL SELENE','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121454', 'name' => 'MENDEZ HERNANDEZ ISABEL','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121482', 'name' => 'MORALES HERNANDEZ VICTOR MANUEL','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121486', 'name' => 'MORALES VARGAS LAURA NATALY','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121535', 'name' => 'PERALTA VAZQUEZ NELSY','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121549', 'name' => 'PEREZ VALENCIA JOSETH','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121649', 'name' => 'SANTES VEGA MIGUEL','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121651', 'name' => 'SANTIAGO GARCIA OSWALDO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121676', 'name' => 'TIBURCIO LUNA JESUS','password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 56)->first()->students()->attach($insertedIds);

        /* 3a */
        $users =[
            ['studentId' => '20182121030', 'name' => 'AREVALO JIMENEZ ADALEYDI','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121093', 'name' => 'CORTES LOBATO EDGAR ODIN','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121116', 'name' => 'DE LUNA SERRANO FERNANDA ODET','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121117', 'name' => 'DIAZ HERNANDEZ MARCO ANTONIO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121175', 'name' => 'ESPINOZA PEREZ ROBERTO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121178', 'name' => 'GARCIA GOMEZ AGUSTINA ','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121183', 'name' => 'GARCIA LOPEZ LIZBET SOLEDAD','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121197', 'name' => 'GARCIA RAMOS PEDRO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121206', 'name' => 'GOMEZ VICENE HECTOR EFRAÍN','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121187', 'name' => 'GONZALEZ SIMÓN LUIS MIGUEL','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121284', 'name' => 'JIMENEZ OLMEDO VICTOR MANUEL','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121361', 'name' => 'LOPEZ MENDEZ LUIS ABDIAS','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            //['studentId' => '20182121366', 'name' => 'MORA GUZMAN JUAN CARLOS','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121366', 'name' => 'MORALES PEREZ PERLA YASMIN','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121374', 'name' => 'MORENO SANCHEZ ELISA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121406', 'name' => 'PERALTA ROJAS KATY NATALY','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121432', 'name' => 'RAMIREZ VEGA AYADIRE','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20152121072', 'name' => 'REYES MENDEZ GUILLERMINA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121466', 'name' => 'ROMERO RAMOS JUAN CARLOS','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121479', 'name' => 'SALAZAR BAUTISTA LUCY ARACELI','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121486', 'name' => 'SANCHEZ GARCIA VICTOR HUGO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121499', 'name' => 'SANTIAGO SANCHEZ JUAN JOSÉ','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121511', 'name' => 'SIMBRON DE LA CRUZ GUSTAVO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121544', 'name' => 'VEGA HERNANDEZ LETICIA ','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121560', 'name' => 'ZAMORA HERNANDEZ BEATRIZ','password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 57)->first()->students()->attach($insertedIds);

        /* 3b */
        $users =[
            ['studentId' => '20182121019', 'name' => 'ALVAREZ LUNA OCCELLY NOHEMI','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121066', 'name' => 'CARLOS VARGAS BEATRIZ','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121068', 'name' => 'CARMONA GARCIA KATIA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121094', 'name' => 'CORTES LOPEZ LEONARDO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121099', 'name' => 'CRUZ DE LA CRUZ MARILU','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121077', 'name' => 'DE LA CRUZ AGUSTIN JONATHAN','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121114', 'name' => 'DE LUNA DE GAONA ELENA YAKILIN','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121136', 'name' => 'ESPINOZA DE GAONA ANGELA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121096', 'name' => 'FAJARDO JUAREZ ERIK ALAN','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121145', 'name' => 'FAJARDO RAMIREZ BLADIMIR','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121168', 'name' => 'GAONA RIVERA LUIS ANGEL','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121182', 'name' => 'GARCIA RAMOS GIOVANI BONIFACIO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121189', 'name' => 'GARCIA SIMBRON NOE ','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121198', 'name' => 'GONZALEZ CHAVARRÍA DENYS','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121213', 'name' => 'GUEVARA VEGA DINA MARÍA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121252', 'name' => 'JERONIMO ARROYO SANDRA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121289', 'name' => 'LÓPEZ ORTIGOZA BLANCA ABIGAIL','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121365', 'name' => 'MORALES MENDEZ MIGUEL ANGEL','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121388', 'name' => 'OLMOS VAZQUEZ JOSÉ ANGEL','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121401', 'name' => 'PATIÑO JUAREZ HUMBERTO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121414', 'name' => 'PEREZ XOCHIHUA EDGAR ARTURO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121433', 'name' => 'RAMIREZ VEGA LAURA MARÍA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121482', 'name' => 'SALAZAR CORTES ALMA LUZ ','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121496', 'name' => 'SANTES GARCÍA VICTOR','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121498', 'name' => 'SANTIAGO GONZALEZ ESTELA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121501', 'name' => 'SANTIAGO VAZQUEZ LISSETH','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121553', 'name' => 'VELAZQUEZ VAZQUEZ ELIZABETH','password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 58)->first()->students()->attach($insertedIds);

        /* 5a */
        $users =[
            ['studentId' => '20172121036', 'name' => 'CANO GARCIA ANDREA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121056', 'name' => 'CHIMAL GOMEZ JOSE GERARDO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121071', 'name' => 'CRUZ CARBAJAL BIVIANA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121095', 'name' => 'ESPINOZA VEGA BRUNO IRVING','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121111', 'name' => 'GARCIA GARCIA ANGIE YOANA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121112', 'name' => 'GARCIA LAUREANO MARIBEL','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121113', 'name' => 'GARCIA LOPEZ ABEL','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121115', 'name' => 'GARCIA MORALES ANGEL JAIR','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121142', 'name' => 'GRANDE CAMPO TSASNA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121175', 'name' => 'HIDALGO MARTINEZ JUANA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121177', 'name' => 'HUERTA HERNANDEZ MARIA SILVIA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121188', 'name' => 'JIMENEZ VEGA KARLA LILIANA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121192', 'name' => 'JUAREZ OLMOS ZAIRA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121201', 'name' => 'LEÓN RANGEL RODRIGO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121203', 'name' => 'LIBRADO HERNANDEZ MARIA GUADALUPE','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121209', 'name' => 'LÓPEZ FRANCISCO JAQUELIN','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121238', 'name' => 'MARTIN GARCIA NAYELY','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            //['studentId' => '20192121307', 'name' => 'PARRA GONZALEZ KARINA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121313', 'name' => 'PERALTA JIMENEZ ANA LUISA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121324', 'name' => 'PEREZ MUÑOZ LILIANA ELIZABETH','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            //['studentId' => '20172121341', 'name' => 'RAMIREZ GARCIA ILSE JOSELINE','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121392', 'name' => 'SANCHEZ ESPINOZA OFELIA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121419', 'name' => 'URRUTIA MACIN SHARIS ALEJANDRA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121420', 'name' => 'VALDEZ AGUIRRE IVAN','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121423', 'name' => 'VALERIO BARRIENTOS DULCE YANET','password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 59)->first()->students()->attach($insertedIds);

        /* 5b */
        /* $users =[

        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 60)->first()->students()->attach($insertedIds); */


        /* 7 */
        $users =[
            ['studentId' => '20162121141', 'name' => 'ANTONIO LUIS CLARA DOLORES','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121144', 'name' => 'ARROYO VAZQUEZ YENIFER STEFANIA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121166', 'name' => 'GAONA ESPINOZA ALMA DULCE','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121172', 'name' => 'GARCIA MENDEZ MARIO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121175', 'name' => 'GOMEZ MENDEZ JOSE ARMANDO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121181', 'name' => 'HERNANDEZ ALVAREZ JIAINAMAGALY','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20152121165', 'name' => 'JIMENEZ NEPAMUCENO CARLOS FELIPE','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121195', 'name' => 'JUAN GOMEZ EVA LUCIA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121075', 'name' => 'LÓPEZ PEREZ ISAEBL','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121300', 'name' => 'MEDINA ESPINOZA JESSICA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121299', 'name' => 'MEDINA VICENTE FABIOLA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121208', 'name' => 'MENDEZ LOPEZ MARISELA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121214', 'name' => 'OLMEDO JIMENE ANTONIO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121215', 'name' => 'ORDUÑA JUAREZ TANIA LIZBETH','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121219', 'name' => 'PERALTA ROJAS ELIZABETH','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121241', 'name' => 'SANTOS LUCAS SOLEDAD','password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 61)->first()->students()->attach($insertedIds);
    }
}
