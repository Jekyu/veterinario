<?php include ('./templates/header.php') ?>
<section>
    <div class="container py-5">
        <fieldset class="border p-4">
            <legend class="w-auto">Registro</legend>
            <form action="../includes/signup.php" method="POST">
                <div class="form-group">
                    <label for="email"><h5>Correo</h5></label>
                    <input id="email" name="email" type="email" class="form-control" required placeholder="Ingrese su correo">
                </div>
                <div class="form-group">
                    <label for="password"><h5>Contraseña</h5></label>
                    <input id="password" name="password" type="password" class="form-control" required placeholder="Ingrese su contraseña">
                </div>
                <div class="form-group">
                    <label for="passwordRepeat"><h5>Confirmar contraseña</h5></label>
                    <input id="passwordRepeat" name="passwordRepeat" type="password" class="form-control" required placeholder="Ingrese su contraseña">
                </div>
                <div class="form-group">
                    <label for="cedula"><h5>Cédula</h5></label>
                    <input id="cedula" name="cedula" type="number" class="form-control" required placeholder="Ingrese su cédula">
                </div>
                <button type="submit" name="register" class="btn btn-primary btn-block">Registrarse</button>
            </form>
            <a href="./index.php">
                <button class="btn btn-secondary btn-block mt-3">Cancelar</button>
            </a>
        </fieldset>
    </div>
</section>
<?php include ('./templates/footer.php') ?>
