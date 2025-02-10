<?php include ('./templates/header.php') ?>
<section class="container py-5">
        <fieldset class="border p-4">
            <legend class="w-auto">Registro</legend>
            <form action="../includes/signup.php" method="POST">
                    <label style="display: block;"><h5>Correo</h5>
                        <input name="email" type="email" class="form-control" required placeholder="Ingrese su correo">
                    </label><br>
                    <label style="display: block;"><h5>Contraseña</h5>
                        <input name="password" type="password" class="form-control" required placeholder="Ingrese su contraseña">
                    </label><br>
                    <label style="display: block;"><h5>Confirmar contraseña</h5>
                        <input name="passwordRepeat" type="password" class="form-control" required placeholder="Ingrese su contraseña">
                    </label><br>
                    <label style="display: block;"><h5>Cédula</h5>
                        <input name="cedula" type="number" class="form-control" required placeholder="Ingrese su cédula">
                    </label><br>
                <button type="submit" name="register" class="btn btn-primary btn-block">Registrarse</button>
            </form>
            <a href="./index.php">
                <button class="btn btn-secondary btn-block mt-3">Cancelar</button>
            </a>
        </fieldset> 
        
</section>
<?php include ('./templates/footer.php') ?>
