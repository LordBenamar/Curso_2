<?php

    // Llamamos al componente de barra de navegacion usando include.
    // Si el componente no se encuentre solo se vera un warning.
    include "../../Componentes/NavBar.php";
    
    
    // Se utiliza require para importar la conexion ya que es un archivo vital para el funcionamiento de la pagina.
    // Si el archivo no se encuentra se detendra el funcionamiento de la pagina.
    require "../Conexionn.php";

    // Comprobamos la conexion.
    if ($conexion->connect_error) { // Si la conexion falla por alguna razon
        die("La conexion falló: ".$conexion->connect_error); // Matamos/terminamos la conexion
    }else{ // De lo contrario
        echo "<script>console.log('Conexion exitosa')</script>"; // Mostramos que se realizo la conexion en la consola del navegador.

        // Capturamos la informacion del formulario que viaja a traves del metodo POST
        $email = $_POST['email'];


        // Buscamos en la tabla usuarios el usuario a eliminar.
        $sql1 = "SELECT * FROM usuarios WHERE email = '$email'";

        // Ejecutamos la consulta 1
        $resultado1 = $conexion->query($sql1);

        // Validamos si el usuario existe.
        if($resultado1->num_rows == 1){
            echo "<p>El usuario existe</p>";

            // Definimos la consulta que eliminara un usuario de la tabla usuarios en la base de datos.
            $sql2 = "DELETE FROM usuarios WHERE email = '$email'";

            // Ejecutamos la consulta
            $resultado2 = $conexion->query($sql2);

            // Validamos si el usuario se elimino correctamente.
            if($resultado2){
            echo "<p>Usuario eliminado correctamente</p>";

            // Redireccionamos a la pagina para eliminar usuarios despues de 5 segundos
            // header("Refresh:5; url=./MetodoDELETE_Front.php");
            }else{
                echo "<p>Error al eliminar el usuario</p>".$conexion->error;
                
                // Redireccionamos a la pagina para eliminar usuarios despues de 5 segundos
                // header("Refresh:5; url=./MetodoDELETE_Front.php");
            }
        }else{
            echo "<p>El usuario no existe</p>";
            // Redireccionamos a la pagina para eliminar usuarios despues de 5 segundos
            // header("Refresh:5; url=./MetodoDELETE_Front.php");
        }
        
        $conexion->close(); // Cerramos la conexion
    };
?>

<h1>Seccion 2</h1>