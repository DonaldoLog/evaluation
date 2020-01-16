<template>
    <div class="todo" oncut="return false">
        <div class="plantilla">
            <template v-if="answers.length > 0">
                <table style="width: 100%;">
                    <tbody>
                        <tr>
                            <th align="center">  <img :src="'./../../../../images/upn.jpg'" height="90" width="90" style=""></th>
                            <th align="center"> <h3 style="text-align: center"> Universidad Pedagógica Nacional 212, Teziutlán, Puebla. </h3> </th>
                            <th align="center">  <img :src="'./../../../../images/buho.jpg'" height="90" width="90" style=""></th>
                        </tr>
                    </tbody>
                </table>

                <table style="padding-left: 60%; font-size: 11px;">
                    <tbody>
                        <tr>
                            <th>DEPENDENCIA:</th>
                            <td>Universidad Pedagógica Nacional 212, Teziutlán, Puebla.</td>
                        </tr>
                        <tr>
                            <th>AREA:</th>
                            <td>Subdirección Académica</td>
                        </tr>
                        <tr>
                            <th>ASUNTO:</th>
                            <td>Constancia de Evaluación Docente</td>
                        </tr>
                        <tr>
                            <th>FECHA:</th>
                            <td> {{ new Date() | moment("DD/MM/YYYY") }} </td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <table style="padding-rigth: 60%; font-size: 11px;">
                    <tbody>
                        <tr>
                            <th align="left">NOMBRE DEL PROFESOR:</th>
                            <td>{{ teacher.name }} {{ teacher.last_name }} </td>
                        </tr>
                        <tr>
                            <th align="left">PROGRAMA (S) EDUCATIVO (S):</th>
                            <td>
                                <template v-for="(career, index) in careers">
                                    {{ career.name }} <template v-if="index + 1 != careers.length"> - </template>
                                </template>
                            </td>
                        </tr>
                        <tr>
                            <th align="left">GRUPOS:</th>
                            <td>
                                <template v-for="(group, index) in groups">
                                    {{ group.name }}  <template v-if="index + 1 != groups.length"> - </template>
                                </template>
                            </td>
                        </tr>
                        <tr>
                            <th align="left">No. DE ESTUDIANTES EVALUADORES:</th>
                            <td> {{ answers[0].totalStudents }} </td>
                        </tr>
                        <tr>
                            <th align="left">CALIFICACIÓN:</th>
                            <td>
                                {{ total }}
                            </td>
                            <th >NIVEL:</th>
                            <td> {{ `${(total >= 4.75)? 'Excelente': (total >= 4.25)? 'Notable': (total >= 3.75)? 'Bueno': (total >= 3.24)? 'Suficiente': 'Insuficiente'}` }} </td>
                            <td> &nbsp </td>
                            <td> &nbsp </td>
                            <td> &nbsp </td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <table class="blueTable">
                    <thead>
                        <tr>
                            <th> CRITERIOS </th>
                            <th>  </th>
                            <th> PROMEDIO </th>
                            <th> NIVEL </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(answer, index) in answers">
                            <td> {{ index + 1 }} </td>
                            <td> {{ answer.name }} </td>
                            <td> {{ answer.total }} </td>
                            <td> {{ `${(answer.total >= 4.75)? 'Excelente': (answer.total >= 4.25)? 'Notable': (answer.total >= 3.75)? 'Bueno': (answer.total >= 3.24)? 'Suficiente': 'Insuficiente'}` }} </td>
                        </tr>
                    </tbody>
                </table>
                <div style="page-break-after: always;"></div>
                <br>
                <br>
                <div>
                    <GChart
                        type="ColumnChart"
                        :data="chartData"
                        :options="chartOptions"
                    />
                </div>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <table style="font-size: 12px; width: 100%;" align="center">
                    <tr align="center">
                        <th>_____________________________</th>
                        <th>_____________________________</th>
                        <th>_____________________________</th>
                    </tr>
                    <tr align="center">
                        <th>Mtro. Ernesto C. Marín Alarcón</th>
                        <th>Dra. Edith Lyions López</th>
                        <th>Docente</th>
                    </tr>
                    <tr align="center">
                        <th>Director UPN-212</th>
                        <th>Subdirectora UPN-212</th>
                        <th>UPN-212</th>
                    </tr>
                </table>
                <table style="bottom:0;right:0;padding-left: 70%; font-size: 9px;padding-top: 70%;">
                    <tbody style="border: solid 1px #000000;">
                        <tr>
                            <th> Niveles de desempeño</th>
                        </tr>
                        <tr>
                            <td>4.75 - 5</td>
                            <td>Excelente</td>
                        </tr>
                        <tr>
                            <td>4.25 - 4.74</td>
                            <td>Notable</td>
                        </tr>
                        <tr>
                            <td>3.75 - 4.24</td>
                            <td>Bueno</td>
                        </tr>
                        <tr>
                            <td>3.24 - 3.75</td>
                            <td>Suficiente</td>
                        </tr>
                        <tr>
                            <td> &lt; 3.23</td>
                            <td>Insuficiente</td>
                        </tr>
                    </tbody>
                </table>

            </template>
            <br>
             <div style="page-break-after: always;"></div>
             <template v-if="answersTutorias.length > 0">
                <table style="width: 100%;">
                    <tbody>
                        <tr>
                            <th align="center">  <img :src="'./../../../../images/upn.jpg'" height="90" width="90" style=""></th>
                            <th align="center"> <h3 style="text-align: center"> Universidad Pedagógica Nacional 212, Teziutlán, Puebla. </h3> </th>
                            <th align="center">  <img :src="'./../../../../images/buho.jpg'" height="90" width="90" style=""></th>
                        </tr>
                    </tbody>
                </table>

                <table style="padding-left: 60%; font-size: 11px;">
                    <tbody>
                        <tr>
                            <th>DEPENDENCIA:</th>
                            <td>Universidad Pedagógica Nacional 212, Teziutlán, Puebla.</td>
                        </tr>
                        <tr>
                            <th>AREA:</th>
                            <td>Subdirección Académica</td>
                        </tr>
                        <tr>
                            <th>ASUNTO:</th>
                            <td>Constancia de Evaluación Tutoría</td>
                        </tr>
                        <tr>
                            <th>FECHA:</th>
                            <td> {{ new Date() | moment("DD/MM/YYYY") }} </td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <table style="padding-rigth: 60%; font-size: 11px;">
                    <tbody>
                        <tr>
                            <th align="left">NOMBRE DEL PROFESOR:</th>
                            <td>{{ teacher.name }} {{ teacher.last_name }} </td>
                        </tr>
                        <tr>
                            <th align="left">PROGRAMA (S) EDUCATIVO (S):</th>
                            <td>
                                <template v-for="(career, index) in careersTutoria">
                                    {{ career.name }} <template v-if="index + 1 != careers.length"> - </template>
                                </template>
                            </td>
                        </tr>
                        <tr>
                            <th align="left">GRUPOS:</th>
                            <td>
                                <template v-for="(group, index) in groupsTutoria">
                                    {{ group.name }}  <template v-if="index + 1 != groups.length"> - </template>
                                </template>
                            </td>
                        </tr>
                        <tr>
                            <th align="left">No. DE ESTUDIANTES EVALUADORES:</th>
                            <td> {{ answersTutorias[0].totalStudents }} </td>
                        </tr>
                        <tr>
                            <th align="left">CALIFICACIÓN:</th>
                            <td>
                                {{ total2 }}
                            </td>
                            <th>NIVEL:</th>
                            <td> {{ `${(total2 >= 4.75)? 'Excelente': (total2 >= 4.25)? 'Notable': (total2 >= 3.75)? 'Bueno': (total2 >= 3.24)? 'Suficiente': 'Insuficiente'}` }} </td>

                        </tr>
                    </tbody>
                </table>
                <br>
                <table class="blueTable">
                    <thead>
                        <tr>
                            <th> CRITERIOS </th>
                            <th>  </th>
                            <th> PROMEDIO </th>
                            <th> NIVEL </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(answer, index) in answersTutorias">
                            <td> {{ index + 1 }} </td>
                            <td> {{ answer.name }} </td>
                            <td> {{ answer.total }} </td>
                            <td> {{ `${(answer.total >= 4.75)? 'Excelente': (answer.total >= 4.25)? 'Notable': (answer.total >= 3.75)? 'Bueno': (answer.total >= 3.24)? 'Suficiente': 'Insuficiente'}` }} </td>
                        </tr>
                    </tbody>
                </table>
                <div style="page-break-after: always;"></div>
                <br>
                <br>
                <div>
                    <GChart
                        type="ColumnChart"
                        :data="chartData2"
                        :options="chartOptions"
                    />
                </div>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <table style="font-size: 12px; width: 100%;" align="center">
                    <tr align="center">
                        <th>_____________________________</th>
                        <th>_____________________________</th>
                        <th>_____________________________</th>
                    </tr>
                    <tr align="center">
                        <th>Mtro. Ernesto C. Marín Alarcón</th>
                        <th>Dra. Edith Lyions López</th>
                        <th>Docente</th>
                    </tr>
                    <tr align="center">
                        <th>Director UPN-212</th>
                        <th>Subdirectora UPN-212</th>
                        <th>UPN-212</th>
                    </tr>
                </table>
                <br>
                <table style="bottom:0;right:0;padding-left: 70%; font-size: 9px;padding-top: 70%;">
                    <tbody style="border: solid 1px #000000;">
                        <tr>
                            <th> Niveles de desempeño</th>
                        </tr>
                        <tr>
                            <td>4.75 - 5</td>
                            <td>Excelente</td>
                        </tr>
                        <tr>
                            <td>4.25 - 4.74</td>
                            <td>Notable</td>
                        </tr>
                        <tr>
                            <td>3.75 - 4.24</td>
                            <td>Bueno</td>
                        </tr>
                        <tr>
                            <td>3.24 - 3.75</td>
                            <td>Suficiente</td>
                        </tr>
                        <tr>
                            <td> &lt; 3.23</td>
                            <td>Insuficiente</td>
                        </tr>
                    </tbody>
                </table>

            </template>

            <template v-if="answersOpen.length > 0">
                <br>
                <br>
                <table style="width: 100%;">
                    <tbody>
                        <tr>
                            <th align="center">  <img :src="'./../../../../images/upn.jpg'" height="90" width="90" style=""></th>
                            <th align="center"> <h3 style="text-align: center"> Universidad Pedagógica Nacional 212, Teziutlán, Puebla. </h3> </th>
                            <th align="center">  <img :src="'./../../../../images/buho.jpg'" height="90" width="90" style=""></th>
                        </tr>
                    </tbody>
                </table>

                <table style="padding-left: 60%; font-size: 11px;">
                    <tbody>
                        <tr>
                            <th>DEPENDENCIA:</th>
                            <td>Universidad Pedagógica Nacional 212, Teziutlán, Puebla.</td>
                        </tr>
                        <tr>
                            <th>AREA:</th>
                            <td>Subdirección Académica</td>
                        </tr>
                        <tr>
                            <th>ASUNTO:</th>
                            <td>Comentarios de Evaluación Docente</td>
                        </tr>
                        <tr>
                            <th>FECHA:</th>
                            <td> {{ new Date() | moment("DD/MM/YYYY") }} </td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <table style="padding-rigth: 60%; font-size: 11px;">
                    <tbody>
                        <tr>
                            <th align="left">NOMBRE DEL PROFESOR:</th>
                            <td>{{ teacher.name }} {{ teacher.last_name }} </td>
                        </tr>
                        <tr>
                            <th align="left">PROGRAMA (S) EDUCATIVO (S):</th>
                            <td>
                                <template v-for="(career, index) in careers">
                                    {{ career.name }} <template v-if="index + 1 != careers.length"> - </template>
                                </template>
                            </td>
                        </tr>
                        <tr>
                            <th align="left">GRUPOS:</th>
                            <td>
                                <template v-for="(group, index) in groups">
                                    {{ group.name }}  <template v-if="index + 1 != groups.length"> - </template>
                                </template>
                            </td>
                        </tr>
                        <tr>
                            <th align="left">No. DE ESTUDIANTES EVALUADORES:</th>
                            <td> {{ answers[0].totalStudents }} </td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <table class="blueTable">
                    <thead>
                        <tr>
                            <th> CRITERIOS </th>
                            <th> COMENTARIO </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(answer, index) in answersOpen">
                            <td> {{ index + 1 }} </td>
                            <td> {{ answer.score }} </td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <br>
                <br>
                <table style="font-size: 12px; width: 100%;" align="center">
                    <tr align="center">
                        <th>_____________________________</th>
                        <th>_____________________________</th>
                        <th>_____________________________</th>
                    </tr>
                    <tr align="center">
                        <th>Mtro. Ernesto C. Marín Alarcón</th>
                        <th>Dra. Edith Lyions López</th>
                        <th>Docente</th>
                    </tr>
                    <tr align="center">
                        <th>Director UPN-212</th>
                        <th>Subdirectora UPN-212</th>
                        <th>UPN-212</th>
                    </tr>
                </table>
            </template>
                <div style="page-break-after: always;"></div>
<template v-if="answersTutoriasOpen.length > 0">
                <br>
                <br>
                <table style="width: 100%;">
                    <tbody>
                        <tr>
                            <th align="center">  <img :src="'./../../../../images/upn.jpg'" height="90" width="90" style=""></th>
                            <th align="center"> <h3 style="text-align: center"> Universidad Pedagógica Nacional 212, Teziutlán, Puebla. </h3> </th>
                            <th align="center">  <img :src="'./../../../../images/buho.jpg'" height="90" width="90" style=""></th>
                        </tr>
                    </tbody>
                </table>

                <table style="padding-left: 60%; font-size: 11px;">
                    <tbody>
                        <tr>
                            <th>DEPENDENCIA:</th>
                            <td>Universidad Pedagógica Nacional 212, Teziutlán, Puebla.</td>
                        </tr>
                        <tr>
                            <th>AREA:</th>
                            <td>Subdirección Académica</td>
                        </tr>
                        <tr>
                            <th>ASUNTO:</th>
                            <td>Comentarios de Evaluación Docente Tutoría</td>
                        </tr>
                        <tr>
                            <th>FECHA:</th>
                            <td> {{ new Date() | moment("DD/MM/YYYY") }} </td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <table style="padding-rigth: 60%; font-size: 11px;">
                    <tbody>
                        <tr>
                            <th align="left">NOMBRE DEL PROFESOR:</th>
                            <td>{{ teacher.name }} {{ teacher.last_name }} </td>
                        </tr>
                         <tr>
                            <th align="left">PROGRAMA (S) EDUCATIVO (S):</th>
                            <td>
                                <template v-for="(career, index) in careersTutoria">
                                    {{ career.name }} <template v-if="index + 1 != careers.length"> - </template>
                                </template>
                            </td>
                        </tr>
                        <tr>
                            <th align="left">GRUPOS:</th>
                            <td>
                                <template v-for="(group, index) in groupsTutoria">
                                    {{ group.name }}  <template v-if="index + 1 != groups.length"> - </template>
                                </template>
                            </td>
                        </tr>
                        <tr>
                            <th align="left">No. DE ESTUDIANTES EVALUADORES:</th>
                            <td> {{ answersTutorias[0].totalStudents }} </td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <table class="blueTable">
                    <thead>
                        <tr>
                            <th> CRITERIOS </th>
                            <th> COMENTARIO </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(answer, index) in answersTutoriasOpen">
                            <td> {{ index + 1 }} </td>
                            <td> {{ answer.score }} </td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <br>
                <table style="font-size: 12px; width: 100%;" align="center">
                    <tr align="center">
                        <th>_____________________________</th>
                        <th>_____________________________</th>
                        <th>_____________________________</th>
                    </tr>
                    <tr align="center">
                        <th>Mtro. Ernesto C. Marín Alarcón</th>
                        <th>Dra. Edith Lyions López</th>
                        <th>Docente</th>
                    </tr>
                    <tr align="center">
                        <th>Director UPN-212</th>
                        <th>Subdirectora UPN-212</th>
                        <th>UPN-212</th>
                    </tr>
                </table>
            </template>
        </div>
        <div class="flotante text-center">
            <input type="button" value="Imprimir" id="imprimir" class="impre btn btn-success" v-on:click="imprimir">
        </div>
    </div>
</template>
<script>
import { GChart } from 'vue-google-charts'
Vue.use(require('vue-moment'));
    export default {
         components: {
            GChart
        },
        data(){
            return{
                chartData: JSON.parse(this.questionsgraphInitial),
                chartData2: JSON.parse(this.questionsgraphtutoInitial)
                ,
                chartOptions: {
                    title: '---------------------------------Calificacion por pregunta---------------------------------',
                    vAxis: {
                        minValue: 0,
                        maxValue: 5,
                        ticks: [0, 1, 2, 3, 4, 5]
                    },
                    legend: {position: 'none'}
                },
                content: '',
                answersOpen: this.answersOpenInitial? JSON.parse(this.answersOpenInitial): {},
                answersTutoriasOpen: this.answersTutoriasOpenInitial? JSON.parse(this.answersTutoriasOpenInitial): {},
                careersTutoria: this.careersTutoriaInitial? JSON.parse(this.careersTutoriaInitial): {},
                careers: this.careersInitial? JSON.parse(this.careersInitial): {},
                teacher: this.teacherInitial? JSON.parse(this.teacherInitial): {},
                answers: this.answersInitial? JSON.parse(this.answersInitial): {},
                answersTutorias: this.answerstutoriasInitial? JSON.parse(this.answerstutoriasInitial): {},
                groups: this.groupsInitial? JSON.parse(this.groupsInitial): {},
                groupsTutoria: this.groupsTutoriaInitial? JSON.parse(this.groupsTutoriaInitial): {},
                total: this.totalInitial? this.totalInitial: 0,
                total2: this.total2Initial? this.total2Initial: 0,
                questionsgraph: this.questionsgraphInitial? JSON.parse(this.questionsgraphInitial): [],
                questionsgraphtuto: this.questionsgraphtutoInitial? JSON.parse(this.questionsgraphtutoInitial): [],
            }
        },
        props:{
            contenido: {
                default: false
            },
            answersOpenInitial: {},
            answersTutoriasOpenInitial: {},
            careersTutoriaInitial: {},
            careersInitial: {},
            teacherInitial: {},
            answersInitial: {},
            answerstutoriasInitial: {},
            groupsInitial: {},
            groupsTutoriaInitial: {},
            totalInitial: 0,
            total2Initial: 0,
            questionsgraphInitial: {},
            questionsgraphtutoInitial: {},
        },
        created: function () {
            this.content = this.contenido
        },
        methods:{
            imprimir: function(){
                window.print();
            }
       }
    }
</script>

<style scoped>
    .todo{
        background-color: #dddddd;
        width: 100%;
    }
    .plantilla{
        background-color: #ffffff;
        width: 15cm;
        margin: 0 auto;
    }
    .flotante {
        display: scroll;
        position: fixed;
        top: 10px;
        right: 10px;
    }
    .impre{
        margin: 0 auto;
        margin-top: 20px;
        font-size: 30px;
    }

    @media print {
        .todo{
            background-color: #ffffff;
            width: 100%;
        }
        .flotante {display:none}

        body  { visibility: hidden; }
        @page {
            size:  auto;   /* auto es el valor inicial*/
            /* margin-left: 0; */
            /* margin-left: 50mm;
            margin-right: 0mm; */
            /*margin-top: 2%;          */
            /*margin-top: 2rem;*/  /* afecta el margen en la configuración de impresión */
            /* margin-bottom: 0.1rem; */
        }
    }
    *, html {
    margin-bottom:0px;
    padding-bottom:0px;

    margin-top:4px;
    padding-top:4px;

}
table.blueTable {
  border: 1px solid #1C6EA4;
  background-color: #EEEEEE;
  width: 100%;
  text-align: left;
  border-collapse: collapse;
}
table.blueTable td, table.blueTable th {
  border: 1px solid #AAAAAA;
  padding: 3px 2px;
}
table.blueTable tbody td {
  font-size: 11px;
}
table.blueTable tr:nth-child(even) {
  background: #D0E4F5;
}
table.blueTable thead {
  background: #1C6EA4;
  background: -moz-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
  background: -webkit-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
  background: linear-gradient(to bottom, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
  border-bottom: 2px solid #444444;
}
table.blueTable thead th {
  font-size: 12px;
  font-weight: bold;
  color: #FFFFFF;
  border-left: 2px solid #D0E4F5;
}
table.blueTable thead th:first-child {
  border-left: none;
}

table.blueTable tfoot {
  font-size: 12px;
  font-weight: bold;
  color: #FFFFFF;
  background: #D0E4F5;
  background: -moz-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
  background: -webkit-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
  background: linear-gradient(to bottom, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
  border-top: 2px solid #444444;
}
table.blueTable tfoot td {
  font-size: 12px;
}
table.blueTable tfoot .links {
  text-align: right;
}
table.blueTable tfoot .links a{
  display: inline-block;
  background: #1C6EA4;
  color: #FFFFFF;
  padding: 2px 8px;
  border-radius: 5px;
}
div.page_break + div.page_break{
    page-break-before: always;
}
</style>
