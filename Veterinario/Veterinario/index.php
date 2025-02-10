<?php include ('./templates/header.php'); ?>

<!-- Formulario de inicio de sesión -->

    <section class="d-flex justify-content-center align-items-center min-vh-100">
        <article class="card border-primary" >
            <fieldset class="card-body">
                <legend class="text-center">Inicio de sesión</legend>
                <form action='./includes/login.php' method="POST">
                    <div class="mb-3">
                        <label class="form-label">Email
                            <input name="email" type="email" class="form-control" required placeholder="Ingrese email">
                        </label>
                    <div class="mb-3">
                        <label class="form-label">Contraseña
                        <input name="password" type="password" class="form-control" required placeholder="Ingrese contraseña">
                        </label>
                        
                    </div>
                    <footer class="text-center">
                        <button name="login" type="submit" class="btn btn-primary w-100">Ingresar</button>
                    </footer>
                </form>
                <footer class="mt-3 text-center">
                     <small><a href="registro.php" class="text-decoration-none">Click aquí para registrarse</a></small>
                </footer>
            </fieldset>
        </article>
    </section>

<?php include ('./templates/footer.php'); ?>
