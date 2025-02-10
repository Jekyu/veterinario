<?php
    include "./templates/header.php";
    include "./templates/menu.php";
    //En menu están las dependencias de session_start()
?>

<section class="col">
    <header>
        <h2>Mascotas</h2>
    </header>
    <?=$clientview->fetchPetsClient($_SESSION['id']);?>
</section>

<?php 

 include ('./templates/footer.php')?>