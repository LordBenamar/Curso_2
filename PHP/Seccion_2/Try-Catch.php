<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Try-Catch</title>
    </head>
    <body>
        <h1>Try-Catch</h1>
        <!-- 
            try y catch: son bloques utilizados para implementar el manejo de excepciones. 
            El bloque try se utiliza para envolver el código que puede generar una excepción, 
            mientras que el bloque catch se utiliza para capturar y manejar las excepciones lanzadas 
            dentro del bloque try.

            Las excepciones son errores que pueden ocurrir durante la ejecución de un programa.
        -->

        <?php
            // try{
            //     // En este ejemplo se lanza una excepción de división por cero, DivisionByZero exception.
            //     $resultado = 10 / 0; // División por cero, lanza una excepción.
            //     echo "Esta linea no se ejecutará.";
            // }catch(Exception $error){
            //     // Capturando la exepcion (error) y manejandola.
            //     echo "Se produjo una exepcion: " . $error->getMessage();
            // }

            echo "<br>"; // Salto de linea entre bloques

            try{
                $resultado = 10 / 2;
                echo "La división de 10 entre 2 es: " . $resultado;
            }catch(Exception $error){
                // Capturando la exepcion (error) y manejandola.
                echo "Se produjo una exepcion: " . $error->getMessage();
            }
        ?>
    </body>
</html>