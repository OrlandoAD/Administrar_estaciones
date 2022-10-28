<form action="{{ url('/directorio_contactos') }}" method="post">
@csrf

    <label for="Plaza"> Plaza </label>
    <input type="text" name="Plaza" id="Plaza">
    <br>

    <label for="Jefe_operativo"> Jefe_operativo </label>
    <input type="text" name="Jefe_operativo" id="Jefe_operativo">
    <br>

    <label for="Email_jefe"> Email_jefe </label>
    <input type="text" name="Email_jefe" id="Email_jefe">
    <br>

    <label for="Tel_jefe"> Tel_jefe </label>
    <input type="text" name="Tel_jefe" id="Tel_jefe">
    <br>

    <label for="Estacion_directorio"> Estacion_directorio </label>
    <input type="text" name="Estacion_directorio" id="Estacion_directorio">
    <br>

    <label for="Supervisor"> Supervisor </label>
    <input type="text" name="Supervisor" id="Supervisor">
    <br>

    <label for="Email_supervisor"> Email_supervisor </label>
    <input type="text" name="Email_supervisor" id="Email_supervisor">
    <br>

    <label for="Tel_supervisor"> Tel_supervisor </label>
    <input type="text" name="Tel_supervisor" id="Tel_supervisor">
    <br>

    <input type="submit" value="Guardar datos">
    <br>
</form>