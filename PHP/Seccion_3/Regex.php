<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Regex</title>
    </head>
    <body>
        <h1>Expresiones Regulares</h1>
        <p>Oracion a evaluar: El gato de mi vecino es blanco y esta en sobre el sofa blanco</p>

        <?php
            $oracion1 = "El gato de mi vecino es blanco y esta en sobre el sofa blanco";
            $oracion2 = "Hola, mi nombre es Diego, y esto es una clase de python, donde aprendemos sobre regex";
            $oracion3 = "El usuario esta online";


            // Expresiones Regulares
            $miRegex1 = "/blanco/";
            $miRegex2 = "/python/";
            $miRegex3 = "/online/";


            // Utilizamos preg_match para verificar si la oracion contiene la palabra "blanco"
            // Esta funcion retorna un array de coincidencias.
            if(preg_match($miRegex1, $oracion1, $coincidencias)){
                echo "<p>Coincidencia encontrada: ".$coincidencias[0]."</p>";
            }else{
                echo "<p>No se encontro nunguna coincidencia</p>";
            }


            //  Utilizando preg_match_all(): esta función busca todas las coincidencias en la cadena de texto
            // Ademas retorna un array que contiene el total de coincidencias encontradas en la cadena de texto.

            if(preg_match_all($miRegex1, $oracion1, $coincidencias)){
                print_r($coincidencias);
                echo "<p>Se encontraron:  coincidencias</p>";
            }else{
                echo "<p>No se encontro nunguna coincidencia</p>";
            } 



            // Utilizando preg_replace() para reemplazar una palabra por otra en la cadena de texto a evaluar.
            $nuevaCadena1 = preg_replace($miRegex1, "negro", $oracion1);
            echo "<p>Nueva cadena: ".$nuevaCadena1."</p>";

            $nuevaCadena2 = preg_replace($miRegex2, "PHP", $oracion2);
            echo "<p>Nueva cadena: ".$nuevaCadena2."</p>";

            $nuevaCadena3 = preg_replace($miRegex3, "offline", $oracion3);
            echo "<p>Nueva cadena: ".$nuevaCadena3."</p>";
        
        
            
            // Utilizando preg_split(): esta funcion divide una cadena de texto en un array de cadenas de texto.
            $partesCadena1 = preg_split($miRegex1, $oracion1);
            // Utilizamos foreach para mostrar cada parte, es decir, para iterar sobre el arrar llamado $partesCadena1.
            foreach($partesCadena1 as $fragmento){
                echo "<p>".$fragmento."</p>";
            }
        ?>

        <ol>
            <?php
                $partesCadena2 = preg_split('/\s/', $oracion2);
                foreach($partesCadena2 as $fragmento){
                    echo "<li>".$fragmento."</li>";
                }
            ?>
        </ol>



    </body>
</html>