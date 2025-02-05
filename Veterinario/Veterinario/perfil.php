 <?php
    include "./templates/header.php";
    include "./templates/menu.php";
    //En menu están las dependencias de session_start()
?>

<section>
    <header>
        <h2>Perfil
            de  
        </h2>
    </header>
    <fieldset>
    <form action="../includes/cliente.php" method="POST">
        <legend>Editar perfil</legend>
        <label style="display: block;">
            <h5>Nombres</h5>
            <input name="name"
                value="<?= $clientview->fetchNameClient($_SESSION['id']);?>"
            required placeholder="Ingrese su nombre">
        </label>
        <label style="display: block;">
            <h5>Apellidos</h5>
            <input name="lastN"
                value="<?= $clientview->fetchLastNClient($_SESSION['id']);?>"
                required placeholder="Ingrese su apellidos">
        </label>
        <label style="display: block;">
            <h5>Edad</h5>
            <input name="age"
                value="<?= $clientview->fetchAgeClient($_SESSION['id']);?>"
             type="number" required placeholder="Ingrese su edad">
        </label>
        <label style="display: block;">
            <h5>Dirección</h5>
            <input name="direc"
                value="<?= $clientview->fetchDirClient($_SESSION['id']);?>"
             type="text" required placeholder="Ingrese su dirección">
        </label>
        <label style="display: block;">
            <h5>Telefono</h5>
            <input name="tel"
                value="<?= $clientview->fetchTelClient($_SESSION['id']);?>"
             type="tel" required placeholder="Ingrese su telefono">
        </label>
        <footer>
            <button name="actClient">Actualizar</button>
        </footer>
    </form>
    </fieldset>

    <fieldset>
        <legend>Cambiar contraseña</legend>
        <form>
            <label style="display: block;">
                <h5>Nueva contraseña</h5>
                <input name='password' type="password" required placeholder="Ingrese su nueva contraseña">
            </label>
            <label style="display: block;">
                <h5>Confirmar contraseña</h5>
                <input name='passwordRepeat' type="password" required placeholder="Ingrese su nueva contraseña">
            </label>
        </form>
        <footer>
            <button name="changePswd">Cambiar</button>
        </footer>
    </fieldset>

</section>