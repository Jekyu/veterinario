<?php
if (isset($_POST['register'])){

    // Tomar los datos
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordRepeat = $_POST['passwordRepeat'];
    $cedula = $_POST['cedula'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $edad = $_POST['edad'];
    $direc = $_POST['direc'];
    $tel = $_POST['tel'];
    
    // Instancia signup class
    include "../classes/dbh.php";
    include "../classes/signupDbh.php";
    include "../classes/signupCtlr.php";

    $singup = new signupCtrl(
        $email,
        $password,
        $passwordRepeat,
        $cedula,
        $nombres,
        $apellidos,
        $edad,
        $direc,
        $tel
    );

    // Verificar errores
    $singup->signupUser();

    // Devolver a login sin errores
    header('location: ../registro.php?error=none');
}
    