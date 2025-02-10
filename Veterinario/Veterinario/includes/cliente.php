<?php
session_start();

if($_SERVER['REQUEST_METHOD'] == "POST"){
    include "../classes/dbh.php";
    include "../classes/clienteDbh.php";
    include "../classes/clienteCtrl.php";
    $idSession = $_SESSION['id'];

    $clienteCtrl = new clienteCtrl($idSession);

    if(isset($_POST['actClient'])){
        $nameCliente = $_POST['name'];
        $apeCliente = $_POST['lastN'];
        $edadCliente = $_POST['age'];
        $telCliente = $_POST['tel'];
        $dirCliente = $_POST['direc'];
        $clienteCtrl->updatePerfilCliente($nameCliente,$apeCliente,$edadCliente,$telCliente,$dirCliente);
        header("location: ../perfil.php?updatedData");
    }
    /*if(isset($_POST['changePswd'])){
        $pswd = htmlspecialchars($_POST['password'],ENT_QUOTES,'UTF-8');
        $pswdRpt = htmlspecialchars($_POST['passwordRepeat'],ENT_QUOTES,'UTF-8');
    }*/

    //header("location: ../perfil.php?notUpdated".$_SESSION['id']);
}