<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge name="">
        <metaviewport" content="width=device-width, initial-scale=1.0">
        <title>Actuaizar Correo</title>
    </head>
    <body>
        <?php 
            include "../../Componentes/NavBar.php"; 
        ?>
        <h2>Actualizar Correo</h2>

        <form method="POST" action="./MetodoPUT_Back.php">
            <h3>Usuario a actualizar</h3>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombreActual" required><br><br>

            <label for="email">Email actual:</label>
            <input type="email" name="emailActual" required><br><br>

            <label for="telefono">Telefono actual:</label>
            <input type="number" name="telefonoActual" required><br><br>
        

            <h3>Nueva informacion</h3>
            <label for="nombre">Nuevo Nombre:</label>
            <input type="text" name="nombre" required><br><br>

            <label for="apellido">Nuevo Apellido:</label>
            <input type="text" name="apellido" required><br><br>

            <label for="edad">Nueva Edad:</label>
            <input type="number" name="edad" required><br><br>

            <label for="telefono">Nuevo Telefono:</label>
            <input type="number" name="telefono" required><br><br>

            <label for="email">Nuevo Email:</label>
            <input type="email" name="email" required><br><br>
            
            <input type="submit" value="Actuaizar">
        </form>
    </body>
</html>
