<?php include ('./templates/header.php'); ?>
<?php include ('./templates/menu.php');
session_start();
var_dump(isset($_SESSION['email']));
    if(!isset($_SESSION) || !$_SESSION['email']){
        header("location: ../index.php");
    }   
?>
<section>
    <header>
        <h2>Opcion</h2>
    </header>
    <article>
        <a href="#inicio">
            <header><h5>Titulo </h5></header>
            <p>Funcion </p>
        </a>
    </article>
    <article>
        <a href="#inicio">
            <header><h5>Titulo </h5></header>
            <p>Funcion </p>
        </a>
    </article>
    <article>
        <a href="#inicio">
            <header><h5>Titulo </h5></header>
            <p>Funcion </p>
        </a>
    </article>
    <article>
        <a href="#inicio">
            <header><h5>Titulo </h5></header>
            <p>Funcion </p>
        </a>
    </article>
    <article>
        <a href="#inicio">
            <header><h5>Titulo </h5></header>
            <p>Funcion </p>
        </a>
    </article>
    <article>
        <a href="#inicio">
            <header><h5>Titulo </h5></header>
            <p>Funcion </p>
        </a>
    </article>
    <article>
        <a href="#inicio">
            <header><h5>Titulo </h5></header>
            <p>Funcion </p>
        </a>
    </article>
</section>

<?php include ('./templates/footer.php') ?>