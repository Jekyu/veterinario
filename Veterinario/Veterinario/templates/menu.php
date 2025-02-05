<?php
include "./classes/dbh.php";
include "./classes/clienteDbh.php";
include "./classes/clienteCtrl.php";
include "./classes/clienteView.php";
session_start();
    if(!isset($_SESSION) || !$_SESSION['id']){
        header("location: ../index.php");
    }else{
        $clientview = new clienteView();
    }
?>

<section>
    <article>
        <header>
            <h2>Bienvenido</h2>
        </header>
        <h4><?= $_SESSION['email'];?></h4>
        <p>
            <?= $clientview->fetchNameClient($_SESSION['id']);?>
            <?= $clientview->fetchLastNClient($_SESSION['id']);?>
        </p>
        <footer>
            <a href="../perfil.php"><button>Editar</button></a>
        </footer>
    </article>
    <article>
        <header>
            <h2>Menú</h2>
        </header>
        <l>
            <li><a href="../inicio.php">Inicio</a></li>
            <li><a href="../agenda.php">Agenda</a></li>
            <li><a href="../mascotas.php">Mascotas</a></li>
            <li><a href="../agenda.php">Historial</a></li>
            <li><a href="../includes/logout.php">Salir</a></li>
        </l>
    </article>
</section>