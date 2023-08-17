<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Eliminar Usuario</title>
    </head>
    <body>
    <?php 
        include "../../Componentes/NavBar.php"; 
    ?>
    <h3>Eliminar mediante correo</h3>
        <form method="POST" action="./MetodoDELETE_Back.php">
            <label for="email">Email del usuario a Eliminar:</label>
            <input type="email" id="email" name="email" required><br><br>
            
            <input type="submit" value="Eliminar">
        </form>
    </body>
</html>