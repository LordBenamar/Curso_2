<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Actualizar Usuario</title>
    </head>
    <body>
        <?php 
            include "../../Componentes/NavBar.php"; 
        ?>
        <h3>Actualizar Usuario</h3>
        <?php

            // Definimos las variables de conexion a la base de datos.
            $host = "localhost";
            $usuario = "root";
            $claveBD = "";
            $base_de_datos = "bd_grupo_8";


            // Creamos la conexion a la base de datos instanciando la clase mysqli.
            $conexion = new mysqli($host, $usuario, $claveBD, $base_de_datos);


            // Verificamos la conexion.
            if ($conexion->connect_error) {
                die("La conexion fallo: " . $conexion->connect_error);
            }else{
                echo "<script>console.log('Conexion exitosa')</script>";


                // Capturamos la informacion que viene desde el formulario a traves del metodo POST usando la variable $_POST.
                $nombreActual = $_POST['nombreActual'];
                $emailActual = $_POST['emailActual'];
                $telefonoActual = $_POST['telefonoActual'];
                
                $nombreNuevo = $_POST['nombre'];
                $apellidoNuevo = $_POST['apellido'];
                $edadNuevo = $_POST['edad'];
                $telefonoNuevo = $_POST['telefono'];
                $emailNuevo = $_POST['email'];


                // definimos la primera consulta, la cual verificara si el usuario existe en la base de datos.
                $sql = "SELECT * FROM usuarios WHERE nombre = '$nombreActual' AND email = '$emailActual' AND telefono = '$telefonoActual'";

                // Ejecutamos la consulta.
                $resultado = $conexion->query($sql);


                // Verificamos si existe exactamente una fila como resultado de la consulta.
                if ($resultado->num_rows == 1) {
                    echo "<p>El usuario existe, actualizando...</p>";

                    $sql2 = " UPDATE usuarios 
                        SET nombre = '$nombreNuevo', apellido = '$apellidoNuevo', edad = '$edadNuevo', telefono = '$telefonoNuevo', email = '$emailNuevo' 
                        WHERE nombre = '$nombreActual' AND email = '$emailActual' AND telefono = '$telefonoActual'
                    ";

                    // Ejecutamos la consulta.
                    $resultado2 = $conexion->query($sql2);

                    // Guardamos el total de filas afectadas.
                    $filasAfectadas = $conexion->affected_rows;

                    // Verificamos si se afecto una fila
                    if ($filasAfectadas > 0 and $filasAfectadas < 2) {
                        echo "<p>Usuario actualizado correctamente</p>";
                        // Mostramos un boton que perma ir a la pagina donde se visualizaran los usuarios registrados.
                        $conexion->close(); // Cerramos la conexion.
                        echo "<a href='./MetodoPUT_Front.php'>Editar otro usuario</a>";
                        echo "<a href='./MetodoGET.php'>Ver Usuarios</a>";
                    }else{
                        echo "<p>Ocurrio un evento inesperado al actualizar el usuario o no se pudo actualizar.</p>";
                        $conexion->close(); // Cerramos la conexion.
                        // Redirigimos al formulario luego de 5 segundos.
                        header("refresh: 5; url=MetodoPUT_Front.php");
                    }

                }else{
                    echo "<p>El usuario no existe, volviendo a la pagina anterior...</p>";
                    $conexion->close(); // Cerramos la conexion.
                    
                    // Redirigimos al formulario luego de 5 segundos.
                    header("refresh: 5; url=MetodoPUT_Front.php");
                }
            }
        ?>
    </body>
</html>