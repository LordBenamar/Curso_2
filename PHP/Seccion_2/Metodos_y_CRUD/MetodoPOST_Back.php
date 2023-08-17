<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registrar usuario</title>
    </head>
    <body>
        <?php 
            include "../../Componentes/NavBar.php"; 
        ?>
        <h1>Registrar usuario</h1>
        <?php
            // Capturamos la informacion del formulario que viaja a traves del metodo POST
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $edad = $_POST['edad'];
            $email = $_POST['email'];
            $telefono = $_POST['telefono'];
            $pasword = $_POST['clave'];


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


                // Antres de definir la consulta que insertara el usuario en la tabla usuarios debemos encriptar la clave.
                // Para ello usaremos password_hash(), este metodo recibe 2 parametros, la clave y el metodo de encriptacion
                $paswordEncriptado = password_hash($pasword, PASSWORD_DEFAULT);


                // Definimos la consulta que insertara la informacion en la tabla usuarios.
                $query = "INSERT INTO usuarios (nombre, apellido, edad, email, telefono, clave) VALUES ('$nombre', '$apellido', '$edad', '$email', '$telefono', '$paswordEncriptado');";

                // Ejecutamos la consulta 
                $consulta = $conexion->query($query);

                // Validamos si el usuario se inserto correctamente.
                if($consulta){
                    echo "<h2>Gracias por registrarte</h2>";
                    echo "<script>alert('Usuario registrado correctamente');</script>";
                    echo "<a href='./MetodoPOST_Front.php'>Registrar nuevo usuario</a>";
                }else{
                    echo "Error al registrar el usuario";
                    echo "<script>alert('Error al registrar el usuario');</script>";
                }

                $conexion->close(); // Cerramos la conexion
            }

        ?>
        <a href="./MetodoGET.php">
            <button>Ver usuarios registrados</button>
        </a>
    </body>
</html>