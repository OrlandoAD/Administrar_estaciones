Formulario de creacion de accesos


<form action="{{ url('/accesos') }}" method="post">
@csrf

    <label for="accesos_id"> accesos_id </label>
    <input type="text" name="accesos_id" id="accesos_id">
    <br>

    <label for="Programa"> Programa </label>
    <input type="text" name="Programa" id="Programa">
    <br>

    <label for="Usuario"> Usuario </label>
    <input type="text" name="Usuario" id="Usuario">
    <br>

    <label for="Contrasena"> Contrasena </label>
    <input type="text" name="Contrasena" id="Contrasena">
    <br>

    <input type="submit" value="Guardar datos">
    <br>
</form>