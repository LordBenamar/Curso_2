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
        

        // Definimos el esquema de la tabla llamado "usuarios" en una variable llamada query.
        $query = "CREATE TABLE usuarios(
            id INT PRIMARY KEY AUTO_INCREMENT,
            nombre VARCHAR(50),
            apellido VARCHAR(50),
            edad INT(2),
            email VARCHAR(255) NOT NULL UNIQUE,
            telefono BIGINT(20) UNIQUE,
            clave VARCHAR(255) NOT NULL,
            registrado TIMESTAMP
        )";


        // Ejecutamos la consulta usando la instancia previamente creada de la clase mysqli, llamada "conexion".
        $consulta = $conexion->query($query);


        // Verificamos si la consulta se ejecuto correctamente.
        if($consulta){
            echo "La consulta se realizo correctamente <br>Se creo la tabla usuarios";
            echo "<script>console.log('Tabla creada correctamente')</script>";
        }else{
            echo $conexion->error;
            echo "<script>console.log(".$conexion->error.")</script>";
        }



        // Para evitar brechas de seguridad en tu sistema o web site se recomienda cerrar la conexion al final de cada proceso critico.
        $conexion->close(); 
    }

?>