<?php

use Illuminate\Database\Seeder;
use App\Models\Career;
use App\Models\Group;
use App\Models\Teacher;
use App\User;

class LEPPMIHueyapan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Career::insert([
            ['id' => 12, 'name' => 'LEPPMI HUEYAPAN', 'type' => 1]
        ]);

        Group::insert([
            ['id' => 75, 'name' => 'A PREESCOLAR', 'careerId' => 12],
            ['id' => 76, 'name' => 'A PRIMARIA', 'careerId' => 12],
            ['id' => 77, 'name' => 'B PREESCOLAR', 'careerId' => 12],
            ['id' => 78, 'name' => 'B PRIMARIA', 'careerId' => 12],
            ['id' => 79, 'name' => '3A', 'careerId' => 12],
            ['id' => 80, 'name' => '3B', 'careerId' => 12],
            ['id' => 81, 'name' => '5', 'careerId' => 12],
            ['id' => 82, 'name' => '7', 'careerId' => 12],
        ]);

        /* APREESCOLAR */
        $users =[
            ['studentId' => '20192121118', 'name' => 'CLARA AYERDE BERENICE','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121146', 'name' => 'DE LA CRUZ MARTÍNEZ SANTA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121411', 'name' => 'MARTINEZ AYERDE ALBERTHA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121412', 'name' => 'MARTINEZ AYERDE MARCELINA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121419', 'name' => 'MARTINEZ JULIAN MARIBEL','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121487', 'name' => 'MORELOS RIVERA CONCEPCIÓN','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121581', 'name' => 'REYES LOZADA PIEDAD','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121650', 'name' => 'SANTIAGO FELICIANO CRISTINA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 75)->first()->students()->attach($insertedIds);

        /* A PRIMARIA */
        $users =[
            ['studentId' => '20192121008', 'name' => 'AGUILAR MARTINEZ RENE','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121037', 'name' => 'AURELIO BIBIANO MARIA MAGDALENA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121082', 'name' => 'CALDERON PATRICIO DULCE JOSELIN','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121115', 'name' => 'CHINO VALENTIN MARIA BEATRIZ','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121186', 'name' => 'FILOMENO MARTINEZ GLORIA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121199', 'name' => 'GALINDO TRINIDAD AUGUSTO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121279', 'name' => 'HERNANDEZ HERNANDEZ JESSICA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121297', 'name' => 'HERNANDEZ PARRA NEXTOR','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121298', 'name' => 'HERNANDEZ PRADO GUADALUPE','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            //['studentId' => '20192121319', 'name' => 'HIDALGO DIAZ RAUL','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            //['studentId' => '20192121320', 'name' => 'JAIME AGUSTIN ANDRES','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121330', 'name' => 'LANDERO REYES DIANA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121352', 'name' => 'LINO BIVIANO MARIA DEL CARMEN','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121363', 'name' => 'LINO TORIBIO MARIA DEL CARMEN','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121364', 'name' => 'LOZADA DE LA CRUZ ANDREA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121384', 'name' => 'LUCIANO RAMOS LOURDES','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121435', 'name' => 'MARTINEZ URIARTE JAQUELINE','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121436', 'name' => 'MARTINEZ URIARTE JUAN MANUEL','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121463', 'name' => 'MESTIZA MARCOS EMETERIO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121501', 'name' => 'NICOLÁS DIAZ GUADALUPE ELIZABETH','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121550', 'name' => 'PERFECTO SIMON MARCO ANTONIO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121631', 'name' => 'SALAS LUNA ERIKA YANETH','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121636', 'name' => 'SANCHEZ BIBIANO ROSA ISELA ','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121705', 'name' => 'VAZQUEZ OLMOS RICARDO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121714', 'name' => 'VELAZQUEZ ROSAS ANAYELI','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121726', 'name' => 'ZARCO FLORES DULCE LIZBETH','password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 76)->first()->students()->attach($insertedIds);

        /* B PRESCOLAR */
        $users =[
            ['studentId' => '20192121185', 'name' => 'FILOMENO ALVARADO ANDREA ARELY','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121287', 'name' => 'HERNANDEZ JACINTO FRANCISCO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121291', 'name' => 'HERNANDEZ MARQUEZ BRENDA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121349', 'name' => 'JUAREZ VAZQUEZ MEDISSON GUADALUPE','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121388', 'name' => 'LOZADA VENTURA GUADALUPE','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121395', 'name' => 'LUNA SALVADOR ARELY','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121396', 'name' => 'LUNA SALVADOR NAYELI','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121612', 'name' => 'ROMAN ENCARNACIÓN JAQUELINE','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121720', 'name' => 'VIVEROS VAZQUEZ ANA CRISTINA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 77)->first()->students()->attach($insertedIds);

         /* B primaria */
         $users =[
            ['studentId' => '20192121123', 'name' => 'CONTRERAS PALESTINA KARINA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121142', 'name' => 'DE LA CRUZ CANDELARIO ALEJANDRO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121229', 'name' => 'GOMEZ ROSAS ELVIRA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121251', 'name' => 'GUTIERREZ MARCELO BRAYAN','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121270', 'name' => 'HERNANDEZ DÍAZ ADELA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121285', 'name' => 'HERNANDEZ HERRERA MIRIAM','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121309', 'name' => 'HERNANDEZ TADEO MERCEDES','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121321', 'name' => 'HUERTA GUZMAN LUCIA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121328', 'name' => 'JACOBO DE LA CRUZ FERNANDEO ALBERTO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121399', 'name' => 'MARCELINO HERNANDEZ VIRIDIANA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121418', 'name' => 'MARTINEZ JIMENEZ MARIA GUADALUPE','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121423', 'name' => 'MARTINEZ MARTINEZ MIGUEL','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121437', 'name' => 'MATEO FLORES LILIANA ISABEL','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121440', 'name' => 'MATEO MARTINEZ JUAN MANUEL','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121441', 'name' => 'MATEO TRINIDAD SANDRA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121462', 'name' => 'MENESES SANTOS REYNALDA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121477', 'name' => 'MORA CESAREO GLORIA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121532', 'name' => 'PARRA VILLA GUADALUPE','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121568', 'name' => 'RAMOS SANTOS ROSA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121599', 'name' => 'RODRIGUEZ DOLORES FRANCISCO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121637', 'name' => 'SANCHEZ FLORES ALAN','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121657', 'name' => 'SANTOS HERNANDEZ MARIBEL','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121679', 'name' => 'TORIBIO ALEMAN EDUARDO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 78)->first()->students()->attach($insertedIds);

        /* 3a */
        $users =[
            ['studentId' => '20182121101', 'name' => 'CRUZ HERNANDEZ MARTHA ','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121112', 'name' => 'DE LA CRUZ SANTOS CAROLINA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121144', 'name' => 'FAJARDO HILARIO FLOR LIZETH','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121160', 'name' => 'FLORES ORTEGA YANETH','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121164', 'name' => 'FRANCISCO ROMERO VICTORIA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121165', 'name' => 'FUENTES GUTIERREZ RICARDO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121173', 'name' => 'GARCIA DURAN QUETZAL YARAZET','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121235', 'name' => 'HERNANDEZ POCHOT ALEXANDRA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121242', 'name' => 'HERNANDEZ VAZQUEZ JULIO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121244', 'name' => 'HERNANDEZ VIÑALES ARACELI','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121312', 'name' => 'LOPEZ MARTÍNEZ  VICTOR MANUEL','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            //['studentId' => '20182121318', 'name' => 'MANCILLA SILVERIO MARIA EUGENIA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121318', 'name' => 'MARCOS SANTOS LIZBETH ','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121326', 'name' => 'MARTINEZ BAUTISTA ELIAS','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121370', 'name' => 'MORELOS LOZADA JOSEFINA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121402', 'name' => 'PAULINO LOPEZ MARY CARMEN','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121459', 'name' => 'ROMAN VENTURA MARIA DEL PILAR','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121469', 'name' => 'ROSALES BAUTISTA JULIA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121493', 'name' => 'SANCHEZ VALERIO DAYAN','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121536', 'name' => 'VAZQUEZ ARENAS ARELY','password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 79)->first()->students()->attach($insertedIds);


        /* 3b */
        $users =[
            ['studentId' => '20182121009', 'name' => 'AGUSTIN VALERIO RODRIGO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121053', 'name' => 'CABRERA ANTONIO PABLO ','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121079', 'name' => 'CASTILLO MARTINEZ ADRIANA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121092', 'name' => 'CORTES AYERDE MANUEL','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121155', 'name' => 'FILOMENO MARIANO CECILIA ','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121228', 'name' => 'HERNANDEZ JACINTO ADRIANA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121275', 'name' => 'LIMON GARCIA MISAEL','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121296', 'name' => 'LOZADA JIMENEZ GUADALUPE','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121364', 'name' => 'MORALES MAZA ASUNCIÓN','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121380', 'name' => 'NAPOLEON GUILLERMO HECTOR','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121440', 'name' => 'RAMOS BAUTISTA CECILIA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121465', 'name' => 'ROMERO MATEO CARMEN MIREYA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121566', 'name' => 'ROSAS AURELIO SERGIO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121505', 'name' => 'SANTOS ORTIZ DYAZMIN','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121521', 'name' => 'TORIBIO DÍAZ DULCE MARIA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121524', 'name' => 'TRINIDAD HERNANDEZ MAIBELYNE','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121535', 'name' => 'VARONA MAZA JUAN','password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 80)->first()->students()->attach($insertedIds);

         /* 5a */
         $users =[
            ['studentId' => '20172121040', 'name' => 'CARMONA ARELLANO PRUDENCIA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '17696931', 'name' => 'DE LA CRUZ BASILIO SERGIO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            //['studentId' => '20172121079', 'name' => 'DE LA CRUZ MENDEZ DULCE ARELI','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121080', 'name' => 'DE LA CRUZ POZADAS LOURDES','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121124', 'name' => 'GASPAR TRINIDAD BERNARDO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121152', 'name' => 'HERNANDEZ ALBAÑIL ELIZABETH','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            //['studentId' => '20172121157', 'name' => 'HERNANDEZ CRISTOBAL ANGELICA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121165', 'name' => 'HERNANDEZ MARTINEZ GUADALUPE SARAHI','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121166', 'name' => 'HERNANDEZ MELGAREJO ROCIO GUDALUPE','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121182', 'name' => 'JACOBO LARA NATIVIDAD','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121197', 'name' => 'JUSTO FERNANDEZ ROBERTO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121199', 'name' => 'LEAL ORTIZ MARIA DEL CONSUELO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121200', 'name' => 'LEON BRIGIDO ELISEO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121220', 'name' => 'LOZADA JIMENEZ PIEDAD','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121221', 'name' => 'LOZADA MORELOS JUAN','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121235', 'name' => 'MARIANO MARTINEZ ROSARIA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121243', 'name' => 'MARTINEZ BIBIANO FATIMA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121247', 'name' => 'MARTINEZ ESPIRITU JUAN','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121251', 'name' => 'MARTINEZ LUNA OCOTLAN','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121252', 'name' => 'MARTINEZ MARQUEZ CRISTINA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121256', 'name' => 'MARTINEZ SALVADOR CLAUDIA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121283', 'name' => 'MORENO VAZQUEZ FABIOLA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121310', 'name' => 'PAZOS HERNANDEZ ARLETTE','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121316', 'name' => 'PERDOMO SELVAS BLANCA ELENA ','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121157', 'name' => 'REYES LOZADA CARLOS','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121366', 'name' => 'RIVERA SIMON ANA REFUGIA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121403', 'name' => 'SANTOS ORTIZ NORAL','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121425', 'name' => 'VARGAS MARTINEZ JULIETA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 81)->first()->students()->attach($insertedIds);


        /* 7a */
        $users =[
            ['studentId' => '20162121027', 'name' => 'CASTRO SANTOS ROCIO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121180', 'name' => 'GUZMAN BENAVIDEZ GUADALUPE','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121062', 'name' => 'HERNANDEZ RODRIGUEZ VICTOR HUGO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121198', 'name' => 'LOPEZ PEREZ ISRAEL','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20152121125', 'name' => 'LOZADA MARTINEZ IDALIA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121084', 'name' => 'MARTINEZ SANTOS SILVIA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20142121149', 'name' => 'PEREZ APARICIO SERGIO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121131', 'name' => 'SILVERIO ZACAPEXPAN MARIBEL','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121133', 'name' => 'TORIBIO SANTOS ANA OLIVIA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121248', 'name' => 'VAZQUEZ RAMOS NATANAEL','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121136', 'name' => 'ZAVALETA MARTINEZ CLAUDIA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121137', 'name' => 'ZAVALETA MARTINEZ VIRGINIA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 82)->first()->students()->attach($insertedIds);
    }
}
