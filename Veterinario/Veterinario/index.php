<?php include ('./templates/header.php');
session_start();
var_dump(isset($_SESSION['email']));
    if(isset($_SESSION) && $_SESSION['email']){
        header("location: ../inicio.php");
    }          
?>
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