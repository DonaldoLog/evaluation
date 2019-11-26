<?php

use Illuminate\Database\Seeder;
use App\Models\Career;
use App\Models\Group;
use App\Models\Teacher;
use App\User;

class LIEEscolarizadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Career::insert([
            ['id' => 3, 'name' => 'Intervención educativa', 'type' => 1]
        ]);

        Group::insert([
            ['id' => 16, 'name' => '1A', 'careerId' => 3],
            ['id' => 17, 'name' => '1B', 'careerId' => 3],
            ['id' => 18, 'name' => '3A', 'careerId' => 3],
            ['id' => 19, 'name' => '3B', 'careerId' => 3],
            ['id' => 20, 'name' => '5A', 'careerId' => 3],
            ['id' => 21, 'name' => '5B', 'careerId' => 3],
            ['id' => 22, 'name' => '7', 'careerId' => 3],
        ]);

        /* 1 */
        $users =[
            ['studentId' => '20192121004', 'name' => 'Vanessa Michel', 'last_name' => 'Aguilar Cabrera', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121026', 'name' => 'Jhoana Janethe', 'last_name' => 'Aparicio Castillo', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121047', 'name' => 'Saymi Dalay', 'last_name' => 'Baltazar Ramos', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121059', 'name' => 'Jocelyn del Rocío', 'last_name' => 'Belen López', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121060', 'name' => 'Guadalupe Monserrath', 'last_name' => 'Bello Cruz', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121105', 'name' => 'Emma Yanet', 'last_name' => 'Castellanos Hernández', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121158', 'name' => 'Ivon ', 'last_name' => 'Diego Hernández', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121161', 'name' => 'Elizabeth ', 'last_name' => 'Domínguez Martínez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121169', 'name' => 'Paulina', 'last_name' => 'Encarnación Santos', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121177', 'name' => 'Alison ', 'last_name' => 'Estudillo Rosas', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121194', 'name' => 'Esmeralda', 'last_name' => 'Gabriel Aburto', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121195', 'name' => 'Dulce María ', 'last_name' => 'Gabriel Jiménez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121204', 'name' => 'Madelein', 'last_name' => 'García Cantellano', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121249', 'name' => 'Ana Cristina ', 'last_name' => 'Guevara Trujillo', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121317', 'name' => 'Zaida Jaqueline', 'last_name' => 'Herrera Martínez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121350', 'name' => 'Maricruz', 'last_name' => 'Julian de los Santos', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121356', 'name' => 'Estefani', 'last_name' => 'Lázaro Beatriz', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121368', 'name' => 'Natividad', 'last_name' => 'López Castro', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121390', 'name' => 'Rebeca Yuriet', 'last_name' => 'Luis Pasión', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121393', 'name' => 'Maricruz Concepción', 'last_name' => 'Luna Mendoza', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121438', 'name' => 'Maria del Rosario ', 'last_name' => 'Mateo Flores', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121445', 'name' => 'Miriam', 'last_name' => 'Melchor Melcho', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121460', 'name' => 'Karla Nohemi', 'last_name' => 'Mendoza Casiano', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121467', 'name' => 'Itari Yosahani', 'last_name' => 'Miranda Córdova', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121489', 'name' => 'Daneli Guadalupe', 'last_name' => 'Moreno Huerta', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121497', 'name' => 'Claudia', 'last_name' => 'Murrieta Ortíz', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121503', 'name' => 'Vanessa Cristal', 'last_name' => 'Nochebuena Juarez ', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121566', 'name' => 'Paola', 'last_name' => 'Ramos Romeroa', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121570', 'name' => 'Nora Annet ', 'last_name' => 'Ramos Vega', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121580', 'name' => 'Danna Jaqueline', 'last_name' => 'Reyes Jaimes', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121584', 'name' => 'Anahi ', 'last_name' => 'Ríos López', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121586', 'name' => 'Alejandra ', 'last_name' => 'Rivera Arellano', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121617', 'name' => 'Oscar Yair ', 'last_name' => 'Romero García', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121660', 'name' => 'Adriana', 'last_name' => 'Sebastian Ramos', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121670', 'name' => 'Nayely Odalys', 'last_name' => 'Soto Jiménez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121716', 'name' => 'Adriana ', 'last_name' => 'Victoriano Guerrero', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 16)->first()->students()->attach($insertedIds);

        /* 1b */
        $users =[
            ['studentId' => '20192121007', 'name' => 'María Teresa', 'last_name' => 'Aguilar Hernández', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121020', 'name' => 'María del Rocío', 'last_name' => 'Álvarez Ramos', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121042', 'name' => 'Surisadey', 'last_name' => 'Baez Hernández', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121044', 'name' => 'Karen Guadalupe ', 'last_name' => 'Baltazar Guzmán', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121070', 'name' => 'Dana Paola', 'last_name' => 'Bravo López', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121092', 'name' => 'Sandra Jazmin', 'last_name' => 'Carácas Alemán', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121116', 'name' => 'Karen ', 'last_name' => 'Chino Velazquez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121132', 'name' => 'María del Carmen', 'last_name' => 'Cruz Domínguez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121147', 'name' => 'Guadalupe ', 'last_name' => 'de la Cruz Ríos', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121174', 'name' => 'Ana Jaquelin', 'last_name' => 'Espíritu Córdova', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121256', 'name' => 'Dalia Betzabe', 'last_name' => 'Guzmán Ruiz', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121284', 'name' => 'Tania Guadalupe', 'last_name' => 'Hernández Hernández', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121301', 'name' => 'María Fernanda', 'last_name' => 'Hernández Ramos', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121315', 'name' => 'Alma Rosa', 'last_name' => 'Herrera Domínguez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121332', 'name' => 'Claudia Mónica ', 'last_name' => 'Jimarez Castelán', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121335', 'name' => 'Miriam', 'last_name' => 'Jiménez de la Luz', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121351', 'name' => 'Leydy Itzel', 'last_name' => 'Landero Jiménez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121353', 'name' => 'Darla Julieth', 'last_name' => 'Landero Rodríguez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121354', 'name' => 'Nayeli', 'last_name' => 'Landero Sánchez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121359', 'name' => 'Brenda ', 'last_name' => 'León de Jesús', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121365', 'name' => 'Montserrat', 'last_name' => 'Llanos Ramiro', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121394', 'name' => 'Nancy Janette', 'last_name' => 'Luna Nicanor', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121406', 'name' => 'Angel Vianney', 'last_name' => 'Marquez Valera', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121425', 'name' => 'Martha Elena', 'last_name' => 'Martínez Mendoza', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121516', 'name' => 'Clara Isabel', 'last_name' => 'Ortíz Cantú', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121539', 'name' => 'América Michelle', 'last_name' => 'Pérez de Vicente', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121542', 'name' => 'Sonia Margarita', 'last_name' => 'Pérez García', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121551', 'name' => 'Blanca Belem ', 'last_name' => 'Periañez Romero', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121553', 'name' => 'Alondra Yuneri', 'last_name' => 'Pozos Calderón', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121615', 'name' => 'Yedid Georgia', 'last_name' => 'Romano Salazar', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121625', 'name' => 'Mayra Michel', 'last_name' => 'Ruiz Barros', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121643', 'name' => 'Magali', 'last_name' => 'Sánchez Ramiro', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121645', 'name' => 'Sara Quetzaly', 'last_name' => 'Sánchez Toral', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121661', 'name' => 'Gabina ', 'last_name' => 'Sebastian Ramos', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121719', 'name' => 'Martha Guadalupe', 'last_name' => 'Viñas Guzmán', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20192121723', 'name' => 'Lizbeth ', 'last_name' => 'Zamora Zavaleta', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 17)->first()->students()->attach($insertedIds);


          /* 3a */
        $users =[
            ['studentId' => '20182121006', 'name' => 'Jhoselin', 'last_name' => 'Aguilar Ruiz', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121011', 'name' => 'Alondra   ', 'last_name' => 'Alarcón Lemuz', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121021', 'name' => 'Lizbeth ', 'last_name' => 'Amaro Sánchez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121024', 'name' => 'Lorena', 'last_name' => 'Aparicio Agustín', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121045', 'name' => 'Amairani', 'last_name' => 'Bautista Hernández', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121061', 'name' => 'Laura ', 'last_name' => 'Calixto Gaspar', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121127', 'name' => 'Kenia ', 'last_name' => 'Domínguez Martínez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121148', 'name' => 'Jennifer', 'last_name' => 'Fermín Mota', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121156', 'name' => 'Cyntia Monserrat', 'last_name' => 'Flandes Dolores', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121222', 'name' => 'Ana Karen ', 'last_name' => 'Hernández Hernández', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121245', 'name' => 'Cecilia Joselinne', 'last_name' => 'Herrera Bautista', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121292', 'name' => 'Luis Roman', 'last_name' => 'López Serrano', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121300', 'name' => 'Danly Eunice', 'last_name' => 'Lucas Isidro', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121303', 'name' => 'Diana Laura', 'last_name' => 'Lumbreras Periañez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121342', 'name' => 'Lizbeth ', 'last_name' => 'Melchor Contreras', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121348', 'name' => 'Alejandra ', 'last_name' => 'Méndez Faustina', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121389', 'name' => 'Josette Lorena', 'last_name' => 'Oropeza Navarrete', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121408', 'name' => 'Fátima ', 'last_name' => 'Pérez Loyola', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121422', 'name' => 'Fernanda', 'last_name' => 'Ramírez González ', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121446', 'name' => 'Lucero', 'last_name' => 'Reyes González', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121455', 'name' => 'María Guadalupe', 'last_name' => 'Rivera Méndez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121502', 'name' => 'Magdalena de la Soledad', 'last_name' => 'Santos Hipólito', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121525', 'name' => 'Anayeli ', 'last_name' => 'Trujillo Chapa', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121529', 'name' => 'Adalia Sarai', 'last_name' => 'Valera Júarez ', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 18)->first()->students()->attach($insertedIds);


          /* 3b */
        $users =[
            ['studentId' => '20182121022', 'name' => 'Elizabeth ', 'last_name' => 'Ambrosio Baltazar', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121025', 'name' => 'Arizbeth Monserrat', 'last_name' => 'Aparicio Cerero ', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121027', 'name' => 'Arely', 'last_name' => 'Aquino Ortiz', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121042', 'name' => 'Michell', 'last_name' => 'Balderrabano Moreno', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121054', 'name' => 'Rosa Alicia', 'last_name' => 'Cabrera Gutiérrez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121103', 'name' => 'Gemma de los Angeles', 'last_name' => 'Cruz Landero', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121105', 'name' => 'Teresa Stefania', 'last_name' => 'Cruz Ruiz', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121107', 'name' => 'Yelitza Maygdali', 'last_name' => 'Cuallo Sayago', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121142', 'name' => 'María Candelari', 'last_name' => 'Eugenio Romero', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121152', 'name' => 'Jhosselyn', 'last_name' => 'Fernández Martínez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121158', 'name' => 'Ana Edith ', 'last_name' => 'Flores Gregorio', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121169', 'name' => 'Zayda Janeth', 'last_name' => 'García Bonilla', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121174', 'name' => 'Danahee', 'last_name' => 'García García', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121212', 'name' => 'Jessica ', 'last_name' => 'Guevara Ramos', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121215', 'name' => 'Isabel', 'last_name' => 'Guzmán Jiménez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121217', 'name' => 'Karina', 'last_name' => 'Hernández Aragón', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121225', 'name' => 'Linette', 'last_name' => 'Hernández Hernández', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121240', 'name' => 'Katia', 'last_name' => 'Hernández Serafín', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121274', 'name' => 'Dulce María', 'last_name' => 'León Puente', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121294', 'name' => 'Natalia', 'last_name' => 'Lorenzo Bruno', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121310', 'name' => 'Alessandra', 'last_name' => 'Macin Pérez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121315', 'name' => 'Jimena', 'last_name' => 'Manzano Mateo', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121316', 'name' => 'Geovana', 'last_name' => 'Marcelo Salgado', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121334', 'name' => 'Diana Elena', 'last_name' => 'Martínez Linares', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121343', 'name' => 'Angelica ', 'last_name' => 'Melgarejo Cortés', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121344', 'name' => 'Max Saúl ', 'last_name' => 'Melgarejo González', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121354', 'name' => 'Diana Lesly', 'last_name' => 'Méndez Vega', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121394', 'name' => 'Mireya', 'last_name' => 'Ortíz Onofre', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121396', 'name' => 'Karla Isela ', 'last_name' => 'Paredes Aburto', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121411', 'name' => 'Diana Margarita', 'last_name' => 'Pérez Rosas', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121417', 'name' => 'María Nelly', 'last_name' => 'Posadas Aguilar', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121423', 'name' => 'Ana Karen ', 'last_name' => 'Ramírez Hernández', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121444', 'name' => 'Damariz', 'last_name' => 'Remigio Romero', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121485', 'name' => 'Lizbeth ', 'last_name' => 'Sánchez Carmona', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121500', 'name' => 'María del Rosario', 'last_name' => 'Santiago Trinidad', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20182121506', 'name' => 'María Félix', 'last_name' => 'Santos Sebastián ', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 19)->first()->students()->attach($insertedIds);


          /* 5a */
        $users =[
            ['studentId' => '20172121015', 'name' => 'Rosa Isela ', 'last_name' => 'Baltazar Sánchez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121016', 'name' => 'Zaira Esmeralda', 'last_name' => 'Bandala Bandala', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121026', 'name' => 'Yareli', 'last_name' => 'Belén Santiago', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121027', 'name' => 'Antonia ', 'last_name' => 'Bello Palacios', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121049', 'name' => 'Dulce María', 'last_name' => 'Castillo Tadeo', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121057', 'name' => 'Eileen', 'last_name' => 'Claudio Baltazar', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121129', 'name' => 'María Guadalupe', 'last_name' => 'González Domínguez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121135', 'name' => 'Noemi del Carmen', 'last_name' => 'González Mota', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121140', 'name' => 'Angélica María', 'last_name' => 'González Serrano', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121153', 'name' => 'Wendy', 'last_name' => 'Hernández Beatriz', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121159', 'name' => 'Concepción', 'last_name' => 'Hernández de la Luz', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121189', 'name' => 'Karla Estephanie', 'last_name' => 'Juárez Baltazar', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121194', 'name' => 'María Angélica', 'last_name' => 'Juárez Sandoval', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121219', 'name' => 'Ximena', 'last_name' => 'Lorenzo Flores', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121225', 'name' => 'María Guadalupe', 'last_name' => 'Lucas Vazquez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121236', 'name' => 'Lizbeth ', 'last_name' => 'Marquez Murrieta', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121254', 'name' => 'Alejandra ', 'last_name' => 'Martínez Ojeda', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121281', 'name' => 'Tania ', 'last_name' => 'Moreno Martínez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121301', 'name' => 'Cristal', 'last_name' => 'Oropeza Vazquez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121317', 'name' => 'Catalina', 'last_name' => 'Perdomo Serrano', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121337', 'name' => 'María Aurora', 'last_name' => 'Quijano Zaragoza', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121388', 'name' => 'Daniela', 'last_name' => 'Salazar González', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121389', 'name' => 'Karen Itzel', 'last_name' => 'Saldaña Quiroz', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121410', 'name' => 'María Angélica', 'last_name' => 'Sotero Reyes', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121415', 'name' => 'Jaqueline', 'last_name' => 'Tomás Basilio', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121445', 'name' => 'Lilibeth Guadalupe', 'last_name' => 'Villegas Lucas', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121447', 'name' => 'Diana Laura ', 'last_name' => 'Viveros Garduño', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 20)->first()->students()->attach($insertedIds);

          /* 5b */
        $users =[
            ['studentId' => '20172121009', 'name' => 'Marlen', 'last_name' => 'Aquino Julian', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121012', 'name' => 'Astrid ', 'last_name' => 'Arroyo Benavides', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121028', 'name' => 'María Luisa', 'last_name' => 'Benavides Bravo', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121029', 'name' => 'Denisse Erubiela', 'last_name' => 'Benitez Barrera', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121034', 'name' => 'Claudia Paulina', 'last_name' => 'Camacho Posadas', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121042', 'name' => 'Ana Fernanda', 'last_name' => 'Casanova Hernández', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121085', 'name' => 'Mariana ', 'last_name' => 'Del Campo Perdomo', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121121', 'name' => 'Jazmin Yulisa', 'last_name' => 'García Serrano', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            //['studentId' => '20172121123', 'name' => 'Zeltzin Del Carmen', 'last_name' => 'Garrido Mendoza', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121151', 'name' => 'María Fernanda ', 'last_name' => 'Hernández Sánchez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121216', 'name' => 'Andrea ', 'last_name' => 'López Quiroz', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121248', 'name' => 'Melissa Mónica', 'last_name' => 'Martínez Hernández', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121253', 'name' => 'María Guadalupe', 'last_name' => 'Martínez Mateo', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121258', 'name' => 'Maricruz', 'last_name' => 'Máximo Carcamo', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121262', 'name' => 'Lisset', 'last_name' => 'Méndez Domínguez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121264', 'name' => 'Mónica Irais', 'last_name' => 'Méndez López', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121284', 'name' => 'Gloria', 'last_name' => 'Moroni Narciso', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121318', 'name' => 'Patricia ', 'last_name' => 'Perdomo Serrano', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121338', 'name' => 'María José', 'last_name' => 'Quijano Zaragoza', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121339', 'name' => 'Joana Lizbeth', 'last_name' => 'Ramírez Castro', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121359', 'name' => 'Vanessa', 'last_name' => 'Reyes Martínez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121361', 'name' => 'Vanesa', 'last_name' => 'Ríos Santiago', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121367', 'name' => 'Carolina', 'last_name' => 'Roano Flores', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121382', 'name' => 'Yaheli', 'last_name' => 'Ruiz Castillo', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121395', 'name' => 'Diana Carolina', 'last_name' => 'Sánchez Preza', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121424', 'name' => 'Lucero de Fátima', 'last_name' => 'Vargas Colorado', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20172121432', 'name' => 'Maricruz ', 'last_name' => 'Vazquez Hernández', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 21)->first()->students()->attach($insertedIds);

        /* 7 */
        $users =[
            ['studentId' => '20162121005', 'name' => 'Liset Jazmin', 'last_name' => 'Agustín Alonso', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121024', 'name' => 'Lesli Vanessa', 'last_name' => 'Castillo Osorio', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121028', 'name' => 'Ana Karen', 'last_name' => 'Cirilo Campos', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121033', 'name' => 'Regina', 'last_name' => 'Cruz Hernández', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121044', 'name' => 'Idania', 'last_name' => 'Gandara Cruz', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121189', 'name' => 'María José', 'last_name' => 'Hernández Montoya', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121067', 'name' => 'Gabriela', 'last_name' => 'Herrera Rodríguez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121076', 'name' => 'Yesica Itzel', 'last_name' => 'López Pérez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121086', 'name' => 'Zulma Vianey', 'last_name' => 'Melgarejo Julian', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121107', 'name' => 'Angélica', 'last_name' => 'Pérez Sánchez', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121223', 'name' => 'Nadia Guadalupe', 'last_name' => 'Pozos de la Cruz', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
            ['studentId' => '20162121112', 'name' => 'Joseline', 'last_name' => 'Rivera Santos', 'password' => bcrypt('evaluacion2020'), 'admin' => 0],
        ];
        $insertedIds = [];
        for ($i = 0; $i < sizeOf($users); $i++) {
            $user = User::firstOrCreate($users[$i]);
            $id = $user->id;
            array_push($insertedIds, $id);
        }
        Group::where('id', 22)->first()->students()->attach($insertedIds);
    }
}
