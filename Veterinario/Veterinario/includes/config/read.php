<?php

require_once('config.php');

function readallUsuario(){
    $query = "SELECT * FROM usuario;";
    $result = pg_query($query) or die('La consulta fallo: ' . pg_last_error());
    imprimir($result);
}

function readallVeterinario(){
    $query = "SELECT * FROM vet;";
    $result = pg_query($query) or die('La consulta fallo: ' . pg_last_error());
    imprimir($result);
}

function readCita(){
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
    $result = pg_query($query) or die('La consulta fallo: ' . pg_last_error());
    imprimir($result);
}

readCita();


function imprimir($result){
    while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
        foreach ($line as $col_value) {
            echo " "."$col_value";
        }
        echo "\n";
    }
}


