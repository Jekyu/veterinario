<?php include ('./templates/header.php') ?>
<!-- Formulario inicio sesion -->

<section>
    <article class="card border-primary" style="max-width: 20rem;">
        <header class="card-header"><h4>Inicio de sesión</h4></header>
        <fieldset class="card-body">
            <form action='../controllers/controlLogin.php' method="post">
            <label class="card-title" style="display: block;"><h5 >Email</h5>
                <input name ='email' required type="email" class="form-control" id="exampleInputEmail1" placeholder="Ingrese email">
            </label>
            <label class="card-title" style="display: block;"><h5 >Contraseña</h5>
                <input name='password' type="password" required class="form-control" id="exampleInputEmail1" placeholder="Ingrese contraseña">
            </label>
            <footer class="d-grid gap-2">
                <button class="btn btn-lg btn-primary">Enviar</button>
                <small><a href="registro.php">Click aqui parar registrarse</a></small>
            </footer>
            </form>
        </fieldset>
    </article>
    <article class="card border-primary" style="max-width: 20rem;">
        
    </article>
</section>

<?php include ('./templates/footer.php') ?>