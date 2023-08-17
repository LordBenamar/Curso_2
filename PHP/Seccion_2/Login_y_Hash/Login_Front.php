<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
    </head>
    <body>
        <h1>Iniciar Sesión</h1>

        <!-- Aqui vamos a probar el valor de la COOKIE que recien creamos -->
        <?php
            if(isset($_COOKIE["usuario1"])){
                echo "<p>Bienvenido: ".$_COOKIE["usuario1"]."</p>";
            }
        ?>

        <form action="Login_Back.php" method="POST">
            <input type="text" name="correo" placeholder="Correo" pattern="\w+@\w+\.\w{2,3}" required><br>
            <input type="password" name="clave" placeholder="Contraseña" required><br>

            <input type="submit" value="Iniciar Sesión">
        </form>
    </body>
</html>