<?php

include ('../config/config.php');
/*if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['email']) && isset($_POST['passwd'])) {
        $user = $_POST['email'];
        $passwd = $_POST['passwd'];

        echo "Usuario: " . htmlspecialchars($user) . "<br>";
        echo "Contraseña: " . htmlspecialchars($passwd);
    } else {
        echo "Por favor, complete todos los campos del formulario.";
    }
} else {
    echo "Método de solicitud no permitido.";
}
*/

$user = $_POST['email'];
$passwd = $_POST['passwd'];

echo $user."/".$passwd;

//Realizar Query
$query = "SELECT *FROM usuario WHERE emailusuario='$user' and passwd = '$passwd'";

$result = pg_query($query) or die('La consulta fallo: ' . pg_last_error());

    //Imprimiendo los resultados en HTML
    echo "<table>\n";
    while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
        echo "\t<tr>\n";
        foreach ($line as $col_value) {
            echo "\t\t<td>$col_value</td>\n";
        }
        echo "\t</tr>\n";
    }
    echo "</table>\n";
?>
