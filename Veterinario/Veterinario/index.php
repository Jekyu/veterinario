<?php include ('./templates/header.php'); ?>

<!-- Formulario de inicio de sesión -->
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Proyecto PHP con Bootstrap</title>
    
    <!-- Enlace a la CDN de Bootstrap (CSS) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Enlace al archivo JavaScript de Bootstrap (opcional, solo si necesitas funcionalidades interactivas) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <section class="d-flex justify-content-center align-items-center min-vh-100">
        <article class="card border-primary" style="max-width: 20rem;">
            <fieldset class="card-body">
                <legend class="text-center">Inicio de sesión</legend>
                <form action='./includes/login.php' method="POST">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input name="email" id="email" type="email" class="form-control" required placeholder="Ingrese email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña</label>
                        <input name="password" id="password" type="password" class="form-control" required placeholder="Ingrese contraseña">
                    </div>
                    <footer class="text-center">
                        <button name="login" type="submit" class="btn btn-primary w-100">Ingresar</button>
                    </footer>
                    <footer class="mt-3 text-center">
                        <small><a href="registro.php" class="text-decoration-none">Click aquí para registrarse</a></small>
                    </footer>
                </form>
            </fieldset>
        </article>
    </section>

</body>
</html>

<?php include ('./templates/footer.php'); ?>
