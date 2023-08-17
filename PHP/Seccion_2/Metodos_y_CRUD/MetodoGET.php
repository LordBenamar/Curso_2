<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Enlace al archivo CSS de Tailwind -->
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Usuarios Registrados</title>
    </head>
    <body class="bg-gradient-to-r from-green-400 to-green-800 pt-10">
        <?php 
            include "../../Componentes/NavBar.php"; 
        ?>
        <h1 class="text-center text-2xl font-bold">Usuarios Registrados</h1>
        <!-- En este div se van a cargar todos los usuarios registrados en la base de datos -->
        <div class="container mx-auto py-8">

        <!-- 
            Este bloque de PHP se encarga de mostrar los usuarios realizando una consulta e iterando sobre los resultados
            que seran recibidos como un array asociativo.
        -->
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

                    // Definimos la consulta que permitira obtener todos los usuarios que se encuentran en la tabla usuarios.
                    $sql = "SELECT * FROM usuarios";
                    
                    // Ejecutamos la consulta y almacenamos la respuesta en la variable llamada "resultado".
                    $resultado = $conexion->query($sql);
                    

                    // Verificamos si hay resultados.
                    // Se utilizara el metodo num_rows para verificar si al menos hay una fila.
                    if($resultado->num_rows >= 1){

                        // Extraemos las filas de la respuesta obtenida.
                        while($fila = $resultado->fetch_assoc()){
                            // Mientras existan filas por procesar, se capturara la informacion de cada una de ellas en variables temporales
                            // que se usaran para llenar los elementos del DOM.
                            $id = $fila['id'];
                            $nombre = $fila['nombre'];
                            $apellido = $fila['apellido'];
                            $edad = $fila['edad'];
                            $email = $fila['email'];
                            $telefono = $fila['telefono'];
                            $clave = $fila['clave'];
                            $fechaDeRegistro = $fila['registrado'];
                            
                            // Creamos y llenamos los elementos que se mostraran en el DOM.
                            echo "<div class='grid grid-cols-8 gap-2'>";
                                echo "<div class='col-span-1'>";
                                    echo "<span class='font-bold'>Id:</span>";
                                    echo "<span>".$id."</span>";
                                echo "</div>";
                                echo "<div class='col-span-1'>";
                                    echo "<span class='font-bold'>nombre:</span>";
                                    echo "<span>".$nombre."</span>";
                                echo "</div>";
                                echo "<div class='col-span-1'>";
                                    echo "<span class='font-bold'>apellido:</span>";
                                    echo "<span>".$apellido."</span>";
                                echo "</div>";
                                echo "<div class='col-span-1'>";
                                    echo "<span class='font-bold'>edad:</span>";
                                    echo "<span>".$edad."</span>";
                                echo "</div>";
                                echo "<div class='col-span-1'>";
                                    echo "<span class='font-bold'>email:</span>";
                                    echo "<span>".$email."</span>";
                                echo "</div>";
                                echo "<div class='col-span-1'>";
                                    echo "<span class='font-bold'>telefono:</span>";
                                    echo "<span>".$telefono."</span>";
                                echo "</div>";
                                echo "<div class='col-span-1'>";
                                    echo "<span class='font-bold'>clave:</span>";
                                    echo "<span>".$clave."</span>";
                                echo "</div>";
                                echo "<div class='col-span-1'>";
                                    echo "<span class='font-bold'>fecha de registro:</span>";
                                    echo "<span>".$fechaDeRegistro."</span>";
                                echo "</div>";
                            echo "</div>";
                        }
                    }else{
                        echo "No hay usuarios registrados";
                    }

                    // Liberamos la memoria de cualquier dato valioso obtenido.
                    $resultado->free();

                    // o tambien usando el metodo free_result
                    // $resultado->free_result();
                    
                    $conexion->close(); // Cerramos la conexion

                    echo "<div class='flex justify-evenly'>";
                        echo "<a href='./MetodoPOST_Front.php'><button class='rounded bg-white/50 px-2 py-2'>Añadir</button></a>";
                        echo "<a href='./MetodoPUT_Front.php'><button class='rounded bg-white/50 px-2 py-2'>Editar</button></a>";
                        echo "<a href='./MetodoDELETE_Front.php'><button class='rounded bg-white/50 px-2 py-2'>Eliminar</button></a>";
                    echo "</div>";
                }
            ?>
        </div>
    </body>
</html>