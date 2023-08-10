<?php
    // Definimos las variables de conexion.
    $host = "localhost";
    $usuario = "root";
    $clave = "";
    $baseDeDatos = "bd_grupo_8";

    // Creamos una instancia de la clase mysqli.
    $conexion = new mysqli($host, $usuario, $clave, $baseDeDatos);

    // Comprobamos la conexion.
    if ($conexion->connect_error) { // Si la conexion falla por alguna razon
        die("La conexion falló: ".$conexion->connect_error); // Matamos/terminamos la conexion
    }else{ // De lo contrario
        echo "<script>console.log('Conexion exitosa')</script>"; // Mostramos que se realizo la conexion en la consola del navegador.
        
        // Para evitar brechas de seguridad en tu sistema o web site se recomienda cerrar la conexion al final de cada proceso critico.
        $conexion->close(); 
    }

?>