<?php
if (isset($_POST['login'])){

    // Tomar los datos
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Instancia signup class
    include "../classes/dbh.php";
    include "../classes/loginDbh.php";
    include "../classes/loginCtrl.php";

    $login = new loginCtrl(
        $email,
        $password
    );

    // Verificar errores
    $login->loginUser();

    // Devolver a login sin errores
    //header('location: ../index.php?error=none');
}