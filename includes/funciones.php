<?php

function obtener_servicios(){
    try {
        // Importar las credenciales
        require 'database.php';

        // Consulta SQL
        $sql = "SELECT * FROM servicios;";

        // Realizar la consulta
        $consulta = mysqli_query($db, $sql);

        // Acceder a los resultados (API)
        echo "<pre>";
        var_dump(mysqli_fetch_assoc($consulta));
        echo "</pre>";

        // Cerrar la conexión (opcional)
        $resultado = mysqli_close($db);
        echo $resultado;

    } catch (\Throwable $th) {
        var_dump($th);
    }
}

obtener_servicios();