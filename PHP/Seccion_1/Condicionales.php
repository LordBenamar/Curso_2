<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Condicionales</title>
    </head>
    <body>
        <h1>Condicionales</h1>
        <?php 
            //IF-ELSEIF-ELSE 
            $variable = 1;

            if($variable == 1){
                echo("La variable es igual a 1");
            }elseif($variable == 2){
                echo("La variable es igual a 2");
            }elseif($variable == 3){
                echo("La variable es igual a 3");
            }else{
                echo("La variable no es igual a 1, 2 o 3");
            }
        
        ?>


        <p>
            <?php 
            // Operador Ternario
            $edad = 17;
            echo($edad >= 18)
                ? "Es mayor de edad"
                : "Es menor de edad";
            ?>
        </p>



        <div>
            <?php
                // Switch-Case
                $color = "rojo";
                switch($color){
                    case "azul":
                        echo("<h1>El color es azul</h1>");
                        break;
                    case "rojo":
                        echo("<p>El color es rojo</p>");
                        break;
                    case "verde":
                        echo("<span>El color es verde</span>");
                        break;
                    default:
                        echo("Selecciona un color valido");
                }
            ?>
        </div>

    </body>
</html>