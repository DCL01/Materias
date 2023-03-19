creas calificaciones
<form action="{{url('/empleados')}}" method="post">
    @csrf
<label for="nombre">  asignatura  </label>
<input type="text" name="asignatura" id="asignatura">
<br>
<label for="nombre">  actividad1  </label>
<input type="text" name="actividad1" id="actividad1">
<br>
<label for="nombre">  calificacion1  </label>
<input type="text" name="calificacion1" id="calificacion1">
<br>
<label for="nombre">  actividad2  </label>
<input type="text" name="actividad2" id="actividad2">
<br>
<label for="nombre">  calificacion2  </label>
<input type="text" name="calificacion2" id="calificacion2">
<br>
<input type="submit" value="Guardar datos">
<br>



</form>