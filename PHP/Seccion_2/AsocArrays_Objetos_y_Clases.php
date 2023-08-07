<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Asoc. Arrays, Objetos y Clases</title>
    </head>
    <body style="background-color: gray;">
        <h3>Asoc. Arrays</h3>
        <!-- Un Array asociativo es una coleccion de pares clave/valor, muy común en PHP,
        se asemejan a los objetos de JavaScript -->

        <?php
            $auto = array(
                "marca" => "Ford",
                "modelo" => "Mustang",
                "color" => "Rojo",
                "nuevo" => true
            );

            echo "<p>
                    <span style='font-weight: bold;'>Marca:&nbsp</span>". $auto['marca'].
                    "<br><span style='font-weight: bold;'>Modelo:&nbsp</span>". $auto['modelo'].
                    "<br><span style='font-weight: bold;'>Color:&nbsp</span>". $auto['color'].
                    "<br><span style='font-weight: bold;'>Nuevo:&nbsp</span>". $auto['nuevo'].
                "</p>";
        ?>


        <h4>Metodos de Arrays asociativos</h4>
        <?php
            // array_key_exists(): Comprueba si una clave existe en un array asociativo.
            if(array_key_exists("marca", $auto)){
                echo "<p>La propiedad marca existe</p>";
            }else{
                echo "<p>La propiedad marca no existe</p>";
            }
            
            if(array_key_exists("modelo", $auto)){
                echo "<p>La propiedad modelo existe</p>";
            }else{
                echo "<p>La propiedad modelo no existe</p>";
            }
            
            if(array_key_exists("color", $auto)){
                echo "<p>La propiedad color existe</p>";
            }else{
                echo "<p>La propiedad color no existe</p>";
            }


            // array_keys(): Devuelve un array con todas las propiedades de un array asociativo.
            $propiedadesDelAsocArray = array_keys($auto);

            // array_values(): Devuelve un array con todos los valores de un array asociativo.
            $valoresDelAsocArray = array_values($auto);

            echo "<p>Propiedades: ".implode(", ", $propiedadesDelAsocArray)."</p>";
            echo "<p>Valores: ".implode(", ", $valoresDelAsocArray)."</p>";




            // array_merge(): permite unir arrays asociativos.
            // En caso de que una clave(propiedad) exista en el array asociativo, el valor de esta se reemplaza 
            // por el nuevo valor que proviene del array asociativo a combinar.

            $auto2 = array(
                "marca" => "Chevrolet",
                "Modelo" => "Camaro",
                "Color" => "Negro",
                "nuevo" => true
            );

            $arraysCombinados = array_merge($auto, $auto2);
            echo "<p>El array combinado es: ".implode(", ", $arraysCombinados)."</p>";
            
            // Mostrando los valores del nuevo array combinado.
            echo "<p>Las propiedades del nuevo array combinado son: ".implode(", ", array_keys($arraysCombinados))."</p>";
            echo "<p>Los valores del nuevo array combinado son: ".implode(", ", array_values($arraysCombinados))."</p>";
        ?>



        <h3>Objetos y Clases Genericas</h3>
        <?php 
            $persona = new stdClass();
            $persona-> nombre = "Diego";
            $persona-> apellido = "Rodriguez";
            $persona-> edad = 27;
            $persona-> altura = 1.89;
            $persona-> profesion = "Programador";

            echo "<p><strong>Nombre: </strong>". $persona->nombre."</p>";
            echo "<p><strong>Apellido: </strong>". $persona->apellido."</p>";
            echo "<p><strong>Edad: </strong>". $persona->edad."</p>";
            echo "<p><strong>Altura: </strong>". $persona->altura."</p>";
            echo "<p><strong>Profesion: </strong>". $persona->profesion."</p>";
        ?>



        <h3>Objetos, Clases y Metodos de Objetos</h3>
        <?php 
            class Automovil{
                // Atributos: son variables que se declaran dentro de la clase
                // Public: se utiliza al declarar los atributos y métodos de la clase para que 
                // puedan ser accedidos desde cualquier parte del código.
                public $marca;
                public $modelo;
                public $annio;
                
                // Constructor: se utiliza para inicializar los atributos. 
                public function __construct($marca, $modelo, $annio){
                    // $this: se utiliza para referirse a los atributos de la clase en la instanciación.
                    $this->marca = $marca;
                    $this->modelo = $modelo;
                    $this->annio = $annio;
                }

                // Metodos: son bloques de codigo que permiten que la clase realice diferentes acciones.
                // Son identicas a las funciones de JavaScript.
                public function obtenerMarca(){
                    return $this->marca;
                }

                public function obtenerModelo(){
                    return $this->modelo;
                }

                public function obtenerAnnio(){
                    return $this->annio;
                }

                public function avanzar(){
                    echo "<p>El auto ". $this->marca." " .$this->modelo." esta avanzando</p>";
                }

                public function detener(){
                    echo "<p>El auto ". $this->marca." " .$this->modelo." esta deteniendo</p>";
                }
            };

            $auto1 = new Automovil("Toyota", "Corolla", 2023);
            $auto2 = new Automovil("Nissan", "Sentra", 2022);

            // Trabajando con la primera instancia (objeto) de la clase Automovil.
            echo "<p><strong>Instancia 1</strong></p>";
            echo "<p><strong>Marca: </strong>". $auto1->obtenerMarca()."</p>";
            echo "<p><strong>Modelo: </strong>". $auto1->obtenerModelo()."</p>";
            echo "<p><strong>Año: </strong>". $auto1->obtenerAnnio()."</p>";

            // Utilizando los metodos de la clase Automovil con la instancia 1.
            $auto1->avanzar();
            $auto1->detener();





            // Trabajando con la segunda instancia (objeto) de la clase Automovil.
            echo "<p><strong>Instancia 2</strong></p>";
            echo "<p><strong>Marca: </strong>". $auto2->obtenerMarca()."</p>";
            echo "<p><strong>Modelo: </strong>". $auto2->obtenerModelo()."</p>";
            echo "<p><strong>Año: </strong>". $auto2->obtenerAnnio()."</p>";

            // Utilizando los metodos de la clase Automovil con la instancia 2.
            $auto2->avanzar();
            $auto2->detener();
        ?>
    </body>
</html>