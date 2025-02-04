<?php include ('./templates/header.php') ?>
<section>
    <fieldset>
        <legend>Registro</legend>
        <label style="display: block;">
            <h5>Correo</h5>
            <input name='email' type="email" placeholder="Ingrese su correo">
        </label>
        <label style="display: block;">
            <h5>Cedula</h5>
            <input name="cedula" type="number" placeholder="Ingrese su cedula">
        </label>
        <label style="display: block;">
            <h5>Nombres</h5>
            <input name="nombres" type="text" placeholder="Ingrese su nombre">
        </label>
        <label style="display: block;">
            <h5>Apellidos</h5>
            <input name="apellidos" type="text" placeholder="Ingrese su apellidos">
        </label>
        <label style="display: block;">
            <h5>Edad</h5>
            <input name="edad" type="number" placeholder="Ingrese su edad">
        </label>
        <label style="display: block;">
            <h5>Dirección</h5>
            <input name="direc" type="text" placeholder="Ingrese su dirección">
        </label>
        <label style="display: block;">
            <h5>Telefono</h5>
            <input name="tel" type="tel" placeholder="Ingrese su telefono">
        </label>
        <button>Registrarse</button>
    </fieldset>
</section>
<?php include ('./templates/footer.php') ?>