<?php include ('./templates/header.php');
 include ('./templates/menu.php'); 
?>
    <header class="text-center">
        <h2>Agenda</h2>
    </header>
    <section>
        <?=$clientview->fetchAgendaClient($_SESSION['id']);?>
    </section>
    
 <?php 
 include ('./templates/footer.php') ?>