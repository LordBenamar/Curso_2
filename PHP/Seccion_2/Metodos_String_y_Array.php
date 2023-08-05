<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Metodos de String y Array</title>
    </head>
    <body>
        <h1>Metodos de String y Array</h1>
        <?php
            $cadena = "hola, esto es un ejemplo de manipulacion de strings en PHP.";
            echo "La cadena a trabajar es: $cadena <br><br>";

            // Metodos de Strings
            $longitud = strlen($cadena); // Obtiene la longitud del string.
            echo "La longitud de la cadena es: $longitud <br>";

            $minusculas = strtolower($cadena); // Convierte el string a minúsculas.
            echo "La cadena en minusculas es: $minusculas <br>";

            $mayusculas = strtoupper($cadena); // Convierte el string a mayúsculas.
            echo "La cadena en mayusculas es: $mayusculas <br>";

            $capitalizado = ucfirst($cadena); // Capitaliza la primera letra de un string
            echo "La cadena en mayusculas es: $capitalizado <br>";

            $subcadena = substr($cadena, 6, 10); // Obtiene una subcadena del string, partiendo desde la posición 6 hasta los siguientes 10 caracteres.
            echo "La subcadena es: $subcadena <br>";

            $posicion = strpos($cadena, "strings"); // Obtiene la posición de una cadena en un string.
            echo "La posicion de la cadena es: $posicion <br>";

            $reemplazar = str_replace("PHP", "vivo", $cadena); // Reemplaza una subcadena por otra.
            echo "La cadena ahora es: $reemplazar <br>";


            // Este metodo lo usaremos mas adelante con un metodo de Array.
            $arrayDeStrings = explode(" ", $cadena); // Divide un string en un array.
            echo var_dump($arrayDeStrings);
            echo implode(" ", $arrayDeStrings); // Unifica un array en un string.


        ?>
    </body>
</html>