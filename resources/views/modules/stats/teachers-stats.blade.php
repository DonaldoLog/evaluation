<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stats</title>
</head>
<style>
*, html {
    margin-bottom:0px;
    padding-bottom:0px;

    margin-top:0px;
    padding-top:0px;

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
  font-size: 12px;
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
  font-size: 13px;
  font-weight: bold;
  color: #FFFFFF;
  border-left: 2px solid #D0E4F5;
}
table.blueTable thead th:first-child {
  border-left: none;
}

table.blueTable tfoot {
  font-size: 13px;
  font-weight: bold;
  color: #FFFFFF;
  background: #D0E4F5;
  background: -moz-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
  background: -webkit-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
  background: linear-gradient(to bottom, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
  border-top: 2px solid #444444;
}
table.blueTable tfoot td {
  font-size: 13px;
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
<body>
    @if ($answers->count() > 0)
        <table style="width: 100%;">
            <tbody>
                <tr>
                    <th align="center">  <img src="./images/upn.jpg" height="90" width="90" style=""></th>
                    <th align="center"> <h3 style="text-align: center"> Universidad Pedagógica Nacional 212, Teziutlán, Puebla. </h3> </th>
                    <th align="center">  <img src="./images/buho.jpg" height="90" width="90" style=""></th>
                </tr>
            </tbody>
        </table>

        <table style="padding-left: 50%; font-size: 12px;">
            <tbody {{-- style="border: solid 1px #000000;" --}}>
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
                    <td> {{ \Carbon\Carbon::now() }} </td>
                </tr>
            </tbody>
        </table>
        <table style="padding-rigth: 50%; font-size: 12px;">
            <tbody {{-- style="border: solid 1px #000000;" --}}>
                <tr>
                    <th>NOMBRE DEL PROFESOR:</th>
                    <td>{{ $teacher->name }} {{ $teacher->last_name }} </td>
                </tr>
                <tr>
                    <th>PROGRAMA (S) EDUCATIVO (S):</th>
                    <td>
                        @foreach ($careers as $key => $career)
                            {{ $career->name }} @if ($key + 1 != $careers->count()) - @endif
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <th>GRUPOS:</th>
                    <td>
                        @foreach ($groups as $key => $group)
                            {{ $group->name }} @if ($key + 1 != $groups->count()) - @endif
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <th>No. DE ESTUDIANTES EVALUADORES:</th>
                    <td> {{ $answers[0]->totalStudents }} </td>
                </tr>
                <tr>
                    <th>CALIFICACIÓN:</th>
                    <td>
                        @php
                            $total = 0;
                            foreach ($answers as $key => $answer) {
                                $total += number_format((float)($answer->sum) / $answer->totalStudents, 2, '.', '');
                            }
                            $total = number_format((float)($total / $answers->count()), 2, '.', '');
                        @endphp
                        {{ number_format((float)$total, 2, '.', '') }}
                    </td>
                    <th>NIVEL:</th>
                    <td>
                    @if ($total >= 4.75) Excelente
                            @elseif ($total >= 4.25) Notable
                                @elseif ($total >= 3.75) Bueno
                                    @elseif ($total >= 3.24) Suficiente
                                        @elseif ($total < 3.24) Insuficiente
                    @endif
                    </td>
                </tr>
            </tbody>
        </table>
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
                @foreach ($answers as $key => $answer)
                    <tr>
                        <td> {{ $key + 1 }} </td>
                        <td> {{ $answer->name }} </td>
                            @php
                                $score = number_format((float)($answer->sum) / $answer->totalStudents, 2, '.', '');
                                $nivel = '';
                                if ($score >= 4.75){
                                    $nivel = 'Excelente';
                                } elseif ($score >= 4.25) {
                                    $nivel =  'Notable';
                                } elseif ($score >= 3.75) {
                                    $nivel =  'Bueno';
                                } elseif ($score >= 3.24) {
                                    $nivel =  'Suficiente';
                                } elseif ($score < 3.24){
                                    $nivel =  'Insuficiente';
                                }
                            @endphp
                        <td> {{ $score }} </td>
                        <td> {{ $nivel }} </td>
                    </tr>
                @endforeach
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
        <table style="padding-left: 70%; font-size: 9px;">
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
        <h5 style="text-align: right"> {{ \Carbon\Carbon::now() }} </h5>
    @endif
    @if ($answersTutorias->count() > 0)
       <div style="page-break-after: always;"></div>
        <table style="width: 100%;">
            <tbody>
                <tr>
                    <th align="center">  <img src="./images/upn.jpg" height="90" width="90" style=""></th>
                    <th align="center"> <h3 style="text-align: center"> Universidad Pedagógica Nacional 212, Teziutlán, Puebla. </h3> </th>
                    <th align="center">  <img src="./images/buho.jpg" height="90" width="90" style=""></th>
                </tr>
            </tbody>
        </table>

        <table style="padding-left: 50%; font-size: 12px;">
            <tbody {{-- style="border: solid 1px #000000;" --}}>
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
                    <td>Constancia de Evaluación Docente(Turoria)</td>
                </tr>
                <tr>
                    <th>FECHA:</th>
                    <td> {{ \Carbon\Carbon::now() }} </td>
                </tr>
            </tbody>
        </table>
        <table style="padding-rigth: 50%; font-size: 12px;">
            <tbody {{-- style="border: solid 1px #000000;" --}}>
                <tr>
                    <th>NOMBRE DEL PROFESOR:</th>
                    <td>{{ $teacher->name }} {{ $teacher->last_name }} </td>
                </tr>
                <tr>
                    <th>PROGRAMA (S) EDUCATIVO (S):</th>
                    <td>
                        @foreach ($careersTutoria as $key => $career)
                        {{ $career->name }} @if ($key + 1 != $careersTutoria->count()) - @endif
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <th>GRUPOS:</th>
                    <td> Tutorias:
                        @foreach ($groupsTutoria as $key => $group)
                            {{ $group->name }} @if ($key + 1 != $groupsTutoria->count()) - @endif
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <th>No. DE ESTUDIANTES EVALUADORES:</th>
                    <td> {{ $answersTutorias[0]->totalStudents }} </td>
                </tr>
                <tr>
                    <th>CALIFICACIÓN:</th>
                    <td>
                        @php
                            $total = 0;
                            foreach ($answersTutorias as $key => $answer) {
                                $total += number_format((float)($answer->sum) / $answer->totalStudents, 2, '.', '');
                            }
                            $total = number_format((float)($total / $answersTutorias->count()), 2, '.', '');
                        @endphp
                        {{ number_format((float)$total, 2, '.', '') }}
                    </td>
                    <th>NIVEL:</th>
                    <td>
                    @if ($total >= 4.75) Excelente
                            @elseif ($total >= 4.25) Notable
                                @elseif ($total >= 3.75) Bueno
                                    @elseif ($total >= 3.24) Suficiente
                                        @elseif ($total < 3.24) Insuficiente
                    @endif
                    </td>
                </tr>
            </tbody>
        </table>
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
                @foreach ($answersTutorias as $key => $answer)
                    <tr>
                        <td> {{ $key + 1 }} </td>
                        <td> {{ $answer->name }} </td>
                            @php
                                $score = number_format((float)($answer->sum) / $answer->totalStudents, 2, '.', '');
                                $nivel = '';
                                if ($score >= 4.75){
                                    $nivel = 'Excelente';
                                } elseif ($score >= 4.25) {
                                    $nivel =  'Notable';
                                } elseif ($score >= 3.75) {
                                    $nivel =  'Bueno';
                                } elseif ($score >= 3.24) {
                                    $nivel =  'Suficiente';
                                } elseif ($score < 3.24){
                                    $nivel =  'Insuficiente';
                                }
                            @endphp
                        <td> {{ $score }} </td>
                        <td> {{ $nivel }} </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
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
        <table style="padding-left: 70%; font-size: 10px;">
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
        <h5 style="text-align: right"> {{ \Carbon\Carbon::now() }} </h5>
    @endif

    @if ($answers->count() > 0)
   <div style="page-break-after: always;"></div>
    <table style="width: 100%;">
        <tbody>
            <tr>
                <th align="center">  <img src="./images/upn.jpg" height="90" width="90" style=""></th>
                <th align="center"> <h3 style="text-align: center"> Universidad Pedagógica Nacional 212, Teziutlán, Puebla. </h3> </th>
                <th align="center">  <img src="./images/buho.jpg" height="90" width="90" style=""></th>
            </tr>
        </tbody>
    </table>

    <table style="padding-left: 50%; font-size: 12px;">
        <tbody {{-- style="border: solid 1px #000000;" --}}>
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
                <td>Respuestas de Evaluación Docente</td>
            </tr>
            <tr>
                <th>FECHA:</th>
                <td> {{ \Carbon\Carbon::now() }} </td>
            </tr>
        </tbody>
    </table>
    <table style="padding-rigth: 50%; font-size: 12px;">
        <tbody {{-- style="border: solid 1px #000000;" --}}>
            <tr>
                <th>NOMBRE DEL PROFESOR:</th>
                <td>{{ $teacher->name }} {{ $teacher->last_name }} </td>
            </tr>
            <tr>
                <th>PROGRAMA (S) EDUCATIVO (S):</th>
                <td>
                    @foreach ($careers as $key => $career)
                    {{ $career->name }} @if ($key + 1 != $careers->count()) - @endif
                    @endforeach
                </td>
            </tr>
            <tr>
                <th>GRUPOS:</th>
                <td>
                    @foreach ($groups as $key => $group)
                        {{ $group->name }} @if ($key + 1 != $groups->count()) - @endif
                    @endforeach
                </td>
            </tr>
            <tr>
                <th>No. DE ESTUDIANTES EVALUADORES:</th>
                <td> {{ $answers[0]->totalStudents }} </td>
            </tr>
        </tbody>
    </table>
    <table class="blueTable">
        <thead>
            <tr>
                <th> CRITERIOS </th>
                <th>  </th>
                <th> Respuesta </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($answersOpen as $key => $answer)
                <tr>
                    <td> {{ $key + 1 }} </td>
                    <td> {{ $answer->name }} </td>
                    <td> {{ $answer->score }} </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <h5 style="text-align: right"> {{ \Carbon\Carbon::now() }} </h5>
@endif
    @if ($answersTutorias->count() > 0)
       <div style="page-break-after: always;"></div>
        <table style="width: 100%;">
            <tbody>
                <tr>
                    <th align="center">  <img src="./images/upn.jpg" height="90" width="90" style=""></th>
                    <th align="center"> <h3 style="text-align: center"> Universidad Pedagógica Nacional 212, Teziutlán, Puebla. </h3> </th>
                    <th align="center">  <img src="./images/buho.jpg" height="90" width="90" style=""></th>
                </tr>
            </tbody>
        </table>

        <table style="padding-left: 50%; font-size: 12px;">
            <tbody {{-- style="border: solid 1px #000000;" --}}>
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
                    <td>Respuestas de Evaluación Docente (Tutoria)</td>
                </tr>
                <tr>
                    <th>FECHA:</th>
                    <td> {{ \Carbon\Carbon::now() }} </td>
                </tr>
            </tbody>
        </table>
        <table style="padding-rigth: 50%; font-size: 12px;">
            <tbody {{-- style="border: solid 1px #000000;" --}}>
                <tr>
                    <th>NOMBRE DEL PROFESOR:</th>
                    <td>{{ $teacher->name }} {{ $teacher->last_name }} </td>
                </tr>
                <tr>
                    <th>PROGRAMA (S) EDUCATIVO (S):</th>
                    <td>
                        @foreach ($careersTutoria as $key => $career)
                        {{ $career->name }} @if ($key + 1 != $careersTutoria->count()) - @endif
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <th>GRUPOS:</th>
                    <td> Tutorias:
                        @foreach ($groupsTutoria as $key => $group)
                            {{ $group->name }} @if ($key + 1 != $groupsTutoria->count()) - @endif
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <th>No. DE ESTUDIANTES EVALUADORES:</th>
                    <td> {{ $answersTutorias[0]->totalStudents }} </td>
                </tr>
                <tr>
                    <th>CALIFICACIÓN:</th>
                    <td>
                        @php
                            $total = 0;
                            foreach ($answersTutorias as $key => $answer) {
                                $total += number_format((float)($answer->sum) / $answer->totalStudents, 2, '.', '');
                            }
                            $total = number_format((float)($total / $answersTutorias->count()), 2, '.', '');
                        @endphp
                        {{ number_format((float)$total, 2, '.', '') }}
                    </td>
                    <th>NIVEL:</th>
                    <td>
                    @if ($total >= 4.75) Excelente
                            @elseif ($total >= 4.25) Notable
                                @elseif ($total >= 3.75) Bueno
                                    @elseif ($total >= 3.24) Suficiente
                                        @elseif ($total < 3.24) Insuficiente
                    @endif
                    </td>
                </tr>
            </tbody>
        </table>
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
                @foreach ($answersTutorias as $key => $answer)
                    <tr>
                        <td> {{ $key + 1 }} </td>
                        <td> {{ $answer->name }} </td>
                            @php
                                $score = number_format((float)($answer->sum) / $answer->totalStudents, 2, '.', '');
                                $nivel = '';
                                if ($score >= 4.75){
                                    $nivel = 'Excelente';
                                } elseif ($score >= 4.25) {
                                    $nivel =  'Notable';
                                } elseif ($score >= 3.75) {
                                    $nivel =  'Bueno';
                                } elseif ($score >= 3.24) {
                                    $nivel =  'Suficiente';
                                } elseif ($score < 3.24){
                                    $nivel =  'Insuficiente';
                                }
                            @endphp
                        <td> {{ $score }} </td>
                        <td> {{ $nivel }} </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <table style="padding-left: 70%; font-size: 10px;">
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
        <h5 style="text-align: right"> {{ \Carbon\Carbon::now() }} </h5>
    @endif

    @if ($answersTutorias->count() > 0)
   <div style="page-break-after: always;"></div>
    <table style="width: 100%;">
        <tbody>
            <tr>
                <th align="center">  <img src="./images/upn.jpg" height="90" width="90" style=""></th>
                <th align="center"> <h3 style="text-align: center"> Universidad Pedagógica Nacional 212, Teziutlán, Puebla. </h3> </th>
                <th align="center">  <img src="./images/buho.jpg" height="90" width="90" style=""></th>
            </tr>
        </tbody>
    </table>

    <table style="padding-left: 50%; font-size: 12px;">
        <tbody {{-- style="border: solid 1px #000000;" --}}>
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
                <td> {{ \Carbon\Carbon::now() }} </td>
            </tr>
        </tbody>
    </table>
    <table style="padding-rigth: 50%; font-size: 12px;">
        <tbody {{-- style="border: solid 1px #000000;" --}}>
            <tr>
                <th>NOMBRE DEL PROFESOR:</th>
                <td>{{ $teacher->name }} {{ $teacher->last_name }} </td>
            </tr>
            <tr>
                <th>PROGRAMA (S) EDUCATIVO (S):</th>
                <td>
                    @foreach ($careersTutoria as $key => $career)
                    {{ $career->name }} @if ($key + 1 != $careersTutoria->count()) - @endif
                    @endforeach
                </td>
            </tr>
            <tr>
                <th>GRUPOS:</th>
                <td> Tutorias:
                    @foreach ($groupsTutoria as $key => $group)
                        {{ $group->name }} @if ($key + 1 != $groupsTutoria->count()) - @endif
                    @endforeach
                </td>
            </tr>
            <tr>
                <th>No. DE ESTUDIANTES EVALUADORES:</th>
                <td> {{ $answersTutorias[0]->totalStudents }} </td>
            </tr>
        </tbody>
    </table>
    <table class="blueTable">
        <thead>
            <tr>
                <th> CRITERIOS </th>
                <th>  </th>
                <th> Respuesta </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($answersTutoriasOpen as $key => $answer)
                <tr>
                    <td> {{ $key + 1 }} </td>
                    <td> {{ $answer->name }} </td>
                    <td> {{ $answer->score }} </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <h5 style="text-align: right"> {{ \Carbon\Carbon::now() }} </h5>
@endif
</body>
</html>
