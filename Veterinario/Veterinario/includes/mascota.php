<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include "../classes/dbh.php";
    include '../classes/mascota/mascotaDhb.php';
    include '../classes/mascota/mascotaCtrl.php';

    if (isset($_POST['rgtrMascota'])) {
        session_start();
        $idcliente = $_SESSION['id'];

        $idPet = $_POST['idMascota'];
        $namePet = $_POST['nameMascota'];
        $typePet = $_POST['tipoMascota'];
        $agePet = $_POST['edadMascota'];
        
        $mascotaCtrl = new mascotaCtrl($idcliente);
        $mascotaCtrl->createMascota($idPet, $namePet, $typePet, $agePet, $idcliente);

        header('location: ../registrarMascota.php?Mascotaregistrada');
        exit();
    }

    


}