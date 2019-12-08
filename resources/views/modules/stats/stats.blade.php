<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stats</title>
</head>
<style>

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
  font-size: 13px;
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
  font-size: 15px;
  font-weight: bold;
  color: #FFFFFF;
  border-left: 2px solid #D0E4F5;
}
table.blueTable thead th:first-child {
  border-left: none;
}

table.blueTable tfoot {
  font-size: 14px;
  font-weight: bold;
  color: #FFFFFF;
  background: #D0E4F5;
  background: -moz-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
  background: -webkit-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
  background: linear-gradient(to bottom, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
  border-top: 2px solid #444444;
}
table.blueTable tfoot td {
  font-size: 14px;
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
    </style>
<body>

    <h2 style="text-align: center"> UNIVERSIDAD PEDAGÓGICA NACIONAL TEZIUTLÁN </h2>
    <h3 style="text-align: center"> Carrera: {{ $career->name }} </h3>
    <table class="blueTable">
        <thead>
            <tr>
                <th>  </th>
                <th> Estudiante </th>
                <th> Matrícula </th>
                <th> Estado </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $key => $student)
            <tr>
                <td> {{ $key + 1 }} </td>
                <td> {{ strtoupper($student->name) }} {{ strtoupper($student->last_name) }} </td>
                <td> {{ $student->studentId }} </td>
                <td>  @if ($student->completedId) <strong> TERMINADA </strong> @else NO TERMINADA @endif </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <h5 style="text-align: right"> {{ \Carbon\Carbon::now() }} </h5>
</body>
</html>
