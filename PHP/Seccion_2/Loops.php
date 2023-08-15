<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Loops</title>
    </head>
    <body>
        <h1>Loops</h1>
        <!-- Aqui vamos a probar el valor de la COOKIE que recien creamos -->
        <?php
            if(isset($_COOKIE["usuario1"])){
                echo "<p>Bienvenido: ".$_COOKIE["usuario1"]."</p>";
            }
        ?>

        <p>
            <?php 
                // For
                for ($i = 1; $i <= 10; $i++) {
                    echo "Numero: ". $i ." <br>";
                }
            ?>
        </p>


        <div>
            <?php
                function tablaDeMultiplicar(){
                    echo "<p>Tabla de multiplicar de 10</p>";
                    for($i = 1; $i <= 10; $i++){
                        echo "<p>" . $i . " x 10 = " . $i * 10 . "</p>";
                    }
                }

                tablaDeMultiplicar();
            ?>
        </div>



        <p>
            <?php
                // While
                $contador = 1;
                while($contador <= 20){
                    echo $contador . ",&nbsp";
                    $contador++;
                }
            ?>
        </p>


        <p>
            <?php
                // Do While
                $contador = 1;
                do{
                    echo $contador . ",&nbsp";
                    $contador++;
                }while($contador <= 10);
            ?>
        </p>



        <ul>
            <?php
                // Foreach
                $frutas = ['Manzana', 'Mango', 'Pera', 'Uva', 'Durazno', 'Naranja'];
                // foreach: recibe como parametro el arreglo que se va a iterar.
                foreach($frutas as $fruta){
                    echo "<li>" . $fruta . "</li>";
                }
            ?>
        </ul>
    </body>
</html>