 <?php
    include "./templates/header.php";
    include "./templates/menu.php";
    //En menu están las dependencias de session_start()
?>

<section class="col">
    <header>
        <h2>Editar perfil
        </h2>
    </header>
    <article class="card border-primary">
    <fieldset class="card-body">
    <form action="../includes/cliente.php" method="POST">
            <label style="display: block;">
                <h5>Nombres</h5>
                <input name="name" class="form-control"
                    value="<?= $clientview->fetchNameClient($_SESSION['id']);?>"
                required placeholder="Ingrese su nombre">
            </label><br>
            <label style="display: block;">
                <h5>Apellidos</h5>
                <input name="lastN" class="form-control"
                    value="<?= $clientview->fetchLastNClient($_SESSION['id']);?>"
                    required placeholder="Ingrese su apellidos">
            </label><br>
            <label style="display: block;">
                <h5>Edad</h5>
                <input name="age" class="form-control"
                    value="<?= $clientview->fetchAgeClient($_SESSION['id']);?>"
                type="number" required placeholder="Ingrese su edad">
            </label><br>
            <label style="display: block;">
                <h5>Dirección</h5>
                <input name="direc" class="form-control"
                    value="<?= $clientview->fetchDirClient($_SESSION['id']);?>"
                type="text" required placeholder="Ingrese su dirección">
            </label><br>
            <label style="display: block;">
                <h5>Telefono</h5>
                <input name="tel" class="form-control"
                    value="<?= $clientview->fetchTelClient($_SESSION['id']);?>"
                type="tel" required placeholder="Ingrese su telefono">
            </label><br>
            <footer>
                <button name="actClient" class="btn btn-primary btn-block">Actualizar</button>
            </footer>
        </fieldset>
    </form>
    </article><br>
    <article class="card border-primary">
    <form>
        <fieldset class="card-body">
            <legend>Cambiar contraseña</legend>
                <label style="display: block;">
                    <h5>Actual contraseña</h5>
                    <input name='actualpassword' class="form-control" type="password" required placeholder="Ingrese su actual contraseña">
                </label><br>
                <label style="display: block;">
                    <h5>Nueva contraseña</h5>
                    <input name='password' class="form-control" type="password" required placeholder="Ingrese su nueva contraseña">
                </label><br>
                <label style="display: block;">
                    <h5>Confirmar contraseña</h5>
                    <input name='passwordRepeat' class="form-control" type="password" required placeholder="Confirmar contraseña">
                </label><br>
                <footer>
                <button name="changePswd" class="btn btn-primary btn-block">Cambiar</button>
            </footer>
        </fieldset>
    </form>
    </article><br>
</section>
<?php include "./templates/footer.php";?>