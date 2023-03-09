@extends ("layout")
    @section ("contenido")
<a href={{route("alumnos.create")}}>Crear nuevo alumno</a>


    <fieldset>
        <legend>Crear nuevo alumno</legend>
    
<form action="{{route("alumnos.index")}}" method="POST">
    @csrf
    @method("POST")
    <input type="text" name="nombre" placeholder="Nombre">
    <input type="text" name="apellido" placeholder="Apellido">
    <input type="text" name="dni" placeholder="DNI">
    <input type="submit" value="Crear">

</form>
    </fieldset>
    @endsection