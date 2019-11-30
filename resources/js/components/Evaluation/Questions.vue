<template>
    <div>
        <b-card
            header-text-variant="white"
            header-tag="header"
            header-bg-variant="dark"
            no-body
            >
            <template slot="header">
            <div class="float-left">
                <h4> {{ teacher.name }} {{ teacher.last_name }} - {{ teacher.subject }} </h4>
            </div>
            </template>
            <b-card-body class="row">
                <template v-if="teacher.tutoria ==1">
                    Instrucciones cuestionario tutorías <br>
                    A continuación, se te presentan una serie de pregutnas relacionadas con la actividad tutorial, contesta seleccionando aquella opción que más se acerque a tu respuesta. Recuerda que tus respuestas serán tratadas con alto grado de confidencialidad y no afectarán tu calificación.
Instrucciones: Seleccionar la estrella de acuerdo a la siguiente escala. La opción que elijas corresponde al grado de satisfacción respecto a cada criterio evaluado.
<br> 1 Estrella: Altamente en desacuerdo.
<br>2 Estrellas: En desacuerdo.
<br>3 Estrellas: Indiferente.
<br>4 Estrellas: De acuerdo.
<br>5 Estrellas: Altamente de acuerdo.
                </template>
                <template v-else>
                    <p>
                        La Universidad Pedagógica Nacional Unidad 212, Teziutlán. Invita a la comunidad estudiantil a participar de forma activa en el proceso de evaluación docente correspondiente al periodo agosto-diciembre 2019. Esta evaluación es totalmente anónima y permitirá a tus docentes detectar fortalezas y áreas de oportunidad para mejorar la atención académica.
Asigna una calificación a tu profesor de manera objetiva y ética, recuerda que tus respuestas serán tratadas con alto grado de confidencialidad y no afectarán tu calificación.
Instrucciones: Seleccionar la estrella de acuerdo a la siguiente escala. La opción que elijas corresponde al grado de satisfacción respecto a cada criterio evaluado.
<br> 1 Estrella: Altamente en desacuerdo.
<br>2 Estrellas: En desacuerdo.
<br>3 Estrellas: Indiferente.
<br>4 Estrellas: De acuerdo.
<br>5 Estrellas: Altamente de acuerdo.
                    </p>

                </template>
                <table class="table table-striped responsive">
                    <thead>
                        <tr>
                            <th>  </th>
                            <th> Pregunta </th>
                            <th> Puntos </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(question, index) in questions">
                            <td> {{ index + 1 }} </td>
                            <td> {{ question.name }} </td>
                            <template v-if="question.type == 1">
                                <td> <star-rating v-model="question.score"  v-bind:star-size="30"></star-rating> </td>
                            </template>
                            <template v-if="question.type == 2">
                                <td> <textarea rows="2" v-model="question.score"></textarea> </star-rating> </td>
                            </template>
                        </tr>
                    </tbody>
                </table>
                <button class="btn btn-primary col-4 offset-4" @click="finish()"> Terminar </button>
            </b-card-body>
        </b-card>
    </div>
</template>


<script>
import mainUrl from '../../mainUrl'
import vSelect from 'vue-select'
import StarRating from 'vue-star-rating'
Vue.component('star-rating', StarRating);
Vue.component('v-select', vSelect)

  export default {
    components: {

    },
    props: {
        teacherInitial: {},
        questionsInitial: {},
    },
    data() {
      return {
          questions: this.questionsInitial? JSON.parse(this.questionsInitial): null,
          teacher: this.teacherInitial? JSON.parse(this.teacherInitial): null,
          form: {},
          edit: false,
          loading: true,
          mainUrl: mainUrl,
          evaluation: {
              name: ''
          },
          career: '',
          cargando: false,
      }
    },
    watch: {

    },
    computed: {

     },
    methods: {
        finish() {
            let valid = true
            for (let i = 0; i < this.questions.length; i++) {
                if (!this.questions[i].score){
                    valid = false
                    break;
                }
            }
            if (valid) {
                    this.loading = true
                    axios.post(`${this.mainUrl}/evaluation/answers/store`, {
                        poll: this.teacher,
                        questions: this.questions,
                    })
                    .then((response) => {
                        this.loading = false
                        if (response.data.success) {
                            Vue.swal({
                                title: 'Éxito',
                                text: "Profesor evaluado correctamente.",
                                type: 'success',
                                showCancelButton: false,
                                confirmButtonColor: '#3085d6',
                                confirmButtonText: 'Aceptar',
                                allowEscapeKey: false,
                                allowOutsideClick: false
                            }).then((result) => {
                                if (result.value) {
                                    location.reload();
                                }
                            })

                        } else {
                            Vue.swal(
                                '¡Error!',
                                response.data.message,
                                'error'
                            )
                        }
                    })
                    .catch((error) => {
                        this.loading = false
                         Vue.swal(
                            '¡Error!',
                            'Ha ocurrido un error, intente de nuevo.',
                            'error'
                        )
                    })

                } else {
                    this.loading = false
                    Vue.swal(
                        '¡Atención!',
                        'Complete todos los campos.',
                        'warning'
                    )
                }
        },
     },
     mounted() {
    },
  }
</script>
