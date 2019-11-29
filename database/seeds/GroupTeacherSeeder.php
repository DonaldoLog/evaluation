<?php

use Illuminate\Database\Seeder;
use App\Models\Career;
use App\Models\Group;
use App\Models\Teacher;
use App\User;

class GroupTeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            /* 1a */
            $teacher = Teacher::firstOrCreate(['id' => 1, 'name' => 'JESÚS G. DÍAZ MELGAREJO']);
            Group::where('id', 1)->first()->teachers()->attach([$teacher->id => ['subject' => 'TUTORIAS', 'tutoria' => 1]]);
            Group::where('id', 2)->first()->teachers()->attach([$teacher->id => ['subject' => 'INTRODUCCIÓN A LA PSICOLOGÍA']]);
            Group::where('id', 3)->first()->teachers()->attach([$teacher->id => ['subject' => 'INTRODUCCIÓN A LA PSICOLOGÍA']]);
            Group::where('id', 4)->first()->teachers()->attach([$teacher->id => ['subject' => 'INTRODUCCIÓN A LA PSICOLOGÍA']]);
            Group::where('id', 5)->first()->teachers()->attach([$teacher->id => ['subject' => 'PSICOLOGÍA SOCIAL: GRUPOS Y APRENDIZAJE']]);
            Group::where('id', 7)->first()->teachers()->attach([$teacher->id => ['subject' => 'PSICOLOGÍA SOCIAL: GRUPOS Y APRENDIZAJE']]);



            $teacher = Teacher::firstOrCreate(['id' => 2, 'name' => 'HECTOR SANCHEZ GUZMAN']);
            Group::where('id', 1)->first()->teachers()->attach([$teacher->id => ['subject' => 'EL ESTADO MEXICANO Y LOS PROYECTOS EDUCATIVOS']]);
            Group::where('id', 3)->first()->teachers()->attach([$teacher->id => ['subject' => 'EL ESTADO MEXICANO Y LOS PROYECTOS EDUCATIVOS']]);
            Group::where('id', 4)->first()->teachers()->attach([$teacher->id => ['subject' => 'EL ESTADO MEXICANO Y LOS PROYECTOS EDUCATIVOS']]);


            $teacher = Teacher::firstOrCreate(['id' => 3, 'name' => 'CORNELIO BONILLA ROMERO']);
            Group::where('id', 1)->first()->teachers()->attach([$teacher->id => ['subject' => 'FILOSOFIA DE LA EDUCACIÓN 1']]);
            Group::where('id', 2)->first()->teachers()->attach([$teacher->id => ['subject' => 'FILOSOFIA DE LA EDUCACIÓN 2']]);
            Group::where('id', 4)->first()->teachers()->attach([$teacher->id => ['subject' => 'FILOSOFIA DE LA EDUCACIÓN']]);

            $teacher = Teacher::firstOrCreate(['id' => 4, 'name' => 'Héctor Sánchez Méndez']);
            Group::where('id', 23)->first()->teachers()->attach([$teacher->id => ['subject' => 'Experiencias educativas e identidad']]);
            Group::where('id', 24)->first()->teachers()->attach([$teacher->id => ['subject' => 'Sujetos, procesos educativos y grupales']]);
            Group::where('id', 83)->first()->teachers()->attach([$teacher->id => ['subject' => 'Educación e historicidad']]);

            $teacher = Teacher::firstOrCreate(['id' => 5, 'name' => 'Cecilia Aros Alberto ']);
            Group::where('id', 23)->first()->teachers()->attach([$teacher->id => ['subject' => 'Experiencias educativas e identidad']]);

            $teacher = Teacher::firstOrCreate(['id' => 6, 'name' => 'MA. DEL CARMEN MENDOZA OLIVARES']);
            Group::where('id', 1)->first()->teachers()->attach([$teacher->id => ['subject' => 'INTRODUCCIÓN A LA PSICOLOGÍA']]);
            Group::where('id', 2)->first()->teachers()->attach([$teacher->id => ['subject' => 'INTRODUCCIÓN A LA PSICOLOGÍA']]);
            Group::where('id', 5)->first()->teachers()->attach([$teacher->id => ['subject' => 'TURORIAS', 'tutoria' => 1]]);
            Group::where('id', 6)->first()->teachers()->attach([$teacher->id => ['subject' => 'PSICOLOGÍA SOCIAL: GRUPOS Y APRENDIZAJE']]);

            $teacher = Teacher::firstOrCreate(['id' => 7, 'name' => 'Mtra. Leticia Vega Ramos']);
            Group::where('id', 22)->first()->teachers()->attach([$teacher->id => ['subject' => 'Seminario de titulación 1']]);
            Group::where('id', 27)->first()->teachers()->attach([$teacher->id => ['subject' => 'Campos de formación y acción educativa']]);
            Group::where('id', 82)->first()->teachers()->attach([$teacher->id => ['subject' => 'Contenidos particulares de cada campo de formación y acción educativa ']]);

            $teacher = Teacher::firstOrCreate(['id' => 8, 'name' => 'Francisco Daniel Gómez Moran']);
            Group::where('id', 25)->first()->teachers()->attach([$teacher->id => ['subject' => 'Experiencia educativa multidimensional ']]);
            Group::where('id', 24)->first()->teachers()->attach([$teacher->id => ['subject' => 'Sujetos, procesos educativos y grupales ']]);

            $teacher = Teacher::firstOrCreate(['id' => 9, 'name' => 'Julio César Contreras Romano ']);
            Group::where('id', 4)->first()->teachers()->attach([$teacher->id => ['subject' => 'INTRODUCCIÓN A LA PEDAGOGÍA']]);
            Group::where('id', 6)->first()->teachers()->attach([$teacher->id => ['subject' => 'TEORÍA PEDAGÓGICA CONTEMPORÁNEA']]);
            Group::where('id', 10)->first()->teachers()->attach([$teacher->id => ['subject' => 'CURSO O SEMINARIO OPTATIVO 7-III']]);
            Group::where('id', 11)->first()->teachers()->attach([$teacher->id => ['subject' => 'CURSO O SEMINARIO OPTATIVO 7-III']]);

            $teacher = Teacher::firstOrCreate(['id' => 10, 'name' => 'Mtro. Pedro Román Reyes']);
            Group::where('id', 26)->first()->teachers()->attach([$teacher->id => ['subject' => 'Reflexión y acción educativa']]);
            Group::where('id', 24)->first()->teachers()->attach([$teacher->id => ['subject' => 'Sujetos, procesos educativos y grupales ']]);

            $teacher = Teacher::firstOrCreate(['id' => 11, 'name' => 'Mtro. Pedro Román Reyes']);
            Group::where('id', 24)->first()->teachers()->attach([$teacher->id => ['subject' => 'Sujetos, procesos educativos y grupales']]);

            $teacher = Teacher::firstOrCreate(['id' => 12, 'name' => 'Mtro. Pedro Román Reyes']);
            //Group::where('id', 24)->first()->teachers()->attach([$teacher->id => ['subject' => 'Sujetos, procesos educativos y grupales']]);

            $teacher = Teacher::firstOrCreate(['id' => 13, 'name' => 'Mtra. Elizabeth Salazar Gómez']);
            Group::where('id', 16)->first()->teachers()->attach([$teacher->id => ['subject' => 'Elementos básicos de la investigación cuantitativa']]);
            Group::where('id', 18)->first()->teachers()->attach([$teacher->id => ['subject' => 'Entornos virtuales de aprendizaje']]);
            Group::where('id', 18)->first()->teachers()->attach([$teacher->id => ['subject' => 'Tutorías', 'tutoria' => 1]]);
            Group::where('id', 19)->first()->teachers()->attach([$teacher->id => ['subject' => 'Entornos virtuales de aprendizaje']]);
            Group::where('id', 20)->first()->teachers()->attach([$teacher->id => ['subject' => 'Tutorías', 'tutoria' => 1]]);

            $teacher = Teacher::firstOrCreate(['id' => 14, 'name' => 'Adela Rodriguez Martinez']);
            Group::where('id', 16)->first()->teachers()->attach([$teacher->id => ['subject' => 'Cultura e identidad']]);
            Group::where('id', 17)->first()->teachers()->attach([$teacher->id => ['subject' => 'Elementos básicos de la investigación cuantitativa']]);
            Group::where('id', 18)->first()->teachers()->attach([$teacher->id => ['subject' => 'Campo de la educación inicial']]);
            Group::where('id', 19)->first()->teachers()->attach([$teacher->id => ['subject' => 'Campo de la educación inicial']]);

            $teacher = Teacher::firstOrCreate(['id' => 15, 'name' => 'Mtro. David Mc Gregor Lara']);
            Group::where('id', 16)->first()->teachers()->attach([$teacher->id => ['subject' => 'Introducción a la epistemología']]);
            Group::where('id', 19)->first()->teachers()->attach([$teacher->id => ['subject' => 'Diagnósticos socioeducativos']]);
            Group::where('id', 13)->first()->teachers()->attach([$teacher->id => ['subject' => 'CURRICULUM']]);
            Group::where('id', 14)->first()->teachers()->attach([$teacher->id => ['subject' => 'ADECUACIONES CURRICULARES']]);

            $teacher = Teacher::firstOrCreate(['id' => 16, 'name' => 'Lic. Denice Arely García Vernet']);
            Group::where('id', 16)->first()->teachers()->attach([$teacher->id => ['subject' => 'Problemas sociales contemporáneos']]);
            Group::where('id', 17)->first()->teachers()->attach([$teacher->id => ['subject' => 'Problemas sociales contemporáneos']]);
            Group::where('id', 51)->first()->teachers()->attach([$teacher->id => ['subject' => 'Sistemas de información']]);
            Group::where('id', 53)->first()->teachers()->attach([$teacher->id => ['subject' => 'Tecnologías de la información y la comunicación']]);
            Group::where('id', 53)->first()->teachers()->attach([$teacher->id => ['subject' => 'TUTORIAS', 'tutoria' => 1]]);
            Group::where('id', 45)->first()->teachers()->attach([$teacher->id => ['subject' => 'CULTURAS, LENGUAS E IDENTIDADES']]);

            $teacher = Teacher::firstOrCreate(['id' => 17, 'name' => 'Lic. Diana Grijalva Marcos']);
            Group::where('id', 16)->first()->teachers()->attach([$teacher->id => ['subject' => 'Tutorías', 'tutoria' => 1]]);
            Group::where('id', 12)->first()->teachers()->attach([$teacher->id => ['subject' => 'ESTADO, SOCIEDAD Y EDUCACIÓN']]);
            Group::where('id', 12)->first()->teachers()->attach([$teacher->id => ['subject' => 'Tutorías', 'tutoria' => 1]]);
            Group::where('id', 14)->first()->teachers()->attach([$teacher->id => ['subject' => 'ORGANIZACIÓN ESCOLAR']]);
            Group::where('id', 51)->first()->teachers()->attach([$teacher->id => ['subject' => 'Estado, gobierno y sociedad']]);
            Group::where('id', 52)->first()->teachers()->attach([$teacher->id => ['subject' => 'Politicas publicas y educación']]);

            $teacher = Teacher::firstOrCreate(['id' => 18, 'name' => 'Nallely Yenitza Salazar Romero']);
            Group::where('id', 17)->first()->teachers()->attach([$teacher->id => ['subject' => 'Cultura e identidad']]);
            Group::where('id', 51)->first()->teachers()->attach([$teacher->id => ['subject' => 'Introducción a la investigación']]);
            Group::where('id', 53)->first()->teachers()->attach([$teacher->id => ['subject' => 'Diagnostico en la Gestión y administración educativa']]);
            Group::where('id', 54)->first()->teachers()->attach([$teacher->id => ['subject' => 'Prácticas profesionales I']]);

            $teacher = Teacher::firstOrCreate(['id' => 19, 'name' => 'Psic. Griselda Nesticapan Arias']);
            Group::where('id', 17)->first()->teachers()->attach([$teacher->id => ['subject' => 'Introducción a la epistemología']]);
            Group::where('id', 18)->first()->teachers()->attach([$teacher->id => ['subject' => 'Desarrollo infantil']]);
            Group::where('id', 19)->first()->teachers()->attach([$teacher->id => ['subject' => 'Desarrollo infantil']]);
            Group::where('id', 20)->first()->teachers()->attach([$teacher->id => ['subject' => 'Desarrollo físico – motor, la salud y la nutrición en la infancia temprana']]);

            $teacher = Teacher::firstOrCreate(['id' => 20, 'name' => 'Mtro. Fabián García Landero']);
            Group::where('id', 18)->first()->teachers()->attach([$teacher->id => ['subject' => 'Teoría educativa']]);
            Group::where('id', 22)->first()->teachers()->attach([$teacher->id => ['subject' => 'Las actividades directrices del desarrollo de la infancia temprana']]);
            Group::where('id', 13)->first()->teachers()->attach([$teacher->id => ['subject' => 'ESTRATEGIAS DE APRENDIZAJE']]);

            $teacher = Teacher::firstOrCreate(['id' => 21, 'name' => 'Psic. Alma Nayely Gómez Viveros']);
            Group::where('id', 17)->first()->teachers()->attach([$teacher->id => ['subject' => 'Tutorías', 'tutoria' => 1]]);
            Group::where('id', 20)->first()->teachers()->attach([$teacher->id => ['subject' => 'Asesoría y trabajo con grupo']]);
            Group::where('id', 21)->first()->teachers()->attach([$teacher->id => ['subject' => 'Asesoría y trabajo con grupo']]);

            $teacher = Teacher::firstOrCreate(['id' => 22, 'name' => 'Lic. Sonia Castro Hernández']);
            Group::where('id', 18)->first()->teachers()->attach([$teacher->id => ['subject' => 'Diagnósticos socioeducativos']]);
            Group::where('id', 20)->first()->teachers()->attach([$teacher->id => ['subject' => 'La ludoteca como estrategia didáctica y recreativa']]);
            Group::where('id', 21)->first()->teachers()->attach([$teacher->id => ['subject' => 'La ludoteca como estrategia didáctica y recreativa']]);
            Group::where('id', 22)->first()->teachers()->attach([$teacher->id => ['subject' => 'Prácticas Profesionales II']]);
            Group::where('id', 42)->first()->teachers()->attach([$teacher->id => ['subject' => 'Desarrollo infantil']]);

            $teacher = Teacher::firstOrCreate(['id' => 23, 'name' => 'Lic. Jesús Rodríguez Jiménez']);
            Group::where('id', 19)->first()->teachers()->attach([$teacher->id => ['subject' => 'Teoría educativa']]);
            Group::where('id', 22)->first()->teachers()->attach([$teacher->id => ['subject' => 'Familia y comunidad como agentes educativos']]);
            Group::where('id', 1)->first()->teachers()->attach([$teacher->id => ['subject' => 'INTRODUCCIÓN A LA PEDAGOGÍA']]);
            Group::where('id', 2)->first()->teachers()->attach([$teacher->id => ['subject' => 'INTRODUCCIÓN A LA PEDAGOGÍA']]);
            Group::where('id', 3)->first()->teachers()->attach([$teacher->id => ['subject' => 'INTRODUCCIÓN A LA PEDAGOGÍA']]);

            $teacher = Teacher::firstOrCreate(['id' => 24, 'name' => 'Martín Cuautle Cárcamo']);
            Group::where('id', 19)->first()->teachers()->attach([$teacher->id => ['subject' => 'Tutorías', 'tutoria' => 1]]);
            Group::where('id', 22)->first()->teachers()->attach([$teacher->id => ['subject' => 'Conocimiento de sí mismo y la formación de la personalidad']]);
            Group::where('id', 12)->first()->teachers()->attach([$teacher->id => ['subject' => 'INTRODUCCIÓN A LA PSICOLOGÍA']]);
            Group::where('id', 15)->first()->teachers()->attach([$teacher->id => ['subject' => 'TEMAS SELECTOS EN PSICODIAGNOSTICO Y ESTRATEGIAS DE INTERVENSIÓN EDUCATIVA']]);
            Group::where('id', 8)->first()->teachers()->attach([$teacher->id => ['subject' => 'BASES DE LA ORIENTACIÓN EDUCATIVA']]);
            Group::where('id', 9)->first()->teachers()->attach([$teacher->id => ['subject' => 'BASES DE LA ORIENTACIÓN EDUCATIVA']]);
            Group::where('id', 45)->first()->teachers()->attach([$teacher->id => ['subject' => 'INTERCULTURALIDAD, EDUCACIÓN Y COMUNICACIÓN']]);

            $teacher = Teacher::firstOrCreate(['id' => 25, 'name' => 'Lic. Aurelio Pérez Gasca']);
            Group::where('id', 20)->first()->teachers()->attach([$teacher->id => ['subject' => 'Administración y Gestión educativa']]);
            Group::where('id', 21)->first()->teachers()->attach([$teacher->id => ['subject' => 'Administración y Gestión educativa']]);
            Group::where('id', 52)->first()->teachers()->attach([$teacher->id => ['subject' => 'TUTORIA', 'tutoria' => 1]]);

            $teacher = Teacher::firstOrCreate(['id' => 26, 'name' => 'Marybel Peralta Lombard']);
            Group::where('id', 20)->first()->teachers()->attach([$teacher->id => ['subject' => 'Desarrollo de la inteligencia en la primera infancia']]);
            Group::where('id', 12)->first()->teachers()->attach([$teacher->id => ['subject' => 'PSICOLOGÍA EDUCATIVA']]);
            Group::where('id', 15)->first()->teachers()->attach([$teacher->id => ['subject' => 'TEMAS SELECTOS EN FUNDAMENTOS TEORICOS METODOLOGICOS DE PRUEBAS PSICOLOGICAS PARAMETRICAS']]);


            $teacher = Teacher::firstOrCreate(['id' => 27, 'name' => 'Cruz Reynaldo Morato Hernández']);
            Group::where('id', 21)->first()->teachers()->attach([$teacher->id => ['subject' => 'Desarrollo físico – motor, la salud y la nutrición en la infancia temprana']]);
            Group::where('id', 21)->first()->teachers()->attach([$teacher->id => ['subject' => 'Tutorías', 'tutoria' => 1]]);

            $teacher = Teacher::firstOrCreate(['id' => 28, 'name' => 'Octavio Aguilar Meztiza']);
            Group::where('id', 21)->first()->teachers()->attach([$teacher->id => ['subject' => 'Desarrollo de la inteligencia en la primera infancia']]);
            Group::where('id', 16)->first()->teachers()->attach([$teacher->id => ['subject' => 'PSICOLOGÍA SOCIAL DE LA EDUCACIÓN']]);
            Group::where('id', 18)->first()->teachers()->attach([$teacher->id => ['subject' => 'PSICOLOGIA EVOLUTIVA DE LA ADULTEZ Y VEJEZ']]);
            Group::where('id', 20)->first()->teachers()->attach([$teacher->id => ['subject' => 'APRENDIZAJES EN CONTEXTOS ESCOLARES']]);

            $teacher = Teacher::firstOrCreate(['id' => 29, 'name' => 'Víctor M. Castillo Vera']);
            Group::where('id', 22)->first()->teachers()->attach([$teacher->id => ['subject' => 'Proyectos de animación sociocultural']]);
            Group::where('id', 5)->first()->teachers()->attach([$teacher->id => ['subject' => 'TEORÍA PEDAGÓGICA CONTEMPORÁNEA']]);
            Group::where('id', 6)->first()->teachers()->attach([$teacher->id => ['subject' => 'TUTORIA', 'tutoria' => 1]]);
            Group::where('id', 8)->first()->teachers()->attach([$teacher->id => ['subject' => 'INVESTIGACIÓN EDUCATIVA I']]);
            Group::where('id', 9)->first()->teachers()->attach([$teacher->id => ['subject' => 'INVESTIGACIÓN EDUCATIVA I']]);

            $teacher = Teacher::firstOrCreate(['id' => 30, 'name' => 'DANIEL REYES SALAZAR']);
            Group::where('id', 12)->first()->teachers()->attach([$teacher->id => ['subject' => 'PSICOLOGÍA EVOLUTIVA DE LA INFANCIA']]);
            Group::where('id', 13)->first()->teachers()->attach([$teacher->id => ['subject' => 'TUTORIAS', 'tutoria' => 1]]);
            Group::where('id', 14)->first()->teachers()->attach([$teacher->id => ['subject' => 'TUTORIAS', 'tutoria' => 1]]);
            Group::where('id', 15)->first()->teachers()->attach([$teacher->id => ['subject' => 'INVESTIGACIÓN EDUCATIVA I']]);

            $teacher = Teacher::firstOrCreate(['id' => 31, 'name' => 'EMANUEL CABILDO GONZALEZ']);
            Group::where('id', 13)->first()->teachers()->attach([$teacher->id => ['subject' => 'COMUNICACIÓN E INTERACCION SOCIAL']]);
            Group::where('id', 14)->first()->teachers()->attach([$teacher->id => ['subject' => 'COMUNICACIÓN EDUCATIVA']]);


            $teacher = Teacher::firstOrCreate(['id' => 32, 'name' => 'MARTIN LÓPEZ VILLA']);
            Group::where('id', 13)->first()->teachers()->attach([$teacher->id => ['subject' => 'ESTADISTICA II']]);
            Group::where('id', 14)->first()->teachers()->attach([$teacher->id => ['subject' => 'METODOS CUANTITATIVOS']]);

            $teacher = Teacher::firstOrCreate(['id' => 33, 'name' => 'MA. DANAE HERNANDEZ LOPEZ']);
            Group::where('id', 1)->first()->teachers()->attach([$teacher->id => ['subject' => 'CIENCIA Y SOCIEDAD']]);
            Group::where('id', 2)->first()->teachers()->attach([$teacher->id => ['subject' => 'Tutorías', 'tutoria' => 1]]);

            $teacher = Teacher::firstOrCreate(['id' => 34, 'name' => 'ROGELIO TOLEDANO ORTEGA']);
            Group::where('id', 15)->first()->teachers()->attach([$teacher->id => ['subject' => 'TALLER DE PRACTICAS PROFESIONALES']]);

            $teacher = Teacher::firstOrCreate(['id' => 35, 'name' => 'MARILÚ SESEÑA SÁNCHEZ']);
            Group::where('id', 2)->first()->teachers()->attach([$teacher->id => ['subject' => 'EL ESTADO MEXICANO Y LOS PROYECTOS EDUCATIVOS (1857-1920)']]);
            Group::where('id', 7)->first()->teachers()->attach([$teacher->id => ['subject' => 'TEORÍA PEDAGÓGICA CONTEMPORÁNEA']]);
            Group::where('id', 8)->first()->teachers()->attach([$teacher->id => ['subject' => 'TEORÍA CURRICULAR']]);
            Group::where('id', 9)->first()->teachers()->attach([$teacher->id => ['subject' => 'TEORÍA CURRICULAR']]);
            Group::where('id', 46)->first()->teachers()->attach([$teacher->id => ['subject' => 'GENERO E INTERCULTURALIDAD']]);

            $teacher = Teacher::firstOrCreate(['id' => 36, 'name' => 'PAULETTE OSORIO HERNANDEZ']);
            Group::where('id', 3)->first()->teachers()->attach([$teacher->id => ['subject' => 'FILOSOFIA DE LA EDUCACIÓN']]);
            Group::where('id', 10)->first()->teachers()->attach([$teacher->id => ['subject' => 'CURSO O SEMINARIO OPTATIVO 7-II']]);
            Group::where('id', 11)->first()->teachers()->attach([$teacher->id => ['subject' => 'CURSO O SEMINARIO OPTATIVO 7-II']]);

            $teacher = Teacher::firstOrCreate(['id' => 37, 'name' => 'MA. MAGDALENA TORRES VILLA']);
            Group::where('id', 4)->first()->teachers()->attach([$teacher->id => ['subject' => 'TUTORIAS', 'tutoria' => 1]]);
            Group::where('id', 10)->first()->teachers()->attach([$teacher->id => ['subject' => 'CURSO O SEMINARIO OPTATIVO 7-II']]);
            Group::where('id', 11)->first()->teachers()->attach([$teacher->id => ['subject' => 'CURSO O SEMINARIO OPTATIVO 7-II']]);
            Group::where('id', 84)->first()->teachers()->attach([$teacher->id => ['subject' => 'ESPECIALIZADO 1']]);
            Group::where('id', 85)->first()->teachers()->attach([$teacher->id => ['subject' => 'ESPECIALIZADO 2']]);

            $teacher = Teacher::firstOrCreate(['id' => 38, 'name' => 'MANUELA PALAFOX CARDOSO']);
            Group::where('id', 2)->first()->teachers()->attach([$teacher->id => ['subject' => 'CIENCIA Y SOCIEDAD']]);
            Group::where('id', 3)->first()->teachers()->attach([$teacher->id => ['subject' => 'CIENCIA Y SOCIEDAD']]);
            Group::where('id', 4)->first()->teachers()->attach([$teacher->id => ['subject' => 'CIENCIA Y SOCIEDAD']]);

            $teacher = Teacher::firstOrCreate(['id' => 39, 'name' => 'GONZALO MARQUEZ GONZALEZ']);
            Group::where('id', 5)->first()->teachers()->attach([$teacher->id => ['subject' => 'CRISIS Y EDUCACIÓN EN EL MÉXICO ACTUAL (1968-1990)']]);
            Group::where('id', 6)->first()->teachers()->attach([$teacher->id => ['subject' => 'CRISIS Y EDUCACIÓN EN EL MÉXICO ACTUAL (1968-1990)']]);
            Group::where('id', 7)->first()->teachers()->attach([$teacher->id => ['subject' => 'CRISIS Y EDUCACIÓN EN EL MÉXICO ACTUAL (1968-1990)']]);
            Group::where('id', 53)->first()->teachers()->attach([$teacher->id => ['subject' => 'Evaluación de políticas públicas']]);

            $teacher = Teacher::firstOrCreate(['id' => 40, 'name' => 'JUDITH SALAZAR MURRIETA']);
            Group::where('id', 3)->first()->teachers()->attach([$teacher->id => ['subject' => 'TUTORIAS', 'tutoria' => 1]]);
            Group::where('id', 8)->first()->teachers()->attach([$teacher->id => ['subject' => 'COMUNICACIÓN, CULTURA Y EDUCACIÓN']]);
            Group::where('id', 9)->first()->teachers()->attach([$teacher->id => ['subject' => 'COMUNICACIÓN, CULTURA Y EDUCACIÓN']]);
            Group::where('id', 48)->first()->teachers()->attach([$teacher->id => ['subject' => 'BASES TEÓRICAS Y DIDÁCTICAS DE LAS PERSPECTIVAS DE LA LENGUA']]);
            Group::where('id', 50)->first()->teachers()->attach([$teacher->id => ['subject' => 'ANÁLISIS DE LA GESTIÓN Y ORGANIZACIÓN EN LA EDUCACIÓN BÁSICA']]);

            $teacher = Teacher::firstOrCreate(['id' => 41, 'name' => 'OLIVER MORA JUAREZ']);
            Group::where('id', 5)->first()->teachers()->attach([$teacher->id => ['subject' => 'ASPECTOS SOCIALES DE LA EDUCACIÓN']]);
            Group::where('id', 6)->first()->teachers()->attach([$teacher->id => ['subject' => 'ASPECTOS SOCIALES DE LA EDUCACIÓN']]);
            Group::where('id', 8)->first()->teachers()->attach([$teacher->id => ['subject' => 'TUTORIAS', 'tutoria' => 1]]);

            $teacher = Teacher::firstOrCreate(['id' => 42, 'name' => 'Ivonne Galindo García']);
            Group::where('id', 51)->first()->teachers()->attach([$teacher->id => ['subject' => 'Fundamentos de sistemas educativos']]);
            Group::where('id', 52)->first()->teachers()->attach([$teacher->id => ['subject' => 'Problemas actuales del sistema educativo']]);
            Group::where('id', 53)->first()->teachers()->attach([$teacher->id => ['subject' => 'Planeación y evaluación educativas']]);

            $teacher = Teacher::firstOrCreate(['id' => 43, 'name' => 'AGUSTIN LIMON PEREZ']);
            Group::where('id', 5)->first()->teachers()->attach([$teacher->id => ['subject' => 'ESTADÍSTICA DESCRIPTIVA EN EDUCACIÓN']]);
            Group::where('id', 6)->first()->teachers()->attach([$teacher->id => ['subject' => 'ESTADÍSTICA DESCRIPTIVA EN EDUCACIÓN']]);
            Group::where('id', 7)->first()->teachers()->attach([$teacher->id => ['subject' => 'ESTADÍSTICA DESCRIPTIVA EN EDUCACIÓN']]);

            $teacher = Teacher::firstOrCreate(['id' => 44, 'name' => 'Guadalupe del Carmen García Betancourt']);
            Group::where('id', 51)->first()->teachers()->attach([$teacher->id => ['subject' => 'Fundamentos de la administración y la Gestión educativa']]);
            Group::where('id', 52)->first()->teachers()->attach([$teacher->id => ['subject' => '"Estadística e indicadores educativos']]);
            Group::where('id', 53)->first()->teachers()->attach([$teacher->id => ['subject' => 'Administración y gestión de organizaciones educativas']]);
            Group::where('id', 54)->first()->teachers()->attach([$teacher->id => ['subject' => 'Evaluación de la gestión educativa en educación básica']]);

            $teacher = Teacher::firstOrCreate(['id' => 45, 'name' => 'LETICIA TORRES LÓPEZ']);
            Group::where('id', 7)->first()->teachers()->attach([$teacher->id => ['subject' => 'TUTORIA', 'tutoria' => 1]]);
            Group::where('id', 76)->first()->teachers()->attach([$teacher->id => ['subject' => 'Sociedad y educación']]);
            Group::where('id', 78)->first()->teachers()->attach([$teacher->id => ['subject' => 'Sociedad y educación']]);
            Group::where('id', 79)->first()->teachers()->attach([$teacher->id => ['subject' => 'Lengua, grupos étnicos y sociedad nacional']]);
            Group::where('id', 75)->first()->teachers()->attach([$teacher->id => ['subject' => 'Sociedad y educación']]);
            Group::where('id', 77)->first()->teachers()->attach([$teacher->id => ['subject' => 'Sociedad y educación']]);

            $teacher = Teacher::firstOrCreate(['id' => 46, 'name' => 'Silvia Angélica Argüelles Chacón']);
            Group::where('id', 51)->first()->teachers()->attach([$teacher->id => ['subject' => 'Teorías de la organización']]);
            Group::where('id', 51)->first()->teachers()->attach([$teacher->id => ['subject' => 'TUTORIAS', 'tutoria' => 1]]);
            Group::where('id', 52)->first()->teachers()->attach([$teacher->id => ['subject' => 'Economía y educación']]);
            Group::where('id', 52)->first()->teachers()->attach([$teacher->id => ['subject' => 'Herramientas para la gestión y administración educativa']]);
            Group::where('id', 53)->first()->teachers()->attach([$teacher->id => ['subject' => 'Innovación y cambio organizacional ']]);
            Group::where('id', 54)->first()->teachers()->attach([$teacher->id => ['subject' => 'Elaboración de instrumentos de recopilación de datos ']]);
            Group::where('id', 45)->first()->teachers()->attach([$teacher->id => ['subject' => 'Administración y gestión educativa']]);

            $teacher = Teacher::firstOrCreate(['id' => 47, 'name' => 'MA. TEODORA ALONSO MANZANO']);
            Group::where('id', 7)->first()->teachers()->attach([$teacher->id => ['subject' => 'ASPECTOS SOCIALES DE LA EDUCACIÓN']]);

            $teacher = Teacher::firstOrCreate(['id' => 48, 'name' => 'ISRAEL AGUILAR LANDERO']);
            Group::where('id', 10)->first()->teachers()->attach([$teacher->id => ['subject' => 'SEMINARIO DE TESIS I']]);
            Group::where('id', 11)->first()->teachers()->attach([$teacher->id => ['subject' => 'SEMINARIO DE TESIS I']]);
            Group::where('id', 40)->first()->teachers()->attach([$teacher->id => ['subject' => 'ELEMENTOS BÁSICOS DE LA INVESTIGACIÓN CUANTITATIVA']]);

            $teacher = Teacher::firstOrCreate(['id' => 49, 'name' => 'Ofelia Ascensión Salvador']);
            Group::where('id', 38)->first()->teachers()->attach([$teacher->id => ['subject' => 'Análisis de la práctica docente']]);
            Group::where('id', 39)->first()->teachers()->attach([$teacher->id => ['subject' => 'Análisis de la práctica docente']]);
            Group::where('id', 42)->first()->teachers()->attach([$teacher->id => ['subject' => 'Metodología de la investigación III']]);
            Group::where('id', 43)->first()->teachers()->attach([$teacher->id => ['subject' => 'Lengua, grupos étnicos y sociedad nacional']]);

            $teacher = Teacher::firstOrCreate(['id' => 50, 'name' => 'ROSA MARIA GALINDO LOPEZ']);
            Group::where('id', 8)->first()->teachers()->attach([$teacher->id => ['subject' => 'ORGANIZACIÓN Y GESTIÓN DE INSTITUCIONES EDUCATIVAS']]);
            Group::where('id', 9)->first()->teachers()->attach([$teacher->id => ['subject' => 'ORGANIZACIÓN Y GESTIÓN DE INSTITUCIONES EDUCATIVAS']]);
            Group::where('id', 28)->first()->teachers()->attach([$teacher->id => ['subject' => 'Análisis de la práctica profesional']]);

            $teacher = Teacher::firstOrCreate(['id' => 51, 'name' => 'Zenaido Valentín  Hernández']);
            Group::where('id', 76)->first()->teachers()->attach([$teacher->id => ['subject' => 'Cultura y educación']]);
            Group::where('id', 78)->first()->teachers()->attach([$teacher->id => ['subject' => 'Cultura y educación']]);
            Group::where('id', 79)->first()->teachers()->attach([$teacher->id => ['subject' => 'Historia, sociedad y educación II']]);
            Group::where('id', 75)->first()->teachers()->attach([$teacher->id => ['subject' => 'Cultura y educación']]);
            Group::where('id', 77)->first()->teachers()->attach([$teacher->id => ['subject' => 'Cultura y educación']]);

            $teacher = Teacher::firstOrCreate(['id' => 52, 'name' => 'BLANCA NORMA IBARRA TEPEPA']);
            Group::where('id', 9)->first()->teachers()->attach([$teacher->id => ['subject' => 'Tutorias', 'tutoria' => 1]]);

            $teacher = Teacher::firstOrCreate(['id' => 53, 'name' => 'Antonio Espíritu Flores']);
            Group::where('id', 76)->first()->teachers()->attach([$teacher->id => ['subject' => 'Metodología de la investigación I']]);
            Group::where('id', 80)->first()->teachers()->attach([$teacher->id => ['subject' => 'Historia, sociedad y educación II']]);
            Group::where('id', 81)->first()->teachers()->attach([$teacher->id => ['subject' => 'Criterios para propiciar aprendizajes significativos en el aula/ Organización de actividades de aprendizaje']]);
            Group::where('id', 82)->first()->teachers()->attach([$teacher->id => ['subject' => 'Matemática y educación indígena II ']]);
            Group::where('id', 75)->first()->teachers()->attach([$teacher->id => ['subject' => 'Metodología de la investigación I']]);

            $teacher = Teacher::firstOrCreate(['id' => 54, 'name' => 'ADELA MARTÍNEZ RODRIGUEZ']);
            Group::where('id', 17)->first()->teachers()->attach([$teacher->id => ['subject' => 'ELEMENTOS BÁSICOS DE INVESTIGACIÓN CUANTITATIVA']]);

            $teacher = Teacher::firstOrCreate(['id' => 55, 'name' => 'Placida Rosas Bibiano']);
            Group::where('id', 77)->first()->teachers()->attach([$teacher->id => ['subject' => 'Metodología de la investigación I']]);
            Group::where('id', 80)->first()->teachers()->attach([$teacher->id => ['subject' => 'Metodología de la investigación III']]);
            Group::where('id', 81)->first()->teachers()->attach([$teacher->id => ['subject' => 'Metodología de la investigación V']]);
            Group::where('id', 82)->first()->teachers()->attach([$teacher->id => ['subject' => 'Estrategias para el desarrollo pluricultural de la lengua oral y escrita II']]);
            Group::where('id', 72)->first()->teachers()->attach([$teacher->id => ['subject' => 'Metodología de la investigación III']]);
            Group::where('id', 73)->first()->teachers()->attach([$teacher->id => ['subject' => 'Criterios para propiciar aprendizajes significativos en el aula y Organización de actividades para el Aprendizaje.']]);
            Group::where('id', 74)->first()->teachers()->attach([$teacher->id => ['subject' => 'Estrategias para el desarrollo pluricultural de la lengua oral y escrita II']]);
            Group::where('id', 78)->first()->teachers()->attach([$teacher->id => ['subject' => 'Metodología de la investigación I']]);

            $teacher = Teacher::firstOrCreate(['id' => 56, 'name' => 'Julio Reyes Soto']);
            Group::where('id', 79)->first()->teachers()->attach([$teacher->id => ['subject' => 'Desarrollo del niño y aprendizaje escolar']]);
            Group::where('id', 81)->first()->teachers()->attach([$teacher->id => ['subject' => 'Identidad étnica y educación indígena']]);
            Group::where('id', 82)->first()->teachers()->attach([$teacher->id => ['subject' => 'El desarrollo de estrategias didáctica para el campo de conocimiento  de la naturaleza']]);

            $teacher = Teacher::firstOrCreate(['id' => 57, 'name' => 'Julio Reyes Soto']);
            Group::where('id', 81)->first()->teachers()->attach([$teacher->id => ['subject' => 'Taller de Redacción']]);

            $teacher = Teacher::firstOrCreate(['id' => 58, 'name' => 'Lucero Abraham Guarneros']);
            Group::where('id', 82)->first()->teachers()->attach([$teacher->id => ['subject' => 'El campo de lo social y la educación indígena II']]);

            $teacher = Teacher::firstOrCreate(['id' => 59, 'name' => 'MAYRA HERNÁNDEZ GOMEZ']);
            Group::where('id', 45)->first()->teachers()->attach([$teacher->id => ['subject' => 'ASESORÍA Y TRABAJO CON GRUPO']]);

            $teacher = Teacher::firstOrCreate(['id' => 60, 'name' => 'DANIELA BARRIENTOS ROA']);
            Group::where('id', 45)->first()->teachers()->attach([$teacher->id => ['subject' => 'HISTORIA DE LAS CULTURAS ÍNDIGENAS']]);

            $teacher = Teacher::firstOrCreate(['id' => 61, 'name' => 'Néxtor Torres Ahuat']);
            Group::where('id', 68)->first()->teachers()->attach([$teacher->id => ['subject' => 'Análisis de la Práctica Docente']]);
            Group::where('id', 69)->first()->teachers()->attach([$teacher->id => ['subject' => 'Análisis de la Práctica Docente']]);
            Group::where('id', 71)->first()->teachers()->attach([$teacher->id => ['subject' => 'Metodología de la investigación III']]);
            Group::where('id', 72)->first()->teachers()->attach([$teacher->id => ['subject' => 'HISTORIA DE LAS CULTURAS ÍNDIGENAS']]);
            Group::where('id', 67)->first()->teachers()->attach([$teacher->id => ['subject' => 'Historia, sociedad y educación II']]);

            $teacher = Teacher::firstOrCreate(['id' => 62, 'name' => 'Yobany Bianey Aco Bonilla']);
            Group::where('id', 67)->first()->teachers()->attach([$teacher->id => ['subject' => 'Sociedad y Educación']]);
            Group::where('id', 69)->first()->teachers()->attach([$teacher->id => ['subject' => 'Sociedad y Educación']]);
            Group::where('id', 71)->first()->teachers()->attach([$teacher->id => ['subject' => 'Desarrollo del Niño y Aprendizaje Escolar.']]);
            Group::where('id', 72)->first()->teachers()->attach([$teacher->id => ['subject' => 'Desarrollo del Niño y Aprendizaje Escolar.']]);
            Group::where('id', 68)->first()->teachers()->attach([$teacher->id => ['subject' => 'Sociedad y Educación']]);

            $teacher = Teacher::firstOrCreate(['id' => 63, 'name' => 'Nelly Reyes Félix']);
            Group::where('id', 29)->first()->teachers()->attach([$teacher->id => ['subject' => 'Análisis de la práctica profesional']]);

            $teacher = Teacher::firstOrCreate(['id' => 64, 'name' => 'Lorenzo Domínguez Beatriz']);
            Group::where('id', 72)->first()->teachers()->attach([$teacher->id => ['subject' => 'Lenguas, Grupos Étnicos y Sociedad Nacional.']]);
            Group::where('id', 73)->first()->teachers()->attach([$teacher->id => ['subject' => 'Identidad étnica y Educación Indígena ']]);
            Group::where('id', 74)->first()->teachers()->attach([$teacher->id => ['subject' => 'Desarrollo y Estrategias Didácticas para el Campo del Conocimiento de la Naturaleza.']]);
            Group::where('id', 71)->first()->teachers()->attach([$teacher->id => ['subject' => 'Lenguas, Grupos Étnicos y Sociedad Nacional.']]);

            $teacher = Teacher::firstOrCreate(['id' => 65, 'name' => 'Edith Lyions López']);
            Group::where('id', 30)->first()->teachers()->attach([$teacher->id => ['subject' => 'Análisis de la práctica profesional']]);
            Group::where('id', 31)->first()->teachers()->attach([$teacher->id => ['subject' => 'Evaluación de la práctica profesional']]);

            $teacher = Teacher::firstOrCreate(['id' => 66, 'name' => 'Antonio Juárez Peralta']);
            Group::where('id', 73)->first()->teachers()->attach([$teacher->id => ['subject' => 'Taller de Redacción']]);
            Group::where('id', 71)->first()->teachers()->attach([$teacher->id => ['subject' => 'Historia, sociedad y educación II ']]);
            Group::where('id', 69)->first()->teachers()->attach([$teacher->id => ['subject' => 'Cultura y Educación']]);
            Group::where('id', 67)->first()->teachers()->attach([$teacher->id => ['subject' => 'Cultura y Educación']]);
            Group::where('id', 68)->first()->teachers()->attach([$teacher->id => ['subject' => 'Cultura y Educación']]);

            $teacher = Teacher::firstOrCreate(['id' => 67, 'name' => 'Roberto Rivera Martínez']);
            Group::where('id', 49)->first()->teachers()->attach([$teacher->id => ['subject' => 'DÓNDE Y CÓMO HEMOS VIVIDO']]);

            $teacher = Teacher::firstOrCreate(['id' => 68, 'name' => 'JOSÉ FERMÍN OSORIO SANTOS']);
            Group::where('id', 83)->first()->teachers()->attach([$teacher->id => ['subject' => 'COMPETENCIAS PARA LA DOCENCIA']]);

            $teacher = Teacher::firstOrCreate(['id' => 69, 'name' => 'Gervasio Lucas Hernández']);
            Group::where('id', 69)->first()->teachers()->attach([$teacher->id => ['subject' => 'Metodología de la Investigación I ']]);
            Group::where('id', 67)->first()->teachers()->attach([$teacher->id => ['subject' => 'Metodología de la Investigación I']]);
            Group::where('id', 73)->first()->teachers()->attach([$teacher->id => ['subject' => 'Metodología de la investigación V']]);
            Group::where('id', 74)->first()->teachers()->attach([$teacher->id => ['subject' => 'Matemáticas y Educación Indígena II']]);
            Group::where('id', 68)->first()->teachers()->attach([$teacher->id => ['subject' => 'Metodología de la Investigación I ']]);

            $teacher = Teacher::firstOrCreate(['id' => 70, 'name' => 'Zeferino Ramos Peralta']);
            Group::where('id', 74)->first()->teachers()->attach([$teacher->id => ['subject' => 'El campo de lo social y la educación indígena II']]);

            $teacher = Teacher::firstOrCreate(['id' => 71, 'name' => 'Modesto Serrano Ordóñez']);
            Group::where('id', 55)->first()->teachers()->attach([$teacher->id => ['subject' => 'Análisis de la práctica docente']]);
            Group::where('id', 57)->first()->teachers()->attach([$teacher->id => ['subject' => 'Historia, sociedad y educación II     ']]);
            Group::where('id', 60)->first()->teachers()->attach([$teacher->id => ['subject' => 'Identidad étnica y educación indígena   ']]);
            Group::where('id', 61)->first()->teachers()->attach([$teacher->id => ['subject' => 'El campo de lo social y la educación indígena II']]);
            Group::where('id', 56)->first()->teachers()->attach([$teacher->id => ['subject' => 'Análisis de la práctica docente']]);

            $teacher = Teacher::firstOrCreate(['id' => 72, 'name' => 'Luisa Ríos Hernández']);
            Group::where('id', 55)->first()->teachers()->attach([$teacher->id => ['subject' => 'Sociedad y educación']]);
            Group::where('id', 57)->first()->teachers()->attach([$teacher->id => ['subject' => 'Lengua, grupos étnicos y sociedad nacional']]);
            Group::where('id', 58)->first()->teachers()->attach([$teacher->id => ['subject' => 'Lengua, grupos étnicos y sociedad nacional']]);
            Group::where('id', 59)->first()->teachers()->attach([$teacher->id => ['subject' => 'Identidad étnica y educación indígena']]);
            Group::where('id', 56)->first()->teachers()->attach([$teacher->id => ['subject' => 'Sociedad y educación']]);

            $teacher = Teacher::firstOrCreate(['id' => 73, 'name' => 'Salvador Espinoza Juan']);
            Group::where('id', 55)->first()->teachers()->attach([$teacher->id => ['subject' => 'Cultura y educación']]);
            Group::where('id', 58)->first()->teachers()->attach([$teacher->id => ['subject' => 'Historia, sociedad y educación II']]);
            Group::where('id', 59)->first()->teachers()->attach([$teacher->id => ['subject' => 'Criterios para propiciar aprendizajes significativos en el aula/ Organización de actividades de aprendizaje']]);
            Group::where('id', 59)->first()->teachers()->attach([$teacher->id => ['subject' => 'Taller de Redacción']]);
            Group::where('id', 56)->first()->teachers()->attach([$teacher->id => ['subject' => 'Cultura y educación']]);

            $teacher = Teacher::firstOrCreate(['id' => 74, 'name' => 'Héctor Gutiérrez Landero']);
            Group::where('id', 55)->first()->teachers()->attach([$teacher->id => ['subject' => 'Metodología de la investigación I']]);
            Group::where('id', 57)->first()->teachers()->attach([$teacher->id => ['subject' => 'Metodología de la investigación II']]);
            Group::where('id', 58)->first()->teachers()->attach([$teacher->id => ['subject' => 'Metodología de la investigación III']]);
            Group::where('id', 61)->first()->teachers()->attach([$teacher->id => ['subject' => 'El desarrollo de estrategias didáctica para el campo de conocimiento  de la naturaleza']]);
            Group::where('id', 56)->first()->teachers()->attach([$teacher->id => ['subject' => 'Metodología de la investigación I            ']]);

            $teacher = Teacher::firstOrCreate(['id' => 75, 'name' => 'Rosaliano Desion Castillo']);
            Group::where('id', 57)->first()->teachers()->attach([$teacher->id => ['subject' => 'Desarrollo del niño y aprendizaje escolar']]);
            Group::where('id', 58)->first()->teachers()->attach([$teacher->id => ['subject' => 'Desarrollo del niño y aprendizaje escolar']]);
            Group::where('id', 60)->first()->teachers()->attach([$teacher->id => ['subject' => 'El desarrollo de estrategias didáctica para el campo de conocimiento  de la naturaleza']]);


            $teacher = Teacher::firstOrCreate(['id' => 76, 'name' => 'Juan Martínez Santiago']);
            Group::where('id', 59)->first()->teachers()->attach([$teacher->id => ['subject' => 'Metodología de la investigación V']]);
            Group::where('id', 60)->first()->teachers()->attach([$teacher->id => ['subject' => 'Metodología de la investigación V']]);
            Group::where('id', 61)->first()->teachers()->attach([$teacher->id => ['subject' => 'Estrategias para el desarrollo pluricultural de la lengua oral y escrita II']]);


            $teacher = Teacher::firstOrCreate(['id' => 77, 'name' => 'Jesús Gálvez Rodríguez']);
            Group::where('id', 60)->first()->teachers()->attach([$teacher->id => ['subject' => 'Taller de Redacción']]);
            Group::where('id', 61)->first()->teachers()->attach([$teacher->id => ['subject' => 'Matemática y educación indígena II']]);

            $teacher = Teacher::firstOrCreate(['id' => 78, 'name' => 'Olga Huiyextahuac Damián']);
            Group::where('id', 62)->first()->teachers()->attach([$teacher->id => ['subject' => 'Análisis de la práctica docente']]);
            Group::where('id', 64)->first()->teachers()->attach([$teacher->id => ['subject' => 'Metodología de la investigación III']]);
            Group::where('id', 65)->first()->teachers()->attach([$teacher->id => ['subject' => 'Metodología de la investigación V']]);
            Group::where('id', 66)->first()->teachers()->attach([$teacher->id => ['subject' => 'El campo de lo social y la educación indígena II']]);
            Group::where('id', 63)->first()->teachers()->attach([$teacher->id => ['subject' => 'Análisis de la práctica docente']]);

            $teacher = Teacher::firstOrCreate(['id' => 79, 'name' => 'Armando Hernández García']);
            Group::where('id', 62)->first()->teachers()->attach([$teacher->id => ['subject' => 'Sociedad y educación']]);
            Group::where('id', 65)->first()->teachers()->attach([$teacher->id => ['subject' => 'Identidad étnica y educación indígena']]);
            Group::where('id', 63)->first()->teachers()->attach([$teacher->id => ['subject' => 'Sociedad y educación']]);

            $teacher = Teacher::firstOrCreate(['id' => 80, 'name' => 'Jovita Hernández Tzapotl']);
            Group::where('id', 62)->first()->teachers()->attach([$teacher->id => ['subject' => 'Cultura y educación']]);
            Group::where('id', 64)->first()->teachers()->attach([$teacher->id => ['subject' => 'Desarrollo del niño y aprendizaje escolar']]);
            Group::where('id', 65)->first()->teachers()->attach([$teacher->id => ['subject' => 'Criterios para propiciar aprendizajes significativos en el aula/ Organización de actividades de aprendizaje']]);
            Group::where('id', 66)->first()->teachers()->attach([$teacher->id => ['subject' => 'Estrategias para el desarrollo pluricultural de la lengua oral y escrita II']]);
            Group::where('id', 63)->first()->teachers()->attach([$teacher->id => ['subject' => 'Cultura y educación']]);


            $teacher = Teacher::firstOrCreate(['id' => 81, 'name' => 'Juan Ignacio Hernández Vázquez']);
            Group::where('id', 62)->first()->teachers()->attach([$teacher->id => ['subject' => 'Metodología de la investigación I']]);
            Group::where('id', 65)->first()->teachers()->attach([$teacher->id => ['subject' => 'Taller de Redacción']]);
            Group::where('id', 66)->first()->teachers()->attach([$teacher->id => ['subject' => 'Matemáticas y educación indígena II']]);
            Group::where('id', 63)->first()->teachers()->attach([$teacher->id => ['subject' => 'Metodología de la investigación I']]);


            $teacher = Teacher::firstOrCreate(['id' => 82, 'name' => 'Antonio Huiyixtahual Tepancal']);
            Group::where('id', 66)->first()->teachers()->attach([$teacher->id => ['subject' => 'El desarrollo de estrategias didáctica para el campo de conocimiento  de la naturaleza']]);
            Group::where('id', 64)->first()->teachers()->attach([$teacher->id => ['subject' => 'Lengua, grupos étnicos y sociedad nacional']]);

            $teacher = Teacher::firstOrCreate(['id' => 83, 'name' => 'Joel Vázquez Cordero']);
            Group::where('id', 64)->first()->teachers()->attach([$teacher->id => ['subject' => 'Historia, sociedad y educación II']]);
    }
}
