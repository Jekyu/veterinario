<?php

#Conectar la base de datos

// Definir constantes de la BD
define('SERVIDOR','127.0.0.1');
define('USUARIO','postgres');
define('PASSWORD','123');
define('BD','veterinario');

//Conectar

try {
    $dbconn = pg_connect("
    host=".SERVIDOR."
    dbname=".BD."
    user=".USUARIO."
    password=".PASSWORD."
    port=5432");
} catch (Throwable $dbconn) {
    echo "No es posible conectar con BD $dbconn";
}
?>