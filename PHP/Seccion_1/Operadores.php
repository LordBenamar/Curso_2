<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Operadores</title>
    </head>
    <body>
        <h1>Operadores en PHP</h1>

        <?php
            // Operadores de asignacion
            $num1 = 10;
            $num2 = 20;

            echo("<p>La variable 1 vale $num1 </p>");
            echo("<p>La variable 2 vale $num2 </p>");


            echo("<h3>Operadores de asignacion</h3>");
            // Concatenar y asignar: Este operador se usa para concatenar un nuevo valor con el valor existente.
            $num1 .= $num2;

            echo("<p>Concatenacion y asignacion: $num1</p>");




            // Reasignamos las variables al valor original. 
            $num1 = 10;
            $num2 = 20;

            // Sumar y asignar: Este operador se usa para sumar  y asignar un nuevo valor.
            $num1 += $num2;
            echo("<p>Suma y asignacion: $num1</p>");




            
            // Reasignamos las variables al valor original.
            $num1 = 10;
            $num2 = 20;
            
            // Restar y asignar: Este operador se usa para restar y asignar un nuevo valor.
            $num2 -= $num1;
            echo("<p>Resta y asignacion: $num1</p>");



            // Reasignamos las variables al valor original.
            $num1 = 10;
            $num2 = 20;


            // Multiplicar y asignar: Este operador se usa para multiplicar y asignar un nuevo valor.
            $num1 *= $num2;
            echo("<p>Multiplicacion y asignacion: $num1</p>");



            // Reasignamos las variables al valor original.
            $num1 = 10;
            $num2 = 20;

            // Dividir y asignar: Este operador se usa para dividir y asignar un nuevo valor.
            $num1 /= $num2;
            echo("<p>Division y asignacion: $num1</p>");



            // Reasignamos las variables al valor original.
            $num1 = 10;
            $num2 = 20;

            // Modulo y asignar: Este operador se usa para obtener el resto de una división y asignar un nuevo valor.
            $num1 %= $num2;
            echo("<p>Modulo y asignacion: $num1</p>");










            // Operadores de Aritmeticos
            echo("<h3>Operadores de Aritmeticos</h3>");

            // Redeclaramos las variables
            $num1 = 100;
            $num2 = 50;

            $suma = $num1 + $num2; // Este operador se usa para sumar.
            $resta = $num1 - $num2; // Este operador se usa para restar.
            $multiplicacion = $num1 * $num2; // Este operador se usa para multiplicar.
            $division = $num1 / $num2; // Este operador se usa para dividir.
            $modulo = $num1 % $num2; // Este operador se usa para modulo.






            // Comparativos
            echo("<h3>Operadores de Comparativos</h3>");
            $igual = $num1 == $num2; // Este operador se usa para comparar
            $exactamenteIgual = $num1 === $num2; // Este operador se usa para comparar valor y tipo de dato.
            $diferente = $num1 != $num2; // Este operador se usa para comparar si es distinto
            $mayor = $num1 > $num2; // Este operador se usa para comparar si es mayor
            $menor = $num1 < $num2; // Este operador se usa para comparar si es menor
            $mayorIgual = $num1 >= $num2; // Este operador se usa para comparar si es mayor o igual
            $menorIgual = $num1 <= $num2; // Este operador se usa para comparar si es menor o igual







            // Logicos
            echo("<h3>Operadores de Logicos</h3>");

            // Asignamos las variables
            $var1 = true;
            $var2 = false;

            $and = $var1 && $var2; // Este operador se usa para comparar si ambos son verdaderos
            $or = $var2 || $var1; // Este operador se usa para comparar si alguno es verdadero
            $not = !$var1; // Este operador se usa para comparar si es falso, en otras palabras para negar un valor.
        ?>  

    </body>
</html>