<?php

function obtener_servicios(){
    try {
        // Importar las credenciales
        require 'database.php';

        // Consulta SQL
        $sql = "SELECT * FROM servicios LIMIT 5;";

        // Realizar la consulta
        $consulta = mysqli_query($db, $sql);

        return $consulta;

        // Acceder a los resultados (API)
        

        // Cerrar la conexión (opcional)
        $resultado = mysqli_close($db);
        echo $resultado;

    } catch (\Throwable $th) {
        var_dump($th);
    }
}

obtener_servicios();