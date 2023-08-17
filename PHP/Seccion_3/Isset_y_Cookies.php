<!-- 
    COOKIES: Las cookies o galletas informaticas, son variables que se almacenan en el navegador del usuario y
    se utilizan para guardar información sobre el mismo.

    amenudo para guardar información sobre las credenciales del usuario, las preferencias del sitio, etc...
-->

<?php
    // Definir una COOKIE amerita: 
    // Asignacion de nombre, valor y tiempo de vida de la cookie, donde 86400 equivale a 1 dia
    // La funcion setcookie() creara una cookie con el nombre "diego", y el valor "Diego Rodriguez".
    // Esta cookie tendra un tiempo de vida de 86400 segundos y podra ser accesada por el navegador desde
    // la carpeta raiz del servidor.

    // setcookie(nombre, valor, tiempo de vida, carpeta(vease como el scope));
    setcookie("usuario1", "Diego Rodriguez", time() + 86400, "/");

    // DATO CURIOSO: la función time() devuelve el tiempo actual en formato UNIX Epoch. 
    // El formato UNIX Epoch representa el tiempo como un número entero que representa
    // los segundos transcurridos desde el 1 de enero de 1970 a las 00:00:00 UTC.
    // El valor máximo que puede representarse en un numero entero de 32 bits
    // (como se utiliza comúnmente en sistemas Unix) es el 19 de enero de 2038 a las 03:14:07 UTC. 
    // Este evento se conoce como el problema del año 2038 o "Y2K38".


    // Verificamos si la COOKIE existe usando isset(), isset es la conjugacion de 
    // "is set" que traducido es: ¿esta asignado?
    // La funcion isset() verifica si la variable se creo y se asigno o si ya existia y tiene una asignacion.
    
    if(isset($_COOKIE["usuario1"])){
        echo "<p>Se creo la COOKIE y su valor es: ".$_COOKIE["usuario1"]."</p>";
    }else{
        echo "<p>La COOKIE aun no existe, O no se puede acceder a ella todavia, por favor recargue la pagina</p>";
    }



    // Borrar una COOKIE
    // Para borrar una cookie, debes establecerla con un tiempo de expiración en el pasado.
    // setcookie(nombre, valor, tiempo de vida en el pasado, carpeta);
    // setcookie("usuario1", "", time() - 1, "/");
?>