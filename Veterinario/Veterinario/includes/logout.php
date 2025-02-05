<?php 

//Iniciamos la sesion para destruirla
session_start();
session_unset();
session_destroy();
$_SESSION=null;
header("location: ../index.php?sessionClosed");
