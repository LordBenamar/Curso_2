<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Variables y Tipos de Datos en PHP</title>
    </head>
    <body>
        <h1>Variables y Tipos de Datos</h1>
        <?php
            $variable1 = "Hola Mundo"; #Tipo de dato string
            $variable2 = 10; #Tipo de dato int
            $variable3 = 10.5; #Tipo de dato float
            $variable4 = true; #Tipo de dato boolean
            $variable5 = null; #Tipo de dato null
            $variable6 = array(1,2,3,4,5); #Tipo de dato array


            // Imprimimos los valores de las variables usando echo
        ?>

        <?php 
            echo("<h3>Variables y Tipos de Datos</h3>");
        ?>
        <ul>
            <!-- echo es una funcion de PHP utilizada para imprimir valores -->
            <li>Variable1: <?php echo($variable1); ?> / String</li>
            <li>Variable2: <?php echo($variable2); ?> / Int</li>
            <li>Variable3: <?php echo($variable3); ?> / Float</li>
            <li>Variable4: <?php echo($variable4); ?> / Boolean</li>
            <li>Variable5: <?php echo($variable5); ?> / Null</li>
            <li>Variable6: <?php var_dump($variable6); ?> / Array</li>
        </ul>
    </body>
</html>