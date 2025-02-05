<?php include ('./templates/header.php') ?>
<section>
    <fieldset>
    <form action="../includes/signup.php" method="POST">
        <legend>Registro</legend>
        <label style="display: block;">
            <h5>Correo</h5>
            <input name='email' type="email" required placeholder="Ingrese su correo">
        </label>
        <label style="display: block;">
            <h5>Contraseña</h5>
            <input name='password' type="password" required placeholder="Ingrese su contraseña">
        </label>
        <label style="display: block;">
            <h5>Confirmar contraseña</h5>
            <input name='passwordRepeat' type="password" required placeholder="Ingrese su contraseña">
        </label>
        <label style="display: block;">
            <h5>Cedula</h5>
            <input name="cedula" type="number" required placeholder="Ingrese su cedula">
        </label>
        <button name="register">Registrarse</button>
    </form>
    <a href="./index.php"><button>Cancelar</button></a>
    </fieldset>
</section>
<?php include ('./templates/footer.php') ?>