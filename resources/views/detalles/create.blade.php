Formulario de creacion de detalles


<form action="{{ url('/detalles') }}" method="post">
@csrf

    <label for="detalles_id"> detalles_id </label>
    <input type="text" name="detalles_id" id="detalles_id">
    <br>

    <label for="Objeto"> Objeto </label>
    <input type="text" name="Objeto" id="Objeto">
    <br>

    <label for="Detalle"> Detalle </label>
    <input type="text" name="Detalle" id="Detalle">
    <br>

    <input type="submit" value="Guardar datos">
    <br>
</form>