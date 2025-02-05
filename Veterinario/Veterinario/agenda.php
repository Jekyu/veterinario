<?php include ('./templates/header.php');
 include ('./templates/menu.php'); 
 include ('../config/config.php');
?>
<section>
        <header>
            <h2>Agenda</h2>
        </header>
 <?php 
 /*function readCita(){
    $query = "SELECT C.idcita, TC.nametipocita, M.namemascota, C.datecita, C.hourcita
            FROM 
                mascota AS M, 
                vet as V, 
                cita as C, 
                citavet as CV,
                tipocita as TC
            WHERE C.idcita=CV.idcita 
            AND C.idtipocita = TC.idtipocita
            AND C.idmascota = M.idmascota 
            AND V.idvet = CV.idvet;";
    $result = pg_query($query) or die('La consulta fallo: '.pg_last_error());
    imprimir($result);
}

readCita();


function imprimir($result){
    while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
        //echo $line;
        //var_dump($line);
        $idcita = $line['idcita'];
        $nametipocita = $line['nametipocita'];
        $namemascota = $line['namemascota'];
        $datecita = $line['datecita'];
        $hourcita = $line['hourcita'];
        /*foreach ($line as $col_value) {
            echo " "."$col_value";
        }
        echo "\n";*/
 ?>
        <article>
            <header>
                <h4><?=$nametipocita?></h4>
            </header>
            <p>Id Cita: <?=$idcita?></p>
            <p>Mascota: <?=$namemascota?></p>
            <p>Fecha: <?=$datecita?></p>
            <p>Hora: <?=$hourcita?></p>
        </article>
    </section>
    
<?php 
/* }
}*/
include ('./templates/footer.php') ?>