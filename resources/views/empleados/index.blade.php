lista de calificaciones
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>asignatura</th>
            <th>activida1</th>
            <th>calificacion1</th>
            <th>actividad2</th>
            <th>calificacion2</th>
        </tr>
    </thead>


    <tbody>
        @foreach($empleados as $empleado)
        <tr>
            <td>{{ $empleado->id}} </td>
            <td>{{ $empleado->asignatura}} </td>
            <td>{{ $empleado->activida1}} </td>
            <td>{{ $empleado->calificacion1}} </td>
            <td>{{ $empleado->activida2}} </td>
            <td>{{ $empleado->calificacion2}} </td>
        </tr>
        @endforeach
    </tbody>
</table>