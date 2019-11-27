<?php

use Illuminate\Database\Seeder;
use App\Models\Career;
use App\Models\Group;
use App\Models\Teacher;
use App\User;

class LIEHueyapanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Career::insert([
            ['id' => 14, 'name' => 'INTERVENCIÓN EDUCATIVA', 'type' => 1]
        ]);

        Group::insert([
            ['id' => 86, 'name' => '1', 'careerId' => 14],
            ['id' => 87, 'name' => '3', 'careerId' => 14],
            ['id' => 88, 'name' => '5', 'careerId' => 14],
            ['id' => 89, 'name' => '7', 'careerId' => 14],
        ]);

        /* 1 */
        $users =[
            ['studentId' => '20192121031', 'name' => 'ARELLANO LUCAS EUSEBIA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121040', 'name' => 'AYERDE HERNANDEZ JUAN','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121041', 'name' => 'AYERDE ROMAN ANA KAREN','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121066', 'name' => 'BIVIANO NOCHEBUENA CECILIA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121111', 'name' => 'CECILIO CASTILLO ELIZABETH','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121112', 'name' => 'CECILIO CASTILLO ROCIO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121133', 'name' => 'CRUZ TELLEZ NERY ZAMAY','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121144', 'name' => 'DE LA CRUZ DE AQUINO ANTONIO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121145', 'name' => 'DE LA CRUZ IGNACIO VICTORIA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121303', 'name' => 'HERNANDEZ ROSARIO ALICIA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121305', 'name' => 'HERNADEZ SALGADO JAIR','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121319', 'name' => 'JACOBO VEGA JOVANNA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121386', 'name' => 'LOZADA RAMOS ANDREA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121387', 'name' => 'LOZADA SALAZAR ALBERTO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121422', 'name' => 'MARTINEZ MARTINEZ FRANCISCO RODRIGO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121427', 'name' => 'MARTINEZ ORTIZ ZAIDY ESKARLETH','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121439', 'name' => 'MATEO FLORES ROSAURA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121525', 'name' => 'ORTIZ TIRADO MARIELA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121531', 'name' => 'PARRA PASCUAL FERNANDO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121563', 'name' => 'RAMIRO RENTERIA MARGARITO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121579', 'name' => 'REYES HERNANDEZ MARGARITO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121685', 'name' => 'TRINIDAD SANTOS NOE IVAN','password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 86)->first()->students()->attach($insertedIds);

        /* 3 */
        $users =[
            ['studentId' => '20182121065', 'name' => 'CARLOS PARRA PAULA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121220', 'name' => 'HERNANDEZ DE LA LUZ VALENTIN','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121328', 'name' => 'MARTINEZ DIAZ LETICIA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121339', 'name' => 'MARTINEZ XILOT ROCÍO  CANDELARIA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121495', 'name' => 'SANDOVAL GUZMAN DANIELA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121512', 'name' => 'SIMÓN LOZADA NESTOR ANTONIO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 87)->first()->students()->attach($insertedIds);

        /* 5 */
        $users =[
            ['studentId' => '20172121069', 'name' => 'CRISOSTOMO ROJAS YULIBETH','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121308', 'name' => 'PARRA PASCUAL JULIO CESAR','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121360', 'name' => 'REYES MENDEZ ADRIANA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121407', 'name' => 'SERVIN SANTIAGO MARIANA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 88)->first()->students()->attach($insertedIds);

          /* 7 */
          $users =[
            ['studentId' => '20162121002', 'name' => 'ABRAHAM GUARNEROS FERNANDO ANGEL','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121078', 'name' => 'LOZADA RAMOS LUCIA ALEJANDRA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121202', 'name' => 'MARTÍNEZ DÍAZ MARINA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121099', 'name' => 'NICOLÁS LANDERO ROSA MARÍA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            //['studentId' => '20192121130', 'name' => 'SERVIN ZARAGOZA ISABEL','password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 89)->first()->students()->attach($insertedIds);
    }
}
