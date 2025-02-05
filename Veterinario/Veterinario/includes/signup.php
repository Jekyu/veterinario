<?php

// isset($_POST['register']) Es funcional pero no el indicado 
if ($_SERVER['REQUEST_METHOD'] == "POST"){
//La cuestion es estamos en busqueda de un POST

    // Tomar los datos
    
    /*
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordRepeat = $_POST['passwordRepeat'];
    $cedula = $_POST['cedula'];
    */

    //Forma sanitizada
    $email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
    $password = htmlspecialchars($_POST['password'], ENT_QUOTES, 'UTF-8');
    $passwordRepeat = htmlspecialchars($_POST['passwordRepeat'], ENT_QUOTES, 'UTF-8');
    $cedula = htmlspecialchars($_POST['cedula'], ENT_QUOTES, 'UTF-8');
    
    // Instancia signup class
    include "../classes/dbh.php";
    include "../classes/signupDbh.php";
    include "../classes/signupCtrl.php";

    $singup = new signupCtrl(
        $email,
        $password,
        $passwordRepeat,
        $cedula
    );

    // Verificar errores

    $singup->signupUser();

    $userId = $singup->fetchUserId();

    //Instanciar cliente
    include "../classes/clienteDbh.php";
    include "../classes/clienteCtrl.php";

    $client = new clienteCtrl($userId);

    $client->defaultCliente();

    // Devolver a login sin errores
    header('location: ../registro.php?error=none');
}
    