<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Views/CSS/crearcuenta.css">
</head>
<body>
    <header>
        
    </header>
    <main>
        <section class="crearcuenta">
            <form action="" method="post" class="login ">
                <h1>Crea tu Cuenta</h1>
                <label for="">E-mail:</label>
                <input type="text" name="Email" placeholder="Ingrese su E-mail:" required>

                <label for="">Usuario:</label>
                <input type="text" name="Usuario" placeholder="Creé un Usuario:" required>

                <label for="">Contraseña:</label>
                <input type="text" name="Contraseña" placeholder="Creé una Contraseña:" required>

                <input type="submit" value="Crear cuenta" name="CrearCuenta" class="btnLogin btn-primary" id="btnLogin"/>

                
            </form>
        </section>

    </main>
    <footer>

    </footer>

    <?php
        include("../Controller/conexion.php");
        include("../Model/Login/CrearCuenta.php");

    ?>
    
</body>
</html>