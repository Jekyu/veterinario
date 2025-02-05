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
        <label style="display: block;">
            <h5>Nombres</h5>
            <input name="nombres" type="text" required placeholder="Ingrese su nombre">
        </label>
        <label style="display: block;">
            <h5>Apellidos</h5>
            <input name="apellidos" type="text" required placeholder="Ingrese su apellidos">
        </label>
        <label style="display: block;">
            <h5>Edad</h5>
            <input name="edad" type="number" required placeholder="Ingrese su edad">
        </label>
        <label style="display: block;">
            <h5>Dirección</h5>
            <input name="direc" type="text" required placeholder="Ingrese su dirección">
        </label>
        <label style="display: block;">
            <h5>Telefono</h5>
            <input name="tel" type="tel" required placeholder="Ingrese su telefono">
        </label>
        <button name="register">Registrarse</button>
    </form>
    <a href="./index.php"><button>Cancelar</button></a>
    </fieldset>
</section>
<?php include ('./templates/footer.php') ?>