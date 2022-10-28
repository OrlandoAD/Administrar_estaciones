Formulario de creacion de versiones


<form action="{{ url('/versiones') }}" method="post">
@csrf

    <label for="versiones_id"> versiones_id </label>
    <input type="text" name="versiones_id" id="versiones_id">
    <br>

    <label for="Herramienta"> Herramienta </label>
    <input type="text" name="Herramienta" id="Herramienta">
    <br>

    <label for="Version"> Version </label>
    <input type="text" name="Version" id="Version">
    <br>

    <input type="submit" value="Guardar datos">
    <br>
</form>