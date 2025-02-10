<?php
    include "./templates/header.php";
    include "./templates/menu.php";
    include  "./classes/mascota/mascotaDhb.php";
    include "./classes/mascota/mascotaView.php";
    //En menu están las dependencias de session_start()
    $petView = new mascotaView();
    $idPet = $_GET['id']
?>

<section class="col">
    <header>
        <h2>Mascotas</h2>
    </header>  
    <article>
        <header>
            <h3>
                <?=$petView->fetchnameMascota($idPet)?>
            </h3>
        </header>
        <p>
            Tipo mascota: <?=$petView->fetchtipoMascota($idPet)?>
        </p>
        <p>
           ID Mascota: <?=$petView->fetchidMascota($idPet)?>
        </p>
        <p>
          Edad Mascota:  <?=$petView->fetchedadMascota($idPet)?>
        </p>
        <p>
          Registro: <?=$petView->fetchrgtomascota($idPet)?>
        </p>
    </article>
</section>

<?php 

 include ('./templates/footer.php')?>