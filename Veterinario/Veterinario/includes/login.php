<?php
if (isset($_POST['login'])){

    // Tomar los datos
    $email = htmlspecialchars($_POST['email'],ENT_QUOTES,'UTF-8');
    $password = htmlspecialchars($_POST['password'],ENT_QUOTES,'UTF-8');
    
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

    //

    include "../classes/usuarioCtrl.php";
}