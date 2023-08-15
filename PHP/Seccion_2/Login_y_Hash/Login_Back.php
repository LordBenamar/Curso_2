<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
    </head>
    <body>
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
                
                // Capturamos los datos que el usuario envia desde el login.
                $correo = $_POST['correo'];
                $clave = $_POST['clave'];

                // Definimos la primera consulta, esta servira para obtener todos los usuarios registrados en la base de datos
                // que posean el correo indicado en el login, Como la base de datos tiene el campo correo como unico, 
                // deberia existir solo un usuario, por ende solo deberiamos recibir un solo resultado.
                $consulta = "SELECT * FROM usuarios WHERE email = '$correo'";

                // Ejecutamos la consulta.
                $resultado1 = $conexion->query($consulta);

                // Validamos si se recibe un resultado.
                if($resultado1->num_rows == 1){
                    echo "<script>console.log('Usuario encontrado')</script>";

                    // Creamos un array asociativo con los datos del usuario encontrado, en este array estara incluido el hash.
                    $datosDelUsuario = $resultado1->fetch_assoc();

                    // Comparamos la contraseña ingresada en el login con el hash obtenido de la base de datos.
                    // password_verify(claveRecibida, claveEncriptada)
                    if(password_verify($clave, $datosDelUsuario['clave'])){
                        echo "<p>Contraseña correcta, Sesion iniciada</p>";
                        echo "<p>Bienvenido: ".$datosDelUsuario['nombre']." ".$datosDelUsuario['apellido']."</p>";
                    }else{
                        echo "<p>Contraseña incorrecta, no se pudo iniciar sesion</p>";
                    }

                }else{
                    echo "<script>alert('Usuario no encontrado')</script>";
                }

                // Para evitar brechas de seguridad en tu sistema o web site se recomienda cerrar la conexion al final de cada proceso critico.
                $conexion->close(); 
            }
        ?>
    </body>
</html>