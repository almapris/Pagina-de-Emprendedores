<?php 
<<<<<<< HEAD
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
=======
    

?>
>>>>>>> 9e784a202779f779904e676f2dc8114bbd0861d6
