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
            echo var_dump($arrayDeStrings); // Muestra informacion acerca de una variable.
            echo implode(" ", $arrayDeStrings); // Unifica un array en un string.
        ?>



        <h3>Metodos de Arrays</h3>
        <?php
            $frutas = array("manzana", "pera", "naranja", "sandia");
            $frutas2 = array("uva", "fresa", "banana");

            echo "El array 1 es: ".implode(", ",$frutas)."<br>";
            echo "El array 2 es: ".implode(", ",$frutas2)."<br><br>";

            $totalElementos = count($frutas); // Cuenta el número de elementos en el array
            echo "El total de frutas en el array 1 es: $totalElementos <br>";
            $totalElementos2 = count($frutas2);
            echo "El total de frutas en el array 2 es: $totalElementos2 <br>";

            $primerElemento = reset($frutas); // Obtiene el primer elemento del array.
            echo "La primera fruta del array 1 es: $primerElemento <br>";
            
            $ultimoElemento = end($frutas); // Obtiene el último elemento del array.
            echo "La ultima fruta del array 1 es: $ultimoElemento <br>";

            $existeElElemento = in_array("pera", $frutas); // Verifica si un elemento existe en el array, retorna true o false.
            echo "¿La fruta pera existe en el array 1?: ";
            echo ($existeElElemento) ? "Sí" : "No";

            $arrayInvertido = array_reverse($frutas); // Revierte el orden de los elementos en el array
            echo "<br>El array invertido es: ".implode(", ",$arrayInvertido);

            $arrayCombinado = array_merge($frutas, $frutas2); // Combina dos arrays
            echo "<br>El array combinado es: ".implode(", ",$arrayCombinado);

            $elementosExtraidos = array_slice($frutas, 0, 3); // Extrae los elementos de un array. array_slice(array, inicio, cantidad)
            echo "<br>Los elementos extraidos son: ".implode(", ",$elementosExtraidos);
        ?>
    </body>
</html>