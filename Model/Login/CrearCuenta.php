<?php 
    if (!empty($_POST["CrearCuenta"])){

        $Email = $_POST["Email"];
        $Usuario = $_POST["Usuario"];
        $Contraseña = $_POST["Contraseña"];

        $CrearCuenta = $BDD -> query ("INSERT INTO registrarte(Usuario, Email, Contraseña) VALUES ('$Usuario','$Email','$Contraseña')");

        if($CrearCuenta){
            echo 'Cuenta creada con exito';

        }
        else{
            echo 'No se pudo crear la cuenta';
        }
        
    }

?>
