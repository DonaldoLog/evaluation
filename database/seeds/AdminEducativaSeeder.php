<?php

use Illuminate\Database\Seeder;
use App\Models\Career;
use App\Models\Group;
use App\Models\Teacher;
use App\User;

class AdminEducativaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Career::insert([
            ['id' => 8, 'name' => 'LICENCIATURA EN ADMINISTRACIÓN EDUCATIVA', 'type' => 1]
        ]);

        Group::insert([
            ['id' => 51, 'name' => '1', 'careerId' => 8],
            ['id' => 52, 'name' => '3', 'careerId' => 8],
            ['id' => 53, 'name' => '5', 'careerId' => 8],
            ['id' => 54, 'name' => '7', 'careerId' => 8],
        ]);

        /* 1 */
        $users =[
            ['studentId' => '19181034', 'name' => 'YARENNI ÁQUINO HERMENEGILDO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '19181035', 'name' => 'JOSÉ ALFREDO ÁNGEL PEDRO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '19181036', 'name' => 'MANUEL CARÁCAS CARMONA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '19181037', 'name' => 'MALENI GABRIELA BALTAZAR MARTÍNEZ','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '19181038', 'name' => 'ARITZEL YAZMÍN BALTAZAR SANTOS','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '19182039', 'name' => 'JESÚS BARRIENTOS DÍAZ','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '19181040', 'name' => 'INGRID NAOMI BELLO GUERRERO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '19181041', 'name' => 'MAYRA ARELI BERNAL MUÑOZ','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '19181042', 'name' => 'YONATHAN RAMÓN COLIO BALTAZAR','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '19181043', 'name' => 'GUILLERMO ÁNGEL DE LA CRUZ FLORES','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '19181044', 'name' => 'JONATHAN FLORES HERNÁNDEZ','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '19181045', 'name' => 'CARLOS URIEL GARCÍA VÁZQUEZ','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '19181046', 'name' => 'FABIOLA GÓMEZ BONILLA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '19181047', 'name' => 'ROCÍO GONZÁLEZ GARCÍA ','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '19181048', 'name' => 'YESICA JUÁREZ MÓNICO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '19181049', 'name' => 'ALEJANDRO RAMSES LUNA MÉNDEZ','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '19181050', 'name' => 'SILVIA MARTÍNEZ BAUTISTA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '19181051', 'name' => 'LILIANA MARTÍNEZ CASIANO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '19181052', 'name' => 'FÁTIMA SARAI MARTÍNEZ NICANOR','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '19181053', 'name' => 'MARCOS ISAAC NICOLÁS HERNÁNDEZ','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '19181054', 'name' => 'ANA LIZBETH PARRA RIVERA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '19181055', 'name' => 'MARÍA DE LOS ÁNGELES RAMIRO VÁZQUEZ','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '19181056', 'name' => 'CITLALLI CELIC SÁNCHEZ CRISÓSTOMO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '19181057', 'name' => 'YAMILET SAYAGO MARTÍNEZ','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '19181058', 'name' => 'ERICK  VÁZQUEZ RAMÍREZ','password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 51)->first()->students()->attach($insertedIds);

        /* 3 */
        $users =[
            ['studentId' => '18686711', 'name' => 'EVELIA DE LOS ÁNGELES ALBINO CADENA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '18686721', 'name' => 'JUAN CARLOS ALEJO FERNÁNDEZ','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '18686731', 'name' => 'GILSELA ESMERALDA ALEMÁN GALICIA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '18686741', 'name' => 'JAIME BARTOLO LAUREANO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '18686751', 'name' => 'DENSI JULIANA CRUZ RODRÍGUEZ','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '18686761', 'name' => 'GEOVANNA GONZÁLEZ ZARATE','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '18686771', 'name' => 'JAZMÍN SANDOVAL GONZÁLEZ','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '18686781', 'name' => 'GERARDO GUZMÁN SAYAGO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '18686791', 'name' => 'LUIS ENRIQUE HERNÁNDEZ MELGAREJO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '18686801', 'name' => 'PETRA HERNÁNDEZ VERGARA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '18686821', 'name' => 'ARACELI LANDERO LUCAS','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '18686831', 'name' => 'MARCELA LIBREROS SIMÓN','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '18686841', 'name' => 'DANIELA LUNA PÉREZ','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '18686851', 'name' => 'JOSSELIN MARCELO INÉS','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '18686861', 'name' => 'BASILIO MARTÍNEZ RAFAEL','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '18686871', 'name' => 'JUAN CARLOS PÉREZ HERNÁNDEZ','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '18686901', 'name' => 'BÁRBARA YOALI SANTOS MENDOZA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '18686911', 'name' => 'SOFÍA ANDREA SANTOS REYES','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '18686921', 'name' => 'LUZ CELIA VALERA MANILLA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '17684501', 'name' => 'MARISOL MARTÍNEZ GONZÁLEZ','password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 52)->first()->students()->attach($insertedIds);

        /* 5 */
        $users =[
            ['studentId' => '17684361', 'name' => 'ÁNGEL EDUARDO CALDERÓN SOLÍS','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '17684371', 'name' => 'HÉCTOR LAUREANO CAMACHO CUAMATZIN','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '17684381', 'name' => 'DIANA LAURA CANELA DEL CARMEN','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '17684401', 'name' => 'MARÍA DEL ROSARIO ESPINOZA LARA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '17684411', 'name' => 'MÓNICA GARCÍA CARLOS','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '17684421', 'name' => 'LUIS JESÚS GARCÍA DEL CARMEN','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '17684451', 'name' => 'GABRIELA JUÁREZ SÓSTENES','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '17684471', 'name' => 'VANESSA LÓPEZ JUÁREZ','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '17684481', 'name' => 'ROSA MARÍA LUNA PALESTINA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '17684491', 'name' => 'JOSUE MARTÍNEZ ÁGUILAR','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '17684511', 'name' => 'JOSÉ EDUARDO MARTÍNEZ GREGORIO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '17684521', 'name' => 'LIZBETH PABLO CESÁREO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '17684561', 'name' => 'MARÍA GUADALUPE SAYAGO CRUZ','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '17684571', 'name' => 'MARY CARMEN SERRANO DÍAZ','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '17684581', 'name' => 'CÉSAR SOTERO PERIAÑEZ','password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 53)->first()->students()->attach($insertedIds);

        /* 7 */
        $users =[
            ['studentId' => '16683361', 'name' => 'ROSA ABIGAIL BALTAZAR HERNÁNDEZ','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '16683371', 'name' => 'RAFAEL EDUARDO BETANCOURT CALDERÓN','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '16683381', 'name' => 'JAZMÍN JETZABET BLAS PEÑA','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '16684471', 'name' => 'ARACELI FIDEL SEBASTIÁN','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '16683411', 'name' => 'JOSÉ JUAN FIGUEROA CASIANO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '16683421', 'name' => 'CARLOS DAVID FRANCISCO INÉS','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '16683441', 'name' => 'ISIS DEL SOL HERRERA GALINDO ','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '16683491', 'name' => 'JESÚS URIEL MENDOZA MORALES','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '16683531', 'name' => 'CAROLINA GISSELLE RODRÍGUEZ MARRERO','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '16683541', 'name' => 'IRAIS ROMÁN VÁZQUEZ','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '16683551', 'name' => 'JOSÉ MARCOS VEGA LEAL','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '16683561', 'name' => 'ELIZABETH VICTORIANO CARLOS','password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '15684441', 'name' => 'ROBERTO CASTELÁN DURÁN','password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 54)->first()->students()->attach($insertedIds);
    }
}
