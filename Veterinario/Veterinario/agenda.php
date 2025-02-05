<?php include ('./templates/header.php');
 include ('./templates/menu.php'); 
?>
<section>
    <header>
        <h2>Agenda</h2>
    </header>
    <?=$clientview->fetchAgendaClient($_SESSION['id']);?>
</section>
 
 <?php 
 include ('./templates/footer.php') ?>