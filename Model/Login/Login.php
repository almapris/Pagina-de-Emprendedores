<?php

    include(".././Controller/conexion.php");
    if (!empty($_POST["Ingresar"])){
        $Email = $_POST["EmailUsuario"];
        $Usuario = $_POST["EmailUsuario"];
        $Contraseña = $_POST["Contraseña"];


        $Iniciar = $BDD ->query ("SELECT * FROM registrarte where Email = '$Email' or Usuario = '$Usuario' and Contraseña = '$Contraseña'");

        $Rows = mysqli_fetch_array($Iniciar);

        if($Rows["tipo"] == "Espectador"){
            header("location:../Page/Colaborador.php");
        }

        if($Rows["tipo"] == "Emprendedor"){
            header("location:../Page/Emprendedor.php");
        }

        if($Rows["tipo"] == "SuperUsuario"){
            header("location:../Page/CrearCuenta.php");
        }

        else{
            echo 'No se sencotro usuario';
        }

    }

?>