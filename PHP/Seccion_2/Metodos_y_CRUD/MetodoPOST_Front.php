<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registrar usuario</title>
    </head>
    <body>
        <h1>Registrar usuario</h1>
        <form action="./MetodoPOST_Back.php" method="POST">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre"><br>

            <label for="apellido">Apellido</label>
            <input type="text" name="apellido"><br>

            <label for="edad">Edad</label>
            <input type="text" name="edad"><br>

            <label for="email">Email</label>
            <input type="text" name="email"><br>

            <label for="telefono">Telefono</label>
            <input type="text" name="telefono"><br>

            <label for="clave">Clave</label>
            <input type="password" name="clave"><br>

            <input type="submit" value="Registrar">
        </form>
    </body>
</html>