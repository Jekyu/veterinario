<?php 
include("./templates/header.php");
include("./templates/menu.php");
/*include "./classes/mascota/mascotaDhb.php";
include "./classes/mascota/mascotaCtrl.php";
include "./classes/mascota/mascotaView.php";
$mascotaView = new mascotaView();*/
?>
    <header>
        <h2>Registrar Mascota</h2>
    </header>
    <article class="card border-primary">
        <fieldset class="card-body">
        <form action="./includes/mascota.php" method="POST">
            <label style="display: block;">
                <h4>ID mascota</h4>
                <input name="idMascota" class="form-control" type="text" placeholder="Ingrese id ">
            </label><br>
            <label style="display: block;">
                <h4>Nombre</h4>
                <input name="nameMascota" class="form-control" type="text" placeholder="Ingrese nombre">
            </label><br>
            <label style="display: block;">
                <h4>Tipo</h4>
                <input name="tipoMascota" class="form-control" type="text" placeholder="Ingrese tipo">
            </label><br>
            <label style="display: block;">
                <h4>Edad</h4>
                <input name="edadMascota" class="form-control" type="text" placeholder="Ingrese edad">
            </label><br>
            <footer>
                <button name="rgtrMascota" class="btn btn-primary btn-block">Registrar</button>
            </footer>
        </form>
        </fieldset>
    </article>

<?php
include("./templates/footer.php");?>
