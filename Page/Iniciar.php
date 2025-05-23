<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Views/CSS/Iniciosesion.css">
</head>
<body>

    <header>

    </header>

    <main>
        <section class=" Iniciosesion">
            <form action="" method="post" class="FormLogin ">
                <h1>Inicia Sesion</h1>
                <label for="">E-mail o Usuario:</label>
                <input type="text" name="EmailUsuario" placeholder="Ingrese su E-mail o Usuario:">

                <label for="">Contraseña:</label>
                <input type="text" name="Contraseña" placeholder="Ingrese su Contraseña:">

                <input type="submit" value="Ingresar" name="Ingresar" class="btnLogin " id="btnLogin"/>

                <a href="">¿Olvido su Contraseña?</a>

                <a href="../Page/CrearCuenta.php">¿No esta registrado? crear cuenta</a>

            </form>
        </section>
        <section class="about-us">
           <div class="content">
                <h1>Estas un paso mas cerca de hacerte conocido!</h1>
                <a href=""><img src="../Img/Main/lupa.gif" alt=""></a>
                <h4>"Juntos creamos oportunidades que transforman vidas."</h4>
            </div>
        </section>

        <?php
        include("../Controller/conexion.php");
        include("../Model/Login/Login.php");

    ?>



        
    </main>
    
</body>
</html>