<?php include ('./templates/header.php') ?>
<!-- Formulario inicio sesion -->

<section>
    <article class="card border-primary" style="max-width: 20rem;">
        <fieldset class="card-body">
            <legend>Inicio de sesión</legend>
            <form action='./includes/login.php' method="POST">
            <label style="display: block;"><h5 >Email</h5>
                <input name ='email' required type="email" placeholder="Ingrese email">
            </label>
            <label style="display: block;"><h5 >Contraseña</h5>
                <input name='password' type="password" required placeholder="Ingrese contraseña">
            </label>
            <footer>
                <button name="login" type="submit">Ingresar</button>
                <small><a href="registro.php">Click aqui parar registrarse</a></small>
            </footer>
            </form>
        </fieldset>
    </article>
    <article class="card border-primary" style="max-width: 20rem;">
        
    </article>
</section>
<?php include ('./templates/footer.php') ?>