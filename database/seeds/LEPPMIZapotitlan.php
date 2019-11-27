<?php

use Illuminate\Database\Seeder;
use App\Models\Career;
use App\Models\Group;
use App\Models\Teacher;
use App\User;

class LEPPMIZapotitlan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Career::insert([
            ['id' => 11, 'name' => 'LEPPMI ZAPOTITLÁN', 'type' => 1]
        ]);

        Group::insert([
            ['id' => 67, 'name' => 'PREESCOLAR', 'careerId' => 11],
            ['id' => 68, 'name' => 'PRIMARIA', 'careerId' => 11],
            ['id' => 69, 'name' => 'B PREESCOLAR', 'careerId' => 11],
            ['id' => 70, 'name' => '1MM6', 'careerId' => 11],
            ['id' => 71, 'name' => '3A', 'careerId' => 11],
            ['id' => 72, 'name' => '3B', 'careerId' => 11],
            ['id' => 73, 'name' => '5', 'careerId' => 11],
            ['id' => 74, 'name' => '7', 'careerId' => 11],
        ]);

        /* PREESCOLAR */
        $users =[
            ['studentId' => '20192121021', 'name' => 'ANDRADE MARCOS MARILY','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121064', 'name' => 'BERNABE RODRIGUEZ LUZ NAYENY','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121095', 'name' => 'CARMONA CRUZ MARLEN','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121391', 'name' => 'LUNA CAMPOS LUCÍA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121629', 'name' => 'SAHINOS PONCE MARGARITA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121640', 'name' => 'SANCHEZ LIMA ANDY SHARIN','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121654', 'name' => 'SANTIAGO VAZQUEZ JOSEFINA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 67)->first()->students()->attach($insertedIds);

         /* PRIMARIA */
         $users =[
            ['studentId' => '20192121034', 'name' => 'ARROYO MORA ARTURO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121090', 'name' => 'CANO LARA AMERICA GUADALUPE','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121149', 'name' => 'DE LUNA REYES FERNANDO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121152', 'name' => 'DEL VALLE HUERTA SARELI','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121200', 'name' => 'GAONA RAMOS JUAN MANUEL','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121217', 'name' => 'GARCÍA PONCE AURELIO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121322', 'name' => 'HUERTA MARTIN MARITZA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121331', 'name' => 'JERONIMO NUÑEZ JOSE LUIS','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121355', 'name' => 'LARA LARA SANDRA GABRIELA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121371', 'name' => 'LOPEZ GARCIA BERNABE','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121372', 'name' => 'LOPEZ GOMEZ JOSEFINA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121407', 'name' => 'MARTIN DE LA CRUZ LUIS REILI','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121452', 'name' => 'MENDEZ DOMINGO JOSE GABRIEL','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121573', 'name' => 'REYES BONILLA DULCE CONCEPCIIÓN','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121592', 'name' => 'RIVERA MACIAS NOHEMI','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121598', 'name' => 'RODRIGUEZ ARRIAGA RAYITO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121603', 'name' => 'RODRIGUEZ HERNANDEZ GUADALUPE','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121607', 'name' => 'RODRIGUEZ RODRIGUEZ JACQUELINE','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121694', 'name' => 'VAZQUEZ GARCIA BRENDA YURIDIA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121713', 'name' => 'VEGA VALENCIA ALFREDO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 68)->first()->students()->attach($insertedIds);

        /* B PREESCOLAR */
        $users =[
            ['studentId' => '20192121222', 'name' => 'GARRIDO CONTRERAS JUDITH','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121334', 'name' => 'JIMENEZ CANO ROSA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121377', 'name' => 'LÓPEZ MONTERO ANA ISABEL','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121510', 'name' => 'ORTEGA FRANCISCO MONICA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121587', 'name' => 'RIVERA DE LA CRUZ SUSANA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121691', 'name' => 'VARGAS RODRIGUEZ DOLORES','password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 69)->first()->students()->attach($insertedIds);

         /* 1MM6 */
         $users =[
            ['studentId' => '20192121012', 'name' => 'ALAYA BRAVO CLAUDIO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121027', 'name' => 'APARICIO GAONA YAREMI','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121068', 'name' => 'BONILLA RAMOS SANDRA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121089', 'name' => 'CANDELARIO HERNANDEZ AXEL ALAIN','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121165', 'name' => 'DOMINGUEZ SALGADO MARIBLE','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121193', 'name' => 'FRANCISCO GAONA CARMEN ARILENE','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121228', 'name' => 'GOMEZ PEREZ CARMELA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121234', 'name' => 'GONZALEZ GARCIA ALEJANDRA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121276', 'name' => 'HERNANDEZ ERNANDEZ CESAR','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121293', 'name' => 'HERNANDEZ MENDEZ GABRIELA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121336', 'name' => 'JIMENEZ ESPARZA DALILA YARAVIT','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121340', 'name' => 'JIMINEZ MIRAMON MIGUEL ANGEL','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121392', 'name' => 'LUNA HERNANDEZ MIREYA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121400', 'name' => 'MARCOS RIVERA YOLOXOCHIT','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121574', 'name' => 'REYES CASTILLO GUADALUPE','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121659', 'name' => 'SEBASTIAN GARCIA ALEX','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121678', 'name' => 'TIRZO VAZQUEZ JUAN','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121681', 'name' => 'TORRES HERNANDEZ MARIA DEL CARMEN','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121701', 'name' => 'VAZQUEZ MENDEZ JOSE FRANCISCO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121702', 'name' => 'VAZQUEZ MENDEZ MARÍA DEL CARMEN','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121703', 'name' => 'CVAZQUEZ MENDEZ MIGUEL ANGEL','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121718', 'name' => 'VILLALVA ZARAGOZA REYNA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121722', 'name' => 'ZAMORA MONTERO BRENDA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 70)->first()->students()->attach($insertedIds);

         /* 3A */
         $users =[
            ['studentId' => '20192121036', 'name' => 'ARROYO ALVAREZ DEHISI','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '18683121', 'name' => 'CRUZ APARICIO FREDY','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121186', 'name' => 'GARCÍA ROMERO MARGARITA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121207', 'name' => 'GONZALEZ VAZQUEZ GUADALUPE','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121254', 'name' => 'JIMENEZ GARCÍA NAHUM','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121258', 'name' => 'JUAREZ ESTEBAN ROSA ISELA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121262', 'name' => 'JUAREZ LUNA ISADELIA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121273', 'name' => 'LEÓN LÓPEZ ROSA ISELA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121308', 'name' => 'LUNA PEREZ JUAN EUGENIO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121313', 'name' => 'MANZANO CABRERA LIZBETH','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121314', 'name' => 'MANZANO MANZANO ARENDY','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '18683041', 'name' => 'MARQUEZ TEJA LORENA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121567', 'name' => 'MARTINEZ PARRA AZUCENA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '18686241', 'name' => 'MOLINA JIMENEZ JUAN DIEGO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121378', 'name' => 'NAPE CARMONA CECILIA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121379', 'name' => 'NAPPE CARMONA LETICIA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121383', 'name' => 'NUÑEZ GARCÍA RAFAEL','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121413', 'name' => 'PEREZ VELAZQUEZ ELODIA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121415', 'name' => 'PONCE CANO BERNARDO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121449', 'name' => 'REYES RAMOS JOSE ARMANDO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121470', 'name' => 'ROSALES RAMOS MARIA IMELDA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121541', 'name' => 'VAZQUEZ RAMOS YEIMI VIRIDIAN','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121547', 'name' => 'VEGA PERALTA MARIA GUADALUPE','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121551', 'name' => 'VELAZQUEZ FRANCISCO LUCRECIA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121561', 'name' => 'ZAMORA QUINTERO ITZEL YARITZA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 71)->first()->students()->attach($insertedIds);

        /* 3b */
        $users =[
            ['studentId' => '20182121051', 'name' => 'BRAVO MALAGON RICARDO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121052', 'name' => 'BRAVO SAINOS GENARO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '18686051', 'name' => 'CANO GALICIA ROSAURA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121140', 'name' => 'ESTEBAN LUNA DOLORES','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121141', 'name' => 'ESTEBAN LUNA MARCELA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121180', 'name' => 'GARCIA PEREZ NORA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121208', 'name' => 'GRAVIOTO HERNANDEZ JHOANA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121230', 'name' => 'HERNANDEZ LOPEZ MANUEL','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121257', 'name' => 'JUAREZ BONILLA DIEGO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121259', 'name' => 'JUAREZ FLORES NANCY','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121260', 'name' => 'JUAREZ LIMA MARIA DE JESUS','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121278', 'name' => 'LOPEZ DOMINGUEZ ENRIQUE','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121306', 'name' => 'LUNA HERNANDEZ ADRIAN','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121317', 'name' => 'MARCOS RIVERA SITLALIN','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121420', 'name' => 'RAMIREZ CERVANTES MARIO ALBERTO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121421', 'name' => 'RAMIREZ GARCIA CLAUDIA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121442', 'name' => 'RAMOS GONZALEZ HANDY JOCELYN','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121491', 'name' => 'SANCGEZ SALVADOR DANIELA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121492', 'name' => 'SANCHEZ SANTIAGO ABIGAIL','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121513', 'name' => 'SIMON PEREZ JACINTO TOBÍAS','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121523', 'name' => 'TOTOSAUS HERNANDEZ ESPERANZA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121533', 'name' => 'VARGAS RODRIGUEZ ALEJANDRA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121542', 'name' => 'VAZQUEZ SANCHEZ RENE','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121548', 'name' => 'VELAZCO SANCHEZ ANTONIO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121549', 'name' => 'VELAZCO SANCHEZ GUADALUPE','password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 72)->first()->students()->attach($insertedIds);

        /* 5 */
        $users =[
            ['studentId' => '20172121006', 'name' => 'ANGELES GAONA EDNA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121022', 'name' => 'BAUTISTA JUAREZ PASTOR','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121030', 'name' => 'BONILLA SANTIAGO HILDA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            //['studentId' => '20172121046', 'name' => 'CASTAÑEDA HERNANDEZ VANELLY MONSERRAT','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121047', 'name' => 'CASTAÑEDA JUAREZ GUILLERMINA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '17687221', 'name' => 'CRUZ APARICIO GADEGUER','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            //['studentId' => '20172121110', 'name' => 'GARCÍA FERNANDO JOSEFINA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121162', 'name' => 'HERNANDEZ HERNANDEZ ALMA DELIA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121196', 'name' => 'JUAREZ ZAMORA SANDRA JAQUELIN','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121204', 'name' => 'LIMA SALAZAR HANETH','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121208', 'name' => 'LOPEZ CASTAÑEDA SARA ALONDRA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121227', 'name' => 'LUNA CAMPOS MARÍA EUGENIA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121330', 'name' => 'PONCE CANO ELENA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121331', 'name' => 'PONCE GARCIA LIZZETH','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121344', 'name' => 'RAMIREZ PERALTA MARIA DE JESUS','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121345', 'name' => 'RAMIREZ RAMIREZ AGUSTINA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121347', 'name' => 'RAMIREZ RAMIREZ CRISTINA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121348', 'name' => 'RAMIREZ RAMIREZ GARIEL','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121358', 'name' => 'REYES FERNANDEZ LIZBETH JOSSELIN','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '17687261', 'name' => 'RIVERA SANCHEZ TERESA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121428', 'name' => 'VAZQUEZ BRAVO LAZARO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121446', 'name' => 'VIVEROS ACUÑA ANAHI','password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 73)->first()->students()->attach($insertedIds);

        /* 7 */
        $users =[
            ['studentId' => '16686281', 'name' => 'BRAVO MALAGON LETICIA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '11683511', 'name' => 'DE LA CALLEJA HERNANDEZ DOROTEA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '16685931', 'name' => 'GARCIA PARRA SILVINA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '16686001', 'name' => 'LUNA HERNANDEZ TATIANA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121201', 'name' => 'LUNA PERALTA LUIS FERNANDO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 74)->first()->students()->attach($insertedIds);
    }
}
