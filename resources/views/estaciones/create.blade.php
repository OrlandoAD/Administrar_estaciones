Formulario de creacion de estaciones


<form action="{{ url('/estaciones') }}" method="post">
@csrf

    <label for="Estado"> Estado </label>
    <input type="text" name="Estado" id="Estado">
    <br>

    <label for="Estacion"> Estacion </label>
    <input type="text" name="Estacion" id="Estacion">
    <br>

    <label for="Estado_Republica"> Estado_Republica </label>
    <input type="text" name="Estado_Republica" id="Estado_Republica">
    <br>

    <label for="Dispensarios_Activos"> Dispensarios_Activos </label>
    <input type="text" name="Dispensarios_Activos" id="Dispensarios_Activos">
    <br>

    <label for="Dispensarios_Totales"> Dispensarios_Totales </label>
    <input type="text" name="Dispensarios_Totales" id="Dispensarios_Totales">
    <br>

    <input type="submit" value="Guardar datos">
    <br>
</form>
