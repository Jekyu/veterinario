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

<section class="col-3 ms-4 mt-5 mb-5">
    <section class="card border-primary text-center">
    <article class="card-body">
        <header class="text-center">
            <h2>Bienvenido</h2>
        </header>
        <h4><?= $_SESSION['email'];?></h4>
        <p>
            <?= $clientview->fetchNameClient($_SESSION['id']);?>
            <?= $clientview->fetchLastNClient($_SESSION['id']);?>
        </p>
        <footer>
            <a href="../perfil.php"><button class="btn btn-primary btn-block mt-3">Editar</button></a>
        </footer>
    </article>
    </section><br>
    <article class="card border-secondary">
        <article class="card-body">
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
    </article>
</section>

<!-- Seccion del lado derecho-->
<section class="col-8 mt-5 ms-4 mb-5" >