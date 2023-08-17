<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Funciones</title>
    </head>
    <body>
        <h1>Funciones</h1>
        
        <?php
            // Funciones 

            // Ejemplo 1
            function sumar($num1, $num2){
                return $num1 + $num2;
            }

            // Ejemplo 2
            function restar($num1, $num2){
                return floatval($num1 - $num2);
            }
        ?>

        <p>
            <?php 
                echo( sumar(10, 20) );
            ?>
        </p>
        
        <p>
            <?php 
                echo( sumar(20, 50) );
            ?>
        </p>
        
        <p>
            <?php 
                echo( sumar(100, 50) );
            ?>
        </p>
        
        <p>
            <?php 
                echo( sumar(200, 10) );
            ?>
        </p>
        
        <p>
            <?php 
                echo( restar(99.9, 33.3) );
            ?>
        </p>
        
        <p>
            <?php 
                echo( restar(25.5, 12.25) );
            ?>
        </p>

    </body>
</html>