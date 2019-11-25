<?php

use App\Models\Question;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Question::insert([
            ['formId' => 1, 'name' =>  'Al finalizar el curso aplicó evaluación final , clarificando mecanismos de evaluación, atendiendo dudas sobre tus resultados y respetando lo presentado al inicio del semestre.', 'type' => 1],
            ['formId' => 1, 'name' =>  'Al iniciar el semestre, presentó su planeación y construyó acuerdos.', 'type' => 1],
            ['formId' => 1, 'name' =>  'Dominio de la asignatura que imparte', 'type' => 1],
            ['formId' => 1, 'name' =>  'Durante el periodo respetó la planeación, formas y criterios de trabajo planteados al inicio del semestre.', 'type' => 1],
            ['formId' => 1, 'name' =>  'Evalúa permanentemente nuestro desempeño y aprendizajes', 'type' => 1],
            ['formId' => 1, 'name' =>  'Fomentó los valores y el compromiso con nuestra formación, institución y con nosotros mismos.', 'type' => 1],
            ['formId' => 1, 'name' =>  'Genera confianza para aclarar dudas fuera del aula.', 'type' => 1],
            ['formId' => 1, 'name' =>  'Genera proyectos, motiva acciones dentro y fuera de nuestra Universidad.', 'type' => 1],
            ['formId' => 1, 'name' =>  'Impulsa el trabajo en equipo.', 'type' => 1],
            ['formId' => 1, 'name' =>  'Integra a mi grupo a las diversas actividades y eventos institucionales participando activamente.', 'type' => 1],
            ['formId' => 1, 'name' =>  'Invita a formar parte institucional de nuestra universidad.', 'type' => 1],
            ['formId' => 1, 'name' =>  'Logró aprendizajes útiles para ti.', 'type' => 1],
            ['formId' => 1, 'name' =>  'Logró desarrollar los objetivos planteados al inicio del curso.', 'type' => 1],
            ['formId' => 1, 'name' =>  'Motiva la participación en las sesiones.', 'type' => 1],
            ['formId' => 1, 'name' =>  'Muestra preparación en su sesión', 'type' => 1],
            ['formId' => 1, 'name' =>  'Promovió un ambiente de trabajo armónico y productivo en las sesiones.', 'type' => 1],
            ['formId' => 1, 'name' =>  'Promueve la lectura y análisis de textos.', 'type' => 1],
            ['formId' => 1, 'name' =>  'Propicia el análisis y la reflexión.', 'type' => 1],
            ['formId' => 1, 'name' =>  'Relaciona contenidos con problemas o situaciones actuales.', 'type' => 1],
            ['formId' => 1, 'name' =>  'Respeta los horarios de sesión', 'type' => 1],
            ['formId' => 1, 'name' =>  'Trata respetuosamente a las y los estudiantes.', 'type' => 1],
            ['formId' => 1, 'name' =>  'Utiliza estrategias adecuadas para el aprendizaje en sus sesiones.', 'type' => 1],
            ['formId' => 1, 'name' =>  'Verifica al término de la sesión si los alumnos han comprendido los contenidos.', 'type' => 1],
            ['formId' => 1, 'name' =>  'Comentarios o sugerencias', 'type' => 2],
            ['formId' => 1, 'name' =>  'Calificación general del curso.', 'type' => 2],
        ]);

        Question::insert([
            ['formId' => 2, 'name' => 'Al iniciar el curso el (la) docente presentó su planeación y construyó acuerdos', 'type' => 1],
            ['formId' => 2, 'name' => 'Cumple con los acuerdos establecidos desde el encuadre del curso', 'type' => 1],
            ['formId' => 2, 'name' => 'Definió desde el inicio del curso los mecanismos y criterios de evaluación', 'type' => 1],
            ['formId' => 2, 'name' => 'Domina la asignatura que imparte y muestra preparación', 'type' => 1],
            ['formId' => 2, 'name' => 'Durante el curso establece estrategias adecuadas para el logro de los aprendizajes', 'type' => 1],
            ['formId' => 2, 'name' => 'El docente genera empatía con los estudiantes', 'type' => 1],
            ['formId' => 2, 'name' => 'Recuperando datos. Espere unos segundos e intente cortar o copiar de nuevo.', 'type' => 1],
            ['formId' => 2, 'name' => 'Entiendo claramente las indicaciones del docente para realizar las diferentes actividades en la plataforma', 'type' => 1],
            ['formId' => 2, 'name' => 'El docente es accesible y está dispuesto a brindar ayuda académica', 'type' => 1],
            ['formId' => 2, 'name' => 'Existe apoyo inmediato del docente en la aclaración de dudas que se presentan durante la semana', 'type' => 1],
            ['formId' => 2, 'name' => 'Existe seguimiento por parte del docente de las actividades que se encuentran en plataforma', 'type' => 1],
            ['formId' => 2, 'name' => 'La participación en los foros te permite enriquecer tus aprendizajes', 'type' => 1],
            ['formId' => 2, 'name' => 'La retroalimentación docente ha sido útil', 'type' => 1],
            ['formId' => 2, 'name' => 'Promueve actividades que me permiten colaborar con mis compañeros', 'type' => 1],
            ['formId' => 2, 'name' => 'Promueve el autodidactismo y la investigación', 'type' => 1],
            ['formId' => 2, 'name' => 'Propicia el desarrollo de un ambiente de respeto y confianza', 'type' => 1],
            ['formId' => 2, 'name' => 'Relaciona los contenidos de la asignatura con otras áreas del entorno', 'type' => 1],
            ['formId' => 2, 'name' => 'Respeta los horarios de la sesión presencial', 'type' => 1],
            ['formId' => 2, 'name' => 'Son suficientes los materiales proporcionados para la realización de las actividades dentro de la plataforma', 'type' => 1],
            ['formId' => 2, 'name' => 'Toma en cuenta las actividades realizadas y los productos como evidencias para la evaluación, calificación y acreditación del curso', 'type' => 1],
            ['formId' => 2, 'name' => 'Toma en cuenta las necesidades, intereses y expectativas del grupo', 'type' => 1],
            ['formId' => 2, 'name' => 'Comentarios o sugerencias:', 'type' => 2],
            ['formId' => 2, 'name' => 'Recomendaría a este docente: ', 'type' => 2],
        ]);

        Question::insert([
            ['formId' => 3, 'name' => '¿Consideras que las sesiones que tuviste con tu tutor académico durante el periodo fueron las suficientes?', 'type' => 1],
            ['formId' => 3, 'name' => '¿Reconoces la importancia que tuvo tu tutor para definir tu proyecto de vida en relación con tus capacidades, desempeño académico e intereses personales y profesionales?', 'type' => 1],
            ['formId' => 3, 'name' => '¿El tutor te motivó a participar en las diversas actividades o eventos que la universidad generó durante este semestre?', 'type' => 1],
            ['formId' => 3, 'name' => 'Durante las sesiones, ¿Tu tutor académico incluyó temas y actividades relacionados con tus intereses, necesidades, etc.?', 'type' => 1],
            ['formId' => 3, 'name' => '¿Resolvió tus dudas o te canalizó adecuadamente con quien pudo resolverlas?', 'type' => 1],
            ['formId' => 3, 'name' => '¿Demostró disponibilidad de tiempo?', 'type' => 1],
            ['formId' => 3, 'name' => '¿Fue suficiente el apoyo de tu tutor? ', 'type' => 1],
            ['formId' => 3, 'name' => '¿Te es fácil localizar al tutor que tienes asignado?', 'type' => 1],
            ['formId' => 3, 'name' => '¿Has podido ponerte en contacto con tu tutor cuando lo has necesitado?', 'type' => 1],
            ['formId' => 3, 'name' => 'Si lo consideras conveniente, anota alguna sugerencia o comentario sobre la actividad de tu tutor. ', 'type' => 1],
            ['formId' => 3, 'name' => 'Anota temas o actividades que te gustaría desarrollar durante las siguientes sesiones de tutoría. ', 'type' => 2],
            ['formId' => 3, 'name' => '¿El tutor asistió puntualmente y sin faltas a las sesiones de tutorías?', 'type' => 1],
        ]);
    }
}
