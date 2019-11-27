<?php

use Illuminate\Database\Seeder;
use App\Models\Career;
use App\Models\Group;
use App\Models\Teacher;
use App\User;

class MEMSSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Career::insert([
            ['id' => 13, 'name' => 'ESPECIALIZACIÓN EN EDUCACIÓN MEDIA SUPERIOR', 'type' => 1]
        ]);

        Group::insert([
            ['id' => 83, 'name' => '1', 'careerId' => 13],
            ['id' => 84, 'name' => '3', 'careerId' => 13],
            ['id' => 85, 'name' => '6', 'careerId' => 13],
        ]);

        /* 1 */
        $users =[
            ['studentId' => '20192120091', 'name' => 'CARMINA GUADALUPE AMADOR SANTOS','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120092', 'name' => 'KARINA CASTRO SANTOS','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120093', 'name' => 'EMELIA MARGARITA CONTRERAS VELAZQUEZ','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120094', 'name' => 'RAYITO GÓMEZ BONIFACIO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120095', 'name' => 'NIEVES HERNÁNDEZ MARURI','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120096', 'name' => 'ADÁN HERRERA SUÁREZ','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120097', 'name' => 'EDUARDO JIMÉNEZ MARTÍNEZ','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120098', 'name' => 'FABIOLA JUÁREZ EDGAR','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120099', 'name' => 'LUIS ÁNGEL MARTÍNEZ RODRÍGUEZ','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120100', 'name' => 'ALONDRA DANAE PERDOMO DÍAZ','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120191', 'name' => 'RUBÍ PAOLA PERDOMO MURRIETA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120102', 'name' => 'MARÍA YESENIA PÉREZ PÉREZ','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120109', 'name' => 'ELIA WENDOLIN ROJAS FLORES','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120103', 'name' => 'ANDREA ROJAS HIDALGO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120027', 'name' => 'NALLELY YENITZA ROMERO SALAZAR','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120104', 'name' => 'NOHEMÍ SÁNCHEZ MIÑON','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120105', 'name' => 'GUADALUPE SÁNCHEZ ROSAS','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120106', 'name' => 'KRYSTHAL VALERA DÍAZ','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120107', 'name' => 'ALEXIA ESTRELLA VÁZQUEZ CASTAÑEDA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120108', 'name' => 'EFRÉN VEGA CASTILLO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 83)->first()->students()->attach($insertedIds);

         /* 3 */
         $users =[
            ['studentId' => '20192120010', 'name' => 'ILDA ÁGUILAR GUZMÁN','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120011', 'name' => 'SILVA ANGÉLICA ARGUELLES CHACÓN','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120013', 'name' => 'ABRAHAM TEODORO BELLO HERRERA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120015', 'name' => 'SONIA CASTRO HERNÁNDEZ','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120018', 'name' => 'JOSÉ NOÉ HERNÁNDEZ GERÓNIMO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120020', 'name' => 'ELIZABETH HERNÁNDEZ ORTÍZ','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120021', 'name' => 'LUIS ORLANDO LICONA GARCÍA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120022', 'name' => 'JOSEFINA LÓPEZ HERNÁNDEZ','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120023', 'name' => 'MARÍA DEL PILAR MÉNDEZ GONZÁLEZ','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120026', 'name' => 'AURELIO PÉREZ GASCA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120029', 'name' => 'ERIKA LAURA TADEO GÓMEZ','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192120030', 'name' => 'MARÍA GUADALUPE VELAZCO ROMERO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 84)->first()->students()->attach($insertedIds);

        /* 6 */
        $users =[
            ['studentId' => '2015210011', 'name' => 'ISAÁC ORDOÑEZ HERNÁNDEZ','password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 85)->first()->students()->attach($insertedIds);
    }
}
