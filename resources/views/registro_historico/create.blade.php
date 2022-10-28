<form action="{{ url('/registro_historico') }}" method="post">
@csrf

    <label for="Estado_rep"> Estado_rep </label>
    <input type="text" name="Estado_rep" id="Estado_rep">
    <br>

    <label for="Estacion_registro"> Estacion_registro </label>
    <input type="text" name="Estacion_registro" id="Estacion_registro">
    <br>

    <label for="Registro_reemplazo"> Registro_reemplazo </label>
    <input type="text" name="Registro_reemplazo" id="Registro_reemplazo">
    <br>

    <label for="Observaciones"> Observaciones </label>
    <input type="text" name="Observaciones" id="Observaciones">
    <br>

    <label for="Ultimo_chequeo_obs"> Ultimo_chequeo_obs </label>
    <input type="text" name="Ultimo_chequeo_obs" id="Ultimo_chequeo_obs">
    <br>

    <label for="Nobreaks_reemplazados"> Nobreaks_reemplazados </label>
    <input type="text" name="Nobreaks_reemplazados" id="Nobreaks_reemplazados">
    <br>

    <label for="Ultimo_chequeo_nobreaks"> Ultimo_chequeo_nobreaks </label>
    <input type="text" name="Ultimo_chequeo_nobreaks" id="Ultimo_chequeo_nobreaks">
    <br>

    <label for="Numero_Serie"> Numero_Serie </label>
    <input type="text" name="Numero_Serie" id="Numero_Serie">
    <br>

    <input type="submit" value="Guardar datos">
    <br>
</form>